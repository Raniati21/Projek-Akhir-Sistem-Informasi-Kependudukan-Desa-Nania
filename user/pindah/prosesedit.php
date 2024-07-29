<?php

require ("../connection/koneksi.php");

$id              = $_POST['id_pindah'];
$id_penduduk     = $_POST['id_penduduk'];
$tgl_pindah       = $_POST['tgl_pindah'];
$alasan           = $_POST['alasan'];


if (isset($_POST['ubah'])) {
  
   $query       = "update  pindah set
                                    id_penduduk    = '$id_penduduk',
                                    tgl_pindah      = '$tgl_pindah',
                                    alasan          = '$alasan'
                                where id_pindah     = '$id'";
                                

    $sql = mysqli_query($koneksi, $query);

   if ($query) {
      echo "<script>
                  alert('Data Berhasil Diubah');
                  document.location='../pindah.php';
              </script>
              ";
      } else {
      echo "<script>
                  alert('Data Gagal Diubah');
                  document.location='../pindah.php';
              </script>
              ";
      } 
}
?>