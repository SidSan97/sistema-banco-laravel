<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User as UserModel;
use Exception;

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

        if($valorNaConta > 0) {

            if($valorSacar <= $valorNaConta) {

                $valorNaConta -= $valorSacar;
                $user->saldo = $valorNaConta;
            }
            else {
                throw new Exception('Saldo insuficiente');
            }
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
}
