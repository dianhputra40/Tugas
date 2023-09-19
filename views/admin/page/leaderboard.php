 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">Daftar Pemesanan</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">

              <div class="col-12">
            <div class="card card-primary card-outline card-outline-tabs">
          
            <?= $this->session->flashdata('notif') ?>
              <div class="card-body">
                       <?php  $this->load->view('admin/tabel/tabel_leaderboard');
                 ?>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>




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
