<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sobrenome',
        'login',
        'senha',
        'email',
        'numero_contato',
        'codigo_postal',
    ];
}
