<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'spesifik_produk',
        'nama_produk',
        'gambar_produk',
        'stok_produk',
        'harga_produk'
    ];
}
