
<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <br>
      <div class="modal-body">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="container">
							<div class="col-lg-12">
								<form id="login-form" action="<?=base_url('login')?>" method="post" role="form" style="display: block;">
									<div class="mt-10">
									<input type="text" id="mail_login" name="username" placeholder="Email address"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"
										class="single-input">
									<span id="required_mail"></span>
								</div>
                                 <div class="mt-10">
									<input type="password" name="password" placeholder="Password"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
										class="single-input">
								</div>
								<div class="text-right">Lupa password? <button class="btn-normal btn" onclick="forgotpass()" type="button">Klik</button></div>
								
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="" tabindex="4" class="form-control btn btn-info" value="Log In">
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="<?=base_url('register')?>" method="post" role="form" style="display: none;">
                                 <div class="mt-10">
									<input type="text" name="nama" placeholder="Nama lengkap"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama lengkap'" required
										class="single-input">
								</div>
								<div class="mt-10">
									<!-- <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div> -->
									<div class="form-select" id="default-select" required>
										<select name='jkel'>
										<option value="">Jenis Kelamin</option>
										<option value="pria">Pria</option>
										<option value="wanita">Wanita</option>
										</select>
									</div>
								</div>
                                 <div class="mt-10">
									<input type="email" name="email" placeholder="Email address"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required
										class="single-input">
								</div>
                                 <div class="mt-10">
									<input type="text" name="alamat" placeholder="Alamat lengkap"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat lengkap'" required
										class="single-input">
								</div>
                                 <div class="mt-10">
									<input type="text" name="hp" placeholder="Nomor HP"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor HP'" required
										class="single-input">
								</div>
                                 <div class="mt-10">
									<input type="password" name="password" placeholder="Password"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
										class="single-input">
								</div>
                                <br>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" id="register-submit" tabindex="4" class="form-control btn btn-success" value="Daftar">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
			</div>
      </div>
    </div>
  </div>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
	// $(document).ready(function () {
		function forgotpass(){
			var mail=$("#mail_login").val();
			if(mail!=''){
				$.ajax({
                type : "POST",
                url  : "<?php echo base_url('cek_akun')?>",
                data : {mail:mail},
                success: function(data){
                    $("#mail_login").val("");
					if($.trim(data) =='kosong'){
						$("#required_mail").html("Wajib isi email untuk lupa password");
					}else if($.trim(data) =='nf'){
						$("#required_mail").html("Email "+mail+" belum terdaftar sebagai pengguna");
					}else if($.trim(data) =='sukses'){
						$("#required_mail").html("Link ganti password telah kami kirim ke email : "+mail+" silahkan cek inbox / spam");
					}
                }
            });
			}else{
				$("#required_mail").html("Wajib isi email untuk lupa password");
			}
		}
	// });
</script>
