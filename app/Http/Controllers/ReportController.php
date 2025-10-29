<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index()
    {
        $bulanIni = Carbon::now()->month;
        $tahunIni = Carbon::now()->year;

        $reservasi = Reservasi::whereMonth('tanggal', $bulanIni)
                              ->whereYear('tanggal', $tahunIni)
                              ->get();

        return view('report.index', compact('reservasi', 'bulanIni', 'tahunIni'));
    }
}
