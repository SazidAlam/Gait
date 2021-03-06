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
    <!--  <link rel="stylesheet"  href="assets/css/style.css"> --> 
    <link rel="stylesheet"  href="assets/css/main.css">
     <link rel="stylesheet"  href="assets/css/bootstrap.min.css">
     <link rel="stylesheet"  href="assets/fonts/style.css">
     <link rel="stylesheet"  href="assets/fonts/Galada/style.css">
     <script src="assets/js/typed.js"></script>
     <link rel="stylesheet" href="assets/css/bootstrap.css"> 
     


    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3ec1573dc2.js" crossorigin="anonymous"></script>
    

</head>

<body>
<!-------------- Fixed nav-------------------->

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
        <div class="container">
          <a class="navbar-brand" href="index.php">GAIT</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav nav-pills justify-content-end">
          <?php if(isset($_SESSION['is_logged_in'])) : ?>

          <li><a class="nap" href="product.php">Home</a></li>
          <!-- <li><a class="nap" href="about.php">About</a></li> -->
          <li><a class="nap" href="addproduct.php">Add Product</a></li>
          <li><a class="nap" href="profile.php">Welcome <?php echo $_SESSION['name']; ?></a></li>
          <li><a class="nap" href="logout.php">Logout</a></li>
          <?php else : ?>
          <li><a class="nap" href="login.php"><i class="fas fa-user"></i>  Login</a></li>
          <li><a class="nap" href="register.php"><i class="fas fa-user-plus"></i>  Register</a></li>
        <?php endif; ?>
          </ul>
          </div>
    </nav>

 <!------- Main content------------------------>

 <div class="ftco-blocks-cover-1">
      <div class="site-section-cover half-bg">
        <div class="container">
          <div  style="background-color: #fff6da" class="row align-items-center justify-content-center">
            <div class="col-lg-8">
              <h1 class="mb-5 font-weight-bold intext"  data-aos="fade-up">All about <span class="typed-words">Gaming</span>.</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

      <!-- footer -->
    <div class="footer site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="site-logo-footer">
              <a class="intext" href="home.php">GAIT</a>
            </div>
          </div>
          <div class="col-md-8 ml-auto">
            <div class="row">
              <div class="col-md-4 ml-auto">
                <ul class="list-unstyled links">
                <li><a href="about.php">About Us</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
               

                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-unstyled links">
                  <li><a href="product.php">Home</a></li>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>
                </ul>
              </div>


            </div>
            
           <div class="row col-md-4">
            <div class="col-12">
            <a href="https://www.facebook.com/"><span class="m-2 fa fa-facebook fa-3x"></span></a>
            <a href="https:/www.twitter.com/"><span class="m-2 fa fa-twitter fa-3x"></span></a>
            <a href="https:/www.pinterest.com/"><span class="m-2 fa fa-pinterest fa-3x"></span></a>


          </div>
        </div>
          
          </div>
        </div>
      </div>
    </div>

    <footer id="footer">
        <div class="container">
            <p>Copyright &copy; 2020 <a href="alogin.php">Gait</a>. All Rights Reserved</p>
        </div>
    </footer>

    







            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Gaming.. "," Reviews.. "],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 3000,
            startDelay: 1000,
            loop: true,
            showCursor: false
            });
            </script>




      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>
