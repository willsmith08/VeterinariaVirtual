@extends('layout')

@push('styles')
    @vite('resources/css/pages/index.css')
@endpush

@section('content')


    @include('components.header')

    <div class="slides">
        <ul>
            <li><img src="/imgs/slider 1.png" alt=""></li>
            <li><img src="/imgs/slider 2.png" alt=""></li>
            <li><img src="/imgs/slider 3.png" alt=""></li>
        </ul>
    </div>

    @include('components.carritoCompras')

    <div class="franja_verde"></div>
    <div class="nuestra_tienda">
        <div class="nues">
            <img src="/imgs/img_veterinaria.png" width="310" class="img_vete"/>
            <h1>Nuestra tienda veterinaria</h1>
            <p>En Dog & pet, somos una clínica veterinaria amantes a los animales 
                comprometidos con proporcionar la mejor atención y cuidado para 
                tus mascotas, nuestro equipo de veterinarios altamente capacitados 
                está aquí para asegurarse de que tus amigos peludos reciban el 
                tratamiento más profesional  y amoroso posible, con una pasión 
                compartida por la salud y el bienestar animal, trabajamos 4
                incansablemente para mantener  a tus mascotas saludables y felices 
                en todo momento.
                <br>
                <br>
                Descubre más sobre nosotros y únete a nuestra familia de amantes de los animales.
            </p>
            <div><a href="nosotros.html">¡Mas información!</a></div>
        </div>
    </div>
    <div class="ti">
        <h2 class="titu_recomen">Recomendaciones para viajar</h2>
    </div>
    <div class="recomendaciones">
        <div>
            <img src="/imgs/recomendacion1.png" alt="">
            <img src="/imgs/recomendaciones2.png" alt="">
            <img src="/imgs/recomendaciones3.png" alt="">
            <img src="/imgs/recomendaciones4.png" alt="">
        </div>
    </div>
    
    @include('components.cifras')

    @include('components.footer')
    
@endsection
