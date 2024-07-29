<?php

    require ("../connection/koneksi.php");

    $id_lahir  = $_GET['id_lahir'];

    $query = mysqli_query($koneksi," delete from lahir where id_lahir = $id_lahir");

    $sql = mysqli_query($koneksi, $query);
    
    if ($query) {

        echo "<script>
                    alert('Data Berhasil Dihapus');
                    document.location='../lahir.php';
                </script>
                ";
            } else {
            echo "<script>
                    alert('Data Gagal Dihapus');
                    document.location='../lahir.php';
                </script>
                ";
                
            }


?>