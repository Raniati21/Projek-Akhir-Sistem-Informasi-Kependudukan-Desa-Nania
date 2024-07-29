<?php
require ("../connection/koneksi.php");

// Hash password sebelum menyimpannya ke database

$username = "username";
$password = "password";
$password_hash = password_hash($password, PASSWORD_DEFAULT);

if (isset($_POST['submit'])) {
   $simpan = mysqli_query($koneksi, "insert into pengguna set
   nama              = '$_POST[nama]',
   username         = '$_POST[username]',
   password             = '$_POST[password]',
   level             = '$_POST[level]'");



   if ($simpan) {

      echo "<script>
               alert('Data Berhasil Disimpan');
               document.location='../master.php';
            </script>
            ";
   } else {
      echo "<script>
               alert('Data Gagal Disimpan');
               document.location='../master.php';
            </script>
            ";
   }
}  

?>