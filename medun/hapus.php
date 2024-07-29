<?php

    require ("../connection/koneksi.php");

    $id  = $_GET['id_medun'];

    $query = mysqli_query($koneksi," delete from meninggal_dunia where id_medun = $id");

    $sql = mysqli_query($koneksi, $query);
    
    if ($query) {

            echo "<script>
                        alert('Data Berhasil Dihapus');
                        document.location='../medun.php';
                    </script>
                    ";
            } else {
            echo "<script>
                        alert('Data Gagal Dihapus');
                        document.location='medun/hapus.php';
                    </script>
                    ";
            }


?>