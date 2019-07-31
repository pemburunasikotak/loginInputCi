
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

	<title></title>

		<!-- <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

	<head>
		<script src="jquery/jquery.min.js"></script>
		<!---- jquery link local dont forget to place this in first than other script or link or may not work ---->
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!---- boostrap.min link local ----->
		
		<link rel="stylesheet" href="styleloginbaru.css">
		<!---- boostrap.min link local ----->

		<script src="js/bootstrap.min.js"></script>
		<!---- Boostrap js link local ----->
		
		<!-- <link rel="icon" href="images/icon.png" type="image/x-icon" /> -->
		<!---- Icon link local ----->
		
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<!---- Font awesom link local ----->
		
		<link rel="stylesheet" href="css/stylelogin.css">
		<!-- CSS mandiri -->
        
	</head>
	<body class="bg-login">
	<div class="container-fluid">
		<div class="container">
			<h2 class="text-center daftar" id="title">Form Pendaftaran</h2>
				
			<div class="row daftarrow">
				<div class="col-md-5 center_div" >
                    <?php echo form_open('welcome/regist')?>
						<fieldset>							
							<p class="text-uppercase pull-center"> SIGN UP.</p>	
 							<div class="form-group">
								<input type="text" name="name" id="name" class="form-control input-lg" placeholder="name">
							</div>
							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="email">
                            </div>
                            <div class="form-group">
								<input type="text" name="username" id="username" class="form-control input-lg" placeholder="username">
							</div>
							<div class="form-group">
								<input type="text" name="password" id="password" class="form-control input-lg" placeholder="Masukkan password">
                            </div>
                            <div class="form-group">
								<input type="text" name="password2" id="password2" class="form-control input-lg" placeholder="confirmasi password">
							</div>

 								<input type="submit" name="registrasi" class="btn btn-lg btn-primary   value="Register">
 							</div>
						</fieldset>
					<?php echo form_close()?>
				</div>
				
				
				<div class="col-md-2">
					<!-------null------>
				</div>
				
				
			</div>
		</div>
		
		</p>
	</div>
	</body>
	 

</html>