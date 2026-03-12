<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'email',
        'nomor_telepon',
        'subjek',
        'message',
    ];
}
