<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login E-Raport</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('logincss/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logincss/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logincss/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logincss/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logincss/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('logincss/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logincss/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logincss/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('logincss/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('logincss/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('logincss/css/main.css')}}">
<!--===============================================================================================-->
	<style>
		.btn-admin{
			width: 100px;
			background-color: rgb(43, 199, 255);
			color :white;
		}
		.btn-guru{
			width: 100px;
			background-color: rgb(124, 31, 255);
			color :white;
		}
		.btn-siswa{
			width: 100px;
			background-color: rgb(255, 87, 3);
			color :white;
		}
	</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{asset('logincss/images/bg-01.jpg')}}');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST" action="/postloginguru">
					{{ csrf_field() }}
					<span class="login100-form-title p-b-49">
						Login E-Raport
					</span>
					<p> <b>Login Sebagai : </b></p>
					<br>
					<div style="text-align: center; font-size: 24px; font-weight: bold;">
						<a href="/login" class="btn btn-admin ml-2"> Admin </a>
						<a href="/loginguru" class="btn btn-guru ml-4"> Guru </a>
						<a href="/loginsiswa" class="btn btn-siswa ml-4"> Siswa </a>
					</div>
					<br>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
						<span class="label-input100">Kode Guru</span>
						<input class="input100" type="text" name="nip" placeholder="Masukkan Kode Guru">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="Password" name="password" placeholder="Masukkan password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31 mt-3">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
					<br>
					@if (session('message'))
					<div class="alert alert-danger alert-dismissible show fade">
					<div class="alert-body">
						<button class="close" data-dissmiss="alert"></button>
						<span></span>
					</button>
					{{session ('message')}}
					</div>
					</div>
						@endif
					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset('logincss/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('logincss/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('logincss/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('logincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('logincss/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('logincss/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('logincss/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('logincss/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('logincss/js/main.js')}}"></script>

</body>
</html>