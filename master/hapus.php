<?php

    require ("../connection/koneksi.php");

    $id  = $_GET['id'];

    $query = mysqli_query($koneksi," delete from pengguna where id = $id");

    $sql = mysqli_query($koneksi, $query);
    
    if ($query) {

        echo "<script>
                    alert('Data Berhasil Dihapus');
                    document.location='../master.php';
                </script>
                ";
            } else {
            echo "<script>
                    alert('Data Gagal Dihapus');
                    document.location='../master.php';
                </script>
                ";
                
            }


?>