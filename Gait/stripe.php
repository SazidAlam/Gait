<?php 
	include "header.php";
	include "config.php";
  session_start();
 ?>

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
 
</head>

<body>
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Charge <?php echo '$'.$itemPrice; ?> with Stripe</h3>
		
        <!-- Product Info -->
        <p><b>Item Name:</b> <?php echo $itemName; ?></p>
        <p><b>Price:</b> <?php echo '$'.$itemPrice.' '.$currency; ?></p>
    </div>
    <div class="panel-body">
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
                <input type="email" name="email" id="email" placeholder="Enter email" required="">
            </div>
            <div class="form-group">
                <label>CARD NUMBER</label>
                <input type="text" name="card_number" id="card_number" placeholder="1234 1234 1234 1234" autocomplete="off" required="">
            </div>
            <div class="row">
                <div class="left">
                    <div class="form-group">
                        <label>EXPIRY DATE</label>
                        <div class="col-1">
                            <input type="text" name="card_exp_month" id="card_exp_month" placeholder="MM" required="">
                        </div>
                        <div class="col-2">
                            <input type="text" name="card_exp_year" id="card_exp_year" placeholder="YYYY" required="">
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="form-group">
                        <label>CVC CODE</label>
                        <input type="text" name="card_cvc" id="card_cvc" placeholder="CVC" autocomplete="off" required="">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" id="payBtn">Submit Payment</button>
        </form>
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