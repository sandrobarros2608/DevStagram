<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImagenController extends Controller
{
    //
    public function store(Request $request)
    {
        // Obtener la imagen
        $imagen = $request->file('file');

        // Generar un nombre unico
        $nombreImagen = Str::uuid() . "." . $imagen->extension();

        $manager = new ImageManager(new Driver());

        $imagenServidor = $manager::imagick()->read($imagen);
        $imagenServidor->cover(1000, 1000);

        $imagenPath = public_path('uploads') . '/' . $nombreImagen;

        $imagenServidor->save($imagenPath);

        return response()->json(['imagen' => $nombreImagen]);
    }
}
