<?php

require ("../connection/koneksi.php");

$id              = $_POST['id_kl'];
$id_penduduk     = $_POST['id_penduduk'];
$hubungan        = $_POST['hubungan'];
$id_kk           = $_POST['id_kk'];

if (isset($_POST['ubah'])) {
  
   $query       = "update  keluarga_kk set
                                    id_penduduk  = '$id_penduduk',                                   
                                    hubungan     = '$hubungan',
                                    id_kk        = '$id_kk'
                                where id_kl      = '$id'";
                                

    $sql = mysqli_query($koneksi, $query);

   if ($query) {
      echo "<script>
                  alert('Data Berhasil Diubah');
                  document.location='../keluarga.php';
              </script>
              ";
      } else {
      echo "<script>
                  alert('Data Gagal Diubah');
                  document.location='../keluarga.php';
              </script>
              ";
      } 
}
?>