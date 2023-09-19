<!DOCTYPE html>
<html lang="en">
<head>
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

?>
      
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">Daftar Pemesanan</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
              <?php
              if(!empty($ui)){
                echo $ui;
              }?>
              <?php foreach($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>

                <?php echo $output; ?>
            
            <?php foreach($js_files as $file): ?>
                <script src="<?php echo $file; ?>"></script>
            <?php endforeach; ?>


                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
	 $this->load->view('admin/template/footer');
	?>

</div>
<!-- ./wrapper -->

<?php
	//  $this->load->view('admin/template/script');
	?>


<!-- jQuery -->
<script src="<?=base_url()?>assets/admin/dist/js/adminlte.min.js"></script>


</body>
</html>
