 <!--? slider Area Start-->
 <?php
    $profil=$this->gmodel->getDataRow('company_profile',array('id'=>'1'));
  ?>
 <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center" style="background-image: url(<?=base_url('assets/uploads/website/')?><?=$profil['main_header']?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9">
                            <div class="hero__caption">
                                <h1><?=$profil['text_header']?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->