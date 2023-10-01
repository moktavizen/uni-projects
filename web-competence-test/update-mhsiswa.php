<?php
include('koneksi.php');

$id_mhsiswa = $_POST['id_mhsiswa'];
$nrp = $_POST['nrp'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

$sql = "UPDATE tbl_mhsiswa SET nrp = '$nrp', nama_lengkap = '$nama_lengkap', alamat = '$alamat' WHERE id_mhsiswa = '$id_mhsiswa'";

$query = mysqli_query($conn, $sql);

if ($query) {
    header("location: index.php");
} else {
    echo "Data Gagal Diupate!";
}

mysqli_close($conn);
?>