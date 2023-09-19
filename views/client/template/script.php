<script src="<?=base_url()?>assets/client/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="<?=base_url()?>assets/client/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?=base_url()?>assets/client/js/popper.min.js"></script>
<script src="<?=base_url()?>assets/client/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="<?=base_url()?>assets/client/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="<?=base_url()?>assets/client/js/owl.carousel.min.js"></script>
<script src="<?=base_url()?>assets/client/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="<?=base_url()?>assets/client/js/wow.min.js"></script>
<script src="<?=base_url()?>assets/client/js/animated.headline.js"></script>
<script src="<?=base_url()?>assets/client/js/jquery.magnific-popup.js"></script>

<!-- Nice-select, sticky -->
<script src="<?=base_url()?>assets/client/js/jquery.nice-select.min.js"></script>
<script src="<?=base_url()?>assets/client/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="<?=base_url()?>assets/client/js/contact.js"></script>
<script src="<?=base_url()?>assets/client/js/jquery.form.js"></script>
<script src="<?=base_url()?>assets/client/js/jquery.validate.min.js"></script>
<script src="<?=base_url()?>assets/client/js/mail-script.js"></script>
<script src="<?=base_url()?>assets/client/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="<?=base_url()?>assets/client/js/plugins.js"></script>
<script src="<?=base_url()?>assets/client/js/main.js"></script>

<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.js"></script>


<script
	src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.js"
	integrity="sha512-+UiyfI4KyV1uypmEqz9cOIJNwye+u+S58/hSwKEAeUMViTTqM9/L4lqu8UxJzhmzGpms8PzFJDzEqXL9niHyjA=="
	crossorigin="anonymous"
	referrerpolicy="no-referrer"
></script>

<script>
	//datetime tipe penjemputan
	$.datetimepicker.setLocale("id");
	$("#datetimeinstant").datetimepicker({
		closeOnDateSelect: true,
		format: "Y-m-d H:i:s",
	});

	$("#datetimereguler").datetimepicker({
		timepicker: false,
		format: "Y-m-d",
		autoclose: true,
	});

	//datatable histori
	$(document).ready(function () {
		$("#example").DataTable({
			bPaginate: true,
			bLengthChange: true,
			bFilter: true,
			bInfo: false,
			bAutoWidth: true,
			oLanguage: {
				sSearch: "Cari :",
			},
         "responsive": true,
		});
	});
</script>
<script>
	$(function() {
		function updatingprofil(){
			$("#updateprofil-form").submit();
		}
		//animasi login register
	$('#login-form-link').click(function(e) {
	    $("#login-form").delay(100).fadeIn(100);
	     $("#register-form").fadeOut(100);
	    $('#register-form-link').removeClass('active');
	    $(this).addClass('active');
	    e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
	    $("#register-form").delay(100).fadeIn(100);
	     $("#login-form").fadeOut(100);
	    $('#login-form-link').removeClass('active');
	    $(this).addClass('active');
	    e.preventDefault();
	});

	});


	$(document).ready(function () {
		//varglobal
		var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
		var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
		
		//submit form pemesanan1
		$("#buttonpemesanan1").click(function() {
		$('form#formpemesanan1').submit();
		});

	   // setting alamat asal
	   $("#btn_set_pengiriman").click(function() {
	       var jenis = $("#jenis_pengiriman").val();
		   if(jenis=='instant'){
	       var waktu = $("#datetimeinstant").val();
		   var jam=', Jam '+waktu.substring(waktu.indexOf(' ') + 1).slice(0, 5);
		   }else if(jenis=='reguler'){
	       var waktu = $("#datetimereguler").val();
		   var jam='';
		   }
		   $("#formjenispengiriman").val(jenis);
		   $("#formdatetimepenjemputan").val(waktu);
	       $("#label_jnspengiriman").text('PENGIRIMAN '+jenis.toUpperCase());
		   
		   var tg=new Date(waktu);
		   var tanggal=", "+tg.getDate();
		   var bulan=" "+months[tg.getMonth()];

	       
		   $("#label_tanggal").text(myDays[tg.getDay()]+tanggal+bulan+jam);
		// alert(waktu);
	   });

	   $("#btn_set_start").click(function() {
	       var startaddress = $("#modalstartaddress").val();
	       var rt = $("#modalstartrt").val();
	       var rw = $("#modalstartrw").val();
	       var catatan = $("#modalstartcatatan").val();
	       $("#formstartaddress").val(startaddress);
	       $("#formstartrt").val(rt);
	       $("#formstartrw").val(rw);
	       $("#formstartcatatan").val(catatan);
		   if(startaddress.length>10){
	       $("#link-startadress").text(startaddress.slice(0,20)+'..');
		   }
	   });
	   // setting alamat tujuan
	   $("#btn_set_end").click(function() {
	       var endaddress = $("#modalendaddress").val();
	       var rt = $("#modalendrt").val();
	       var rw = $("#modalendrw").val();
	       var catatan = $("#modalendcatatan").val();
	       $("#formendaddress").val(endaddress);
	       $("#formendrt").val(rt);
	       $("#formendrw").val(rw);
	       $("#formendcatatan").val(catatan);
		   if(endaddress.length>10){
	       $("#link-endadress").text(endaddress.slice(0,20)+'..');
		   }
	   });

	    // notifikasi popup
	<?php if(!empty($this->session->flashdata('notifsukses'))||!empty($this->session->flashdata('notifgagal'))){ ?>
	    $('#notif').modal('show');
	<?php } ?>

	    //validasi form registrasi
	$('#register-form').validate({
	    rules: {
	        nama: {
	            required: true,
	            minlength: 5
	        },
	        email: {
	            required: true,
	            email: true
	        },
	        password: {
	            required: true,
	            minlength: 5
	        },
	        hp: {
	            required: true,
	            digits: true,
	            minlength: 8
	        },
	        alamat: {
	            required: true,
	            minlength: 10
	        },
	        jkel: {
	            required: true
	        }
	    }
	});

	    //validasi form registrasi
	    $('#login-form').validate({
	    rules: {
	        username: {
	            required: true,
	            minlength: 5
	        },
	        password: {
	            required: true,
	            minlength: 5
	        }
	    }
	    });

	//validasi form registrasi
	$('#isialamatpenjemputan').validate({
	rules: {
	    startaddress: {
	        required: true,
	        minlength: 15,
	        maxlength: 100
	    },
	    startrt: {
	        required: true,
	        digits: true
	    },
	    startrw: {
	        required: true,
	        digits: true
	    },
	    startcatatan: {
	        minlength: 5,
	        maxlength: 100
	    }
	}
	});

	//validasi form registrasi
	$('#isialamattujuan').validate({
	rules: {
	    endaddress: {
	        required: true,
	        minlength: 15,
	        maxlength: 100
	    },
	    endrt: {
	        required: true,
	        digits: true
	    },
	    endrw: {
	        required: true,
	        digits: true
	    },
	    endcatatan: {
	        minlength: 5,
	        maxlength: 100
	    }
	}
	});

	
	//validasi form review
	$('#formfinalsubmit').validate({
	rules: {
	    pengirim: {
	        required: true,
	        minlength: 3,
	        maxlength: 100
	    },
	    nohp_pengirim: {
	        required: true,
	        minlength: 10
	    },
	    penerima: {
	        required: true,
	        minlength: 3,
	        maxlength: 100
	    },
	    nohp_penerima: {
	        required: true,
	        minlength: 10
	    },
	    berat_barang: {
	        required: true,
	        digits: true
	    },
	    jns_barang: {
			required: true
		},
	    // foto_barang: {
	    //     required: true
	    // }
	}
	});

	jQuery.extend(jQuery.validator.messages, {
    required: "Kolom ini wajib diisi.",
    remote: "Please fix this field.",
    email: "Harus berupa email valid",
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (ISO).",
    number: "masukkan angka yang valid",
    digits: "masukkan hanya angka saja",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Please enter the same value again.",
    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("Jangan diisi melebihi {0} karakter."),
    minlength: jQuery.validator.format("Tolong diisi minimal {0} karakter."),
    rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
	});

	});
</script>
