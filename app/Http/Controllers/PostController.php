<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        // Se ejecuta antes del index
        $this->middleware('auth');
    }

    //
    public function index(User $user)
    {
        return view('dashboard', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('muro.create');
    }

    public function store(Request $request)
    {
        // Validacion
        $validated = $request->validate([
            "titulo" => 'required|max:255',
            "descripcion" => 'required',
            "imagen" => 'required'
        ]);
    }
}
