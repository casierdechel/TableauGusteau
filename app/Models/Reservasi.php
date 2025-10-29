<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'pelanggan_id',
        'tanggal',
        'waktu',
        'jumlah_orang',
        'status',
    ];

    // Relasi ke model Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
}
