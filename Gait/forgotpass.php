<?php

include "header.php";
include "config.php";

?>
<html>

<head>
  <title>Gait</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"  href="assets/css/login.css">
    <link rel="stylesheet"  href="assets/css/main.css">
     <link rel="stylesheet"  href="assets/css/bootstrap.min.css">
     <link rel="stylesheet"  href="/fonts/style.css">
     <script src="assets/js/typed.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3ec1573dc2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/bootstrap.css">

</head>

<body>

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
        <div class="container">
          <a class="navbar-brand" href="index.php" style="font-family: 'Bree Serif', serif">GAIT</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav nav-pills justify-content-end">
          
          <li><a class="na" href="login.php"><i class="fas fa-user"></i> Login</a></li>
          <li><a class="na" href="register.php"><i class="fas fa-user-plus"></i> Register</a></li>
        
          </ul>
          </div>
    </nav>

    <!------Main Content ------>
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
      <h4 style="padding:10px; text-align: center; color: #3b4eda;"> Reset Your Password</h4>
				<form method="post" action="" class="login100-form validate-form flex-sb flex-w">
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "email is required">
						<input class="input100" type="text" name="email" placeholder=" Enter Email">
						<span class="focus-input100"></span>
					</div>
          
          <div style= " padding: 20px;" >      </div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "password is required">
						<input class="input100" type="password" name="password" placeholder=" Enter New Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
		
						</div>
					</div>
          <div style= " padding: 10px;" >      </div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" style=" background-color: #fff6da; color: #3b4eda;">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>


 <?php
session_start();
$message="";
if(count($_POST)>0) {
$temp = $_POST['password'];
$sql = "UPDATE user SET password = $temp WHERE email='" . $_POST["email"]."'";

$query_run = mysqli_query ($conn,$sql);

if ($query_run) {
   header("Location:login.php");
}
else {
   echo '<script type="text/javascript"> alert("!! ERROR !!")</script>';
}

}

?>

</body>
</html>