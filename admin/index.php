<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistem Informasi SKPI - Universitas Katolik Santo Thomas</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="apple-touch-icon" sizes="180x180" href="images/logos/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/logos/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/logos/favicon-16x16.png">
	<link rel="manifest" href="images/logos/site.webmanifest">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg_skpi.png');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-30 p-b-54">
				<form action="login_act.php" class="login100-form validate-form" method="POST" autocomplete="off">
					<div class="justify-content-center text-center p-b-10">
						<img src="images/UNIKA.png" alt="logo" width="100px">
					</div>
					<span class="login100-form-title p-b-49 text-white">Login Admin</span>
					<div class="p-t-0 text-white text-center">
						<!-- cek pesan notifikasi -->
						<?php 
						if(isset($_GET['pesan'])){
							if($_GET['pesan'] == "gagal"){ ?>
								<div class="alert alert-danger" role="alert">
									username dan password salah!
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							<?php 
							}else if($_GET['pesan'] == "logout"){ ?>
								<div class="alert alert-warning" role="alert">
									Anda berhasil Logout !
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							<?php
							}else if($_GET['pesan'] == "belum_login"){ ?>
								<div class="alert alert-danger" role="alert">
									Anda belum login !
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							<?php }
						}
						?>
					</div>
					<div class="wrap-input100 validate-input m-b-23">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="username" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="password" required id="password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-b-20">
						<div class="form-check">
							<input type="checkbox" id="show-checkbox" class="form-check-input" onchange="showPassword()">
							<label class="form-control-label fs-14 text-white">Tampilkan Password</label>
						</div>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
	<script>
        function showPassword() {
            var passwordInput = document.getElementById("password");
            var showCheckbox = document.getElementById("show-checkbox");

            if (showCheckbox.checked) {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>

</body>
</html>