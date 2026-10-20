@extends('layouts.app')

@section('titulo', 'Listado de Reservas')

@section('contenido')
<div class="vintage-box">
    <h2 class="section-title">Registro de Reservas</h2>

    {{-- Mensaje Flash de Confirmación --}}
    @if(session('exito'))
        <div class="alert-success">
            {{ session('exito') }}
        </div>
    @endif

    <div class="btn-group" style="margin-bottom: 2rem;">
        <a href="{{ route('reservas.create') }}" class="btn-vintage">+ Nueva Reserva</a>
    </div>

    @forelse($reservas as $reserva)
        <div class="reserva-card">
            <div class="reserva-info">
                <h3>
                    📅 {{ $reserva->fecha->format('d/m/Y') }} — 🕒 {{ \Carbon\Carbon::parse($reserva->hora)->format('H:i') }} hs
                </h3>
                <p class="reserva-meta">
                    <strong>Cliente:</strong> {{ $reserva->nombre_cliente }} | 
                    <strong>Comensales:</strong> {{ $reserva->cantidad_personas }} personas | 
                    <strong>Tel:</strong> {{ $reserva->telefono }} | 
                    <strong>Email:</strong> {{ $reserva->email }}
                </p>

                @if($reserva->observaciones)
                    <p style="font-style: italic; font-size: 0.9rem; margin-bottom: 0.6rem;">
                        "{{ $reserva->observaciones }}"
                    </p>
                @endif

                <div>
                    <strong style="color: var(--gold-accent); font-size: 0.9rem;">Platos pre-encargados:</strong>
                    @if($reserva->productos->isEmpty())
                        <span style="color: var(--muted-text); font-size: 0.9rem;">Sin productos encargados por adelantado.</span>
                    @else
                        <ul class="productos-list">
                            @foreach($reserva->productos as $producto)
                                <li>{{ $producto->nombre }} ({{ $producto->categoria }}) — ${{ number_format($producto->precio, 2, ',', '.') }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>

            {{-- Formulario para Cancelar Reserva usando DELETE --}}
            <form action="{{ route('reservas.destroy', $reserva) }}" method="POST" onsubmit="return confirm('¿Está seguro de que desea cancelar esta reserva?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-danger">Cancelar Reserva</button>
            </form>
        </div>
    @empty
        <p class="text-center muted-paragraph">No hay reservas registradas en este momento.</p>
    @endforelse
</div>
@endsection