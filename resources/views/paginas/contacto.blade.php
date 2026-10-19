@extends('layouts.app')

@section('titulo', 'Contacto y Ubicación')

@section('contenido')
<div class="vintage-box">
    <h2 class="section-title">Contacto y Ubicación</h2>

    <div class="grid-cards text-center">
        <div class="card-item">
            <h3 class="card-title-gold">📍 Dirección</h3>
            <p>Av. Corrientes 3247 (Barrio del Abasto)</p>
            <p class="card-desc">CABA, Buenos Aires</p>
        </div>

        <div class="card-item">
            <h3 class="card-title-gold">🕰️ Horarios de Atención</h3>
            <p>Martes a Domingos</p>
            <p class="card-desc">Mediodía: 12:00 a 15:30 hs<br>Noche: 20:00 a 00:30 hs</p>
        </div>

        <div class="card-item">
            <h3 class="card-title-gold">☎️ Teléfono y Contacto</h3>
            <p>+54 (011) 4862-1924</p>
            <p class="card-desc">reservas@abastorestaurante.com.ar</p>
        </div>
    </div>
</div>
@endsection