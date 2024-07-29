<?php
require ("../connection/koneksi.php");


if (isset($_POST['submit'])) {
   $simpan = mysqli_query($koneksi, "insert into kartu_keluarga set
   no_kk              = '$_POST[no_kk]',
   kepala_kl          = '$_POST[kepala_kl]',
   desa               = '$_POST[desa]',
   rt                 = '$_POST[rt]',
   rw                 = '$_POST[rw]',
   kec_kota           = '$_POST[kec_kota]',
   prov               = '$_POST[prov]'
   ");
   

   if ($simpan) {
      echo "<script>
               alert('Data Berhasil Disimpan');
               document.location='../kk.php';
            </script>
            ";
   } else {
      echo "<script>
               alert('Data Gagal Disimpan');
               document.location='simpan.php';
            </script>
            ";
   }
   

   
   

}  

?>