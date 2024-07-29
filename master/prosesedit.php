<?php

include ("../connection/koneksi.php");


$id          = $_POST['id'];
$nama        = $_POST['nama'];
$username    = $_POST['username'];
$password    = $_POST['password'];
$level       = $_POST['level'];



if (isset($_POST['ubah'])) {
  
   $query       = "update  pengguna set
                                       nama    ='$nama',
                                       username='$username',
                                       password='$password',
                                       level   ='$level'                                                                           
                                    where id   ='$id'";
                                  
   $sql = mysqli_query($koneksi, $query);
   if ($query) {

      echo "<script>
                  alert('Data Berhasil Disimpan');
                  document.location='../master.php';
            </script>
            ";
            
            } else {
            echo "<script>
                  alert('Data Gagal Disimpan');
                  document.location='../master.php';
            </script>
            ";
     
   }

}  
?>