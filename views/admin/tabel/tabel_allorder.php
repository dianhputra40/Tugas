<?php
// if($tab=='done'){
	$url=base_url('internal/getSemuaPengiriman');			
// }else if($tab=='cancel'){
// 	$url=base_url('internal/getAllCancel');	
// }


?>
<table id="tesaja" class="table table-bordered table-striped" width="100%">
	<thead>
		<tr>
			<th>No</th>
			<th data-priority="1">Tg.Order</th>
			<th>Nama</th>
			<th data-priority="1">Tujuan</th>
			<th>Barang</th>
			<th>Pengiriman</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody id="show_data"></tbody>
</table>



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


	$(document).ready(function () {

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
        	autoUnmask: true,
		});


		function tampil_data() {
			if ($.fn.DataTable.isDataTable('#tesaja')) {
				$('#tesaja').DataTable().destroy();
			}

			$.ajax({
				type: "GET",
				url: "<?php echo $url; ?>",
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
						}else if(data[i].status=='pickup'){
							stat='Sedang Dipickup';
						}else if(data[i].status=='send'){
							stat='Proses Pengiriman';
						}else if(data[i].status=='done'){
							stat='Telah diterima';
						}else if(data[i].status=='cancel'){
							stat='Telah dibatalkan';
						}
						
						if(data[i].is_lunas=='no'){
							lunas='Belum Lunas';
						}else if(data[i].is_lunas=='checking'){
							lunas='Pengecekan';
							bukti="<a class='btn btn-sm btn-info' href='<?=base_url('assets/uploads/bukti_pembayaran/')?>"+data[i]['bukti_pembayaran']+"' data-toggle='lightbox' data-title='Bukti pembayaran "+data[i]['pengirim']+"'>Bukti</a> ";
						}else if(data[i].is_lunas=='yes'){
							lunas='Sudah Lunas';
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
							"</tr>";

					}
					$("#show_data").html(html);
					
					$('#tesaja').DataTable({
						responsive:true
					});

				},
			});
		}
		

		setInterval(function () {
			tampil_data();
		}, 30000);


		
	
	});

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
