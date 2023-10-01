<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Log history dari sensor fingeerprint</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>NRP</th>
                  <th>Fingerprint ID</th>
                  <th>Date</th>
                  <th>Time In</th>
                  <th>Time Out</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = mysqli_query($conn, "SELECT * FROM users_logs");
                while ($row = mysqli_fetch_assoc($query)) {

                ?>
                <TR>
                  <TD>
                    <?php echo $row['username']; ?>
                  </TD>
                  <TD>
                    <?php echo $row['serialnumber']; ?>
                  </TD>
                  <TD>
                    <?php echo $row['fingerprint_id']; ?>
                  </TD>
                  <TD>
                    <?php echo $row['checkindate']; ?>
                  </TD>
                  <TD>
                    <?php echo $row['timein']; ?>
                  </TD>
                  <TD>
                    <?php echo $row['timeout']; ?>
                  </TD>
                </TR>
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