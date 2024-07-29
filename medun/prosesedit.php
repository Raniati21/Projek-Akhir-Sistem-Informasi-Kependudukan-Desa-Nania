<?php

require ("../connection/koneksi.php");

$id              = $_POST['id_medun'];
$id_penduduk     = $_POST['id_penduduk'];
$tgl_medun       = $_POST['tgl_medun'];
$sebab           = $_POST['sebab'];


if (isset($_POST['ubah'])) {
  
   $query       = "update  meninggal_dunia set
                                    id_penduduk    = '$id_penduduk',
                                    tgl_medun      = '$tgl_medun',
                                    sebab          = '$sebab'
                                where id_medun     = '$id'";
                                

    $sql = mysqli_query($koneksi, $query);

   if ($query) {
      echo "<script>
                  alert('Data Berhasil Diubah');
                  document.location='../medun.php';
              </script>
              ";
      } else {
      echo "<script>
                  alert('Data Gagal Diubah');
                  document.location='../medun.php';
              </script>
              ";
      } 
}
?>