<?php

    require ("../connection/koneksi.php");

    $id  = $_GET['id_pindah'];

    $query = mysqli_query($koneksi," delete from pindah where id_pindah = $id");

    $sql = mysqli_query($koneksi, $query);
    
    if ($query) {

            echo "<script>
                        alert('Data Berhasil Dihapus');
                        document.location='../pindah.php';
                    </script>
                    ";
            } else {
            echo "<script>
                        alert('Data Gagal Dihapus');
                        document.location='../pindah.php';
                    </script>
                    ";
            }


?>