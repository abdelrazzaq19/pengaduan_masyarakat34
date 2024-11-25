<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $isi = $_POST['isi'];

    $sql = "INSERT INTO pengaduan (nama, email, isi) VALUES ('$nama', '$email', '$isi')";

    if ($conn->query($sql) === TRUE) {
        echo "Pengaduan berhasil dikirim!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>