@extends('layouts.app')

@section('titulo', 'Contacto y Ubicación')

@section('contenido')
<div class="vintage-box">
    <h2 class="section-title">Contacto y Ubicación</h2>

    <div class="row g-4 text-center">
        <div class="col-12 col-md-6">
            <div class="card-item h-100">
                <h3 class="card-title-gold">📍 Dirección</h3>
                <p>Av. San Martín 1234, Q8370</p>
                <p class="card-desc">San Martín de los Andes, Neuquén</p>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card-item h-100">
                <h3 class="card-title-gold">🕰️ Horarios de Atención</h3>
                <p>Lunes a Domingos</p>
                <p class="card-desc">Todos los días de 12:00 a 00:00 hs</p>
            </div>
        </div>
        <div class="col-12 col-md-12">
            <div class="card-item h-100">
                <h3 class="card-title-gold">☎️ Teléfono y Contacto</h3>
                <p>Teléfono: (02972) 42-1454 <br> WhatsApp: +54 9 2972 434004.</p>
                <p class="card-desc">reservas@abastorestaurante.com.ar</p>
            </div>
        </div>
    </div>
</div>
@endsection