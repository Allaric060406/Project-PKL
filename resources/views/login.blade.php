<!DOCTYPE html>
<html lang="en">
<head>
	<title>Passanger PIL</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="imagess/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor11/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fontss/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fontss/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor11/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor11/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor11/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor11/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor11/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="csss/util.css">
	<link rel="stylesheet" type="text/css" href="csss/main.css">
<!--===============================================================================================-->
</head>
<body>
    <!-- <form action="main.blade.php" method="post"> -->
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form action="/login" method="post" class="login100-form validate-form">
                        @csrf
                        <span class="login100-form-title p-b-26">
                            <img src="images/PIL.jpg" alt="" srcset="" width="65%">
                        </span>
                        <span class="login100-form-title p-b-48">
                            
                        </span>

                        @if(session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissble fade show" role="alert">
                                {{session('loginError')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"arial-label="close"></button>
                            </div>

                        @endif
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                            <input class="input100 @error('email') is-invalid @enderror" type="text" name="email" autofocus required value="{{old('email')}}">
                            <span class="focus-input100" data-placeholder="Email"></span>

                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="password">
                            <span class="focus-input100" data-placeholder="Password"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <a class="txt2" href="main.blade.php">
                                <button class="login100-form-btn">Login </button>
                                </a>
                            </div>
                        </div>
                        <div class="text-center p-t-50">
                            <a class="txt2" href="Forgot">
                                Forget password?
                            </a>
                        </div>
                        <div class="text-center ">
                            <span class="txt1">
                                Don’t have an account?
                            </span>

                            <a class="txt2" href="register">
                                Sign Up
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- </form> -->

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor11/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor11/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor11/bootstrap/js/popper.js"></script>
	<script src="vendor11/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor11/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor11/daterangepicker/moment.min.js"></script>
	<script src="vendor11/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/1countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="jss/main1.js"></script>

</body>
</html>
