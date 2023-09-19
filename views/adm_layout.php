<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | <?=$page?></title>

	<?php $this->load->view('admin/template/style'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 

<?php $this->load->view('admin/template/navtop'); ?>
 
<?php $this->load->view('admin/template/sidebar'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 

	<?php
	 $this->load->view('admin/template/judulhalaman');

	 $this->load->view('admin/page/'.$page);
	?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
	 $this->load->view('admin/template/footer');
	?>


</div>
<!-- ./wrapper -->

<?php
	 $this->load->view('admin/template/script');
	?>
</body>
</html>
