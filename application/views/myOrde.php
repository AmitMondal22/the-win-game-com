<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TheGameWin|My Orders</title>
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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>use/assets/vendor/photoswipe/dist/photoswipe.css">
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
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="<?php echo base_url(); ?>myGame">My games</a></li>
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span>My Games</span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

 
        
<div class="container">
    <div class="nk-store nk-store-cart">
        <div class="table-responsive">

            <!-- START: Products in Cart -->
            <table class="nk-table"> <!-- nk-store-cart-products -->
                <thead>
                  <tr>
                      <th class="h6">Id</th>
                    <th class="h6">Image</th>
                    <th class="h6">Details</th>
                    <th class="h6">Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($row as $od) {  ?>
                        <tr onclick="location.href = '<?php echo base_url(); ?>myGame/<?php echo $od->pay_id; ?>';">
                            <td class="nk-product-cart-thumb">
                                <h5 class="h6"></h5>
                                <div class="nk-gap-1"></div>

                                <strong><?php echo $od->id; ?></strong>
                            </td>
                            <td class="">
                                <h5 class="h6"></h5>

                                <a href="<?php echo base_url(); ?>myGame/<?php echo $od->pay_id; ?>" class="nk-image-box-1 nk-post-image">
                                    <img src="<?php echo base_url(); ?>game_image/<?php echo $od->g_banner; ?>" alt="However, I have reason" width="60">
                                </a>
                            </td>



                            <td class="nk-product-cart-title">
                                <h5 class="h6"></h5>

                                <h3 class="nk-post-title h5">
                                    <a href="<?php echo base_url(); ?>myGame/<?php echo $od->pay_id; ?>"><?php echo $od->game_name; ?></a>
                                </h3>
                                <div class="nk-form">
                                    <strong><?php echo date('Y:m:d', strtotime($od->mach_date));
                                    echo " ".date('h:i A',strtotime($od->mach_time)); ?></strong>

                                    
                                </div>
                            </td>




                            <td class="nk-product-cart-thumb">
                                <h5 class="h6"></h5>
                                <div class="nk-gap-1"></div>

                                <strong><?php echo $od->payment_satatus; ?></strong>
                            </td>

                            
                            
                            <!-- <td class="nk-product-cart-remove"><a href="#"><span class="ion-android-close"></span></a></td> -->
                        </tr>
                    
                    <?php } ?> 
                    
                </tbody>
            </table>
            <!-- END: Products in Cart -->

        </div>
        

        
  


    </div>
<div class="nk-gap-2"></div>








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

<!-- imagesLoaded -->
<script src="<?php echo base_url(); ?>use/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<!-- Flickity -->
<script src="<?php echo base_url(); ?>use/assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>
<!-- Photoswipe -->
<script src="<?php echo base_url(); ?>use/assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="<?php echo base_url(); ?>use/assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="<?php echo base_url(); ?>use/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- GoodGames -->
<script src="<?php echo base_url(); ?>use/assets/js/goodgames.min.js"></script>
<script src="<?php echo base_url(); ?>use/assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->



</body>
</html>