
@extends('layout')

@push('styles')
    @vite('resources/css/pages/login.css')
@endpush

@section('content')
    <div class="contenedor">
        <div class="contenido">
            <div class="lgo">
                <a href="/"><img src="imgs/LOGO.png" alt=""></a>
            </div>
            <h1>¡Bienvenido de nuevo!</h1>
            <form action="/login" method="POST">
                @csrf
                <input type="text" placeholder="Usuario" id="usuario" name="gmail">
                @error('gmail')
                    <p>{{ $message }}</p>
                @enderror
                <input type="password" placeholder="Contraseña" id="contraseña" name="contrasena">
                @error('contrasena')
                    <p>{{ $message }}</p>
                @enderror
                <button type="submit">Iniciar sesión</button>
            </form>
            <div class="li">
                <a href="#" class="reg">¿Aún no tienes cuenta? Registrate</a>
            </div>
        </div>
    </div>
@endsection