<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = ['judul', 'slug', 'konten', 'gambar', 'kategori', 'tanggal_berita'];

    protected $casts = [
        'tanggal_berita' => 'date',
    ];
}
