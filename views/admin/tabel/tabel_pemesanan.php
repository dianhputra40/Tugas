
<span id="notif"></span>
<?php
$usr=$this->auth->current_user();
?>
<table id="tesaja" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Tg.Order</th>
			<th>Nama</th>
			<th data-priority="1">Tujuan</th>
			<th>Barang</th>
			<th>Pengiriman</th>
			<th>Status</th>
			<th data-priority="1" <?=$usr->role=='pimpinan'? "class='none'":""?>>Action</th>
		</tr>
	</thead>
	<tbody id="show_data"></tbody>
</table>

  <!-- MODAL EDIT -->
  <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 id="namaedit"></h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

				<input id="idorder" name="id_order" type="hidden">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Biaya</label>
                        <div class="col-xs-12">
						<div class="input-group">
                    <input type="text" class="form-control" id="biaya" name="biaya" oninput="this.value = Math.abs(this.value)" data-inputmask-inputformat="999.999.999.999" data-mask>
                  </div>
                        </div>
                    </div>
					<input type="hidden" name="jns_pembayaran" id="jns_pembayaran">

					
                    <div class="form-group">
                        <label class="control-label col-xs-3">Status Pelunasan</label>
                        <div class="col-xs-12">
						<div class="input-group">
							<select name="is_lunas" class="form-control" id="is_lunas" onchange="gantiStatus()">
								<option value="no">Belum Dibayar</option>
								<option value="checking">Pengecekan</option>
								<option value="yes">Sudah Lunas</option>
							</select>
                  		</div>
                        </div>
                    </div>

					
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status Pengiriman</label>
                        <div class="col-xs-12">
						<div class="input-group">
							<select name="status" class="form-control" id="status" required>
								<option value="wait">Menunggu Konfirmasi</option>
								<option value="confirmed">Konfirmasi</option>
								<option value="pickup">Penjemputan Barang</option>
								<option value="send">Dikirim</option>
								<option value="done">Selesai Dikirim</option>
								<option value="cancel" style="color:red"><b>Batal</b></option>
							</select>
                  		</div>
                        </div>
                    </div>

                   
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kurir</label>
                        <div class="col-xs-12">
						<div class="input-group">
							<select name="id_kurir" class="form-control" id="id_kurir">
								<?php
									$kurir=$this->gmodel->getData('user',array('role'=>'kurir','status'=>'1'));
									foreach($kurir as $dtk){
										echo "<option value='".$dtk['id_user']."'>".$dtk['name']."</option>";
									}
								?>
							</select>
                  		</div>
                        </div>
                    </div>

                </div>


                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL EDIT-->

		        <!--MODAL HAPUS-->
			<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                       <h3>Konfirmasi</h3>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                          
                            <input type="hidden" name="id_order" id="id_order" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus  <b><span id="namadelete"></b> ?</p></div>
                          
                                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->

			        <!--MODAL preview image-->
					<div class="modal fade" id="ModalImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                       <h3>Preview</h3>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                          
                            <img src="" class="img_fluid" id="gambarpreview">
                          
                                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
	
				
	function gantiStatus(){
		var pembayaran=$('select[name=is_lunas] option').filter(':selected').val();
		var jns=$('#jns_pembayaran').val();
		if(pembayaran=='yes'){
			if(jns==99){
				$("#status").val("done").change();
			}else{
				$("#status").val("pickup").change();
			}
		}else{
				$("#status").val("confirmed").change();
		}
	}


	$(document).ready(function () {

	$('#biaya').on("input", function() {

	$('#status').attr("disabled", false); 
	$('#is_lunas').attr("disabled", false); 
	$('#id_kurir').attr("disabled", false); 
	
	var biaya = this.value;
	var jns=$('#jns_pembayaran').val();
	if(jns==99){
		if(biaya>0){
			$("#status").val("pickup").change();
			$('#is_lunas option[value="checking"]').hide();
			$('#is_lunas option[value="yes"]').hide();
			$('#status option[value="wait"]').hide();
			$('#status option[value="confirmed"]').hide();
			$('#status option[value="send"]').hide();
			$('#status option[value="done"]').hide();
		}else{
			$("#status").val("wait").change();
			$('#status option[value="wait"]').hide();
			$('#status option[value="confirmed"]').hide();
			$('#status option[value="send"]').hide();
			$('#status option[value="done"]').hide();
		}
	}else{
		if(biaya>0){
			$("#status").val("confirmed").change();
			$('#is_lunas option[value="checking"]').hide();
			$('#is_lunas option[value="yes"]').hide();
			$('#status option[value="wait"]').hide();
			$('#status option[value="pickup"]').hide();
			$('#status option[value="send"]').hide();
			$('#status option[value="done"]').hide();
		}else{
			$("#status").val("wait").change();
		}
	}
	});

		var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
		var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
		const rupiah = (number)=>{
			return new Intl.NumberFormat("id-ID", {
			style: "currency",
			currency: "IDR"
			}).format(number).replace(/(\.|,)00$/g, '');
		}

		tampil_data();
		$("#biaya").inputmask({ 
			alias : "currency", 
			prefix: "Rp ",
			groupSeparator: ".",
			digits: 0,
			min: 0,
        	autoUnmask: true,
		});

		// Inputmask.extendAliases({
		// pesos: {
		// 			prefix: "₱ ",
		// 			groupSeparator: ".",
		// 			alias: "numeric",
		// 			placeholder: "0",
		// 			autoGroup: true,
		// 			digits: 2,
		// 			digitsOptional: false,
		// 			clearMaskOnLostFocus: false
		// 		}
		// });

		function tampil_data() {
			if ($.fn.DataTable.isDataTable('#tesaja')) {
				$('#tesaja').DataTable().destroy();
			}

			$.ajax({
				type: "GET",
				url: "<?php echo base_url()?>internal/getPemesanan",
				async: true,
				dataType: "json",
				success: function (data) {
					var html = "";
					var i;
					

					for (i = 0; i < data.length; i++) {
						var bukti='';
						var tg=new Date(data[i].datetime_pickup);
						var tahun=" "+new Date(data[i].datetime_pickup).getFullYear();
						var tanggal=", "+tg.getDate();
						var bulan=" "+months[tg.getMonth()];
		   				var jam=', Jam '+data[i].datetime_pickup.substring(data[i].datetime_pickup.indexOf(' ') + 1).slice(0, 5);

						var tg2=new Date(data[i].datetime_order);
						var tanggal2=", "+tg2.getDate();
						var tahun2=" "+new Date(data[i].datetime_order).getFullYear();
						var bulan2=" "+months[tg2.getMonth()];

						var stat='';
						var lunas='';
						if(data[i].status=='wait'){
							stat='Menunggu konfirmasi';
						}else if(data[i].status=='confirmed'){
							stat='Telah dikonfirmasi';
						}
						
						if(data[i].is_lunas=='no'){
							lunas='Belum Lunas';
						}else if(data[i].is_lunas=='checking'){
							lunas='Pengecekan';
							bukti="<a class='btn btn-sm btn-info' href='<?=base_url('assets/uploads/bukti_pembayaran/')?>"+data[i]['bukti_pembayaran']+"' data-toggle='lightbox' data-title='Bukti pembayaran "+data[i]['pengirim']+"'>Bukti</a> ";
						}

						html +=
							"<tr>" +
							"<td>" +(i+1)+"</td>"+
							"<td>"+myDays[tg2.getDay()]+tanggal2+bulan2+tahun2+"</td>"+
							"<td>" +
							data[i].pengirim +
							" <b>("+
							data[i].nohp_pengirim +
							")</b>"+
							"<br>"+
							data[i].startaddress +
							"</td>" +
							"<td>" +
							data[i].penerima +
							" <b>("+
							data[i].nohp_penerima +
							")</b>"+
							"<br>"+
							data[i].endaddress +
							"</td>" +
							"<td style='width:30%'>" +
							"<a class='btn btn-sm btn-info' href='<?=base_url('assets/uploads/foto_barang/')?>"+data[i]['foto_barang']+"' data-toggle='lightbox' data-title='"+data[i]['nama_barang']+"'>Foto</a> "+
							data[i].nama_barang +
							" <b>("+
							data[i].berat_barang +
							"gr)</b>"+
							"<br>"+
							data[i].deskripsi_barang +
							"</td>" +
							"<td>" +
							data[i].jns_pengiriman +
							" <b>("+
							data[i].armada +
							")</b>"+
							"<br>"+
							myDays[tg.getDay()]+tanggal+bulan+jam+
							"<br><b>"+
							stat +
							"</b></td>" +
							"<td><b>("+
							lunas +
							")</b> "+
							bukti+
							"<br>"+
							rupiah(data[i].biaya) +"<br>"+
							data[i].keterangan_pembayaran +" ("+
							data[i].nomor_rekening +
							") </td>" +
							'<td style="text-align:right;">' +
							"<button class='btn btn-warning btn-sm' data-idorder='"+data[i]['id_order']+"' data-keterangan='"+data[i]['keterangan_pembayaran']+"' data-pengirim='"+data[i]['pengirim']+"'   data-jns_pembayaran='"+data[i]['jns_pembayaran']+"' data-biaya='"+data[i]['biaya']+"' data-status='"+data[i]['status']+"' data-lunas='"+data[i]['is_lunas']+"' onclick='$(\"#ModalEdit\").modal(\"show\"); $(\"#biaya\").val($(this).data(\"biaya\")); $(\"#status\").val($(this).data(\"status\")); $(\"#jns_pembayaran\").val($(this).data(\"jns_pembayaran\"));  $(\"#is_lunas\").val($(this).data(\"lunas\")); $(\"#namaedit\").text(\"Memproses \"+$(this).data(\"pengirim\")+\" - \"+$(this).data(\"keterangan\")); $(\"#idorder\").val($(this).data(\"idorder\")); checkingdata();'><i class='fas fa-edit'>Proses</i></button>" +
							" " +
							"<button class='btn btn-danger btn-sm' data-idorder='"+data[i]['id_order']+"' data-pengirim='"+data[i]['pengirim']+"' onclick='$(\"#ModalHapus\").modal(\"show\"); $(\"#namadelete\").text($(this).data(\"pengirim\")); $(\"#id_order\").val($(this).data(\"idorder\"));'><i class='fas fa-trash'>Hapus</i></button>" +
							"</td>" +
							"</tr>";

					}
					$("#show_data").html(html);

					$('#tesaja').DataTable({
						responsive:true
					});

				},
			});
		}
		
		//Update 


		$('#btn_update').on('click',function(){
            var id=$('#idorder').val();
            var status=$('#status').val();
            var biaya=$('#biaya').val();
            var id_kurir=$('#id_kurir').val();
            var is_lunas=$('#is_lunas').val();
			// alert(pengirim)
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('internal/updatepemesanan')?>",
                data : {id_order:id, biaya:biaya, id_kurir:id_kurir,status:status,is_lunas:is_lunas},
                success: function(data){
                    $('[name="status"]').val("");
                    $('[name="biaya"]').val("");
                    $('[name="id_order"]').val("");
                    $('[name="id_kurir"]').val("");
                    $('[name="is_lunas"]').val("");
                    $('#ModalEdit').modal('hide');
                    tampil_data();

					$("#notif").html('<div class="alert alert-success alert-dismissible text-black dismissable" role="alert"><b>Berhasil</b></div>');

					$(".dismissable").fadeTo(3000, 500).slideUp(500, function(){
						$(".dismissable").slideUp(500);
					});
                }
            });
            return false;
        });

		 //Hapus
		$('#btn_hapus').on('click',function(){
            var id_order=$('#id_order').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('internal/hapuspemesanan')?>",
                data : {id_order: id_order},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data();
                    }
                });
                return false;
        });

		setInterval(function () {
			tampil_data();
		}, 30000);		
	
	});

	
	function checkingdata(){
		var status=$('#status').val();
		var jns=$('#jns_pembayaran').val();
		if(status=='wait'){
			$('#status').attr("disabled", true); 
			$('#is_lunas').attr("disabled", true); 
			$('#id_kurir').attr("disabled", true); 
			$('#biaya').attr("disabled", false);
		}else if(status=='confirmed'){
			$('#biaya').attr("disabled", true);
			if(jns!=99){		
				$('#is_lunas option[value="no"]').show();
				$('#is_lunas option[value="checking"]').show();
				$('#is_lunas option[value="yes"]').show();
				$('#status option[value="pickup"]').show();
				$('#status option[value="wait"]').hide();
				$('#status option[value="send"]').hide();
				$('#status option[value="done"]').hide();
				$('#status').attr("disabled", false); 
				$('#is_lunas').attr("disabled", false); 
				$('#id_kurir').attr("disabled", false); 
			}
		}else{
			$('#biaya').attr("disabled", false);
			$('#status').attr("disabled", false); 
			$('#is_lunas').attr("disabled", false); 
			$('#id_kurir').attr("disabled", false); 
		}
	}
	// preview
	$(function () {
			$(document).on('click', '[data-toggle="lightbox"]', function(event) {
			event.preventDefault();
			$(this).ekkoLightbox({
				alwaysShowClose: true
			});
			});

			$('.filter-container').filterizr({gutterPixels: 3});
			$('.btn[data-filter]').on('click', function() {
			$('.btn[data-filter]').removeClass('active');
			$(this).addClass('active');
			});
		})
</script>
