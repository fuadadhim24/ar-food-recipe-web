<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'intro',
        'deskripsi',
        'namaFoto',
        'kategori',
    ];

    protected $table = 'classes';
}