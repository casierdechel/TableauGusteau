<?php
require_once "classes/Pelanggan.php";
require_once "classes/Reservasi.php";
require_once "classes/Notifikasi.php";
require_once "classes/Manager.php";
require_once "classes/Report.php";

// Tes kelas
$pelanggan1 = new Pelanggan("P001", "Emir", "emir@example.com", "08123456789");
$reservasi1 = new Reservasi("R001", "2025-11-01", "19:00", 4);
$reservasi1->reservasiTempat($pelanggan1);

$notif = new Notifikasi("N001", "Reservasi Anda telah dikonfirmasi!");
$notif->tampilNotifikasi();
$notif->kirimEmail($pelanggan1->getEmail());
?>
