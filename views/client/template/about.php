<!--? About Area Start -->
<?php
    $profil=$this->gmodel->getDataRow('company_profile',array('id'=>'1'));
  ?>
<div class="about-low-area pt-100 kurirkuylight pb-50">
        <div class="container">
        <div class="row">

                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-50">
                        <span>Our Services</span>
                        <h3>Berbagai pelayanan untuk semua kebutuhan pengiriman anda</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <!-- about-img -->
                    <div class="about-img center">
                        <!-- <div class="about-font-img">
                            <img src="<?=base_url()?>assets/client/img/gallery/about2.png" alt="">
                        </div> -->
                        <div class="">
                            <img style="min-height:100%;min-width:100%;" src="<?=base_url()?>assets/uploads/website/<?=$profil['banner_about']?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                <div class="row" style="margin-top:2vh">
                <div class="col-3 text-right">    
                    <img style="max-width:70%" src="<?=base_url()?>assets/uploads/website/<?=$profil['logo1_about']?>">
                </div>
                <div class="col-9" style="padding-top:2vh"> 
                        <h5><?=$profil['text1_about']?></h5>
                </div>
                </div>
                <div class="row" style="margin-top:2vh">
                <div class="col-3 text-right">    
                    <img style="max-width:70%" src="<?=base_url()?>assets/uploads/website/<?=$profil['logo2_about']?>">
                </div>
                <div class="col-9" style="padding-top:2vh"> 
                        <h5><?=$profil['text2_about']?></h5>
                </div>
                </div>
                <div class="row" style="margin-top:2vh">
                <div class="col-3 text-right">    
                    <img style="max-width:70%" src="<?=base_url()?>assets/uploads/website/<?=$profil['logo3_about']?>">
                </div>
                <div class="col-9" style="padding-top:2vh"> 
                        <h5><?=$profil['text3_about']?></h5>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->