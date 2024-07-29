<?php
include ("../connection/koneksi.php");


if (isset($_POST['submit'])) {
   $simpan = mysqli_query($koneksi, "insert into lahir set
   nama              = '$_POST[nama]',
   tgl_lahir         = '$_POST[tgl_lahir]',
   jekel             = '$_POST[jekel]',
   id_kk             = '$_POST[id_kk]'");

   if ($simpan) {

      echo "<script>
               alert('Data Berhasil Disimpan');
               document.location='../lahir.php';
            </script>
            ";
   } else {
      echo "<script>
               alert('Data Gagal Disimpan');
               document.location='../lahir.php';
            </script>
            ";
   }
}  

?>