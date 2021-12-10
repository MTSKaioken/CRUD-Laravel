<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    
    protected $fillable = [
        'titulo_produto',
        'preco',
        'descricao',
        'categoria',
        'url_img_produto',
    ];
}
