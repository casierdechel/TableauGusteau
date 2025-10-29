<?php
// =====================
// Class: Manager
// =====================
class Manager {
    private $managerId;
    private $nama;
    private $email;
    private $password;

    public function __construct($managerId, $nama, $email, $password) {
        $this->managerId = $managerId;
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;
    }

    public function login($email, $password) {
        if ($this->email === $email && $this->password === $password) {
            echo "Login berhasil! Selamat datang, " . $this->nama . "<br>";
        } else {
            echo "Login gagal. Periksa kembali email atau password Anda.<br>";
        }
    }
}
?>