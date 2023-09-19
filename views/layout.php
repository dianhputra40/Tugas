<!doctype html>
<?php
    $profil=$this->gmodel->getDataRow('company_profile',array('id'=>'1'));
  ?>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$profil['nama']?> | <?=$judulhalaman?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/client/img/logo/logo.jpg">

   <?php $this->load->view('client/template/style.php'); ?>
</head>
<body>
    
   <?php //$this->load->view('client/template/loading.php'); ?>
   <?php $this->load->view('client/template/header.php'); ?>

<header>
  
<main class="">
   
<?php $this->load->view('client/page/'.$page); ?>

</main>
<footer>
   <?php $this->load->view('client/template/login.php'); ?>
    <?php $this->load->view('client/template/footer.php'); ?>
    
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

    <!-- JS here -->

    <?php $this->load->view('client/template/script.php'); ?>
    
    
</body>
</html>