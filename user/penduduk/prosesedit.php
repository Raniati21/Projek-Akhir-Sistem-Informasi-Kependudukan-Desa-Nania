<?php

require ("../connection/koneksi.php");


$id               = $_POST['id_penduduk'];
$nik              = $_POST['nik'];
$nama             = $_POST['nama'];
$tempat_lahir     = $_POST['tempat_lahir'];
$tanggal_lahir    = $_POST['tanggal_lahir'];
$jekel            = $_POST['jekel'];
$desa             = $_POST['desa'];
$rt               = $_POST['rt'];
$rw               = $_POST['rw'];
$agama            = $_POST['agama'];
$pendidikan       = $_POST['pendidikan'];
$kawin            = $_POST['kawin'];
$pekerjaan        = $_POST['pekerjaan'];



if (isset($_POST['ubah'])) {
  
   $query       = "update  pddk set
                                       nik              = '$nik',
                                       nama             = '$nama',
                                       tempat_lahir     = '$tempat_lahir',
                                       tanggal_lahir    = '$tanggal_lahir',
                                       jekel            = '$jekel',
                                       desa             = '$desa',
                                       rt               = '$rt',
                                       rw               = '$rw',
                                       agama            = '$agama',
                                       pendidikan       = '$pendidikan',
                                       kawin            = '$kawin',
                                       pekerjaan        = '$pekerjaan'
                                  where id_penduduk     = $id";
                                  
   $sql = mysqli_query($koneksi, $query);
   if ($query) {
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