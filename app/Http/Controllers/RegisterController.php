<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function index() 
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request);
        // dd($request->get('usuario'));

        // Validacion
        $validated = $request->validate([
            'name' => 'required|max:30',
            "username" => 'required|unique:users|min:3|max:20',
            "email" => 'required|unique:users|email|max:60',
            "password" => 'required|confirmed|min:6'
        ]);

        // Crear Registro
        User::create([
            'name' => $request->name,
            // Revisar migrations add_username
            'username' => Str::slug($request->username),
            'email' => $request->email,
            'password' => $request->password
        ]);

        // Autenticar un usuario
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]));
        
        // Redireccionar
        return redirect()->route('muro');
    }
}
