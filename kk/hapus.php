<?php
session_start();
require ("../connection/koneksi.php");

// Periksa apakah parameter 'id' ada di URL
if (isset($_GET['id_kk'])) {
    $id_kk = $_GET['id_kk'];

    // Periksa apakah ID tidak kosong
    if (!empty($id_kk)) {
        // Hapus data terkait di tabel 'datang'
        $query_delete_lahir = "DELETE FROM lahir WHERE id_kk = '$id_kk'";
        if (mysqli_query($koneksi, $query_delete_lahir)) {

         $query_delete_keluarga_kk = "DELETE FROM keluarga_kk WHERE id_kk = '$id_kk'";
        if (mysqli_query($koneksi, $query_delete_keluarga_kk)) {
            
            // Jika berhasil menghapus data terkait, hapus data di tabel 'pddk'
            $query_delete_pddk = "DELETE FROM kartu_keluarga WHERE id_kk = '$id_kk'";
            if (mysqli_query($koneksi, $query_delete_pddk)) {

                // Jika berhasil, arahkan kembali ke halaman daftar penduduk
                    echo "<script>
                            alert('Data Berhasil Dihapus');
                            document.location='../kk.php';
                        </script>
                        ";
                exit();
            } else {
                // Jika query gagal, tampilkan pesan kesalahan
                echo "Error: " . mysqli_error($koneksi);
            }
        } else {
            // Jika query gagal, tampilkan pesan kesalahan
            echo "Error: " . mysqli_error($koneksi);
        }
    }else{
         // Jika query gagal, tampilkan pesan kesalahan
         echo "Error: " . mysqli_error($koneksi);
    }
    } else {
        echo "ID is empty.";   
    }
} else {
    echo "No ID parameter provided.";
}


// Tutup koneksi
mysqli_close($koneksi);
?>
