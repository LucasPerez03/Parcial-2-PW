@extends('layouts.app')

@section('titulo', 'Nuestro Menú')

@section('contenido')
<div class="vintage-box">
    <h2 class="section-title">Carta de Especialidades</h2>
    <p class="text-main text-center">
        Platos elaborados con recetas tradicionales de nuestra cocina histórica.
    </p>

    <div class="grid-cards">
        @foreach($productos as $producto)
            <div class="card-item">
                <div>
                    <span class="badge-categoria">{{ $producto->categoria }}</span>
                    <h3 class="card-title">{{ $producto->nombre }}</h3>
                    <p class="card-desc">
                        {{ $producto->descripcion ?? 'Especialidad clásica de la casa.' }}
                    </p>
                </div>
                <div class="card-price-box">
                    <strong class="card-price">
                        ${{ number_format($producto->precio, 2, ',', '.') }}
                    </strong>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection