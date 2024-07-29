
<?php

include ("../connection/koneksi.php");
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
  header("Location: login.php");

  exit();
}
$userData = [
  'nama' => $_SESSION['nama'],
  'level' => $_SESSION['level'],

];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sistem Kependudukan</title>

    <link rel="stylesheet" type="text/css" href="dist/apexcharts.css">
    
    <!-- link bootstrap -->
    <link rel="stylesheet" type="text/css" href="bootstrap-5.3.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.3.0/js/all.min.js">

    <!-- link fontawesome -->
    <link rel="stylesheet" type="text/css" href="fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- link google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
       
  </head>

  <body>
          <nav class="navbar navbar-expand-lg bg-info fixed-top p-2">
                <div class="container-fluid">
                    <a class="navbar-brand text-white"> SISTEM INFORMASI KEPENDUDUKAN DESA NANIA </a>
                    <div class="dropdown ms-auto">
                        
                        <a class="navbar-brand text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="width: 18rem;">                            
                                                        
                              <div class="main  text-dark m-3">
                                <h5 class="card-title text-dark text-center">Profile</h5><hr class="bg-info" >
                                <p class="text-dark"><strong >Nama   :</strong> <?php echo htmlspecialchars($userData['nama']); ?></p>
                                <p class="text-dark"><strong>Level   :</strong> <?php echo htmlspecialchars($userData['level']); ?></p>
                                <a href="logout.php" class="btn btn-danger text-white"><i class="fa-solid fa-right-from-bracket m-1"></i>Log Out</a>
                              </div>
                              </a>

                           
                        </ul> 
                        
                    </div>
                </div>
            </nav>       
           
		<div class="row no-gutters mt-1 ">
			<div class="col-md-2 bg-dark mt-2 p-3 pt-5">

      <ul class="nav flex-column m-3 mt-5">
          <li class="nav-item mt-4">
            <img  class="" src="asset/2mhMRJvqNiOtG-FaRhBrL-transformed.png " alt="">
          </li>
      </ul>
        
				<ul class="nav flex-column m-3 mt-5">
          <li class="nav-item mt-4">
            <a class="nav-link  text-white" href="dashbord.php"><i class="fa-solid fa-gauge m-3"></i>
            Dashbord</a>
          </li>
        </ul>

	     <ul class="nav flex-column m-3 mt-5">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-server m-3"></i>Kelola Data
            </a>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="penduduk.php">Data Penduduk</a></li>
              <li><a class="dropdown-item" href="kk.php">Data Kartu Keluarga</a></li>
              <li><a class="dropdown-item" href="keluarga.php">Data  Anggota</a></li>
            </ul>
          </li>
       </ul>
       
       <ul class="nav flex-column m-3 mt-5">
          <li class="nav-item">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-circle-nodes m-3"></i></i>Sirkulasi Penduduk
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="lahir.php">Data Lahir</a></li>
              <li><a class="dropdown-item" href="medun.php">Data  Meninggal</a></li>
              <li><a class="dropdown-item" href="pindah.php">Data  Pindah</a></li>
              <li><a class="dropdown-item" href="pendatang.php">Data  Pendatang</a></li>
            </ul> 
          </li>
        </ul>
        <ul class="nav flex-column m-3 mt-5">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-file m-3"></i>Laporan
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cetak_penduduk.php">Laporan Penduduk</a></li>  
            <li><a class="dropdown-item" href="cetak_kk.php">Laporan Kk</a></li>          
            <li><a class="dropdown-item" href="cetak_lahir.php">Laporan Lahir</a></li>
            <li><a class="dropdown-item" href="cetak_medun.php">Data Meninggal</a></li>
            <li><a class="dropdown-item" href="cetak_pindah.php">Laporan Pindah</a></li>
            <li><a class="dropdown-item" href="cetak_pendatang.php">Laporan Pendatang</a></li>                         
            </ul>
          </li>
        </ul>         
			</div>

          
    <script src="script.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
