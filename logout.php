<?php

session_start();

$_SESSION = [];

// Menghapus semua variabel sesi
session_unset();

// Menghancurkan sesi
session_destroy();

// Mengalihkan pengguna ke halaman login atau halaman lain
header("Location:login.php");
exit;

?>