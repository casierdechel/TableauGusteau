<!DOCTYPE html>
<html>
<body>
    <h2>Reservasi Anda Telah Dikonfirmasi!</h2>
    <p>Halo {{ $reservasi->pelanggan->nama }},</p>
    <p>Reservasi Anda di <strong>Gusteau’s Restaurant</strong> telah dikonfirmasi.</p>

    <p><strong>Tanggal:</strong> {{ $reservasi->tanggal }}</p>
    <p><strong>Waktu:</strong> {{ $reservasi->waktu }}</p>
    <p><strong>Jumlah Orang:</strong> {{ $reservasi->jumlah_orang }}</p>

    <p>Sampai jumpa di restoran kami 🍽️</p>
</body>
</html>
