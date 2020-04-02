<?php

include "header.php";
include "config.php";



?>
<html>
<head>
  <title>Gait Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"  href="assets/css/home.css">
    <link rel="stylesheet"  href="assets/css/main.css">
     <link rel="stylesheet"  href="assets/css/bootstrap.min.css">
     <link rel="stylesheet"  href="/fonts/style.css">
     <script src="assets/js/typed.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3ec1573dc2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
        <div class="container">
          <a class="navbar-brand" href="#" style="font-family: 'Bree Serif', serif">GAIT</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav nav-pills justify-content-end">
          <?php if(isset($_SESSION['is_logged_in'])) : ?>

          <li><a class="na" href="">Home</a></li>
          <li><a class="na" href=">product/index">Product</a></li>
          <li><a class="na" href="#">Welcome <?php echo $_SESSION['name']; ?></a></li>
          <li><a class="na" href="register.php"><i class="fas fa-user-plus"></i> Register</a></li>
          <li><a class="na" href="logout.php">Logout</a></li>
          <?php else : ?>
          <li><a class="na" href="alogin.php"><i class="fas fa-user"></i> Login</a></li>
          
        <?php endif; ?>
          </ul>
          </div>
    </nav>

    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Admin Login</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="">
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" />
      </div>
      <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
    </form>
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
 
$result = mysqli_query($conn,"SELECT * FROM admin WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
  $_SESSION['is_logged_in'] = true;
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['name'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["name"])) {
header("Location:aproduct.php");
}
?>

</body>
</html>