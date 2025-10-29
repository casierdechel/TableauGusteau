<?php
// =====================
// Class: Notifikasi
// =====================
class Notifikasi {
    private $idNotifikasi;
    private $pesan;

    public function __construct($idNotifikasi, $pesan) {
        $this->idNotifikasi = $idNotifikasi;
        $this->pesan = $pesan;
    }

    public function tampilNotifikasi() {
        echo "🔔 Notifikasi: " . $this->pesan . "<br>";
    }

    public function kirimEmail($emailTujuan) {
        echo "Email terkirim ke: " . $emailTujuan . " - Pesan: " . $this->pesan . "<br>";
    }
}
?>