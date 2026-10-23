@extends('layouts.app')

@section('titulo', 'Reservar Mesa')

@section('contenido')
<div class="vintage-box">
    <h2 class="section-title">Reservar una Mesa</h2>
    <p class="text-main text-center">
        Complete los datos de su velada y, si lo desea, seleccione los platos que desea encargar por adelantado.
    </p>

    <form action="{{ route('reservas.store') }}" method="POST" novalidate>
        @csrf

        <div class="form-row">
            <div class="form-group">
                <label for="nombre_cliente">Nombre y Apellido *</label>
                <input type="text" id="nombre_cliente" name="nombre_cliente" value="{{ old('nombre_cliente') }}" placeholder="Ej: Carlos Gardel">
                @error('nombre_cliente')
                    <span class="error-msg">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico *</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="cliente@ejemplo.com">
                @error('email')
                    <span class="error-msg">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono de Contacto *</label>
                <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}" placeholder="Ej: 11 4862-1924">
                @error('telefono')
                    <span class="error-msg">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="fecha">Fecha de la Reserva *</label>
                <input type="date" id="fecha" name="fecha" value="{{ old('fecha') }}">
                @error('fecha')
                    <span class="error-msg">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="hora">Hora *</label>
                <input type="time" id="hora" name="hora" value="{{ old('hora') }}">
                @error('hora')
                    <span class="error-msg">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="cantidad_personas">Cantidad de Comensales (1 a 10) *</label>
                <input type="number" id="cantidad_personas" name="cantidad_personas" min="1" max="10" value="{{ old('cantidad_personas', 2) }}">
                @error('cantidad_personas')
                    <span class="error-msg">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label>Encargar Productos del Menú por Adelantado (Opcional)</label>
            <div class="productos-checkbox-grid">
                @foreach($productos as $producto)
                    <label class="checkbox-item">
                        <input type="checkbox" name="productos[]" value="{{ $producto->id }}"
                            {{ is_array(old('productos')) && in_array($producto->id, old('productos')) ? 'checked' : '' }}>
                        <span>
                            <strong>{{ $producto->nombre }}</strong> 
                            <small>(${{ number_format($producto->precio, 0, ',', '.') }})</small>
                        </span>
                    </label>
                @endforeach
            </div>
            @error('productos')
                <span class="error-msg">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="observaciones">Observaciones Especiales (Opcional)</label>
            <textarea id="observaciones" name="observaciones" rows="3" placeholder="Ej: Mesa cerca de la ventana, sin sal, aniversario...">{{ old('observaciones') }}</textarea>
            @error('observaciones')
                <span class="error-msg">{{ $message }}</span>
            @enderror
        </div>

        <div class="btn-group">
            <button type="submit" class="btn-vintage">Confirmar Reserva</button>
            <a href="{{ route('reservas.index') }}" class="btn-vintage">Ver Lista de Reservas</a>
        </div>
    </form>
</div>
@endsection