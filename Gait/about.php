<?php 
	include "header.php";
	include "config.php";
  session_start();
 ?>

 <html>
<head>
  <title>Gait- About</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"  href="assets/css/home.css">
   
     <link rel="stylesheet"  href="assets/css/bootstrap.min.css">
     <link rel="stylesheet"  href="assets/fonts/style.css">
     <link rel="stylesheet" href="assets/css/bootstrap.css"> 

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3ec1573dc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="assets/css/about.css">
</head>

<body>
<!-------------- Fixed nav-------------------->

  <nav class="navbar navbar-expand-sm mb-3">
        <div class="container">
          <a class="navbar-brand" href="#" style="font-family: 'Bree Serif', serif; font-size:50px">GAIT</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav nav-pills justify-content-end">
          <?php if(isset($_SESSION['is_logged_in'])) : ?>

          <li><a class="nap" href="product.php">Home</a></li>
          <li><a class="nap" href="addproduct.php">Add Product</a></li>
          <li><a class="nap" href="profile.php">Welcome <?php echo $_SESSION['name']; ?></a></li>
          <li><a class="nap" href="logout.php">Logout</a></li>
          <?php else : ?>
          <li><a class="nap" href="login.php"><i class="fas fa-user"></i> Login</a></li>
          <li><a class="nap" href="register.php"><i class="fas fa-user-plus"></i> Register</a></li>
        <?php endif; ?>
          </ul>
          </div>
    </nav>

 <!------- Main content------------------------>

<div style="background-image: linear-gradient(#fff6da,#fcfafb, #fff6da); padding: 100px;">
        <div class="container">
            <h1> About Us </h1>
            <p style="float: left;">There is a gigantic number of people that spend a large sum of money on games and gaming products. Hence there is a huge market for items like gaming cards, game pads, mouse, keyboards etc. With so many options to choose from, it gets difficult to narrow down our choices that fit best with our requirements. More often than not, it is a tedious, research extensive process.</p>
            <img style=" float: right; border-radius: 50%;opacity: 0.7;" src="imagesuploadedf/Hand--touching-blank-screen-vector.jpg" height="200" width="200">
            <p>The solution to the problem is GAIT. The objective of this project is to create a web application that helps the user to choose the right product according to their preference. This cuts down on the time-consuming work put into searching the whole internet and asking around for reviews that would ultimately affect your purchase decision. GPR will host a vast collection of gaming products with their details and authentic reviews by users. It will also include ratings for every item. This allows other users to fill in their requirements, including the budget and discover the best option for them based on user reviews. </p>
           
            <p>Moreover, there will be option for premium memberships. User can pay a subscription fee to get special features such as advertising their own product etc. </p>
        </div>
            
  
</div>
<!----- Footer ----->
    <div class="footer site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="site-logo-footer">
              <a href="home.php">GAIT</a>
            </div>
          </div>
          <div class="col-md-8 ml-auto">
            <div class="row">
              <div class="col-md-4 ml-auto">
                <ul class="list-unstyled links">
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">hello@mydomain.com</a></li>

                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-unstyled links">
                  <li><a href="home.html">Home</a></li>
                  <li><a href="#">Sign In</a></li>
                  <li><a href="#">Sign Up</a></li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-4 text-center">
          <div class="col">
            <a href="#"><span class="m-2 fa fa-facebook fa-3x"></span></a>
            <a href="#"><span class="m-2 fa fa-twitter fa-3x"></span></a>
            <a href="#"><span class="m-2 fa fa-linkedin fa-3x"></span></a>


          </div>
        </div>

      </div>
    </div>

    </div>
 
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
