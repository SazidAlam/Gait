

<html>
<head>
  <title>Add Premium Member</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"  href="assets/css/login.css">
    <link rel="stylesheet"  href="assets/css/addproduct.css">
    <link rel="stylesheet"  href="assets/css/main.css">
     <link rel="stylesheet"  href="assets/css/bootstrap.min.css">
     <link rel="stylesheet"  href="/fonts/style.css">
     <script src="assets/js/typed.js"></script>

     <script src="https://js.stripe.com/v2/"></script>

    <!-- jQuery is used only for this example; it isn't required to use Stripe -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3ec1573dc2.js" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3ec1573dc2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
        <div class="container">
          <a class="navbar-brand" href="index.php">GAIT</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav nav-pills justify-content-end">
          

          <li><a class="nap" href="product.php">Home</a></li>
          <li><a class="nap" href=">addproduct.php">Add Product</a></li>
          <li><a class="nap" href="profile.php">Welcome <?php echo $_SESSION['name']; ?></a></li>
          <li><a class="nap" href="logout.php">Logout</a></li>
          
          </ul>
          </div>
    </nav>

<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-t-50 p-b-90">
      <h4 class="intext loghead">Upgrade to premium member</h4>
        <form action="payment.php" method="POST" id="paymentFrm" class="login100-form validate-form flex-sb flex-w">
          
          <div class="wrap-input100 validate-input m-b-16" data-validate = "email is required">
            <input class="input100" type="text" name="name" id="name" placeholder="Enter name">
            <span class="focus-input100"></span>
          </div>
          
          <div style= " padding: 20px;" >      </div>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "email is required">
            <input class="input100" type="email" name="email" id="email" placeholder="Enter email">
            <span class="focus-input100"></span>
          </div>
          
          <div style= " padding: 20px;" >      </div>
          
          

          <div class="wrap-input100 validate-input m-b-16" data-validate = "email is required">

            <input class="input100" type="text" name="card_number" id="card_number" placeholder="1234 1234 1234 1234" autocomplete="off" required="">
            <span class="focus-input100"></span>
          </div>
          
          <div style= " padding: 20px;" >      </div>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "email is required">
            <input class="input100" type="text" name="card_exp_month" id="card_exp_month" placeholder="Card Expire Month (MM)" required="">
            <span class="focus-input100"></span>
          </div>
          
          <div style= " padding: 20px;" >      </div>
          
          <div class="wrap-input100 validate-input m-b-16" data-validate = "email is required">
            <input class="input100" type="text" name="card_exp_year" id="card_exp_year" placeholder="Card Expire Year (YYYY)" required="">
            <span class="focus-input100"></span>
          </div>
          
          <div style= " padding: 20px;" >      </div>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "email is required">
            <input class="input100" type="text" name="card_cvc" id="card_cvc" placeholder="CVC" autocomplete="off" required="">
            <span class="focus-input100"></span>
          </div>
          
          <div style= " padding: 20px;" >      </div>
          
          <div class="flex-sb-m w-full p-t-3 p-b-24">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" >
    
            </div>

          </div>
          <div style= " padding: 20px;" >      </div>

          <div class="container-login100-form-btn m-t-17" >
            <button type="submit" class="btn btn-success" id="payBtn">Submit Payment</button>
          </div>

        </form>
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


      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>