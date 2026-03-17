
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
            <form action="">
                <input type="text" placeholder="Usuario" id="usuario">
                <input type="password" placeholder="Contraseña" id="contraseña">
                <button type="submit">Iniciar sesión</button>
            </form>
            <div class="li">
                <a href="#" class="reg">¿Aún no tienes cuenta? Registrate</a>
            </div>
        </div>
    </div>
@endsection