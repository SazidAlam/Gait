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
     <link rel="stylesheet"  href="assets/fonts/style.css">
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

          <li><a class="na" href="product.php">Home</a></li>
          <li><a class="na" href="addproduct.php">Add Product</a></li>
          <li><a class="na" href="profile.php">Welcome <?php echo $_SESSION['name']; ?></a></li>
          <li><a class="na" href="logout.php">Logout</a></li>
          <?php else : ?>
          <li><a class="na" href="login.php"><i class="fas fa-user"></i> Login</a></li>
          <li><a class="na" href="register.php"><i class="fas fa-user-plus"></i> Register</a></li>
        <?php endif; ?>
          </ul>
          </div>
    </nav>

    

<div class="row">

  <div class="ftco-blocks-cover-1">
<div class="site-section-cover half-bg">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-8">
        <h1 class="mb-5 text-primary font-weight-bold"  data-aos="fade-up">All about <span class="typed-words">Gaming Product</span>.</h1>
      </div>
    </div>
  </div>
</div>
</div>

</div>


    <div class="footer">
      <div class="row">
        <div class="col-sm">
          <h1>Gait</h1>
          <h3></h3>
        </div>
        <div class="col-sm">
          <h3><a href="about.php">About</a></h3>
          <h3><a href="contact.php">Contact</a></h3>
        </div>
        <div class="col-sm">
          <h1>
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
            <a href=""><i class="fab fa-pinterest"></i></a>
          </h1>
        </div>
      </div>© 2020 Copyright:
      <a href="alogin.php">GAIT</a>
    </div>


            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Gaming "," Reviews "],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 3000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>




      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
