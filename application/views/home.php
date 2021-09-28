<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TheGameWin| The Game Win</title>
        <meta name="keywords" content="the game win,<?php foreach ($g_data as $g ) { if($g->post_status=='active'){ echo $g->game_name.',';}}?>">
        <meta name="author" content="TheGameWin">
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>use/assets/images/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- START: Styles -->
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>use/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
        <!-- FontAwesome -->
        <script defer src="<?php echo base_url(); ?>use/assets/vendor/fontawesome-free/js/all.js"></script>
        <script defer src="<?php echo base_url(); ?>use/assets/vendor/fontawesome-free/js/v4-shims.js"></script>
        <!-- IonIcons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>use/assets/vendor/ionicons/css/ionicons.min.css">
        <!-- Flickity -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>use/assets/vendor/flickity/dist/flickity.min.css">
        <!-- Photoswipe -->
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>use/assets/vendor/photoswipe/dist/photoswipe.css"> -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>use/assets/vendor/photoswipe/dist/default-skin/default-skin.css">
        <!-- Seiyria Bootstrap Slider -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>use/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">
        <!-- Summernote -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>use/assets/vendor/summernote/dist/summernote-bs4.css">
        <!-- GoodGames -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>use/assets/css/goodgames.css">
        <!-- Custom Styles -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>use/assets/css/custom.css">
        <!-- END: Styles -->
            <!-- jQuery -->
    <script src="<?php echo base_url(); ?>use/assets/vendor/jquery/dist/jquery.min.js"></script>

    <style>
            .map{    
            filter: grayscale(100%) invert(92%) contrast(83%);
            border-radius: 5px;
        }
        </style>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TV8TES5GZX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TV8TES5GZX');
</script>
    </head>
    <!--
    Additional Classes:
    .nk-page-boxed
    -->
    <body>
        <!--
        Additional Classes:
        .nk-header-opaque
        -->
<?php $this->load->view('uins/topbar'); ?>
<div class="nk-main">
<div class="nk-gap-2"></div>
<div class="container">
<!-- START: Image Slider -->
<div class="nk-image-slider" data-autoplay="8000">
    <?php foreach ($of_ban as $off) { if ($off->status=="active") {?>
<div class="nk-image-slider-item">
    <img src="<?php echo base_url() ?>off_img/<?php echo $off->img ?>" alt="" class="nk-image-slider-img" data-thumb="<?php echo base_url() ?>off_img/<?php echo $off->img ?>">
    <div class="nk-image-slider-content">
        <h2 class="h2"><?php echo $off->gift; ?></h2>
        <h3 class="h4"><?php echo $off->game_name; ?></h3>
        <p class="text-white"><?php echo $off->off_name; ?><br>₹<?php echo $off->game_fees; ?>/-</p>
        <a href="<?php echo base_url();?>read-more/<?php echo $off->game_id; ?>" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>
    </div>
</div>
<?php }} ?>
</div>
<!-- END: Image Slider -->
<!-- START: Categories -->
<div class="nk-gap-2"></div>
<div class="row vertical-gap">
<div class="col-lg-4">
<div class="nk-feature-1">
    <div class="nk-feature-icon">
        <img src="<?php echo base_url(); ?>use/assets/images/icon-mouse.png" alt="">
    </div>
    <div class="nk-feature-cont">
        <h3 class="nk-feature-title"><a href="<?php echo base_url(); ?>result-game">Game Result</a></h3>
        <h4 class="nk-feature-title text-main-1"><a href="<?php echo base_url(); ?>result-game">View Games</a></h4>
    </div>
</div>
</div>
<div class="col-lg-4">
<div class="nk-feature-1">
    <div class="nk-feature-icon">
        <img src="<?php echo base_url(); ?>use/assets/images/icon-gamepad.png" alt="">
    </div>
    <div class="nk-feature-cont">
        <h3 class="nk-feature-title"><a href="#all-mach">Today</a></h3>
        <h4 class="nk-feature-title text-main-1"><a href="#all-mach">Matches</a></h4>
    </div>
</div>
</div>
<div class="col-lg-4">
<div class="nk-feature-1">
    <div class="nk-feature-icon">
        <img src="<?php echo base_url(); ?>use/assets/images/icon-gamepad-2.png" alt="">
    </div>
    <div class="nk-feature-cont">
        <h3 class="nk-feature-title"><a href="#all-mach3">UpComing</a></h3>
        <h4 class="nk-feature-title text-main-1"><a href="#all-mach3">MATCHes</a></h4>
    </div>
</div>
</div>
</div>
<!-- END: Categories -->
<!-- START: Latest News -->
<div class="nk-gap-2"></div>
<h3 class="nk-decorated-h-2" id="all-mach"><span><span class="text-main-1">today </span>matches</span></h3>
<div class="nk-blog-grid">
<div class="nk-carousel nk-carousel-x4" data-autoplay="5000" data-dots="false" data-cell-align="left" data-arrows="true">
        <div class="nk-carousel-inner">        
<?php foreach ($g_data as $g ) { if($g->post_status=='active'){
$d=date("Y-m-d");
$md=$g->mach_date;
if ($d==$md) { ?>
            <div><div class="pl-5 pr-5">
                <div class="nk-product-cat-3">
                    <a class="nk-product-image" href="store-product.html">
                        <img src="<?php echo base_url() ?>game_image/<?php echo $g->g_banner;  ?>" alt="aaaSo saying he unbuckled">
                    </a>
                    <div class="nk-product-cont">
                        <div class="nk-gap-1"></div>
                        <h3 class="nk-product-title h5"><a href="store-product.html"><?php echo $g->game_name; ?></a></h3>
                        <div class="nk-gap-1"></div>
                        <div class="nk-product-price">₹ <?php echo $g->game_fees; ?>.00/-</div>
                        <div class="nk-gap-1"></div>
                    <a href="<?php echo base_url(); ?>read-more/<?php echo $g->id; ?>" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                    </div>
                </div>
            </div></div>
     <?php } }} ?>
        </div>
    </div>
</div>
<!-- END: Latest News -->
<div class="nk-gap-2"></div>
<div class="row vertical-gap">
<div class="col-lg-12">
<!-- START: Latest Posts -->
<h3 class="nk-decorated-h-2" id="all-mach3"><span><span class="text-main-1">Upcoming</span> Matches</span></h3>
<div class="nk-gap"></div>
 <div class="row vertical-gap">
        <?php foreach ($g_data as $g ) { if($g->post_status=='active'){ ?> 
        <div class="col-lg-6">
            <div class="nk-product-cat-2">
                <a class="nk-product-image" href="<?php echo base_url(); ?>read-more/<?php echo $g->id; ?>">
                    <img src="<?php echo base_url() ?>game_image/<?php echo $g->g_banner;  ?>" alt="With what mingled joy">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="<?php echo base_url(); ?>read-more/<?php echo $g->id; ?>"><?php echo $g->game_name; ?></a></h3>
                    <div class="nk-gap-1"></div>
                    <!-- <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div> -->
                    <div class="nk-gap-1"></div>
                   <?php echo $g->gam_ablut; ?>
                    <div class="nk-gap-2"></div>
                    <div class="nk-product-price">₹ <?php echo $g->game_fees; ?>.00/-</div>
                    <div class="nk-gap-1"></div>
                    <a href="<?php echo base_url(); ?>read-more/<?php echo $g->id; ?>" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                </div>
            </div>
        </div>
      <?php }} ?>
    </div>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade show active" id="tabs-1-1">
            <div class="nk-gap"></div>
            <!-- START: Action Tab -->
            <!-- END: Action Tab -->
            <div class="nk-gap"></div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-2">
            <div class="nk-gap"></div>
            <!-- START: MMO Tab -->
            
            <!-- END: MMO Tab -->
            <div class="nk-gap"></div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-3">
            <div class="nk-gap"></div>
            <!-- START: Strategy Tab -->
            
            <div class="nk-blog-post nk-blog-post-border-bottom">
                <a href="blog-article.html" class="nk-post-img">
                    <img src="assets/images/post-3-fw.jpg" alt="We found a witch! May we burn her?">
                    <span class="nk-post-categories">
                        <span class="bg-main-3">Strategy</span>
                    </span>
                </a>
                <div class="nk-gap-1"></div>
                <h2 class="nk-post-title h4"><a href="blog-article.html">We found a witch! May we burn her?</a></h2>
                <div class="nk-post-date mt-10 mb-10">
                    <span class="fa fa-calendar"></span> Aug 27, 2018
                    <span class="fa fa-comments"></span> <a href="#">7 comments</a>
                </div>
                <div class="nk-post-text">
                    <p>And she went on planning to herself how she would manage it. `They must go by the carrier,' she thought; `and how funny it'll seem, sending presents to one's own feet!...</p>
                </div>
            </div>
            <div class="nk-blog-post nk-blog-post-border-bottom">
                <div class="row vertical-gap">
                    <div class="col-lg-3 col-md-5">
                        <a href="blog-article.html" class="nk-post-img">
                            <img src="assets/images/post-4-mid-square.jpg" alt="For good, too though, in consequence">
                            <span class="nk-post-categories">
                                <span class="bg-main-3">Strategy</span>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <h2 class="nk-post-title h4"><a href="blog-article.html">For good, too though, in consequence</a></h2>
                        <div class="nk-post-date mt-10 mb-10">
                            <span class="fa fa-calendar"></span> Aug 14, 2018
                            <span class="fa fa-comments"></span> <a href="#">23 comments</a>
                        </div>
                        <div class="nk-post-text">
                            <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Strategy Tab -->
            <div class="nk-gap"></div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-4">
            <div class="nk-gap"></div>
            <!-- START: Adventure Tab -->
            <div class="nk-blog-post nk-blog-post-border-bottom">
                <a href="blog-article.html" class="nk-post-img">
                    <img src="assets/images/post-6-fw.jpg" alt="At first, for some time, I was not able to answer">
                    <span class="nk-post-categories">
                        <span class="bg-main-2">Adventure</span>
                    </span>
                </a>
                <div class="nk-gap-1"></div>
                <h2 class="nk-post-title h4"><a href="blog-article.html">At first, for some time, I was not able to answer</a></h2>
                <div class="nk-post-date mt-10 mb-10">
                    <span class="fa fa-calendar"></span> Jul 3, 2018
                    <span class="fa fa-comments"></span> <a href="#">0 comments</a>
                </div>
                <div class="nk-post-text">
                    <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                </div>
            </div>
            <!-- END: Adventure Tab -->
            <div class="nk-gap"></div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-5">
            <div class="nk-gap"></div>
            <!-- START: Racing Tab -->
            <div class="nk-blog-post nk-blog-post-border-bottom">
                <a href="blog-article.html" class="nk-post-img">
                    <img src="assets/images/post-7-fw.jpg" alt="At length one of them called out in a clear">
                    <span class="nk-post-categories">
                        <span class="bg-main-5">Racing</span>
                    </span>
                </a>
                <div class="nk-gap-1"></div>
                <h2 class="nk-post-title h4"><a href="blog-article.html">At length one of them called out in a clear</a></h2>
                <div class="nk-post-date mt-10 mb-10">
                    <span class="fa fa-calendar"></span> Jul 3, 2018
                    <span class="fa fa-comments"></span> <a href="#">0 comments</a>
                </div>
                <div class="nk-post-text">
                    <p>TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                </div>
            </div>
            <div class="nk-blog-post nk-blog-post-border-bottom">
                <div class="row vertical-gap">
                    <div class="col-lg-3 col-md-5">
                        <a href="blog-article.html" class="nk-post-img">
                            <img src="assets/images/post-3-mid-square.jpg" alt="We found a witch! May we burn her?">
                            <span class="nk-post-categories">
                                <span class="bg-main-5">Racing</span>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <h2 class="nk-post-title h4"><a href="blog-article.html">We found a witch! May we burn her?</a></h2>
                        <div class="nk-post-date mt-10 mb-10">
                            <span class="fa fa-calendar"></span> Aug 27, 2018
                            <span class="fa fa-comments"></span> <a href="#">7 comments</a>
                        </div>
                        <div class="nk-post-text">
                            <p>And she went on planning to herself how she would manage it. `They must go by the carrier,' she thought; `and how funny it'll seem, sending presents to one's own feet!...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-blog-post nk-blog-post-border-bottom">
                <div class="row vertical-gap">
                    <div class="col-lg-3 col-md-5">
                        <a href="blog-article.html" class="nk-post-img">
                            <img src="assets/images/post-4-mid-square.jpg" alt="For good, too though, in consequence">
                            <span class="nk-post-categories">
                                <span class="bg-main-5">Racing</span>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <h2 class="nk-post-title h4"><a href="blog-article.html">For good, too though, in consequence</a></h2>
                        <div class="nk-post-date mt-10 mb-10">
                            <span class="fa fa-calendar"></span> Aug 14, 2018
                            <span class="fa fa-comments"></span> <a href="#">23 comments</a>
                        </div>
                        <div class="nk-post-text">
                            <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Racing Tab -->
            <div class="nk-gap"></div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-6">
            <div class="nk-gap"></div>
            <!-- START: Indie Tab -->
            
            <div class="nk-blog-post nk-blog-post-border-bottom">
                <a href="blog-article.html" class="nk-post-img">
                    <img src="assets/images/post-5-fw.jpg" alt="He made his passenger captain of one">
                    <span class="nk-post-categories">
                        <span class="bg-main-2">Indie</span>
                    </span>
                </a>
                <div class="nk-gap-1"></div>
                <h2 class="nk-post-title h4"><a href="blog-article.html">He made his passenger captain of one</a></h2>
                <div class="nk-post-date mt-10 mb-10">
                    <span class="fa fa-calendar"></span> Jul 23, 2018
                    <span class="fa fa-comments"></span> <a href="#">13 comments</a>
                </div>
                <div class="nk-post-text">
                    <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                </div>
            </div>
            <!-- END: Indie Tab -->
            <div class="nk-gap"></div>
        </div>
    </div>
</div> 
<!-- END: Best Selling -->
</div>
</div>
</div>
<div class="nk-gap-4"></div>
<!-- START: Footer -->
    <?php $this->load->view('uins/footer') ?>
<!-- END: Footer -->
</div>
<!-- START: Page Background -->
<img class="nk-page-background-top" src="<?php echo base_url();  ?>use/assets/images/bg-top.png" alt="">
<img class="nk-page-background-bottom" src="<?php echo base_url();  ?>use/assets/images/bg-bottom.png" alt="">
<!-- END: Page Background -->
<!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-sm" role="document">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span class="ion-android-close"></span>
</button>
<h4 class="mb-0">Search</h4>
<div class="nk-gap-1"></div>
<form action="#" class="nk-form nk-form-style-1">
    <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
</form>
</div>
</div>
</div>
</div>
<!-- END: Search Modal -->
<!-- START: Login Modal -->
<?php $this->load->view("uins/login") ?>
<!-- END: Login Modal -->

    
<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="<?php echo base_url(); ?>use/assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- GSAP -->
<script src="<?php echo base_url(); ?>use/assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="<?php echo base_url(); ?>use/assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Popper -->
<script src="<?php echo base_url(); ?>use/assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>use/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="<?php echo base_url(); ?>use/assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax
<script src="<?php echo base_url(); ?>use/assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script> -->

<!-- imagesLoaded -->
<script src="<?php echo base_url(); ?>use/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Flickity -->
<script src="<?php echo base_url(); ?>use/assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="<?php echo base_url(); ?>use/assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="<?php echo base_url(); ?>use/assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Jquery Validation -->
<script src="<?php echo base_url(); ?>use/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment -->
<script src="<?php echo base_url(); ?>use/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="<?php echo base_url(); ?>use/assets/vendor/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>use/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

<!-- Hammer.js -->
<script src="<?php echo base_url(); ?>use/assets/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="<?php echo base_url(); ?>use/assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- SoundManager2 -->
<script src="<?php echo base_url(); ?>use/assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="<?php echo base_url(); ?>use/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- Summernote -->
<script src="<?php echo base_url(); ?>use/assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- nK Share -->
<script src="<?php echo base_url(); ?>use/assets/plugins/nk-share/nk-share.js"></script>

<!-- GoodGames -->
<script src="<?php echo base_url(); ?>use/assets/js/goodgames.min.js"></script>
<script src="<?php echo base_url(); ?>use/assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->

<!-- END: Scripts -->
</body>
</html>