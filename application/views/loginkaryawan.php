<!DOCTYPE html>
<html lang="en">
<head>
	<title>login karyawan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url()?>aset/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>aset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>aset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>aset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>aset/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>aset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>aset/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>aset/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>aset/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>aset/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>aset/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="<?php echo base_url()?>index.php/c_praktikum/login">
					<span class="login100-form-title p-b-32">
						Login Karyawan
					</span>

					<span class="txt1 p-b-11">
						Nama
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Nama is required">
						<input class="input100" type="text" name="nama" >
						<span class="focus-input100"></span>
                    </div>
                    
                    <span class="txt1 p-b-11">
						NIP
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Nip is required">
						<input class="input100" type="text" name="nip" >
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="flex-sb-m w-full p-b-48">
						<div>
							
					</div>

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" name="submit" value="Login">
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>aset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>aset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>aset/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url()?>aset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>aset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>aset/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url()?>aset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>aset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>aset/js/main.js"></script>

</body>
</html>