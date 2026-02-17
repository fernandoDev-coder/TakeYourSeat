<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model {
    use HasFactory;
    
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'duracion',
        'clasificacion',
        'activa',
        'trailer_url',
        'director',
        'reparto',
        'fecha_estreno',
    ];

    protected $casts = [
        'fecha_estreno' => 'date',
        'activa' => 'boolean',
    ];

    public function horarios() {
        return $this->hasMany(Horario::class);
    }

    public function generos() {
        return $this->belongsToMany(Genero::class);
    }
}
