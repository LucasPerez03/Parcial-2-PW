<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Producto;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with('productos')
            ->orderBy('fecha', 'asc')
            ->orderBy('hora', 'asc')
            ->get();

        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        $productos = Producto::orderBy('categoria')->orderBy('nombre')->get();

        return view('reservas.create', compact('productos'));
    }

    public function store(Request $request)
    {
        $datosValidados = $request->validate([
            'nombre_cliente'    => 'required|string|max:255',
            'email'             => 'required|email|max:255',
            'telefono'          => 'required|string|max:50',
            'fecha'             => 'required|date|after_or_equal:today',
            'hora'              => 'required',
            'cantidad_personas' => 'required|integer|min:1|max:10',
            'observaciones'     => 'nullable|string',
            'productos'         => 'nullable|array',
            'productos.*'       => 'exists:productos,id',
        ]);

        $reserva = Reserva::create($datosValidados);

        if ($request->has('productos')) {
            $reserva->productos()->attach($request->productos);
        }

        return redirect()->route('reservas.index')
            ->with('exito', '¡La reserva para ' . $reserva->nombre_cliente . ' fue registrada con éxito!');
    }

    public function destroy(Reserva $reserva)
    {
        $reserva->delete();

        return redirect()->route('reservas.index')
            ->with('exito', 'La reserva fue cancelada correctamente.');
    }
}