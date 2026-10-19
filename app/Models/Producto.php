<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombre', 'descripcion', 'precio', 'categoria'];

    // Relación Muchos a Muchos con reservas
    public function reservas()
    {
        return $this->belongsToMany(Reserva::class)->withTimestamps();
    }
}
