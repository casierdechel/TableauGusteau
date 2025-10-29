<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Reservasi;

class ReservasiController extends Controller
{
    public function index()
    {
        $reservasis = Reservasi::with('pelanggan')->get();
        return view('reservasi.index', compact('reservasis'));
    }

    public function create()
    {
        return view('reservasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'tanggal' => 'required',
            'waktu' => 'required',
            'jumlah_orang' => 'required|integer',
        ]);

        $pelanggan = Pelanggan::firstOrCreate(
            ['email' => $request->email],
            ['nama' => $request->nama,'nomor_hp' => $request->nomor_hp ?? '-']
        );

        Reservasi::create([
            'pelanggan_id' => $pelanggan->id,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'jumlah_orang' => $request->jumlah_orang,
            'status' => 'Dikonfirmasi'
        ]);

        return redirect()->back()->with('success', 'Reservasi berhasil dibuat!');
    }
}
