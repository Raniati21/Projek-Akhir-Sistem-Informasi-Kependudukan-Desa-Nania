<?php
require ("../connection/koneksi.php");


if (isset($_POST['submit'])) {
   $simpan = mysqli_query($koneksi, "insert into pddk set
   nik              = '$_POST[nik]',
   nama             = '$_POST[nama]',
   tempat_lahir     = '$_POST[tempat_lahir]',
   tanggal_lahir    = '$_POST[tanggal_lahir]',
   jekel            = '$_POST[jekel]',
   desa             = '$_POST[desa]',
   rt               = '$_POST[rt]',
   rw               = '$_POST[rw]',
   agama            = '$_POST[agama]',
   pendidikan       = '$_POST[pendidikan]',
   kawin            = '$_POST[kawin]',
   pekerjaan        = '$_POST[pekerjaan]'");

   if ($simpan) {
      echo "<script>
               alert('Data Berhasil Disimpan');
               document.location='../penduduk.php';
            </script>
            ";
   } else {
      echo "<script>
               alert('Data Gagal Disimpan');
               document.location='../penduduk.php';
            </script>
            ";
   }         

}  

?>