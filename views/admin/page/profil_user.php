<?php
$profil=$this->auth->current_user();

?>

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

        

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header mb-4">
                <h3 class="card-title">About Me</h3>
              </div>
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?=base_url('assets/uploads/avatar/'.$profil->avatar)?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?=$profil->name?></h3>

                <p class="text-muted text-center"><?=$profil->role?></p>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Nomor HP</strong>

                <p class="text-muted">
                <?=$profil->hp?>
                </p>

                <hr>

                <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                <p class="text-muted">
                <?=$profil->email?></p>

                <hr>

                <strong><i class="fas fa-user-alt mr-1"></i> Terdaftar</strong>

                <p class="text-muted">
                <?=longdate_indo(date('Y-m-d',strtotime($profil->created_at)))?>
                </p>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="active nav-link" href="#settings" data-toggle="tab">Edit</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
               
               
            <?= $this->session->flashdata('notif') ?>

                  <div class="active tab-pane" id="settings">
                    <form class="form-horizontal" method="post" action="" id="formubahprofil" enctype="multipart/form-data">
                      <div class="form-group row">
                        <input type="hidden" name="id_user" value="<?=$profil->id_user?>">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" value="<?=$profil->name?>" class="form-control" id="inputName" placeholder="Nama">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Foto <small>*kosongi apabila tidak ingin ganti</small></label>
                        <div class="col-sm-10">
                          <input type="file" name="avatar" id="inputName" placeholder="Nama">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" name="email" value="<?=$profil->email?>" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">HP</label>
                        <div class="col-sm-10">
                          <input type="text" name="hp" value="<?=$profil->hp?>" class="form-control" id="inputName2" placeholder="Nomor HP">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" value="" id="inputName2" placeholder="Kosongi bila tidak ingin mengganti">
                        </div>
                      </div>
                     
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
