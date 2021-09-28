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

                    <table class="table table-hover w-auto small table-responsive center text-dark table-bordered dataTable" >
                        <thead>
                          <tr>
                            <th>GAME ID</th>
                            <th>Entry Name</th>
                            <th>Tournament Name</th>
                            <th>Entry fees</th>
                            <th>Total players in match</th>
                            <th>Sports match date</th>
                            <th>Sports match time</th>
                            <!-- <th>Rules of the game</th> -->
                            <th>Game Thumbnail</th>
                            <th>Post Match</th>
                            <th>Applied Users</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($g_data as $g) {  ?>
                          <tr>
                            
                            <td><?php echo $g->id; ?></td>
                            <td>No name</td>
                            <td><?php echo $g->game_name; ?></td>
                            <td><?php echo '₹'; echo $g->game_fees; echo '/-'; ?></td>
                            <td><?php echo $g->total_players; ?></td>
                            <td><?php echo $g->mach_date; ?></td>
                            <td><?php $date =  $g->mach_time; 
                                echo date('h:i:s a', strtotime($date));  ?></td>
                            <!-- <td><?php echo $g->rules_game; ?></td> -->
                                <td>
                                    <form action="<?php echo base_url(); ?>upd_gametable" method="post">
                                    <input type="hidden" name="game_id" value="<?php echo $g->id; ?>">
                                <input type="checkbox"  data-toggle="toggle" data-onstyle="success" data-offstyle="danger" name="updGstatus" onchange ="var a= confirm('Are you sure want to Change this Game?');if(a){ this.form.submit();}else{
                window.location.reload();
            }"  <?php if($g->post_status == "active"){echo'checked';} ?>>
</form>

                                



                                </td>

                            <td><img src="<?php echo base_url(); ?>game_image/<?php echo $g->g_banner ?>" alt="" style="width: 100px"></td>
                            <td>
                                <a href="<?php echo base_url(); ?>admin/all-gemmar/<?php echo $g->id; ?>" class="btn btn-info">View</a>
                            </td>
                            <td>
                                <a href="<?php echo base_url(); ?>update/<?php echo $g->id; ?>" class="btn btn-info">Edit</a>
                            </td>
                            <td><a href="<?php echo base_url(); ?>delete/<?php echo $g->id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this item?');">Remove</a></td>
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



    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
</body>

</html>