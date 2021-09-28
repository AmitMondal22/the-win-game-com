<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TheGameWin|<?php foreach ($urow as $udat) { echo $udat->u_name;} ?></title>
        
        
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
        <!-- <script src="<?php echo base_url(); ?>use/assets/vendor/jquery/dist/jquery.min.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
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
<?php foreach ($urow as $udat) { ?>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="<?php echo base_url(); ?>#all-mach">Store</a></li>
        
        
        
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span>Hi <?php echo $udat->u_name; ?> </span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

        

        
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-12">
                <!-- <h3 class="text-main-1">Tabs</h3> -->
                <div class="nk-gap"></div>
                <!-- START: Tabs  -->
                <div class="nk-tabs">
                    <!--
                        Additional Classes:
                            .nav-tabs-fill
                    -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" href="#tabs-1-1" role="tab" data-toggle="tab" aria-selected="true">Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-2" role="tab" data-toggle="tab" aria-selected="false">My Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabs-1-3" role="tab" data-toggle="tab" aria-selected="false">+ Bank/UPI</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active show" id="tabs-1-1">
                            <div class="nk-gap"></div>
                             <table class="nk-table">
                                        <tbody>

                                            <tr>
                                            <td>
                                                <h4 class="nk-widget-title">
                                                    <span class="text-main-1">Email</span>
                                                </h4>
                                            </td>
                                            <td><?php echo $udat->use_email; ?></td>
                                          </tr>
                                          <tr>
                                            <td>
                                                <h4 class="nk-widget-title">
                                                    <span class="text-main-1">Mobile No</span>
                                                </h4>
                                            </td>
                                            <td><?php echo $udat->u_mobil_no; ?></td>
                                          </tr>
                                          <tr>
                                            <td>
                                                <h4 class="nk-widget-title">
                                                    <span class="text-main-1">Whatsapp No</span>
                                                </h4>
                                            </td>
                                            <td><?php echo $udat->u_whatsapp; ?></td>
                                          </tr>
                                          <tr>
                                            <td>
                                                <h4 class="nk-widget-title">
                                                    <span class="text-main-1">Gender</span>
                                                </h4>
                                            </td>
                                            <td><?php echo $udat->gender; ?></td>
                                          </tr>
                                          <tr>
                                            <td>
                                                <h4 class="nk-widget-title">
                                                    <span class="text-main-1">My Game</span>
                                                </h4>
                                            </td>
                                            <td><?php echo $udat->games; ?></td>
                                          </tr>
                                          <tr>
                                            <td>
                                                <h4 class="nk-widget-title">
                                                    <span class="text-main-1">My Game Id</span>
                                                </h4>
                                            </td>
                                            <td><?php echo $udat->my_game_id; ?></td>
                                          </tr>
                                      </tbody>
                                    </table><br>
                                     <input type="button" name="btn" id="btn" value="update my account"class="nk-btn nk-btn-lg nk-btn-rounded nk-btn-color-white" data-toggle="modal" data-target="#myModal">
                            <div class="nk-gap"></div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tabs-1-2">
                            <div class="nk-gap"></div>
                            <table class="nk-table">
                                        <tbody>

                                            
                                          
                                          <tr>
                                            <td>
                                                <h4 class="nk-widget-title">
                                                    <span class="text-main-1">1<sub>st</sub> Friend Game ID</span>
                                                </h4>
                                            </td>
                                            <td><?php echo $udat->fFrindId; ?></td>
                                          </tr>
                                          <tr>
                                            <td>
                                                <h4 class="nk-widget-title">
                                                    <span class="text-main-1">2<sub>nd</sub> Friend Game ID</span>
                                                </h4>
                                            </td>
                                            <td><?php echo $udat->sFrindId; ?></td>
                                          </tr>
                                          <tr>
                                            <td>
                                                <h4 class="nk-widget-title">
                                                    <span class="text-main-1">3<sub>rd</sub> Friend Game ID</span>
                                                </h4>
                                            </td>
                                            <td><?php echo $udat->tFrindId; ?></td>
                                          </tr>
                                          
                                      </tbody>
                                    </table><br>
                                    <button class="nk-btn nk-btn-color-primary" data-toggle="modal" data-target="#exampleModal"> Add Frinds</button>
                            <div class="nk-gap"></div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tabs-1-3">
                            <div class="nk-gap"></div>
                            <div class="col-lg-12">

                                    <div class="nk-gap"></div>
                                    <!-- START: Tabs  -->
                                    <div class="nk-tabs">
                                        <!--
                                            Additional Classes:
                                                .nav-tabs-fill
                                        -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#tabs-2-1" role="tab" data-toggle="tab">+ UPI ID</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#tabs-2-2" role="tab" data-toggle="tab">+ Bank Account</a>
                                            </li>
                                            
                                        </ul>

                            <?php foreach ($bnk as $bnkkey) { ?>
                                        
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="tabs-2-1">
                                                <div class="nk-gap"></div>
                                                <form action="<?php echo base_url(); ?>updateRecivePayment" method="post">
                                                    <input type="hidden" name="uemail" value="<?php echo $this->session->userdata('usr_email'); ?>">
                                                    <p><input type="text" name="upiid" class="form-control" placeholder="Enter UPI ID" value="<?php echo $bnkkey->uPi; ?>"></p>
                                                    <p><input type="submit" name="" value="ADD" class="btn btn-light"></p>
                                                </form>
                                                <div class="nk-gap"></div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tabs-2-2">
                                                <div class="nk-gap"></div>
                                                <form action="<?php echo base_url(); ?>updateRecivePayment" method="post">
                                                    <input type="hidden" name="uemail" value="<?php echo $this->session->userdata('usr_email'); ?>">
                                                    <p><input type="number" name="bankAccNo" value="<?php echo $bnkkey->accountNo; ?>" class="form-control" placeholder="Enter Bank Account Number"></p>
                                                    
                                                    <p><input type="text" name="ifscCode" class="form-control" placeholder="Enter IFSC CODE" value="<?php echo $bnkkey->iFSC; ?>"></p>
                                                    <p><input type="text" name="holName" class="form-control" placeholder="Account Holder Name"  value="<?php echo $bnkkey->holderName; ?>"></p>

                                                    <p><input type="submit" name="" value="ADD" class="btn btn-light"></p>
                                                </form>
                                                <div class="nk-gap"></div>
                                            </div>
                                            
                                        </div>
                            <?php } ?>

                                    </div>
                                    <!-- END: Tabs -->
                                </div>
                            <div class="nk-gap"></div>
                        </div>
                    </div>
                </div>
                <!-- END: Tabs -->
            </div>
        
        
    </div>
</div>
<?php } ?>
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
 


 <!-- The Modal -->
  <div class="nk-modal modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Update My Accounyt</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <?php foreach ($urow as $usedit) { ?>
        <form action="<?php echo base_url(); ?>upduser" method="post">
        <!-- Modal body -->
        <div class="modal-body">
          
              
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" value="<?php echo $usedit->u_name; ?>" placeholder="Name" name="name">
              </div>
              <p></p>
              <!-- <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Email">
              </div> -->
              <p></p>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
                <input type="number" value="<?php  echo $usedit->u_mobil_no; ?>" class="form-control" name="mob" placeholder="Mobile No">
              </div>
              <p></p>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                </div>
                <input type="number" class="form-control" value="<?php  echo $usedit->u_whatsapp; ?>" name="wp" placeholder="Whatsapp no">
              </div>
              <p></p>
              <div class="input-group mb-3">
                <!-- <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div> -->
                <select class="form-control" name="gend">
                    <option value="Male" <?php if($usedit->gender == "Male"){echo "selected";} ?>>Male</option>
                    <option value="Female" <?php if($usedit->gender == "Female"){echo "selected";} ?>>Female</option>
                    <option value="Others"  <?php if($usedit->gender == "Others"){echo "selected";} ?>>Others</option>
                </select>
              </div>
              <div class="nk-gap-1"></div>

              <div class="input-group mb-3">
                <!-- <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div> -->
                <input type="hidden" name="email" value="<?php echo $usedit->use_email; ?>">
                <select class="form-control" name="gname">
                    <?php foreach($allgame as $gm){ ?>
                    <option value="<?php echo $gm->game_id; ?>" <?php if($gm->game_id == $usedit->my_game_id ){echo "selected";} ?>><?php echo $gm->games; ?></option>
                <?php } ?>
                    
                    
                </select>
              </div>
              <div class="nk-gap-1"></div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-gamepad"></i></span>
                </div>
                <input type="text" class="form-control" value="<?php  echo $usedit->my_game_id; ?>" name="gameid" placeholder="Game id">
              </div>
              <!-- <p>Gender</p> -->
              <div class="nk-gap-1"></div>
              <input type="submit" name="" value="Update" class="btn btn-danger btn-block">
          <!-- <button type="button" ><span class="icon ion-paper-airplane"></span> </button> -->
          
        </div>
        
        </form>
    <?php } ?>
      </div>
    </div>
  </div>
    <!-- frinds  -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Frindss</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php foreach ($urow as $usedit) { ?>
            <form action="<?php echo base_url(); ?>updateFrindgameid" method="post">
                <input type="hidden" name="uemail" value="<?php echo $usedit->use_email; ?>">
               <p>1<sub>ST</sub> Frind Game Id</p>
               <p><input type="text" name="fFr" value="<?php echo $usedit->fFrindId; ?>" class="form-control" placeholder=""></p>
               <p>2<sub>ND</sub> Frind Game Id</p>
               <p><input type="text" name="sFr" value="<?php echo $usedit->sFrindId; ?>" class="form-control" placeholder=""></p>
               <p>3<sub>RD</sub> Frind Game Id</p>
               <p><input type="text" name="tFr" value="<?php echo $usedit->tFrindId; ?>" class="form-control" placeholder=""></p>
               <p><input type="submit" name="" value="UPDATE" class="btn btn-light btn-block"></p>
              </form>
        <?php } ?>
        </div>

    </div>
  </div>
</div>



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