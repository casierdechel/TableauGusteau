<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'nomor_hp',
    ];

    // Kalau kamu ingin pakai nama kolom berbeda dari "id"
    // protected $primaryKey = 'pelanggan_id';
}
