<?php
session_start();
require ("index.php");

require ("connection/koneksi.php");


// Cek apakah pengguna sudah login
if (!isset($_SESSION['login_cek']) || $_SESSION['login_cek'] !== true) {
    header("Location: login/login.php");
    exit();
  }

// Contoh data pengguna yang bisa ditampilkan
$userData = [
    'nama' => $_SESSION['nama'],
    'level' => $_SESSION['level'],
    
   
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="col-md-10 p-4">
      <div class="conteiner"> 
      <h3>
      <i class="fa-solid fa-user"></i>Profile</h3><hr class="bg-info">        
          <div class="row text-white">  </div>
  
        <h1>Profile</h1>
        <p><strong>Nama:</strong> <?php echo htmlspecialchars($userData['nama']); ?></p>
        <p><strong>Level:</strong> <?php echo htmlspecialchars($userData['level']); ?></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>