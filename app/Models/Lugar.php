<?php

namespace App\Models;

use Database\Factories\LugarFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    /** @use HasFactory<LugarFactory> */
    use HasFactory;

    protected $table = 'lugares';

    protected $fillable = [
        'nombre',
        'descripcion',
        'ubicacion',
        'imagen_url',
        'puntuacion',
    ];

    protected function casts(): array
    {
        return [
            'puntuacion' => 'float',
        ];
    }
}
