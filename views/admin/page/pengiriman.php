 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary card-tabs">
<div class="card-header p-0 pt-1">
<ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
<li class="pt-2 px-3"><h3 class="card-title">Pengiriman</h3></li>
<li class="nav-item">
<a class="nav-link <?=$tabs=='ongoing'?"active":"";?>" id="custom-tabs-two-home-tab" href="<?=base_url('internal/pengiriman/ongoing')?>" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Diproses</a>
</li>
<li class="nav-item">
<a class="nav-link <?=$tabs=='history'?"active":"";?>" id="custom-tabs-two-profile-tab" href="<?=base_url('internal/pengiriman/history')?>" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Selesai</a>
</li>

</ul>
</div>
<div class="card-body">
<div class="tab-content">

<?php
if($tabs=='ongoing'){
     $this->load->view('admin/tabel/tabel_pengiriman');
              
}else{             
     $this->load->view('admin/tabel/tabel_pengirimandone');

}
?>
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
