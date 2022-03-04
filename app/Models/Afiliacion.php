<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afiliacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres', 'apellidos', 'email', 'telefono'
    ];
}
