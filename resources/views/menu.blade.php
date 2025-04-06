@extends('layouts.app')

@section('title', 'Menú Principal')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Bienvenido al Sistema de Menús</h2>
            <p class="card-text">Este es el menú principal desde donde puedes acceder a todas las secciones de nuestro sitio.</p>
            
            <div class="row mt-4">
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Inicio</h5>
                            <p class="card-text">Información general del sitio.</p>
                            <a href="{{ route('home') }}" class="btn btn-primary">Ir a Inicio</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Fotos</h5>
                            <p class="card-text">Galería de imágenes destacadas.</p>
                            <a href="{{ route('fotos') }}" class="btn btn-primary">Ver Fotos</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Contacto</h5>
                            <p class="card-text">Formulario para contactarnos.</p>
                            <a href="{{ route('contacto') }}" class="btn btn-primary">Contactar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection