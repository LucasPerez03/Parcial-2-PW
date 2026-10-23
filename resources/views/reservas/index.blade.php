@extends('layouts.app')

@section('titulo', 'Listado de Reservas')

@section('contenido')
<div class="vintage-box">
    <h2 class="section-title">Lista de Reservas</h2>

    {{-- Mensaje Flash de Confirmación --}}
    @if(session('exito'))
        <div class="alert-success">
            {{ session('exito') }}
        </div>
    @endif

    <div class="btn-group reservas-header-actions">
        <a href="{{ route('reservas.create') }}" class="btn-vintage">Hacer Reserva</a>
    </div>

    @forelse($reservas as $reserva)
        <div class="reserva-card">
            <div class="reserva-info">
                <div class="reserva-header">
                    <h3>
                        {{ $reserva->fecha->format('d/m/Y') }} — {{ \Carbon\Carbon::parse($reserva->hora)->format('H:i') }} hs
                    </h3>
                    <span class="badge-comensales">
                        {{ $reserva->cantidad_personas }} {{ $reserva->cantidad_personas == 1 ? 'comensal' : 'comensales' }}
                    </span>
                </div>

                <div class="reserva-meta-grid">
                    <div><strong>Cliente:</strong> {{ $reserva->nombre_cliente }}</div>
                    <div><strong>Teléfono:</strong> {{ $reserva->telefono }}</div>
                    <div><strong>Email:</strong> {{ $reserva->email }}</div>
                </div>

                @if($reserva->observaciones)
                    <p class="reserva-observaciones">
                        "{{ $reserva->observaciones }}"
                    </p>
                @endif

                <div class="reserva-productos-box">
                    <span class="reserva-productos-title">Platos pre-encargados:</span>
                    @if($reserva->productos->isEmpty())
                        <span class="sin-productos">Sin productos encargados por adelantado.</span>
                    @else
                        <div class="productos-tags">
                            @foreach($reserva->productos as $producto)
                                <span class="producto-tag">
                                    {{ $producto->nombre }} 
                                    <small>(${{ number_format($producto->precio, 0, ',', '.') }})</small>
                                </span>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <div class="reserva-actions">
                <form action="{{ route('reservas.destroy', $reserva) }}" method="POST" onsubmit="return confirm('¿Está seguro de que desea cancelar esta reserva?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger">Cancelar</button>
                </form>
            </div>
        </div>
    @empty
        <p class="text-center texto-main-2">No hay reservas registradas en este momento.</p>
    @endforelse
</div>
@endsection