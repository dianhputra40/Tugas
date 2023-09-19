

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>assets/index3.html" class="brand-link">
    <?php
    $user=$this->auth->current_user();
    if(!empty($user->avatar)){
      $img=base_url()."assets/uploads/avatar/".$user->avatar;
    }else{
      $img=base_url()."assets/client/img/logo/logo.jpg";
    }
    ?>
      <img src="<?=base_url()."assets/client/img/logo/logo.jpg";?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KurirKuy Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=$img?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$user->name?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php
            if($user->role=='admin'||$user->role=='pimpinan'){
          ?>
            <li class="nav-header">PENGIRIMAN</li>
          <li class="nav-item">
            <a href="<?=base_url('dashboard')?>" class="nav-link <?=$page=='dashboard'? "active":""?>">
              <i class="nav-icon fa fa-inbox"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('internal/order')?>" class="nav-link <?=$page=='order'? "active":""?>">
              <i class="nav-icon fa fa-inbox"></i>
              <p>
                Order Baru
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('internal/pengiriman')?>" class="nav-link <?=$page=='pengiriman'? "active":""?>">
              <i class="nav-icon fas fa-plane"></i>
              <p>
                Proses Kirim
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('internal/summary/done')?>" class="nav-link <?=$page=='summary'? "active":""?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Rekap Pengiriman
              </p>
            </a>
          </li>  
          <li class="nav-header">MASTER</li>
          <li class="nav-item">
            <a href="<?=base_url('internal/payment')?>" class="nav-link <?=$page=='payment'? "active":""?>">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                Payment
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('internal/jenis_barang')?>" class="nav-link <?=$page=='jenis_barang'? "active":""?>">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Jenis Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('internal/blog')?>" class="nav-link <?=$page=='blog'? "active":""?>">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Blog
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('internal/user')?>" class="nav-link <?=$page=='user'? "active":""?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('internal/leaderboard')?>" class="nav-link <?=$page=='leaderboard'? "active":""?>">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Leaderboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('internal/administrator')?>" class="nav-link <?=$page=='administrator'? "active":""?>">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Administrator
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('internal/profil')?>" class="nav-link <?=$page=='profil'? "active":""?>">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Profil Website
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('internal/profilakun')?>" class="nav-link <?=$page=='profilakun'? "active":""?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil Akun
              </p>
            </a>
          </li>
          <?php }else if($user->role=='kurir'){ ?>

            <li class="nav-item">
            <a href="<?=base_url('internal/pengiriman')?>" class="nav-link <?=$page=='pengiriman'? "active":""?>">
              <i class="nav-icon fas fa-plane"></i>
              <p>
                Pengiriman
              </p>
            </a>
          </li>

            <?php } ?>
          <li class="nav-item">
            <a href="<?=base_url('internal/logout')?>" class="nav-link bg-warning">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          <!-- <li class="nav-header">EXAMPLES</li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>