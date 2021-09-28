<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TheGameWin | OTP</title>
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
        
        
        
        <li><a href="<?php echo base_url(); ?>sign-up">Account</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span>Hi <?php foreach ($row as $key) {
            echo $key->u_name;
        } ?></span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->
       
<div class="container">

<div class="row">
<div class="col-lg-6 text-center">
<div class="nk-gap  d-none d-lg-block"></div>
<div class="nk-gap  d-none d-lg-block"></div>
<div class="nk-gap  d-none d-lg-block"></div>
<div class="nk-gap  d-none d-lg-block"></div>
<div class="nk-gap  d-none d-lg-block"></div>
<div class="nk-gap  d-none d-lg-block"></div>
<div class="nk-gap  d-none d-lg-block"></div>
<div class="nk-gap  d-none d-lg-block"></div>
<div class="nk-gap  d-none d-lg-block"></div>
<div class="nk-gap  d-none d-lg-block"></div>
                <div class="nk-feature-2">
                    <div class="nk-feature-icon">
                        <span>OTP Verification</span>
                    </div>
                    <div class="nk-feature-cont text-center">
                            <p>OTP is sent to your email <?php 
                        
                        $email = $key->use_email;

$em = explode("@",$email);
$name = $em[0];
$len = strlen($name);
$showLen = floor($len/2);
$str_arr = str_split($name);
for($ii=$showLen;$ii<$len;$ii++){
    $str_arr[$ii] = '*';
}
$em[0] = implode('',$str_arr); 
$new_name = implode('@',$em);
echo $new_name;
                        
                        ?></p>
                        <form action="<?php echo base_url(); ?>new-password" method="post" id="form1">
                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
        <input type="hidden" name="action" value="validate_captcha">
                        <input type="hidden" name="id" value="<?php echo $key->us_id; ?>">
                        <div class="input-group">
                            <input type="number" name="otp" class="required number form-control" placeholder="Enter OTP" inputmode="numeric" pattern="[0-9]*" min="6" minlength="6" maxlength="6">

                            <button class="nk-btn nk-btn-color-white" type="submit" form="form1"><span class="icon ion-paper-airplane"></span>Send</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                
                    
                <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_fn2gqs3b.json"  background="transparent"  speed="0.5"  style="width: 100%; height: 100%;"  loop autoplay></lottie-player>

            </div>
            
            
</div>
<div class="nk-gap"></div>
</div>

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
<script>
  	$('#check').click(function() {
    var c=$('#contact').val();
    $("#permanent").val(c);
});
    $('#email').keyup(function (){
       var email= $(this).val();
       var username = email.substring(0,email.indexOf('@'));
    $('#company').val(username); // <-- reverse your selectors here
    $('#divusername').html(username);
});
  </script>
  <script src="https://www.google.com/recaptcha/api.js?render=6LfssZYbAAAAAPHPi7dYINE6QM6n2t--7a92Ntse"></script>
<script>
    grecaptcha.ready(function() {
    // do request for recaptcha token
    // response is promise with passed token
        grecaptcha.execute('6LfssZYbAAAAAPHPi7dYINE6QM6n2t--7a92Ntse', {action:'validate_captcha'})
                  .then(function(token) {
            // add token value to form
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
</html>

<?php if($key->u_status == "active"){redirect(base_url());} ?>