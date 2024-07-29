<?php

require ("../connection/koneksi.php");

$id              = $_POST['id_lahir'];
$nama            = $_POST['nama'];
$tgl_lahir       = $_POST['tgl_lahir'];
$jekel           = $_POST['jekel'];
$id_kk           = $_POST['id_kk'];

if (isset($_POST['ubah'])) {
  
   $query       = "update  lahir set
                                    nama           = '$nama',
                                    tgl_lahir      = '$tgl_lahir',
                                    jekel          = '$jekel',
                                    id_kk          = '$id_kk'
                                where id_lahir     = '$id'";
                                

    $sql = mysqli_query($koneksi, $query);

   if ($query) {
      echo "<script>
                  alert('Data Berhasil Diubah');
                  document.location='../lahir.php';
              </script>
              ";
      } else {
      echo "<script>
                  alert('Data Gagal Diubah');
                  document.location='../lahir.php';
              </script>
              ";
      } 
}
?>