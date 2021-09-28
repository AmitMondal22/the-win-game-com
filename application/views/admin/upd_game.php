<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>use/assets/images/favicon.png">
    <title>EC</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
<?php $this->load->view('admin/ins/sudebar'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('admin/ins/topbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php foreach ($rowg as $rg) { ?>
                    <!-- Page Heading -->
                    <form action="<?php echo base_url(); ?>update_game" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <input type="hidden" name="g_id" value="<?php echo $rg->id; ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <p>room username</p>
                                <p><input type="text" name="rname" value="<?php echo $rg->roomid; ?>" class="form-control"></p>
                            </div>
                            <div class="col-md-6">
                                <p>room Password</p>
                                <p><input type="text" name="rpass" value="<?php echo $rg->roompassword; ?>" class="form-control"></p>
                            </div>
                        </div>
                        
                        <p>Tournament Name *</p>
                        <p><input type="text" name="g_title" class="form-control" value="<?php echo $rg->game_name; ?>" required></p>

                        <p><select name="teamid" id="" class="form-control">
                            <?php foreach ($tdata as $teamkey ){ ?>
                            <option value="<?php echo $teamkey->gt_id; ?>" <?php if($teamkey->gt_id == $rg->team_type_id){echo'selected';}  ?> >     <?php echo $teamkey->name_team; ?></option>
                        <?php } ?>
                        </select></p>

                        <div class="row">
                            <div class="col-md-4">
                                <p>Entry fees <b> ₹</b> *</p>
                                <p>
                                    <input type="number" id="pointspossible" value="<?php echo $rg->game_fees; ?>" name="g_price" class="form-control  one umany" required>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p>GST 18%</p>
                                <?php 
                                    $x=$rg->game_fees;
                                    $p=(18*$x)/100;


                                 ?>
                                <input type="number"  id="pointsperc" value="<?php echo $p ?>" name="g_price" class="form-control" disabled required>
                            </div>
                            <div class="col-md-4">
                                <p>Total</p>
                                <p>
                                    <?php 
                                    $t=$x-$p;
                                     ?>
                                    <input type="text" name="" value="<?php echo $t ?>" id="total" class="form-control" disabled>
                                </p>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-4">
                                <p>Total players in match *</p>
                                <p>
                                    <input type="number" name="tot_player" class="form-control tplay" value="<?php echo $rg->total_players; ?>" required>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p>Macth date *</p>
                                <p>
                                    <input type="date" name="m_date" class="form-control" min="<?php echo date('Y-m-d'); ?>" value="<?php echo $rg->mach_date ?>" required>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p>Match time *</p>
                                <p>
                                    <input type="time" name="m_time"  value="<?php echo $rg->mach_time ?>" class="form-control" min="05:10:PM" required>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                             <div class="col-md-4">

                                <p>Every kill ₹<span  class="result"></span>/-</p>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">%</span>
                                  </div>
                                  <input type="number" name="kill" class="form-control two"  id="usr" name="username" value="<?php echo $rg->par_kill_percentage ?>" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p>1st Winner ₹<span  class="resultfs"></span>/-</p>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">%</span>
                                  </div>
                                  <input type="number" name="fwin" class="form-control firswin"  id="usr" value="<?php echo $rg->fwin_percentage ?>"  required>
                                </div>

                                
                            </div>
                            <div class="col-md-4">
                                <p>2nd Winner ₹<span  class="resultsn"></span>/-</p>
                                
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">%</span>
                                  </div>
                                  <input type="number" name="swin" class="form-control firssnd"  id="usr" value="<?php echo $rg->swin_percentage; ?>" required>
                                </div>
                            </div>



                            
                           
                            
                        </div>


                        <p>About</p>
                        <p>
                            <textarea name="about_game" class="form-control" maxlength="100" placeholder="Maximum 100 word type">
                                <?php echo $rg->gam_ablut; ?>
                            </textarea>
                        </p>
                        <p>Rules of the game *</p>
                        <p>
                            <textarea class="form-control" name="g_rules" required>
                                <?php echo $rg->rules_game; ?>
                            </textarea>
                        </p>
                        
                        <p>Game Banner *</p>
                        <div class="box effect5">
                            <img src="<?php echo base_url(); ?>/game_image/<?php echo $rg->g_banner; ?>" alt="" style="width: 200px; margin-bottom: 1%; -webkit-filter: drop-shadow(5px 5px 5px #222); filter: drop-shadow(5px 5px 5px #222);">
                        </div>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="banner" >
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        
                        <p><input type="submit" name="ind_p" value="UPDATE" class="btn btn-success btn-block"></p>
                    </form>
                <?php } ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>admin/js/sb-admin-2.min.js"></script>

    <!-- cnd editor -->
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'g_rules' );
    </script>
    <!-- end cnd editor -->
    <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>

 

    <script type="text/javascript">
        $(function(){

    $('#pointspossible').on('input', function() {
      calculate();
    });
    
    function calculate(){
        var pPos = parseInt($('#pointspossible').val()); 
        var pEarned = 18;//parseInt($('#pointsgiven').val());
        var perc="";
        var net="";

        if(isNaN(pPos) || isNaN(pEarned)){
            perc=" ";
           }else{
           perc = ((pEarned*pPos) / 100).toFixed(3);
           }

           $('#pointsperc').val(perc);

           if(isNaN(pPos) || isNaN(perc)){
            net=" ";
           }else{
           net=(pPos - perc).toFixed(3);
           }
        $('#total').val(net);
    }

});






$(".one, .two").keyup(function() {
  if($('.one').val() != "" && $('.two').val() != "") {
    var result = (parseInt($('.one').val())/100)* parseInt($('.two').val());
    $('.result').text(result);
  }
});

$(".umany, .tplay, .firswin").keyup(function() {
  if($('.umany').val() != "" && $('.tplay').val() != ""&& $('.firswin').val() != "") {
    var totMany= (parseInt($('.umany').val()) * parseInt($('.tplay').val()));
    var result = ((totMany / 100) * parseInt($('.firswin').val()));
    $('.resultfs').text(result);
  }
});
$(".umany, .tplay, .firssnd").keyup(function() {
  if($('.umany').val() != "" && $('.tplay').val() != ""&& $('.firssnd').val() != "") {
    var totMany= (parseInt($('.umany').val()) * parseInt($('.tplay').val()));
    var result = ((totMany / 100) * parseInt($('.firssnd').val()));
    $('.resultsn').text(result);
  }
});
    </script>

</body>

</html>