<!DOCTYPE html>
<html lang="en">
<!-- <html lang="en" data-bs-theme="dark"> -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Fira+Code&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <title>Data Mahasiswa</title>
</head>

<body>
  <div class="container d-flex justify-content-center mt-5">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header fw-bold d-flex justify-content-between align-items-center">
          DATA MAHASISWA
          <a href="tambah-mhsiswa.php" class="btn btn-md btn-success">
            TAMBAH DATA
          </a>
        </div>

        <div class="card-body">
          <table class="table" id="myTable">
            <thead>
              <tr class="table-light">
                <!-- <tr class="table-dark"> -->
                <th scope="col">NRP</th>
                <th scope="col">NAMA</th>
                <th scope="col">ALAMAT</th>
                <th class="text-end" scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include('koneksi.php');

              $sql = "SELECT * FROM tbl_mhsiswa";
              $query = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_array($query)) {
                ?>

                <tr>
                  <td class="nrp">
                    <?php echo $row['nrp'] ?>
                  </td>
                  <td>
                    <?php echo $row['nama_lengkap'] ?>
                  </td>
                  <td>
                    <?php echo $row['alamat'] ?>
                  </td>
                  <td class="text-end">
                    <div class="btn-group" role="group" aria-label="tombol aksi">
                      <a href="edit-mhsiswa.php?id=<?php echo $row['id_mhsiswa'] ?>"
                        class="btn btn-sm btn-primary">EDIT</a>
                      <a href="hapus-mhsiswa.php?id=<?php echo $row['id_mhsiswa'] ?>"
                        class="btn btn-sm btn-danger">HAPUS</a>
                    </div>
                  </td>
                </tr>

                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function () {
      let table = new DataTable("#myTable");
    });
  </script>
</body>

</html>