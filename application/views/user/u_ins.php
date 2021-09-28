<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

    
</head>
<body>
	<div class="container">
	<form action="<?php echo base_url(); ?>save-info" method="post">
		<p>Full Name</p>
		<p><input type="text" name="name" class="form-control"></p>
		<p>User name</p>
		<p><input type="text" name="username" class="form-control"></p>
		<p>Email</p>
		<p><input type="email" name="email" class="form-control"></p>
		<div class="row">
			<div class="col-md-6">
				<p>Mobile No</p>
				<p><input type="text" name="mobileno" id="contact" class="form-control"></p>
				<p><input type="checkbox" id="check"> Mobile No WhatsApp No</p>
			</div>
			<div class="col-md-6">
				<p>Whatsapp No</p>
				<p><input type="text" name="whatsappno" class="form-control" id="permanent"></p>
			</div>

		</div>
		
		
		<p>Password</p>
		<p><input type="password" name="password" class="form-control"></p>
		<p><input type="submit" name="save" value="CREATE ACCOUNT" class="btn btn-success btn-block"></p>
	</form>
</div>






	 <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
  	$('#check').click(function() {
    var c=$('#contact').val();
    $("#permanent").val(c);
});
  </script>

</body>
</html>