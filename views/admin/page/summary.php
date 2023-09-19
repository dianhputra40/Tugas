 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         

              <div class="col-12">
            <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                  <li class="pt-2 px-3"><h3 class="card-title">Summary</h3></li>
                  <li class="nav-item">
                    <a class="nav-link <?=$tab=='done'? 'active':"";?>" href="<?=base_url('internal/summary/done')?>" id="custom-tabs-four-home-tab"  role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Done</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?=$tab=='cancel'? 'active':"";?>" href="<?=base_url('internal/summary/cancel')?>" id="custom-tabs-four-profile-tab" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Cancel</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">

                       <?php
                       $this->load->view('admin/tabel/tabel_summary');
                       
                        ?>
                 </div>
            </div>
              </div>
              <!-- /.card -->
            </div>




      </div>
              <!-- /.card-body -->
            </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
