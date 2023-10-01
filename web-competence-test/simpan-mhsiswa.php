<?php
include('koneksi.php');

$nrp = $_POST['nrp'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO tbl_mhsiswa (nrp, nama_lengkap, alamat) VALUES ('$nrp', '$nama_lengkap', '$alamat')";

$query = mysqli_query($conn, $sql);

if ($query) {
    header("location: index.php");
} else {
    echo "Data Gagal Disimpan!";
}

mysqli_close($conn);
?>