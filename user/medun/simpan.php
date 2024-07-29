<?php
require ("../connection/koneksi.php");


if (isset($_POST['submit'])) {
   $simpan = mysqli_query($koneksi, "insert into meninggal_dunia set
   id_penduduk       = '$_POST[id_penduduk]',
   tgl_medun         = '$_POST[tgl_medun]',
   sebab             = '$_POST[sebab]'");

   if ($simpan) {
      echo "<script>
               alert('Data Berhasil Disimpan');
               document.location='../medun.php';
            </script>
            ";
   } else {
      echo "<script>
               alert('Data Gagal Disimpan');
               document.location='../medun.php'; 
            </script>
            ";
   }
   

   
   

}  

?>