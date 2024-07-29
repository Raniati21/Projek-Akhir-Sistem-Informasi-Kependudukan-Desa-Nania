<?php

    require ("../connection/koneksi.php");

    $id  = $_GET['id_datang'];

    $query = mysqli_query($koneksi," delete from datang where id_datang = $id");

    $sql = mysqli_query($koneksi, $query);
    
    if ($query) {

            echo "<script>
                        alert('Data Berhasil Dihapus');
                        document.location='../pendatang.php';
                    </script>
                    ";
            } else {
            echo "<script>
                        alert('Data Gagal Dihapus');
                        document.location='../pendatang.php';
                    </script>
                    ";
            }


?>