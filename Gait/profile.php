<?php


  include "header.php";
  include "config.php";
  session_start();


  $nam = $_SESSION['name'];
 	$query = "SELECT * FROM uploadedimage WHERE name LIKE '%".$nam."%'";
 
	$result = mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
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
          <a class="navbar-brand" href="index.php" style="font-family: 'Bree Serif', serif">GAIT</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav nav-pills justify-content-end">
          

          <li><a class="na" href="product.php">Home</a></li>
          <li><a class="na" href=">addproduct.php">Add Product</a></li>
          <li><a class="na" href="profile.php">Welcome <?php echo $_SESSION['name']; ?></a></li>
          <li><a class="na" href="logout.php">Logout</a></li>
          
          </ul>
          </div>
    </nav>

    <div class="container">
  <div class="row">
    <div class="col-4"">
      <div>
      	<h1><?php echo $_SESSION['name']; ?></h1>
      	<h3><?php echo $_SESSION["email"]; ?></h3>
        <h3><?php echo $_SESSION["create_date"]; ?></h3>
       <h3> <a href="stripe.php"> Payment </a>  </h3>
      </div>
    </div>
    
    <div class="col-8">

   
      <?php 


    while($row=mysqli_fetch_array($result))   : ?>
    
    <div class="well">
      <h3><?php echo $row['pname']; ?></h3>
      <small><?php echo $row['link']; ?></small>
      <hr />
      <p><?php echo $row['body']; ?></p>
     
      <br />

      <?php echo '<img src="imagesuploadedf/'.$row['imagename'].'" height="150" width="150" >'; ?>
      <a class="btn btn-default" href="<?php echo $row['link']; ?>" target="_blank">Go To Website</a>
      <a class="btn btn-default" href="" target="_blank">Delete Product</a>
    </div>
    
    <?php  endwhile; ?>
    </div>
  </div>
	</div>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>