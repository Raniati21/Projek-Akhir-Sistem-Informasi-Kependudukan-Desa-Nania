<?php
require ("../connection/koneksi.php");


if (isset($_POST['submit'])) {

   $simpan = mysqli_query($koneksi,"insert into pindah set
   id_penduduk        = '$_POST[id_penduduk]',
   tgl_pindah         = '$_POST[tgl_pindah]',
   alasan             = '$_POST[alasan]'");   

   if ($simpan) {

      echo "<script>
               alert('Data Berhasil Disimpan');
               document.location='../pindah.php';
            </script>
            ";
   } else {

      echo "<script>
               alert('Data Gagal Disimpan');
               document.location='../pindah.php';
            </script>
            ";
   }
   

   

}  

?>