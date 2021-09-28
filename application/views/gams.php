
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TheGameWin|<?php foreach ($row as $g_s ) { if($g_s->post_status=="active"){ echo $g_s->game_name; }} ?></title>
        <meta name="keywords" content="TheGameWin|<?php foreach ($row as $g_s ) { if($g_s->post_status=="active"){ echo $g_s->game_name; }} ?>">
        <meta name="author" content="WrongCode">
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

<?php foreach ($row as $g_s ) { if($g_s->post_status=="active"){ ?>
    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="<?php echo base_url(); ?>#all-mach">Store</a></li>
        
        
        
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span>Just then her head </span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

        

        
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-12">
            <div class="nk-store-product">
                <div class="row vertical-gap">
                    <div class="col-md-6">
                        <!-- START: Product Photos -->
                        <div class="nk-popup-gallery">
                            <div class="nk-gallery-item-box">
                                <a href="<?php echo base_url() ?>game_image/<?php echo $g_s->g_banner;  ?>" class="nk-gallery-item" data-size="1200x554">
                                    <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                    <img src="<?php echo base_url() ?>game_image/<?php echo $g_s->g_banner;  ?>" alt="">
                                </a>
                            </div>

                           

                        </div>
                        <!-- END: Product Photos -->
                    </div>
                    <div class="col-md-6">

                        <h2 class="nk-product-title h3"><?php echo $g_s->game_name; ?></h2>


                        <div class="nk-product-description">
                            <p><?php echo $g_s->gam_ablut; ?></p>
                        </div>

                        <!-- START: Add to Cart -->
                        <div class="nk-gap-2"></div>
                            <div class="nk-product-price">₹ <?php echo $g_s->game_fees; ?>/-</div>
                           
                        <div class="nk-gap-3"></div>
                        <!-- END: Add to Cart -->

                        <!-- START: Meta -->
                        <div class="nk-product-meta">
                            <div><strong>Total Join Players</strong>: <?php foreach ($gamcount as $cokey) { } echo  count($gamcount); ?></div>

                            <div><strong>players in match</strong>: <?php echo $g_s->total_players; ?></div>

                            <div><strong>Every kill</strong>: <?php $fee=$g_s->game_fees; echo (($fee/100)*$g_s->par_kill_percentage) ?>₹ </div>



                            

                            <div><strong>1<sub>ST</sub> Winner</strong>: <?php 
                                $tplayer=count($gamcount);
                                $fees=$g_s->game_fees; 
                                $totalmany = $fees * $tplayer ;
                                $price= (($totalmany/100)*$g_s->fwin_percentage); 
                                echo number_format($price, 0, ".", ",");
                            ?>₹  (upto:Rs-<?php 
                                $tplayer=$g_s->total_players;
                                $fees=$g_s->game_fees; 
                                $totalmany = $fees * $tplayer ;
                                $price= (($totalmany/100)*$g_s->fwin_percentage); 
                                echo number_format($price, 0, ".", ",");
                            ?>)</div>

                            <div><strong>2<sub>nd</sub> Winner</strong>: <?php 
                                $tplayer=count($gamcount);
                                $fees=$g_s->game_fees; 
                                $totalmany = $fees * $tplayer ;
                                $price= (($totalmany/100)*$g_s->swin_percentage);
                                echo number_format($price, 0, ".", ","); 
                            ?>₹  (upto:Rs-<?php 
                                $tplayers=$g_s->total_players;
                                $fees=$g_s->game_fees; 
                                $totalmany = $fees * $tplayers ;
                                $price= (($totalmany/100)*$g_s->swin_percentage); 
                                echo number_format($price, 0, ".", ",");
                            ?>)</div>



                            <!-- <div><strong>3<sub>ST</sub> Winner</strong>: ??</div> -->
                            <div><strong>Tournament Date & Time</strong> : <?php echo $g_s->mach_date; ?> & <?php $date = $g_s->mach_time; 
                            echo date('h:i:s a', strtotime($date));  ?></div>
                            



                            <div class="nk-gap-1"></div>
                            <div class="input-group">
                                <form>
                                    <input type="hidden" name="name" id="name" value="<?php echo $this->session->userdata('usr_id'); ?>">

                                    <input type="hidden" name="user_name" value="<?php echo $this->session->userdata('us_name'); ?>">

                                    
                                    <?php
                                    foreach ($gamcount as $cokey) { }
                                     $eplay= count($gamcount); 

                                     $ue=$this->session->userdata('usr_email'); 
                                     if (isset($ue)) { 
                                        foreach ($odit as $btndata) {  
                                    
                                     if ($g_s->id == $btndata->game_id) { 
                                        if ( $ue == $btndata->user_name) {
                                            if (isset($btndata->payment_satatus)) {
                                            if ($btndata->payment_satatus == 'complete') {
                                                $joi="already joined";
                                                $dis="disabled";
                                            }}elseif($eplay >= $g_s->total_players) {
                                                $machfoo="Match already full";
                                                $dis="disabled";
                                            }
                                        
                                     }elseif($eplay >= $g_s->total_players) {
                                                $machfoo="Match already full";
                                                $dis="disabled";
                                            }
                                 }elseif($eplay >= $g_s->total_players) {
                                                $machfoo="Match already full";
                                                $dis="disabled";
                                            }
                                 }}elseif($eplay >= $g_s->total_players) {
                                                $machfoo="Match already full";
                                                $dis="disabled";
                                            } 
                                            if($eplay >= $g_s->total_players) {
                                                $machfoo="Match already full";
                                                $dis="disabled";
                                            }?>


                                        <input type="button" name="btn" id="btn" value="

                                        <?php if(isset($joi)){echo $joi;}elseif(isset($machfoo)){echo $machfoo;}else{echo 'Join Now Game';} ?>
                                        " <?php if ($this->session->userdata('usr_id')) {
                                        echo 'onclick="pay_now()"';
                                    }else{
                                        echo 'data-toggle="modal" data-target="#modalLogin"';
                                    } ; ?>
                                     class="nk-btn nk-btn-rounded nk-btn-color-main-1"
                                      <?php if (isset($dis)) { echo $dis; } ?>>
                                   
                                </form>
                            </div>

                        </div>
                        <!-- END: Meta -->
                    </div>
                </div>

                <!-- START: Share -->
                <div class="nk-gap-2"></div>
                <div class="nk-post-share">
                    <span class="h5">Share Game:</span>
                    <ul class="nk-social-links-2">
                        <li>
                            <a href='whatsapp://send?text=<?php echo $g_s->game_name; echo " : "; echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>' data-action="share/whatsapp/share">
                            <span class="nk-social-facebook" title="Share page on Facebook" data-share="facebook">
                                <span class="fab fa-whatsapp"></span>

                            </span>
                        </a>
                        </li>
                        <li>
                            <?php $urlthispage= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $g_s->game_name; echo ' : '; echo $urlthispage ;?>" target="_blank" rel="noopener">
                                
                           
                            <span class="nk-social-facebook" title="Share page on Facebook" data-share="facebook">
                                <span class="fab fa-facebook"></span>

                            </span>
                        </a>
                        </li>
                        <!-- <li>
                            <a href="fb-messenger://send?text=http://url-you-want-to-share.com&app_id=516806996139829">
                            <span class="nk-social-facebook-messenger" title="Share page on facebook-messenger" data-share="facebook-messenger">
                                <span class="fab fa-facebook-messenger"></span>
                            </span>
                        </a>
                        </li> -->
                        <li>
                            <!-- <a href="https://telegram.me/share/url?url=<?php echo $urlthispage?>&text=<?php echo $g_s->game_name; ?>"> -->
                            <a href="tg://msg_url?url=<?php echo $urlthispage; ?>&text=<?php echo $g_s->game_name; ?>" >
                            <span class="nk-social-telegram" title="Share page on Google+" data-share="telegram">
                                <span class="fab fa-telegram"></span>
                            </span>
                        </a>
                        </li>
                        <li>
                            <span class="nk-social-twitter" title="Share page on Twitter" data-share="twitter">
                                <span class="fab fa-twitter"></span>
                            </span>
                         </li>
                        <li><span class="nk-social-pinterest" title="Share page on Pinterest" data-share="pinterest"><span class="fab fa-pinterest-p"></span></span></li>

                        <!-- Additional Share Buttons
                            <li><span class="nk-social-linkedin" title="Share page on LinkedIn" data-share="linkedin"><span class="fab fa-linkedin"></span></span></li>
                            <li><span class="nk-social-vk" title="Share page on VK" data-share="vk"><span class="fab fa-vk"></span></span></li>
                        -->
                    </ul>
                </div>
                <!-- END: Share -->

                <div class="nk-gap-2"></div>
                <!-- START: Tabs -->
                <div class="nk-tabs">
                    <!-- <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#tab-description" role="tab" data-toggle="tab">Description</a>
                        </li>
                        
                    </ul> -->

                    <div class="tab-content">

                        <!-- START: Tab Description -->
                        <div role="tabpanel" class="tab-pane fade show active" id="tab-description">
                            <div class="nk-gap"></div>
                            <h3>
                            <span><span class="text-main-1">Game </span>Rules</span></h3>
                            <p><?php echo $g_s->rules_game; ?></p>

                            
                        </div>
                        <!-- END: Tab Description -->

                      

                    </div>
                </div>
                <!-- END: Tabs -->
            </div>

        </div>
        
    </div>
</div>
<div class="nk-gap-2"></div>

<?php }}  ?>


<!-- START: Footer -->
    <?php $this->load->view('uins/footer') ?>
<!-- END: Footer -->
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<?php foreach ($row as $g_s ) { if($g_s->post_status=="active"){ ?>
    <script>
    
    function pay_now(){
        var name=jQuery('#name').val();
        var u_name="<?php echo $this->session->userdata('us_name'); ?>";
        var u_email="<?php echo $this->session->userdata('usr_email') ?>"
        var u_mob="<?php echo $this->session->userdata('usr_mobileno'); ?>";
        var amt=<?php echo $g_s->game_fees; ?>;
        var g_id=<?php echo $g_s->id; ?>;

        var tp=<?php echo $g_s->total_players; ?>;
        
         var contAcc=<?php echo count($gamcount); ?>;
        //var contAcc=resultAllJoinUser;
       // var cou=<?php echo $g_s->id; ?>;
        //var fd=new FormData();
        //fd.append("game_id",cou);
        var response = "";
        $.ajax({
            type:'GET',
            url:'<?php echo base_url(); ?>/game-info/<?php echo $g_s->id; ?>',
            async:false,
            // data:fd,
            // processData:false,
            // contentType:false,
            success:function(res){
                response = res;
                
                //var resultAllJoinUser=res;
            }
            
        });
       
       var a= parseInt(tp);
       var b= parseInt(response);
    
        if(a > b ){
            // alert(tp);
            // alert(response);
          jQuery.ajax({
               type:'post',
               url:'<?php echo base_url(); ?>processing',
               data:"amt="+amt+"&name="+u_email+"&game_id="+g_id,
               success:function(result){
                   var options = {
                        "key": "rzp_test_vWgy05XhJJFePB", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "buttontext":"Pay with Razorpay",
                        "name": "WrongCode",
                        "description": "<?php echo $g_s->game_name; ?>",
                        "image": "<?php echo base_url(); ?>use/assets/images/favicon.png",
                        "prefill.name":"Amit Mondal",
                        "prefill.email":u_email,
                        "prefill.contact":u_mob,
                        "theme.color":"red",

                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'<?php echo base_url(); ?>processing',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="<?php echo base_url(); ?>myGame";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
      }else{
          alert('Aatch Already Full');
          window.location.href ='<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>';
      }
        
    }
</script>   

<?php  }} ?>

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


<table style="width:100%" id="dAll">
  <tr>
    <th></th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 
</table>
</body>
</html>

<!-- trial 

<?php echo $abc; ?>

-->


