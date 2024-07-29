<?php

    require ("../connection/koneksi.php");

    $id_kl  = $_GET['id_kl'];

    $query = mysqli_query($koneksi," delete from keluarga_kk where id_kl = $id_kl");

    $sql = mysqli_query($koneksi, $query);
    
    if ($query) {

        echo "<script>
                    alert('Data Berhasil Dihapus');
                    document.location='../keluarga.php';
                </script>
                ";
            } else {
            echo "<script>
                    alert('Data Gagal Dihapus');
                    document.location='../keluarga.php';
                </script>
                ";
                
            }


?>