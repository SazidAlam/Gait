<?php
include "header.php";
//include "config.php";
require_once 'config.php'; 
session_start();

$nam = $_SESSION['name'];
$query = "SELECT * FROM orders";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
while ($row = mysqli_fetch_array($result)) : ?> 
 <?php if ($row['name'] === $_SESSION['name']) :  ?>
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

    <div>
  
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Share Something!</h3>
  </div>
  <div class="panel-body">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Share Title</label>
        <input type="text" name="name" class="form-control" />
      </div>
      <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control"></textarea>
      </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="uploadfile" />
        </div>
      <div class="form-group">
        <label>Link</label>
        <input type="text" name="link" class="form-control" />
      </div>
      <input class="btn btn-primary" type="submit" name="uploadfilesub" value="upload" />
        <a class="btn btn-danger" href="addproduct.php">Cancel</a>
    </form>
  </div>
  <!-- <form action="" method="post" enctype="multipart/form-data" > -->
<!--input tag for file types should have a "type" attribute with value "file"-->
<!-- <input type="file" name="uploadfile" /> -->
<!-- <input type="text" name="name" /> -->
<!-- <textarea name="body"></textarea> -->
<!-- <input type="text" name="link"/> -->
<!-- <input type="submit" name="uploadfilesub" value="upload" />
</form> -->
</div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>

<?php else: ?>
  <html>
 <head>
  <title>Gait- About</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"  href="assets/css/bootstrap.min.css">
     <link rel="stylesheet"  href="assets/fonts/style.css">
     <link rel="stylesheet" href="assets/css/bootstrap.css"> 
      <!-- Stripe JavaScript library -->
        <script src="https://js.stripe.com/v2/"></script>

    <!-- jQuery is used only for this example; it isn't required to use Stripe -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3ec1573dc2.js" crossorigin="anonymous"></script>
 

    <style>
        * {
  box-sizing: border-box;
}

input[type=text], input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color:  #3b4eda;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color:  #3b4eda;
}

.container {
  border-radius: 5px;
  /*background-color: #f2f2f2;   */
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
    </style>
</head>

<body>

<nav class="navbar navbar-expand-sm  navbar-dark bg-dark mb-3">
        <div class="container">
          <a class="navbar-brand" href="index.php" style="font-family: 'Bree Serif', serif; font-size:50px">GAIT</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav nav-pills justify-content-end">
          <?php if(isset($_SESSION['is_logged_in'])) : ?>

          <li><a class="nap" href="product.php">Home</a></li>
         <!--  <li><a class="nap" href="about.php">About</a></li> -->
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
<!--- main content ----->
<div class="container" style="padding:40px; text-align: centre; ">
<div class="wrap-login100 p-t-50 p-b-90">
<div class="panel">
    <div class="panel-heading">
       <!-- <h3 class="panel-title">Charge <?//php echo '$'.$itemPrice; ?> with Stripe</h3>   -->
       <h1 class="panel-title" style="padding:10px; text-align: center; color: #3b4eda; font-weight: bold;">You need to upgrade to premium member for adding a product.</h1>

    
        <!-- Product Info 
        <p><b>Item Name:</b> <? //php echo $itemName; ?></p>   
        <p><b>Price:</b> <? //php echo '$'.$itemPrice.' '.$currency; ?></p>   -->

    </div>
    <div class="panel-body" style=" background-color: #fff6da;">
        <!-- Display errors returned by createToken -->
        <div class="payment-status"></div>
    
        <!-- Payment form -->
        <form action="payment.php" method="POST" id="paymentFrm">
            <div class="form-group">
                <label>NAME</label>
                <input type="text" name="name" id="name" placeholder="Enter name" required="" autofocus="">
            </div>
            <div class="form-group">
                <label>EMAIL</label>
                <input type="email" name="email" id="email" placeholder="Enter email" required="" >
            </div>
            <div class="form-group">
                <label>CARD NUMBER</label>
                <input type="text" name="card_number" id="card_number" placeholder="1234 1234 1234 1234" autocomplete="off" required="">
            </div>
            <div>

            
                    <div class="form-group">
                        <label>EXPIRY DATE</label>
                        <div class="col-1">
                            <input type="text" name="card_exp_month" id="card_exp_month" placeholder="MM" required="">
                        </div>
                        <div class="col-2">
                            <input type="text" name="card_exp_year" id="card_exp_year" placeholder="YYYY" required="">
                        </div>
                    </div>

                
                    <div class="form-group">
                        <label>CVC CODE</label>
                        <input type="text" name="card_cvc" id="card_cvc" placeholder="CVC" autocomplete="off" required="">
                    </div>
                

            </div>
            <button type="submit" class="btn btn-success" id="payBtn">Submit Payment</button>
        </form>
    </div>
</div>
      </div>
</div>

<script>
// Set your publishable key
Stripe.setPublishableKey('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

// Callback to handle the response from stripe
function stripeResponseHandler(status, response) {
    if (response.error) {
        // Enable the submit button
        $('#payBtn').removeAttr("disabled");
        // Display the errors on the form
        $(".payment-status").html('<p>'+response.error.message+'</p>');
    } else {
        var form$ = $("#paymentFrm");
        // Get token id
        var token = response.id;
        // Insert the token into the form
        form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
        // Submit form to the server
        form$.get(0).submit();
    }
}

$(document).ready(function() {
    // On form submit
    $("#paymentFrm").submit(function() {
        // Disable the submit button to prevent repeated clicks
        $('#payBtn').attr("disabled", "disabled");
    
        // Create single-use token to charge the user
        Stripe.createToken({
            number: $('#card_number').val(),
            exp_month: $('#card_exp_month').val(),
            exp_year: $('#card_exp_year').val(),
            cvc: $('#card_cvc').val()
        }, stripeResponseHandler);
    
        // Submit from callback
        return false;
    });
});
</script>

</body>
</html>

<?php endif; endwhile; ?>
 


