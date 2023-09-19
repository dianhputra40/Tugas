    <!--? Blog Area Start -->
    <div class="home-blog-area kurirkuylight pt-50 pb-50">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-70">
                        <span>information</span>
                        <h2>Informasi</h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel">
            <?php
            $news=$this->gmodel->getDataNewest('blog',array('status'=>1),'status');
            foreach ($news as $dt){
            ?>
                <div class="col-lg-12 col-md-12">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="<?=base_url()?>assets/uploads/blog/<?=$dt['thumbnail']?>" alt="">
                            </div>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-date text-center">
                                <span><?=date('d',strtotime($dt['tanggal']))?></span>
                                <p><?=date('F',strtotime($dt['tanggal']))?></p>
                            </div>
                            <div class="blog-cap">
                                <ul>
                                    <li><a href="#"><i class="ti-user"></i> <?=$this->gmodel->getDataRow('user',array('id_user'))['name']?></a></li>
                                    <!-- <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li> -->
                                </ul>
                                <h3><a href="<?=base_url('blog_detail/'.$dt['id_blog'])?>"><?=$dt['judul']?></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        autoplay: true,
  center: false,
  loop: true,
  nav: false,
    });
    </script>