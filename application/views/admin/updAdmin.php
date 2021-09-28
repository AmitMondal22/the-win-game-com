<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>use/assets/images/favicon.png">
    <title>Add User</title>
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
<?php foreach ($role as $admin_ditels) { ?>
                    <!-- Page Heading -->
                    <form action="<?php echo base_url('update-admin'); ?>" method="post">
                    <input type="hidden" name="admin_id" value="<?php echo $admin_ditels->admin_id; ?>">
                        <div class="row text-dark">
                            <div class="col-md-6">
                                <p>Name</p>
                                <p><input type="text" id="" class="form-control" name="name" value="<?php echo $admin_ditels->admin_name; ?>"></p>
                                <p>gender</p>

                                <p style="margin-bottom: 31px;">
                                <input type="radio" name="gen" id="" value="Male" <?php if($admin_ditels->gender=="Male"){echo 'checked';} ?>> Male
                                <input type="radio" name="gen" value="Female" id="" style="margin-left:10px;" <?php if($admin_ditels->gender=="Female"){echo 'checked';} ?>> Female
                                <input type="radio" name="gen" value="Others" id="" style="margin-left:10px;" <?php if($admin_ditels->gender=="Others"){echo 'checked';} ?>> Others</p>


                                <p>Admin role</p>
                                <p>
                                    <select name="adminRole" id="" class="form-control">
                                        <option value="">select</option>
                                        <?php foreach ($row as $key) { ?>
                                        <option value="<?php echo $key->role_id; ?>"<?php if($admin_ditels->roll == $key->role_id){echo'selected'; } ?> ><?php echo $key->type_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>Email</p>
                                <p><input type="email" name="email" id="" class="form-control" value="<?php echo $admin_ditels->admin_email; ?>"></p>
                                <p>Date of birth</p>
                                <p><input type="date" name="dob" id="" class="form-control" value="<?php echo $admin_ditels->dob; ?>"></p>
                                <p>Password</p>
                                <p><input type="password" name="passwo" class="form-control"></p>
                            </div>
                        </div>
                    
                    
                    
                    
                    
                    
                    <p><input type="submit" value="UPDATE" class="btn btn-success btn-block"></p>
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

</body>

</html>