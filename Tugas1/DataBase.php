<?php
// Koneksi ke database
$servername = "localhost"; // atau 127.0.0.1
$username = "root"; // Username MySQL Anda
$password = ""; // Password MySQL Anda
$dbname = "prakweb_2024_c_223040094"; // Nama database

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
