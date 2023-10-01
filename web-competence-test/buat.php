<?php
include('koneksi.php');

$sql = "CREATE TABLE tes (
    id_mhsiswa INT(7) AUTO_INCREMENT PRIMARY KEY,
    nrp VARCHAR(15) NOT NULL,
    nama_lengkap VARCHAR(50) NOT NULL,
    alamat VARCHAR(200) NOT NULL
    )";

if (mysqli_query($conn, $sql)) {
    echo "Tabel berhasil dibuat";
} else {
    echo "Error saat membuat tabel: " . mysqli_error($conn);
}

mysqli_close($conn);
?>