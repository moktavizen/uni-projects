<?php
include('koneksi.php');
$id = $_GET['id'];

$sql = "DELETE FROM tbl_mhsiswa WHERE id_mhsiswa = '$id'";

$query = mysqli_query($conn, $sql);

if ($query) {
    header("location: index.php");
} else {
    echo "Data Gagal Dihapus!";
}

mysqli_close($conn);
?>