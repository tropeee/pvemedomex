<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'foto',
        'foto1',
        'nombre',
        'naming',
        'municipio',
        'frase',
        'foto2',
        'semblanza',
        'propuesta1',
        'propuesta2',
        'propuesta3',
        'propuesta4',
        'propuesta5',
        'email',
        'facebook',
        'twitter',
        'instagram',
        'whatsapp',
    ];
}
