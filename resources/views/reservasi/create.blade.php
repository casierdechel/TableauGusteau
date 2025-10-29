<!DOCTYPE html>
<html>
<head>
    <title>Reservasi Gusteau's</title>
</head>
<body>
    <h1>Form Reservasi Restoran Gusteau’s</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/reservasi" method="POST">
        @csrf

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Nomor HP:</label><br>
        <input type="text" name="nomor_hp" required><br><br>

        <label>Tanggal Reservasi:</label><br>
        <input type="date" name="tanggal" required><br><br>

        <label>Waktu Reservasi:</label><br>
        <input type="time" name="waktu" required><br><br>

        <label>Jumlah Orang:</label><br>
        <input type="number" name="jumlah_orang" required><br><br>

        <button type="submit">Kirim Reservasi</button>
    </form>
</body>
</html>
