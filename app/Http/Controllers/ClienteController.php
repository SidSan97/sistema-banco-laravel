<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User as UserModel;
use App\Models\Transacoes as Transacao;
use Exception;
use Illuminate\Support\Facades\DB;


class ClienteController extends Controller
{
    public function deposito(Request $request)
    {
        $id = Auth::user()->id;
        $user = UserModel::find($id);

        $valor = $user->saldo;
        $valor += $request->input('valor');
        $user->saldo = $valor;

        if(!$user->save()) {

            return "erro ao inserir";
        }
        else {

            return view('dashboard');
        }
    }

    public function saque(Request $request)
    {
        $id = Auth::user()->id;
        $user = UserModel::find($id);

        $valorNaConta = $user->saldo;
        $valorSacar   = $request->input('valor');


        if($valorSacar <= $valorNaConta) {

            $valorNaConta -= $valorSacar;
            $user->saldo = $valorNaConta;
        }
        else {
            throw new Exception('Saldo insuficiente');
        }

        if($user->save()) {

            return view('dashboard');
        }
        else {

            throw new Exception('Não foi possivel fazer o saque');
        }
    }

    public function transferencia(Request $request)
    {
        $id   = Auth::user()->id;
        $user = UserModel::find($id);

        $valorTransf  = $request->input('valor_transferencia');
        $numDest      = $request->input('num_conta_dest');
        $nomeDest     = $request->input('nome_destinatario');
        $valorNaConta = $user->saldo;

        $userDest = DB::table('users')->where('num_conta', $numDest)->first();

        if($userDest != NULL or $userDest != '') {

            if($valorTransf <= $valorNaConta) {

                $valorNaConta -= $valorTransf;
                $user->saldo  = $valorNaConta;

                if($user->save()) {

                    $valorTransf2 = $userDest->saldo;
                    $total = (float)$valorTransf2 + (float)$valorTransf;

                    if( DB::table('users')->where('num_conta', $numDest)->update(['saldo' => $total]) ) {

                        $transfTable = new Transacao();

                        $transfTable->nome_remetente      = $user->name;
                        $transfTable->num_conta_rem       = $user->num_conta;
                        $transfTable->valor_transferencia = $valorTransf;
                        $transfTable->id_correntista      = $id;
                        $transfTable->nome_destinatario   = $nomeDest;
                        $transfTable->num_conta_dest      = $numDest;

                        if($transfTable->save()) {

                            return view('dashboard');
                        }
                    }
                }

            } else {

                throw new Exception('Saldo insuficiente');
            }

        } else {

            throw new Exception('Cliente não encontrado na base de dados');
        }

    }
}
