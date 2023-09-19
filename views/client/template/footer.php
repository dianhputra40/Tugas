<!--? Footer Start-->
<?php
    $profil=$this->gmodel->getDataRow('company_profile',array('id'=>'1'));
  ?>
<div class="footer-area kurirkuy text-light">
        <div class="container-fluid">
            
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                    <div class="col-md-12">
                      
                         <div class="row">
                            <div class="col-md-6 text-center" style="font-size:5vh; color:black;">
                            <a href="index.html"><img class="img-fluid" src="<?=base_url()?>assets/uploads/website/<?=$profil['logo_headerfooter']?>" alt=""></a>
                            </div>
                            <div class="col-md-6 text-center" style="font-size:5vh; color:black;">
                            <!-- <div class="footer-social "> -->
                                <a href="<?=$profil['fb']?>"><i class="fab fa-facebook-f white-color"></i></a>
                                <a href="<?=$profil['twitter']?>"><i class="fab fa-twitter white-color"></i></a>
                                <a href="<?=$profil['ig']?>"><i class="fab fa-instagram white-color"></i></a>
                                <a href="<?=$profil['website']?>"><i class="fas fa-globe white-color"></i></a>
                            <!-- </div> -->
                            </div>
                            </div>
                </div>
                
                <div class="col-lg-12 text-center">
  Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved | <?=$profil['nama']?></a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>  
            </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="notif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body text-center">
        <br>
        <?php
        if(!empty($this->session->flashdata('notifsukses'))){ ?>
        <img class="mb-4 mt-1" width="30%" src="<?=base_url('assets/client/img/logo/sukses.png')?>">
        <H2>Berhasil !</H2>
        <div class="alert alert-success"><?=$this->session->flashdata('notifsukses')?></div>
        <?php }else if(!empty($this->session->flashdata('notifgagal'))){ ?>
        <img class="mb-4 mt-1" width="30%" src="<?=base_url('assets/client/img/logo/gagal.png')?>">
        <H2>Gagal !</H2>
        <div class="alert alert-success"><?=$this->session->flashdata('notifgagal')?></div>
        <?php } ?>
      </div>
      <div class="text-center">
        <button type="button" class="btn btn-secondary item-center" data-dismiss="modal">Tutup</button>
      </div>
      <br>
    </div>
  </div>
</div>


<div class="modal fade" id="edit-profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body text-center">
      <div class="col-lg-12">
						<?php $user=$this->is_login->current_user(); ?>
								<form id="updateprofil-form" action="<?=base_url('main/submit_editprofil')?>" method="post" enctype="multipart/form-data">
                <input name="id_cl" value="<?=!empty($user)?$user->id_cl:""?>" type="hidden">
                                 <div class="mt-10" style="text-align:left;">
                                  <label>Nama Lengkap :</label>
									<input type="text" name="nama" placeholder="Nama lengkap"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama lengkap'" required
										class="single-input" value="<?=!empty($user)?$user->nama:""?>">
								</div>
                <div class="mt-10" style="text-align:left;">
                  <label>Foto : (optional)</label><br>
              <input type="file" name="avatar">
            </div>
								<div class="mt-10" style="text-align:left;">
                  <label>Jenis Kelamin :</label>
									<!-- <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div> -->
									<div class="form-select" id="default-select" required>
										<select name='jkel'>
										<option value="">Jenis Kelamin</option>
										<option value="pria" <?=!empty($user)&&$user->jkel=='pria'?"selected":"";?>>Pria</option>
										<option value="wanita" <?=!empty($user)&&$user->jkel=='wanita'?"selected":"";?>>Wanita</option>
										</select>
									</div>
								</div>
                                 <div class="mt-10" style="text-align:left;">
                                  <label>Email :</label>
									<input type="email" name="email" placeholder="Email address"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required
										class="single-input" value="<?=!empty($user)?$user->email:""?>">
								</div>
                                 <div class="mt-10" style="text-align:left;">
                                  <label>Alamat lengkap :</label>
									<input type="text" name="alamat" placeholder="Alamat lengkap"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat lengkap'" required
										class="single-input" value="<?=!empty($user)?$user->alamat:""?>">
								</div>
                                 <div class="mt-10" style="text-align:left;">
                                  <label>Nomor HP :</label>
									<input type="text" name="hp" placeholder="Nomor HP"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor HP'" required
										class="single-input" value="<?=!empty($user)?$user->hp:""?>">
								</div>
                                 <div class="mt-10" style="text-align:left;">
                                  <label>Password :</label>
									<input type="password" id="editpass" name="password" placeholder="Password"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kosongi bila tidak ingin mengubah'" value=''
										class="single-input" autocomplete="off">
								</div>
							</div>  
              <div class="mt-10" style="text-align:center;">
        <button type="submit" class="btn btn-secondary item-center" onClick="updatingprofil()">Update</button>
        </div>
        </form>
      </div>
      <div class="text-center">
      </div>
      <br>
    </div>
  </div>
</div>




<div class="modal fade" id="modalstartpoint" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
      <?php
			if(!empty($this->session->userdata('editsubmit1'))){
				$temp=$this->session->userdata('editsubmit1');
			}
			?>
      <form id="isialamatpenjemputan">
        <h3>Alamat Penjemputan</h3>
      <div class="mt-10">
        <input type="text" name="startaddress" id="modalstartaddress" placeholder="Alamat lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat lengkap'" required="" class="single-input" value="<?=isset($temp)? $temp['startaddress']:""?>">
      </div>
      <div class="mt-10">
        <input type="text" name="startrt" id="modalstartrt" placeholder="RT" onfocus="this.placeholder = ''" onblur="this.placeholder = 'RT'" required="" class="single-input" value="<?=isset($temp)? $temp['startrt']:""?>"></div>
      <div class="mt-10">
        <input type="text" name="startrw" id="modalstartrw" placeholder="RW" onfocus="this.placeholder = ''" onblur="this.placeholder = 'RW'" required="" class="single-input" value="<?=isset($temp)? $temp['startrw']:""?>"></div>
      <div class="mt-10">
        <input type="text" name="startcatatan" id="modalstartcatatan" placeholder="Catatan (optional)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Catatan (optional)'" required="" class="single-input" value="<?=isset($temp)? $temp['startcatatan']:""?>"></div>
      </form>
      </div>
      <div class="text-center">
        <button type="submit" id="btn_set_start" class="btn btn-secondary item-center" data-dismiss="modal">Simpan</button>
      </div>
      <br>
    </div>
  </div>
</div>




<div class="modal fade" id="modalendpoint" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
      <form id="isialamattujuan">
      <?php
			if(!empty($this->session->userdata('editsubmit1'))){
				$temp=$this->session->userdata('editsubmit1');
			}else if(!empty($this->session->userdata('submit1'))){
				$temp=$this->session->userdata('submit1');
			}
			?>
        <h3>Alamat Tujuan</h3>
      <div class="mt-10">
        <input type="text" name="endaddress" id="modalendaddress" placeholder="Alamat lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat lengkap'" required="" class="single-input" value="<?=isset($temp)? $temp['endaddress']:""?>">
      </div>
      <div class="mt-10">
        <input type="text" name="endrt" id="modalendrt" placeholder="RT" onfocus="this.placeholder = ''" onblur="this.placeholder = 'RT'" required="" class="single-input" value="<?=isset($temp)? $temp['endrt']:""?>"></div>
      <div class="mt-10">
        <input type="text" name="endrw" id="modalendrw" placeholder="RW" onfocus="this.placeholder = ''" onblur="this.placeholder = 'RW'" required="" class="single-input" value="<?=isset($temp)? $temp['endrw']:""?>"></div>
      <div class="mt-10">
        <input type="text" name="endcatatan" id="modalendcatatan" placeholder="Catatan (optional)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Catatan (optional)'" required="" class="single-input" value="<?=isset($temp)? $temp['endcatatan']:""?>"></div>
</form>
      </div>
      <div class="text-center">
        <button type="submit" id="btn_set_end"  class="btn btn-secondary item-center" data-dismiss="modal">Simpan</button>
      </div>
      <br>
    </div>
  </div>
</div>


<div class="modal fade" id="modalpengiriman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       <?php
			if(!empty($this->session->userdata('editsubmit1'))){
				$temp=$this->session->userdata('editsubmit1');
			}else if(!empty($this->session->userdata('submit1'))){
				$temp=$this->session->userdata('submit1');
			}
			?>
      <div class="modal-body text-center">
      <!-- <form id="formendaddress"> -->
        <h3>Pilih Pickup</h3>
      <div id="accordion">
  <div class="card mb-2">
    <div class="card-header" id="headingOne" style="background-color:gold;">
      <h5 class="mb-0 text-left">
        <a href="#" class="link-dark" onclick='document.getElementById("jenis_pengiriman").value = "instant";' data-toggle="collapse" data-target="#collapseOne" aria-expanded="<?=(isset($temp)&&$temp['jns_pengiriman']=='instant')?"true":"false"?>" aria-controls="collapseOne">
          <div class="row">
          <div class="col-3 text-right">
            <img width="100%" src="<?=base_url('assets/client/img/logo/instant.png')?>">
          </div>
          <div class="col-9 vertical-center">
            <h2>Pengiriman Cepat</h2>
          </div>
        </div>
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse<?=(isset($temp)&&$temp['jns_pengiriman']=='instant')?" show":""?>" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
          <small>Kurir akan segera menjemput dan mengirim barang anda</small>
        <div class="mt-10">
          <form id="">
          <input type="hidden" name="jenis_pengiriman" id="jenis_pengiriman" value="instant">
        <input type="text" id="datetimeinstant" name="datetime_pickup" placeholder="Pilih Tanggal & Jam Penjemputan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pilih Tanggal & Jam Penjemputan'" class="single-input"
        value="<?=(isset($temp)&&$temp['jns_pengiriman']=='instant')?$temp['datetime_pickup']:""?>"/>
        </form>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-2">
    <div class="card-header" id="headingTwo" style="background-color:rgb(150, 248, 139);">
      <h5 class="mb-0 text-left">
        <a href="#" onclick='document.getElementById("jenis_pengiriman").value = "reguler";' class="link-dark" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="<?=(isset($temp)&&$temp['jns_pengiriman']=='reguler')?"true":"false"?>" aria-controls="collapseTwo">
          <div class="row">
          <div class="col-3 text-right">
            <img width="100%" src="<?=base_url('assets/client/img/logo/reguler.png')?>">
          </div>
          <div class="col-9 vertical-center">
            <h2>Pengiriman Reguler</h2>
          </div>
        </div>
        </a>
      </h5>
    </div>

    <div id="collapseTwo" class="collapse<?=(isset($temp)&&$temp['jns_pengiriman']=='reguler')?" show":""?>" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
          <small>Estimasi sampai maks. 2 hari</small>
        <div class="mt-10">
          <form id="">
          <input type="hidden" name="jenis_pengiriman" id="jenis_pengiriman" value="reguler">
        <input type="text" id="datetimereguler" name="datetime_pickup" placeholder="Pilih Tanggal Penjemputan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pilih Tanggal Penjemputan'" class="single-input"
        value="<?=(isset($temp)&&$temp['jns_pengiriman']=='reguler')?$temp['datetime_pickup']:""?>"/>
      </form>
        </div>
      </div>
    </div>
  </div>
</div>
      
<!-- </form> -->
      </div>
      <div class="text-center">
        <button type="submit" id="btn_set_pengiriman" onClick="" class="btn btn-secondary item-center" data-dismiss="modal">Simpan</button>
      </div>
      <br>
    </div>
  </div>
</div>
    <!-- Footer End-->