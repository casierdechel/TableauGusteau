<!DOCTYPE html>
<html>
<head>
    <title>Laporan Reservasi Bulanan</title>
</head>
<body>
    <h1>Laporan Reservasi Bulan {{ $bulanIni }}/{{ $tahunIni }}</h1>
    <table border="1" cellpadding="6">
        <tr>
            <th>Nama Pelanggan</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Jumlah Orang</th>
            <th>Status</th>
        </tr>
        @foreach ($reservasi as $r)
        <tr>
            <td>{{ $r->pelanggan->nama }}</td>
            <td>{{ $r->tanggal }}</td>
            <td>{{ $r->waktu }}</td>
            <td>{{ $r->jumlah_orang }}</td>
            <td>{{ $r->status }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
