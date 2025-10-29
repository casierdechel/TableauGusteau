<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'kategori',
    ];

    // (opsional) relasi ke Reservasi nanti bisa ditambah di sini
    // public function reservasis()
    // {
    //     return $this->belongsToMany(Reservasi::class, 'menu_reservasi');
    // }
}