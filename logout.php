<?php
session_start();

// Cek apakah tombol logout ditekan
if(isset($_POST['logout'])) {
    // Hapus semua data sesi
    session_unset();
    // Hapus sesi
    session_destroy();
    // Arahkan kembali ke halaman login
    header("Location: login.php");
    exit;
}
?>
