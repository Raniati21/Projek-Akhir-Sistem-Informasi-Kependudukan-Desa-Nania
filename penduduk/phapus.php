<?php
session_start();
require ("../connection/koneksi.php");

// Periksa apakah parameter 'id' ada di URL
if (isset($_GET['id_penduduk'])) {
    $id_penduduk = $_GET['id_penduduk'];

    // Periksa apakah ID tidak kosong
    if (!empty($id_penduduk)) {
        // Hapus data terkait di tabel 'datang'
        $query_delete_meninggal_dunia = "DELETE FROM meninggal_dunia WHERE id_penduduk = '$id_penduduk'";
        if (mysqli_query($koneksi, $query_delete_meninggal_dunia)) {

         $query_delete_pindah = "DELETE FROM pindah WHERE id_penduduk = '$id_penduduk'";
        if (mysqli_query($koneksi, $query_delete_pindah)) {
            
            // Jika berhasil menghapus data terkait, hapus data di tabel 'pddk'
            $query_delete_pddk = "DELETE FROM pddk WHERE id_penduduk = '$id_penduduk'";
            if (mysqli_query($koneksi, $query_delete_pddk)) {

                // Jika berhasil, arahkan kembali ke halaman daftar penduduk
                    echo "<script>
                            alert('Data Berhasil Dihapus');
                            document.location='../penduduk.php';
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
