<?php
require ("../connection/koneksi.php");


if (isset($_POST['submit'])) {
   $simpan = mysqli_query($koneksi, "insert into keluarga_kk set
   id_penduduk       = '$_POST[id_penduduk]',
   hubungan         = '$_POST[hubungan]',
   id_kk             = '$_POST[id_kk]'");

   if ($simpan) {
      echo "<script>
               alert('Data Berhasil Disimpan');
               document.location='../keluarga.php';
            </script>
            ";
   } else {
      echo "<script>
               alert('Data Gagal Disimpan');
               document.location='../keluarga.php'; 
            </script>
            ";
   }
   

   
   

}  

?>