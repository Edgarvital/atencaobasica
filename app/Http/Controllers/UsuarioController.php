<?php

namespace App\Http\Controllers;

use App\Models\TipoUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    protected function cadastrar()
    {
        $tipo_usuario = TipoUsuario::all();
        return view('usuario.cadastrar', ['tipo_usuario' => $tipo_usuario]);
    }


    protected function criar(Request $request)
    {
        $validator = Validator::make($request->all(),  [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'tipo_usuario' => ['required']
        ], User::$messages);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator);
        }

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'tipo_usuario_id' => $request['tipo_usuario']

        ]);

        return redirect(route('home'))->with('success', 'Usuário Cadastrado Com Sucesso!');
    }
}
