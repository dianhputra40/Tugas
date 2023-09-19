<?php
if(!empty($this->session->userdata('editsubmit1'))){
	$temp=$this->session->userdata('editsubmit1');
}
?>
<div class="fill"></div>
<section class="section-padding" style="background-color: red">
	<div class="pemesanan">
		<div class="row">
			<div class="col-md-6">
				<div class="alert alert-dark p-4">
					<div class="row">
						<div class="col-5">
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
										echo substr_replace($temp['startaddress'], "..", 25);
									}
								 }else{
									echo 'Masukkan alamat asal';
								 } ?></a
							>
						</div>
						<div class="col-2">
							<img
								src="<?=base_url('assets/client/img/elements/viceversa.png')?>"
								width="20"
							/>
						</div>

						<div class="col-5">
							<img
								src="<?=base_url('assets/client/img/elements/icon_loc.png')?>"
								width="20"
							/>
							<a
								class="text-dark"
								id="link-endadress"
								href="#modalendtpoint"
								data-target="#modalendpoint"
								data-toggle="modal"
								><?php
								if(isset($temp)){
									if($temp['endaddress']==''){
										echo "Masukkan alamat tujuan";
									}else{
										echo substr_replace($temp['endaddress'], "..", 25);
									}
								 }else{
									echo 'Masukkan alamat tujuan';
								 } ?></a
							>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="alert alert-dark">
					<a
						href=""
						class="text-dark"
						href="#modalpengiriman"
						data-target="#modalpengiriman"
						data-toggle="modal"
					>
						<div class="row">
							<div class="col-4 text-right">
								<img
									src="<?=base_url('assets/client/img/elements/packing.png')?>"
									width="40"
								/>
							</div>
							<div class="col-8">
								<b id="label_jnspengiriman">Jenis Pengiriman</b><br />
								<SPAN id="label_tanggal">Tanggal / waktu pengiriman<SPAN>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-2">
				<button
					id="buttonpemesanan1"
					class="btn-small"
					onclick='window.location = "http://www.google.com"'
					style="height: 75px !important"
				>
					Tambah Detail Pengiriman
				</button>
			</div>
			<form
				id="formpemesanan1"
				method="post"
				action="<?=base_url('order/submit1')?>"
			>
			
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
			</form>
		</div>
	</div>

	<div class="container-white mt-4 pb-5">
		<div class="col-12">
			<h3>Riwayat Pengiriman</h3>
			<div class="table-responsive">
				<table class="table is-striped" id="example">
					<thead>
						<th>No</th>
						<th>Pengirim</th>
						<th>Tujuan</th>
						<th>Barang</th>
						<th>Pengiriman</th>
						<th data-priority="1">Pembayaran</th>
						<th data-priority="1">Status</th>
					</thead>
					<tbody>
						<?php
						$no=1;
							foreach($order as $dt){
							?>
							<tr>
								<td><?=$no++?></td>
								<td>
									<b><?=$dt['pengirim']?></b><br>
									<?=$dt['startaddress']?>
								</td>
								<td>
									<b><?=$dt['penerima']?></b><br>
									<?=$dt['endaddress']?>
								</td>
								<td><b><?=ucfirst($this->gmodel->getDataRow('jenis_barang',array('id'=>$dt['jns_barang']))['nama'])?></b> (<?=$dt['berat_barang']?>gr)<br>
								<?=$dt['deskripsi_barang']?></td>
								<td><b><?=ucfirst($dt['jns_pengiriman'])?></b> (<?=ucfirst($dt['armada'])?>)<br>
								<?=$dt['jns_pengiriman']=='instant'?date('d/m/Y - H:i',strtotime($dt['datetime_pickup'])):date('d/m/Y',strtotime($dt['datetime_pickup']))?></td>
								<td>
								<?=strlen($dt['biaya'])<1?"Menunggu Estimasi Biaya":"Rp. ".number_format($dt['biaya'], 0, '.', '.');?>
								<?=$dt['is_lunas']=='yes'? "<b style='color:green;'>(Lunas)</b>":"";?>
								<br>
								Metode Pembayaran : <br> 
								<?php
								$payment=$this->gmodel->getDataRow('payment_list',array('id_payment'=>$dt['jns_pembayaran']));
								if($payment['id_payment']=="99"||$payment['serial_number']=="COD"){
									echo $payment['keterangan']." (".$payment['serial_number'].")";
								}else{
									echo $payment['keterangan']." (".$payment['serial_number'].") "."A/n ".$payment['alias'];
								}
								?>
								</td>
								<td><?php
								if($dt['status']=='wait'){
									echo '<b><span class="">Menunggu Konfirmasi</span></b>';
									?><br>
									<a href="<?=base_url('order/cancelOrder/'.$dt['id_order'])?>" class="btn btn-normal" onclick="return confirm('Anda yakin ingin membatalkan pengiriman <?=$dt['penerima'].'-'.$dt['endaddress']?>')"><i class="fa fa-times" aria-hidden="true"></i> Batal</a>
									<?php
								}else if($dt['status']=='confirmed'){

									if($dt['is_lunas']=='no'){
										echo '<b><span class="">Terkonfirmasi</span></b>';
									}else if($dt['is_lunas']=='checking'){
										echo '<b><span class="">Admin Checking..</span></b>';
									}

									if($payment['id_payment']!="99"||$payment['serial_number']!="COD"){
										if($dt['is_lunas']=='no'){
										echo "<br>Mohon unggah bukti pembayaran (klik) : ";
									?> 
									<form method="post" id="formfile" action="<?= base_url() . 'unggah_struk' ?>" enctype="multipart/form-data">
									<a class="btn btn-normal" style="color:white; padding:15px;" onclick="document.getElementById('bukti_pembayaran').click(); return false;">Unggah</a>
									<input type="file" style="display:none;" name="bukti_pembayaran" id="bukti_pembayaran" onchange='document.getElementById("formfile").submit();' />
									<input type="hidden" name="id_order" value="<?=$dt['id_order']?>">
									</form>
									<?php
										}else{
											echo "<br><font style='color:green;'>Sudah dibayar (klik) : </font>";
											?> 
									<a class="btn btn-normal" target="_blank" style="color:white; padding:15px;" href="<?=base_url('assets/uploads/bukti_pembayaran/'.$dt['bukti_pembayaran'])?>">Lihat</a>
									<?php
										}
									}

								}else if($dt['status']=='done'){
									echo '<b><span class="">Selesai</span></b>';
								}else if($dt['status']=='cancel'){
									echo '<b><span class="">Dibatalkan</span></b>';
								}else if($dt['status']=='send'){
									echo '<b><span class="">Proses Mengirim ke tujuan</span></b>';
								}else if($dt['status']=='pickup'){
									echo '<b><span class="">Proses Penjemputan barang</span></b>';
								}
								?></td>
							</tr>
							<?php
							}
						?>
						
					</tbody>
				</table>

				
			
			</div>
		</div>
	</div>
</section>
