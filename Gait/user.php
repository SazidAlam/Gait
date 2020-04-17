<?php
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.
// $conn = mysqli_connect("localhost", "root", "mysql", "gait");
// if($conn) {
// //if connection has been established display connected.
// echo "connected";
// }

  include "header.php";
  include "config.php";
  session_start();

$query = "SELECT * FROM user";

$result = mysqli_query($conn, $query);

// while($row=mysqli_fetch_array($result)) {
//     $img = $row['imagename'];
//     $name = $row['name'];
//     $body = $row['body'];
//     $link = $row['link'];

//     echo $name;
//     echo $body;
//     echo $link;
//     echo '<img src="imagesuploadedf/'.$img.'" height="150" width="150" >';
//     }

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
  <style type="text/css">
    h4 {
      text-align: justify;
      padding: 10px;
    }
    
    .btn {
      
      padding: 10px;
      margin: 2px;
      position: center;
      
    }
    div {
      padding: 5px;
    }
    body {
      color: white;
  background: #1F1C2C;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #928DAB, #1F1C2C);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #928DAB, #1F1C2C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    .btn-default {
      color: #fff;
      background-color: transparent;
      border-color: #7a849e;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
        <div class="container">
          <a class="navbar-brand" href="aproduct.php" style="font-family: 'Bree Serif', serif">GAIT</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav nav-pills justify-content-end">
          

          <li><a class="na" href="aproduct.php">Product</a></li>
          <li><a class="na" href="user.php">User</a></li>
          <li><a class="na" href="category.php">Category</a></li>
          <li><a class="na" href="aregister.php">Register</a></li>
          <li><a class="na" href="#">Welcome <?php echo $_SESSION['name']; ?></a></li>
          <li><a class="na" href="logout.php">Logout</a></li>
          
          </ul>
          </div>
    </nav>

    <div>
      
     <?php 


    while($row=mysqli_fetch_array($result))   : ?>

    <div class="product">
      
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3"><h4><?php echo $row['name']; ?></h4></div>
          <div class="col-lg-4 col-md-4"><h4><?php echo $row['email']; ?></h4></div>
          <div class="col-lg-3 col-md-3"><h4><?php echo $row['create_date']; ?></h4></div>
          <div class="col-lg-2 col-md-2">
            <button class="btn btn-default">Remove User</button>
          </div>
        </div>
      </div>
    </div>
    <hr>
    
    <?php  endwhile; ?>

    
    </div>
  

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>

