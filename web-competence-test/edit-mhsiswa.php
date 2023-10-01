<?php
include('koneksi.php');

$id = $_GET['id'];
$sql = "SELECT * FROM tbl_mhsiswa WHERE id_mhsiswa = $id LIMIT 1";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Fira+Code&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <title>Edit Mahasiswa</title>
</head>

<body>
  <div class="container d-flex justify-content-center mt-5">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header fw-bold">EDIT MAHASISWA</div>
        <div class="card-body">
          <form action="update-mhsiswa.php" method="POST">
            <div class="mb-3">
              <label>NRP</label>
              <input type="hidden" name="id_mhsiswa" value="<?php echo $row['id_mhsiswa'] ?>" />
              <input type="text" name="nrp" value="<?php echo $row['nrp'] ?>" placeholder="Masukkan NRP"
                class="form-control" />
            </div>

            <div class="mb-3">
              <label>Nama Lengkap</label>
              <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'] ?>"
                placeholder="Masukkan Nama" class="form-control" />
            </div>

            <div class="mb-3">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat"
                rows="4"><?php echo $row['alamat'] ?></textarea>
            </div>

            <button type="submit" class="btn btn-success">UPDATE</button>
            <button type="reset" class="btn btn-warning">RESET</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>