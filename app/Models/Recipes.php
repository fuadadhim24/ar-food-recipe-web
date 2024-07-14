<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    use HasFactory;
    protected $table = 'recipes';
    protected $fillable = [
        'nama',
        'deskripsi',
        'levelKesulitan',
        'durasiMasak',
        'bahan',
        'alat',
        'stepMasak',
        'namaFoto',
    ];

    protected $casts = [
        'bahan' => 'array',
        'alat' => 'array',
        'stepMasak' => 'array',
    ];
}
