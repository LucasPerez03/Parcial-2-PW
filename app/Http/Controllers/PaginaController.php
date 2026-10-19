<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class PaginaController extends Controller
{
// 1. Página de Inicio: 
    public function inicio()
    {
        return view('paginas.inicio');
    }

    // 2. Página de Menú:
    public function menu()
    {
        // Trae todos los productos ordenados por categoría
        $productos = Producto::orderBy('categoria')->get();
        
        return view('paginas.menu', compact('productos'));
    }

    // 3. Página de Contacto / Ubicación: dirección, horarios y teléfono
    public function contacto()
    {
        return view('paginas.contacto');
    }}
