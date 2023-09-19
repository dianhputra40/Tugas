<?php 
$this->load->view('client/template/page_banner.php'); 
?>
<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
         <div class="container">
            <div class="row">
               <div class="container">
                  <div class="single-post">
                     <div class="feature-img img-fluid text-center">
                        <img class="img-fluid" src="<?=base_url()?>assets/uploads/blog/<?=$detail['thumbnail']?>" alt="">
                     </div>
                     <div class="blog_details">
                        <?=$detail['isi']?>
                     </div>
                  </div>
                  <div class="navigation-top">
                     <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-calendar"></i></span>  <?=longdate_indo(date('Y-m-d',strtotime($detail['tanggal'])))?> </p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                           <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                        </div>
                     </div>
                  </div>
              
               </div>
               
            </div>
         </div>
      </section>
      <!--================ Blog Area end =================-->