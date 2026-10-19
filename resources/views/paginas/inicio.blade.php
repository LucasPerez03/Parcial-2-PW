@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
<div class="vintage-box text-center">
    <h2 class="section-title">Bienvenidos a Nuestra Historia</h2>
    <p class="lead-text">
        Fundado en el corazón del antiguo mercado en 1924, <strong>Abasto Restaurante</strong> conserva intacta la mística de los bodegones clásicos de principios del siglo XX. Maderas nobles, luces cálidas y recetas que pasaron de generación en generación.
    </p>
    <p class="muted-paragraph">
        Cada plato cuenta un capítulo de nuestra tradición gastronómica, maridado con una selección única para quienes buscan una velada inolvidable.
    </p>
    <div class="btn-group">
        <a href="{{ route('paginas.menu') }}" class="btn-vintage">Descubrir el Menú</a>
        <a href="{{ route('paginas.contacto') }}" class="btn-vintage btn-outline">Nuestra Ubicación</a>
    </div>
</div>
@endsection