<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar user yang terdaftar pada sensor fingeprint</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>NRP</th>
                  <th>Gender</th>
                  <th>Finger ID</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = mysqli_query($conn, "SELECT * FROM users WHERE add_fingerid=0 ORDER BY serialnumber");
                while ($row = mysqli_fetch_assoc($query)) {

                ?>
                <tr>
                  <TD>
                    <?php echo $row['username']; ?>
                  </TD>
                  <TD>
                    <?php echo $row['serialnumber']; ?>
                  </TD>
                  <TD>
                    <?php echo $row['gender']; ?>
                  </TD>
                  <TD>
                    <?php echo $row['fingerprint_id']; ?>
                  </TD>
                  <TD>
                    <?php echo $row['user_date']; ?>
                  </TD>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>