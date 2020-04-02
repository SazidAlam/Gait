<?php

include "header.php";
include "config.php";

session_start();

?>
<html>
<head>
  <title>Gait</title>
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
          <a class="navbar-brand" href="aproduct.php" style="font-family: 'Bree Serif', serif">GAIT</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav nav-pills justify-content-end">
          
          <li><a class="na" href="aproduct.php">Product</a></li>
          <li><a class="na" href="#">User</a></li>
          <li><a class="na" href="category.php">Category</a></li>
          <li><a class="na" href="aregister.php">Register</a></li>
          <li><a class="na" href="#">Welcome <?php echo $_SESSION['name']; ?></a></li>
          <li><a class="na" href="logout.php">Logout</a></li>
        
          </ul>
          </div>
    </nav>

   <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Register User</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" />
      </div>
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


if (isset($_POST['submit'])) {
     //echo '<script type="text/javascript"> alert("review button click")</script>';
     
      $query = "INSERT INTO admin (name,email,password)
     VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."')";



     $query_run = mysqli_query ($conn,$query);

     if ($query_run) {
        echo '<script type="text/javascript"> alert("Registration Successful.")</script>';
        header("Location:login.php");
     }
     else {
        echo '<script type="text/javascript"> alert("!! ERROR !!")</script>';
     }

     }
     


   

mysqli_close($conn);




?>
