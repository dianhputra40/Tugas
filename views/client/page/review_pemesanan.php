<div class="fill"></div>
<section class="section-padding" style="background-color: red">

<div class="row">
	<div class="col-md-7 container-bglight">
		<div class="col-12">

			<h3>Detail Pengiriman</h3>
			<?php
			$temp=$this->session->userdata('submit1');
			// echo print_r($temp);
			// echo "<br><br>";
			?>
			
			
			<form method="post" action="<?=base_url('order/')?>finalsubmit" id="formfinalsubmit" enctype="multipart/form-data">

			<span>
			<img
								src="<?=base_url('assets/client/img/elements/icon_start.png')?>"
								width="20"
							/>
			<a
				class="text-dark"
				id="link-startadress"
				href="#modalstartpoint"
				data-target="#modalstartpoint"
				data-toggle="modal"
				><?php
				if(isset($temp)){
					if($temp['startaddress']==''){
						echo "Masukkan alamat asal";
					}else{
						echo $temp['startaddress'];
					}
					}else{
					echo 'Masukkan alamat asal';
					} ?>
			</a>
			<div class="row mb-3">


				<div class="col-md-6">
					<input type="text" name="pengirim" placeholder="Nama Pengirim" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Pengirim'" required="" class="single-input" value="<?=isset($temp['pengirim'])? $temp['pengirim']:""?>">
				</div>
				<div class="col-md-6">
					<input type="text" name="nohp_pengirim" placeholder="No.HP Pengirim" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No.HP Pengirim'" required="" class="single-input" value="<?=isset($temp['nohp_pengirim'])? $temp['nohp_pengirim']:""?>">
				</div>
			</div>
		</span>
				<img
									src="<?=base_url('assets/client/img/elements/icon_loc.png')?>"
									width="20"
								/>
				<a
				class="text-dark"
				id="link-endadress"
				href="#modalendpoint"
				data-target="#modalendpoint"
				data-toggle="modal"
				><?php
				if(isset($temp)){
					if($temp['endaddress']==''){
						echo "Masukkan alamat tujuan";
					}else{
						echo $temp['endaddress'];
					}
					}else{
					echo 'Masukkan alamat tujuan';
					} ?></a>
				<div class="row mb-3">
					<div class="col-md-6">
						<input type="text" name="penerima" placeholder="Nama Penerima" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Penerima'" required="" class="single-input" value="<?=isset($temp['penerima'])? $temp['penerima']:""?>">
					</div>
					<div class="col-md-6">
						<input type="text" name="nohp_penerima" placeholder="No.HP Penerima" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No.HP Penerima'" required="" class="single-input" value="<?=isset($temp['nohp_penerima'])? $temp['nohp_penerima']:""?>">
					</div>
				</div>
				<span>Detail Item</span>
					<div class="row mb-3">
						<div class="col-md-4">
							<input type="text" name="berat_barang" placeholder="Berat Barang (Gram)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Berat Barang (Gram)'" required="" class="single-input" value="<?=isset($temp['berat_barang'])? $temp['berat_barang']:""?>">
						</div>
						<div class="col-md-4">
							<div class="form-select" id="default-select">
								<select name='jns_barang' required>
								<option value="">Jenis Barang</option>
								<?php
									foreach($jenis as $dt){
										?>
										<option value="<?=$dt['id']?>"
										<?=isset($temp['jns_barang'])&&$temp['jns_barang']==$dt['id']? "selected":""?>
										><?=ucwords($dt['nama'])?></option>
										<?php
									}
								?>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<input type="text" name="deskripsi_barang" placeholder="Deskripsi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Deskripsi'" required="" class="single-input" value="<?=isset($temp['deskripsi_barang'])? $temp['deskripsi_barang']:""?>">
						</div>
					</div>
					<span>Unggah Foto Barang</span><br>
				<input type="file" name="foto_barang" class="mb-3">	
				<br>	
				
				<span class="mb-5">Jenis Pengiriman</span><br>
				<div class="row">
				<div class="col-md-4">
				<button 
						href=""
						class="text-dark btn-normal"
						href="#modalpengiriman"
						data-target="#modalpengiriman"
						data-toggle="modal"
						onclick="return false;"
					>
						<div class="row">
							<div class="col-2 text-right">
								<img
									src="<?=base_url('assets/client/img/elements/packing.png')?>"
									width="40"
								/>
							</div>
							<div class="col-10 text-left">
								<b id="label_jnspengiriman">PENGIRIMAN <?=strtoupper($temp['jns_pengiriman'])?></b><br />
								<?php 
								if($temp['jns_pengiriman']=='instant'){ ?>
								<SPAN id="label_tanggal"><?=date('d/m/Y - H:i',strtotime($temp['datetime_pickup']))?></SPAN>
								<?php }else{ ?>
									<SPAN id="label_tanggal"><?=date('d/m/Y',strtotime($temp['datetime_pickup']))?></SPAN>
									<?php } ?>
							</div>
						</div>
				</button>
				</div>
				<div class="col-md-5">
						<select name='armada'>
						<option value="bike">🏍️ Sepeda Motor</font></option>
						<option value="car">🚗 Mobil</option>
						</select>
				</div>
			</div>
			<br>
			<span class="mb-5">Pembayaran</span>

				<div class="row">
				<div class="col-md-5">
				<div class="form-select" id="default-select">
					<select name='jns_pembayaran' required="required">
					<option value="">Jenis Pembayaran</option>
					<?php 
					foreach($payment as $dtp){ ?>
							<option value="<?=$dtp['id_payment']?>"
							<?=isset($temp['jns_pembayaran'])&&$temp['jns_pembayaran']==$dtp['id_payment']? "selected":""?>
							><?=ucfirst($dtp['jenis'])?> (<?=$dtp['keterangan']?>) - <?=$dtp['serial_number']?></option>
					<?php } ?>
						</select>
				</div>
				</div>
				</div>
				<hr>
			<div class="text-center">
				
			<input type="hidden" name="startaddress" id="formstartaddress" 
				value="<?=isset($temp)? $temp['startaddress']:""?>" />
				<input type="hidden" name="startrt" id="formstartrt" 
				value="<?=isset($temp)? $temp['startrt']:""?>"  />
				<input type="hidden" name="startrw" id="formstartrw"  
				value="<?=isset($temp)? $temp['startrw']:""?>"  />
				<input type="hidden" name="startcatatan" id="formstartcatatan"  
				value="<?=isset($temp)? $temp['startcatatan']:""?>" />

				<input type="hidden" name="endaddress" id="formendaddress" 
				value="<?=isset($temp)? $temp['endaddress']:""?>"  />
				<input type="hidden" name="endrt" id="formendrt" 
				value="<?=isset($temp)? $temp['endrt']:""?>"  />
				<input type="hidden" name="endrw" id="formendrw" 
				value="<?=isset($temp)? $temp['endrw']:""?>" />
				<input type="hidden" name="endcatatan" id="formendcatatan" 
				value="<?=isset($temp)? $temp['endcatatan']:""?>" />

				<input type="hidden" name="jns_pengiriman" id="formjenispengiriman"  
				value="<?=isset($temp)? $temp['jns_pengiriman']:""?>" />
				<input
					type="hidden"
					name="datetime_pickup"
					id="formdatetimepenjemputan"  
				value="<?=isset($temp)? $temp['datetime_pickup']:""?>" 
				/>


			<button type="submit" class="btn btn-success">Selesai Order</button>
		</div>
		</form>

		</div>
	</div>


	</div>
</section>
