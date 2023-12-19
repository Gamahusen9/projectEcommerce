<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_pembelian',
        'ulasan',
        'metode_pembayaran',
        'harga',
        'id_produk',
        'id_user'
    ];
}
