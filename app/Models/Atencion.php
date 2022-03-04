<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atencion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres', 'apellidos', 'email', 'telefono', 'municipio', 'tipo_solicitud', 'justificacion'
    ];
}
