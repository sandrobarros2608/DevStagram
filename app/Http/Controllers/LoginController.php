<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Validacion
        $validated = $request->validate([
            "email" => 'required|email',
            "password" => 'required'
        ]);

        $remember = $request->filled('remember');

        // Autenticacion Falla
        if (!Auth::attempt($validated, $remember)) {
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }

        // Si pasa
        return redirect()->route('muro');
    }
}
