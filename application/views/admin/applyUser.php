<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>use/assets/images/favicon.png">
    <meta name="author" content="">
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

                    <!-- Page Heading -->
                    <div class="row">
                    <div class="col-lg-6 mb-4">
                    <div class="card bg-info text-white shadow">
                        <div class="card-body">
                            Total Gammer <span class="badge badge-danger">
                                <?php foreach ($t_play as $ctpaly) {echo $ctpaly->total_players; } ?>
                            </span>
                            
                        </div>
                    </div>
                </div>
                    <div class="col-lg-6 mb-4">
                    <div class="card bg-warning text-white shadow">
                        <div class="card-body">
                            Total join Gammer
                            <span class="badge badge-danger"><?php echo count($ord_data); ?></span>
                            
                        </div>
                    </div>
                </div>
            </div>
            <button id="mytblId" class="btn btn-primary">Excel Download</button>
            <div><p>Excel File Download Firefox Browser(recommend)</p></div>
<table class="table table-hover w-auto small table-responsive text-justify text-dark table-bordered dataTable" id="table">
    <thead>

      <tr>
        <th>Date</th>
        <th>Name</th>
        <th>Email</th>
        <th>Game Id</th>
        <th>Payment Id</th>
        <th>Payment details</th>
        <th>WhatsAppNo</th>
        <th>Entry Fee</th>
        <th>User status</th>
        <th>UserTotalkill</th>
        <th>Match_Winner</th>
        <th>Transaction</th>
        <th>Prize Money</th>
        <th>Update</th>
        <th>Delete</th>
        

      </tr>
    </thead>
    <tbody>
        <?php foreach ($ord_data as $all_ord){ ?>
            
      <tr>
        <td >
             <?php foreach ($gResult as $gR) { if ($gR->user_i==$all_ord->us_id) {
               ?>
               <p><?php echo $gR->date; ?></p>
               <?php
            }} ?>
         </td>
        <td><?php echo $all_ord->u_name; ?></td>
        <td><?php echo $all_ord->use_email; ?></td>
        <td><?php echo $all_ord->my_game_id; ?></td>

        <td><?php echo $all_ord->rz_payment_id;?></td>

        <td><?php if(!$all_ord->uPi==0 || !$all_ord->uPi==""){
             echo $all_ord->uPi;
        }else{  ?>
            
            <p>Acco-<?php echo $all_ord->accountNo; ?></p>
            <p>IFSC-<?php echo $all_ord->iFSC; ?></p>
            <p>HName-<?php echo $all_ord->holderName; ?></p>
<?php } ?>
        </td>
        
        <td><?php echo $all_ord->u_whatsapp ?></td>
        <td>₹<?php echo $all_ord->price; ?>/-

        </td>
        <td>
        <form action="<?php echo base_url(); ?>admin/user-ban" method="post">
            <input type="hidden" name="gameid" value="<?php echo $all_ord->id; ?>">
            <input type="hidden" name="o_id" value="<?php echo $all_ord->pay_id; ?>">
            <input type="hidden" name="use_id" value="<?php echo $all_ord->us_id; ?>">
            <input type="checkbox" data-on="Banned" data-off="active" data-toggle="toggle" data-onstyle="danger" data-offstyle="success" onchange ="var a= confirm('Are you sure want to Banned this item?');if(a){ this.form.submit();}else{
                window.location.reload();
            }" name="u_b_s" <?php if ($all_ord->user_ban == "banned") {
                echo "checked" ;
            } ?> >
        </form>
    </td>
        <form action="<?php echo base_url(); ?>upd-result" method="post">
        <td>

            <input type="number" name="par_kill" class="form-control" value="" placeholder="" id="text">
            <?php foreach ($gResult as $gR) { if ($gR->user_i==$all_ord->us_id) {
               ?>
               <p><?php echo$gR->total_kill;  ?> kill</p>
               <?php
            }} ?>
            <input type="hidden" name="gPrice" value="<?php echo $all_ord->price; ?>">
            <input type="hidden" name="kpersent" value="<?php echo $all_ord->par_kill_percentage; ?>">
            <input type="hidden" name="fwinper" value="<?php echo $all_ord->fwin_percentage; ?>">
            <input type="hidden" name="swinper" value="<?php echo $all_ord->swin_percentage; ?>">
            
        </td>
        <td>
            <select class="form-control" name="win" id="selst">
                <option></option>
                <option value="winners">1stWin</option>
                <option value="runners">2ndWin</option>
            </select>
            <?php foreach ($gResult as $gR) { if ($gR->user_i==$all_ord->us_id) {
               ?>
               <p><?php echo$gR->win_text; ?></p>
               <?php
            }} ?>
            <?php foreach ($gResult as $gR) { if ($gR->user_i==$all_ord->us_id) {
               ?>
               <div>₹<?php echo$gR->fWin;  ?></div>
               <?php
            }} ?>
        </td>
        
        <td>
            <select class="form-control" name="statuspay" id="sel">
                <option value="successful">successful</option>
                <option value="refund">refund</option>
            </select>
            <?php foreach ($gResult as $gR) { if ($gR->user_i==$all_ord->us_id) {
               ?>
               <p><?php echo$gR->ststuaPay; ?></p>
               <?php
            }} ?>
        </td>
           <td>
               <p><?php foreach ($gResult as $gR) { if ($gR->user_i==$all_ord->us_id) { if ($gR->ststuaPay=="refund") {
                   ?>
                   <p>₹<?php echo $all_ord->price; ?></p>
                   <?php
               }else{
               ?>
               <p>₹<?php echo$gR->prize_many;  ?></p>
               <?php
            }}} ?></p>
           </td> 
        <td>

        <input type="hidden" name="gameid" value="<?php echo $all_ord->id; ?>">
        <input type="hidden" name="userid" value="<?php echo $all_ord->us_id; ?>">
        <input type="hidden" name="orderid" value="<?php echo $all_ord->pay_id; ?>">
        <?php if(!$all_ord->uPi==0 || !$all_ord->uPi==""){
             $upiiduser= $all_ord->uPi;
        }else{  
            $accountNuser = $all_ord->accountNo;
            $ifsC = $all_ord->iFSC;
             $hName = $all_ord->holderName;  } ?>
        <input type="hidden" name="uUpi" value="<?php if(isset($upiiduser)){ echo $upiiduser;} ?>">

        <input type="hidden" name="uAcc" value="<?php if(isset($accountNuser)){ echo $accountNuser;} ?>">
        <input type="hidden" name="uIsc" value="<?php if(isset($ifsC)){ echo $ifsC; } ?>">
        <input type="hidden" name="uHname" value="<?php if(isset($hName)){ echo $hName; } ?>">

        <input type="submit" name="" value="Update" class="btn btn-success"></td>
        </form>

         <td><a href="<?php echo base_url(); ?>admin/delete-result/<?php echo $all_ord->id; ?>/<?php echo $all_ord->us_id; ?>/<?php echo $all_ord->pay_id; ?>" title="" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this item?');">Remove</a></td>
         
         
      </tr>
      <?php } ?>
    </tbody>
  </table>
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
<script>
    var sel = document.getElementById("sel"), text = document.getElementById("text"),select = document.getElementById("selst");

sel.onchange = function(e) {
  text.disabled = (sel.value == "refund");
  select.disabled = (sel.value == "refund");
};




</script>
<script src="<?php echo base_url(); ?>admin/tempjs/table2excel.js"></script>
<script type="text/javascript">
    document.getElementById('mytblId').addEventListener('click',function(){
        var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("table"));
    });
</script>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
</body>

</html>