<?php

include ("../connection/koneksi.php");


   $id               = $_POST['id_datang'];
   $nik_p            = $_POST['nik_p'];
   $nama_p           = $_POST['nama_p'];
   $jekel            = $_POST['jekel'];
   $tgl_datang       = $_POST['tgl_datang'];
   $desal            = $_POST['desal'];


      if (isset($_POST['ubah'])) {
  
         $query  = "update  datang set
                                       nik_p       ='$nik_p',
                                       nama_p      ='$nama_p',
                                       jekel       ='$jekel',
                                       tgl_datang  ='$tgl_datang',                                    
                                       desal       ='$desal'                                       
                                    where id_datang='$id'";
                                  
         $sql = mysqli_query($koneksi, $query);
         if ($query) {

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