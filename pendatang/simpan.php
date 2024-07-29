<?php
require ("../connection/koneksi.php");


if (isset($_POST['submit'])) {
    
   $simpan = mysqli_query($koneksi, "insert into datang set
   nik_p            = '$_POST[nik_p]',
   nama_p           = '$_POST[nama_p]',
   jekel            = '$_POST[jekel]',
   tgl_datang       = '$_POST[tgl_datang]',
   desal            = '$_POST[desal]'");   

   if ($simpan) {

    echo "<script>
            alert('Data Berhasil Disimpan');
            document.location='../pendatang.php';
        </script>
        ";
        } else {
        echo "<script>
            alert('Data Gagal Disimpan');
            document.location='../pendatang.php';
        </script>
        ";
   }
   

   
   

}  

?>