  <!-- Header Start -->
  <?php
    $profil=$this->gmodel->getDataRow('company_profile',array('id'=>'1'));
  ?>
  <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>     
                                    <li>Phone : <?=$profil['hp']?></li>
                                    <li>Email: <?=$profil['email']?></li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">    
                                    <li><a href="<?=$profil['twitter']?>"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?=$profil['fb']?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?=$profil['ig']?>"><i class="fab fa-instagram"></i></a></li>
                                    <li> <a href="<?=$profil['website']?>"><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky bg-light">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <?php
                            $user=$this->is_login->current_user();
                        ?>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img height="50px" src="<?=base_url()?>assets/uploads/website/<?=$profil['logo_headerfooter']?>" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block" style="color:red;">
                                    <nav> 
                                        <ul id="navigation">                                                                                          
                                            <li><a href="<?=base_url()?>">Home</a></li>
                                            
		                                    <?php 
                                            if (!empty($user)) { ?>
                                            <li><a href="<?=base_url('order')?>">Order</a></li>
                                            <?php } ?>
                                            <li><a href="<?=base_url('about')?>">About</a></li>
                                            <li><a href="<?=base_url('blog')?>">Blog</a></li>
                                            <?php
                                        if(!empty($user)){
                                            
                                            $nama = explode(" ", $user->nama);
                                            ?>   
                                            <li><a href="<?=base_url()?>"><?=$nama[0]?></a>
                                                <ul class="submenu text-center">
                                                    <div class="p-2">
                                                    <div class="row p-2 alert-dark" style="margin-top:-1vh;">
                                                        <div class="col-3">
                                                        <img class="avatar vertical-center" src="<?=base_url()?>assets/uploads/avatar/<?=$user->avatar?>">
                                                        </div>
                                                        <div class="col-9 vertical-center">
                                                        <h5><?=$user->nama?><a style="padding:0 !important;" data-target="#edit-profil" onClick="$('#editpass').val('');" href="#" data-toggle="modal"><i class="fa fa-edit" aria-hidden="true">Edit Profil</i></a></h5>
                                                        </div>
                                                    </div>
                                                    </div><br>
                                                    <h5>Level</h5>
                                                    <div>
                                                    <div class="star" style="margin: auto !important;"><?=floor($user->level)?></div>
                                                    </div>
                                                    <br>
                                                   <div class="row">
                                                    <div class="col-4">
                                                    <h5>Poin</h5>
                                                        <div class="alert alert-info">
                                                        <h5><?=$user->poin?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                    <h5>Pesanan</h5>
                                                        <div class="alert alert-info">
                                                        <h5><?php
                                                        echo count($this->gmodel->getData('pemesanan',array('id_client'=>$user->id_cl,'status!='=>'cancel')));
                                                        ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                    <h5>Batal</h5>
                                                        <div class="alert alert-info">
                                                        <h5><?php
                                                        echo count($this->gmodel->getData('pemesanan',array('id_client'=>$user->id_cl,'status'=>'cancel')));
                                                        ?></h5>
                                                        </div>
                                                    </div>
                                                   </div>
                                                   <div class="text-right">
                                                   <button onclick="location.href='<?=base_url('logout')?>'" class="btn-small btn-danger"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</button>
                                                    </div>
                                                </ul>
                                            </li>
                                            <?php
                                        }else{
                                    ?>
                                            <li><a href="contact.html" data-target="#loginmodal" data-toggle="modal" style="color:white !important;background-color:black">Login</a></li>
                                      <?php
                                        }
                                      ?>
                                        </ul>
                                    </nav>
                                </div>
                               
                            </div>
                        </div> 
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>