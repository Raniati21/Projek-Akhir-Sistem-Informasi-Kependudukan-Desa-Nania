<?php

include ("../connection/koneksi.php");

$id_kk         = $_POST['id_kk'];
$no_kk         = $_POST['no_kk'];
$kepala_kl     = $_POST['kepala_kl'];
$desa          = $_POST['desa'];
$rt            = $_POST['rt'];
$rw            = $_POST['rw'];
$kec_kota           = $_POST['kec_kota'];
$prov               = $_POST['prov'];

if (isset($_POST['ubah'])) {
  
   $query       = "update  kartu_keluarga set
                                    no_kk       ='$no_kk',
                                    kepala_kl   ='$kepala_kl',
                                    desa        ='$desa',
                                    rt          ='$rt',
                                    rw          ='$rw',
                                    kec_kota           = '$kec_kota',
                                    prov               = '$prov'
                                where id_kk     ='$id_kk'";
                                
    $sql = mysqli_query($koneksi, $query);

   if ($query) {
      echo "<script>
                  alert('Data Berhasil Diubah');
                  document.location='../kk.php';
              </script>
              ";
      } else {
      echo "<script>
                  alert('Data Gagal Diubah');
                  document.location='../kk.php';
              </script>
              ";
    } 
}
?>