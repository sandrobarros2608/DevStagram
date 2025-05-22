@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro de usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('registrarse')}}" method="POST" novalidate>
                {{-- Evita ataques XSRF --}}
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input
                    id="name"
                    name="name"
                    type="text"
                    placeholder="Tu Nombre"
                    class="border p-3 w-full rounded-lg bg-white shadow-md @error('name') border-red-500 @enderror"
                    {{-- Mantiene el valor ingresado --}}
                    value="{{old('name')}}"
                    />

                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Usuario
                    </label>
                    <input
                    id="username"
                    name="username"
                    type="text"
                    placeholder="Tu Nombre de Usuario"
                    class="border p-3 w-full rounded-lg bg-white shadow-md @error('username') border-red-500 @enderror"
                    {{-- Mantiene el valor ingresado --}}
                    value="{{old('username')}}"
                    />

                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Correo
                    </label>
                    <input
                    id="email"
                    name="email"
                    type="text"
                    placeholder="Tu Correo de Registro"
                    class="border p-3 w-full rounded-lg bg-white shadow-md @error('email') border-red-500 @enderror"
                    {{-- Mantiene el valor ingresado --}}
                    value="{{old('email')}}"
                    />

                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Tu Contraseña de Registro"
                    class="border p-3 w-full rounded-lg bg-white shadow-md @error('password') border-red-500 @enderror"
                    />

                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Contraseña
                    </label>
                    <input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    placeholder="Repite tu Contraseña"
                    class="border p-3 w-full rounded-lg bg-white shadow-md"
                    />
                </div>

                <input 
                type="submit"
                value="Crear Cuenta"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection