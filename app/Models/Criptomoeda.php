<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criptomoeda extends Model
{
    use HasFactory;

    protected $table = 'criptomoedas';
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'asset_id',
        'name',
        'price',
        'volume_24',
        'change_1h',
        'change_24h',
        'change_7d',
        'updated_at',
    ];
}
