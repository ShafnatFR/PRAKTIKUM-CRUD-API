<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillables = [
        'nama_produk',
        'gambar_produk',
        'tgl_pembuatan',
        'tgl_kadarluarsa',
        'nama_mitra',
    ];
}
