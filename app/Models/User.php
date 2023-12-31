<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password',
        'noTelp',
        'tempat_tanggal_lahir',
        'jenis_kelamin',
        'alamat'
    ];
}
