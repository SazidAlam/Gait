<?php
// include "header.php";
include "config.php";

// session_start();

$count = 1;
$query = "SELECT * FROM orders";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
while ($row = mysqli_fetch_array($result)) {
	$count = $count + 1;
}

 $count = $count;


$countt = 1;
$queryy = "SELECT * FROM user";
$resultt = mysqli_query($conn, $queryy);
$roww = mysqli_fetch_array($resultt);
while ($row = mysqli_fetch_array($resultt)) {
	$countt = $countt + 1;
}

$countt = $countt;

$productCount = 1;
$pquery = "SELECT * FROM uploadedimage";
$presult = mysqli_query($conn, $pquery);
$prow = mysqli_fetch_array($presult);
while ($prow = mysqli_fetch_array($presult)) {
	$productCount  = $productCount  + 1;
}

$productCount  = $productCount;


$categoryCount = 1;
$cquery = "SELECT * FROM category";
$cresult = mysqli_query($conn, $cquery);
$crow = mysqli_fetch_array($cresult);
while ($crow = mysqli_fetch_array($cresult)) {
	$categoryCount  = $categoryCount  + 1;
}

$categoryCount  = $categoryCount;


 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
        <div class="container">
          <a class="navbar-brand" href="aproduct.php" style="font-family: 'Bree Serif', serif">GAIT</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav nav-pills justify-content-end">
          

          <li><a class="nap" href="aproduct.php">Product</a></li>
          <li><a class="nap" href="user.php">User</a></li>
          <li><a class="nap" href="category.php">Category</a></li>
          <li><a class="nap" href="aregister.php">Register</a></li>
          <li><a class="nap" href="#">Welcome <?php echo $_SESSION['name']; ?></a></li>
          <li><a class="nap" href="logout.php">Logout</a></li>
          
          </ul>
          </div>
    </nav>

    <!-- header -->

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h3><span><i class="fas fa-cogs"></i></span> Dashboard</h3>
                </div>
            </div>
        </div>
    </header>


    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="list-group">
                        <a href="aaddproduct.php"><button type="button" class="button-1"><i class="fas fa-shopping-cart"></i> Add
                                Product</button></a>
                        <a href="addcategory.php"><button type="button" class="button-1"><i class="fas fa-align-left"></i> Add
                                Category</button></a>
                        <!-- <a href="apremium.php"><button type="button" class="button-1"><i class="fas fa-receipt"></i> Add
                                Payment</button></a> -->
                        <a href="adduser.php"><button type="button" class="button-1"><i class="fas fa-user"></i> Add Basic
                                User</button></a>
                        <a href="apremium.php"><button type="button" class="button-1"><i class="fas fa-user-tie"></i> Add
                                Premium User</button></a>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="dashboard-data-1">
                        <div class="box-1" id="product">
                            <span class="info-box-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </span>
                            <h6>Product</h6>
                            <h1><?php echo $productCount; ?></h1>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>

                        <div class="box-1" id="category">
                            <span class="info-box-icon">
                                <i class="fas fa-align-left"></i>
                            </span>
                            <h6>Category</h6>
                            <h1><?php echo $categoryCount; ?></h1>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="box-1" id="payment">
                            <span class="info-box-icon">
                                <i class="fas fa-receipt"></i>
                            </span>
                            <h6>Payment</h6>
                            <h1><?php echo "$" . $count * 25; ?></h1>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>

                    <div class="dashboard-data-2">
                        <div class="box-2" id="premium-user">
                            <span class="info-box-icon">
                                <i class="fas fa-user-tie"></i>
                            </span>
                            <h6>Premium User</h6>
                            <h1><?php echo $count; ?></h1>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>

                        <div class="box-2" id="basic-user">
                            <span class="info-box-icon">
                                <i class="fas fa-user"></i>
                            </span>
                            <h6>Basic User</h6>
                            <h1><?php echo $countt; ?></h1>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer id="footer">
        <div class="container">
            <p>Copyright &copy; 2020 Gait. All Rights Reserved</p>
        </div>
    </footer>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
