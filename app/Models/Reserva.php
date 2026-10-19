<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_cliente', 'email', 'telefono', 
        'fecha', 'hora', 'cantidad_personas', 'observaciones'
    ]; //[cite: 2]

    // Casts sugeridos para manejar mejor los formatos de fecha/hora
    protected $casts = [
        'fecha' => 'date',
        'hora' => 'datetime:H:i', 
    ];

    // Relación Muchos a Muchos con productos
    public function productos()
    {
        return $this->belongsToMany(Producto::class)->withTimestamps();
    }
}
