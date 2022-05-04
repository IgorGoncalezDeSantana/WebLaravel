<?php

namespace App\Http\Controllers;

use App\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{

    public function formaddusuario()
    {
        if(Auth::check() === true)
        {
            return view('addusuario');
        }
        return redirect()->route('usuario.login');

    }

    public function salvarusuario(request $request)
    {
        if(Auth::check() === true)
        {
        $usuario = new usuario ();
        $usuario->name = $request->name;
        $usuario->sobr_user = $request->sobr_user;
        $usuario->cpf_user = $request->cpf_user;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->sexo = $request->sexo;
        $usuario->data_user = $request->data_user;
        $usuario->end_user = $request->email;
        $usuario->num_user = $request->num_user;
        $usuario->bairro_user = $request->bairro_user;
        $usuario->cep_user = $request->cep_user;
        $usuario->estado = $request->estado;
        $usuario->cidade_user = $request->cidade_user;
        $usuario->save();
        }
        return redirect()->route('usuario.login');

    }

    public function editusuario(usuario $usuario)
    {
        if(Auth::check() === true)
        {
        return view('editusuario', ['usuario' => $usuario]);
        }
        return redirect()->route('usuario.login');
    }

    public function mudar (usuario $usuario, request $request)
    {
        if(Auth::check() === true)
        {
        $usuario->name = $request->name;
        $usuario->sobr_user = $request->sobr_user;
        $usuario->cpf_user = $request->cpf_user;
        $usuario->email = $request->email;
        if (!empty($request->password)) {
            $usuario->password = bcrypt($request->password);
        }
        $usuario->password = bcrypt($request->password);
        $usuario->sexo = $request->sexo;
        $usuario->data_user = $request->data_user;
        $usuario->end_user = $request->email;
        $usuario->num_user = $request->num_user;
        $usuario->bairro_user = $request->bairro_user;
        $usuario->cep_user = $request->cep_user;
        $usuario->estado = $request->estado;
        $usuario->cidade_user = $request->cidade_user;
        $usuario->save();
        return redirect()->route('usuarios.todos');
        }
        return redirect()->route('usuario.login');
    }

    public function destroy(usuario $usuario)
    {
        if(Auth::check() === true)
        {
        $usuario->delete();
        return redirect()->route('usuarios.todos');
        }
        return redirect()->route('usuario.login');
    }

    public function todosusuarios()
    {
        if(Auth::check() === true)
        {
        $usuarios = usuario::all();
        return view('todosusuarios', ['usuarios' => $usuarios]);
        }
        return redirect()->route('usuario.login');
    }


    public function login()
    {
        return view('login');
    }

    public function dologin(Request $request)
    {
        $credenciais = [
            'email' => $request->inputEmail,
            'password' => $request->inputPassword
        ];

        if (Auth::attempt($credenciais)) {
            return redirect()->route('produtos.admin');
        }
        else{
            return redirect()->route('usuario.login')->withErrors(['incorreto' => 'Os dados informados estão incorretos!']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('usuario.login');
    }
}
