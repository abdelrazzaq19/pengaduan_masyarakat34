<?php
$host = "localhost";
$user = "root"; // username database Anda
$pass = ""; // password database Anda
$dbname = "pengaduan_masyarakat34";

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>