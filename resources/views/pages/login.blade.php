
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
            <h2 class="txtWelcome">¡BIENVENIDO DE NUEVO!</h2>
            <form action="/login" method="POST">
                @csrf
                

                <div class="containerInputs">
                    <input type="text" placeholder="Usuario" id="usuario" name="gmail">
                
                    <input type="password" placeholder="Contraseña" id="contraseña" name="contrasena">
                </div>

                @error('user')
                    <dialog open>
                        <p style="width: 100%;">{{ $message }}</p>
                    </dialog>
                @enderror

                <button type="submit">Iniciar sesión</button>
            </form>
            <div class="li">
                <a href="#" class="reg">¿Aún no tienes cuenta? Registrate</a>
            </div>
        </div>
    </div>
@endsection