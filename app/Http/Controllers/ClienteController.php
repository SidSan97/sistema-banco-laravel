<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User as UserModel;

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
}
