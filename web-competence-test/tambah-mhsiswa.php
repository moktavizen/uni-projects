<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Fira+Code&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <title>Tambah Mahasiswa</title>
</head>

<body>

  <div class="container d-flex justify-content-center mt-5">

    <div class="col-md-8">
      <div class="card">
        <div class="card-header fw-bold">
          TAMBAH MAHASISWA
        </div>
        <div class="card-body">
          <form action="simpan-mhsiswa.php" method="POST">

            <div class="mb-3">
              <label>NRP</label>
              <input class="form-control" type="text" name="nrp" placeholder="Masukkan NRP">
            </div>

            <div class="mb-3">
              <label>Nama Lengkap</label>
              <input class="form-control" type="text" name="nama_lengkap" placeholder="Masukkan Nama">
            </div>

            <div class="mb-3">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-success">SIMPAN</button>
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