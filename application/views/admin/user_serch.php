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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">User Query</h1>
                    <div class="row">
                    <div class="col-lg-5">
                        <div class="card card shadow mb-6">
                            <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Serch</h6>
                        </div>
                            <div class="card-body">
                        <form action="<?php echo base_url(); ?>userSerch" method="post">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Serch Email" name="userEmail">
                          <div class="input-group-append">

                            <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                        
                        </form>
                        <p><a href="<?php echo base_url() ?>admin/user-query" class="btn btn-secondary btn-block">RESET</a></p>
                    </div>
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="row">
<?php foreach ($row as $u_data) {?>
                    <div class="col-lg-7">
                    <div class="card shadow mb-6">
                        
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><?php echo $u_data->u_name; ?></h6>
                        </div>
                        <div class="card-body">
                            <p>Email-<?php echo $u_data->use_email; ?></p>
                            <p>Gender-<?php echo $u_data->gender; ?></p>
                            <p>Mobile No-<?php echo $u_data->u_mobil_no; ?></p>
                            <p>WhatsApp No-<?php echo $u_data->u_whatsapp; ?></p>
                            <p>User Status-<?php echo $u_data->u_status; ?></p>
                            <p>Account Status-<?php echo $u_data->user_ban; ?></p>
                            <?php $gidfind=$u_data->ban_essu; ?>
                            <p>Update Date-<?php echo $u_data->l_date; ?></p>
                            
                        </div>

                        </div>
                    </div>
                    <div class="col-lg-5">
                    <div class="card shadow mb-6">
                        
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><?php echo $u_data->games; ?></h6>
                        </div>
                        <div class="card-body">
                            <p>Game Id-<?php echo $u_data->my_game_id; ?></p>
                            <p>1st Friend Game Id-<?php echo $u_data->fFrindId; ?></p>
                            <p>2nd Friend Game Id-<?php echo $u_data->sFrindId; ?></p>
                            <p>3rd Friend Game Id-<?php echo $u_data->tFrindId; ?></p>
                            <p>Update Date-<?php echo $u_data->date; ?></p>
                          
                                                    
                        </div>

                        </div>
                    </div>
                    <?php } ?>

                </div><p></p>

<?php foreach ($tData as $gtData) { //if ($gtData->payment_satatus=='complete') { 
                            if ($gtData->pay_id== $gidfind) {
if ($gtData->user_ban== "banned") {
                             ?>
                               <table class="table table-bordered table-hover bg-danger w-auto small text-white table-responsive">
                        <thead>
                            <tr>
                                <th>Game Image</th>
                                <th>Game Id</th>
                                <th>order Id</th>
                                <th>Match Start Date</th>
                                <th>Match Start Time</th>
                                <th>Payment Status</th>
                                <th>Join Date</th>
                                <th>Payment Id</th>
                                
                                
                                
                                <th></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            <tr>
                                <td><img src="<?php echo base_url(); ?>game_image/<?php echo $gtData->g_banner; ?>"width="50%"></td>
                                
                                <td><?php echo $gtData->id; ?></td>
                                <td><?php echo $gtData->pay_id; ?></td>

                                <td><?php echo $gtData->mach_date; ?></td>
                                <td><?php echo $gtData->mach_time; ?></td>
                                <td><?php echo $gtData->payment_satatus; ?></td>
                                <td><?php echo $gtData->payment_date; ?></td>
                                
                                <td><?php echo $gtData->rz_payment_id; ?></td>
                                <td><a href="<?php echo base_url(); ?>admin/all-gemmar/<?php echo $gtData->id; ?>" title="" class="btn btn-info">game info</a></td>
                            </tr>
                        
                            </tbody>
                    </table>
                    <?php }}}//} ?>

                    <table class="table table-bordered dataTable table-responsive table-hover" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                            <tr role="row">
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 78px;">Game Image</th>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 78px;">Game Id</th>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 78px;">order Id</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 105px;">Match Start Date</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 105px;">Match Start Time</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 61px;">Payment Status</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 31px;">Join Date</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 70px;">Payment Id</th>
                                
                                
                                
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 66px;"></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php foreach ($tData as $gtData) { //if ($gtData->payment_satatus=='complete') { ?>
                            <tr class="odd">
                                <td class="sorting_1"><img src="<?php echo base_url(); ?>game_image/<?php echo $gtData->g_banner; ?>"width="100%"></td>
                                
                                <td><?php echo $gtData->id; ?></td>
                                <td id="<?php echo $gtData->pay_id; ?>"><?php echo $gtData->pay_id; ?></td>

                                <td><?php echo $gtData->mach_date; ?></td>
                                <td><?php echo $gtData->mach_time; ?></td>
                                <td><?php echo $gtData->payment_satatus; ?></td>
                                <td><?php echo $gtData->payment_date; ?></td>
                                
                                <td><?php echo $gtData->rz_payment_id; ?></td>
                                <td><a href="<?php echo base_url(); ?>admin/all-gemmar/<?php echo $gtData->id; ?>" title="" class="btn btn-info">game info</a></td>
                            </tr>
                        <?php }//} ?>
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

</body>

</html>