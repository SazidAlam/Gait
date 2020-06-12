<?php

// Product Details
// Minimum amount is $0.50 US
$itemName = "Demo Product";
$itemNumber = "PN12345";
$itemPrice = 25;
$currency = "USD";

// Stripe API configuration
define('STRIPE_API_KEY', 'sk_test_MaFkikwUCJWj7VA60iMhZxky00xfYPndmO');
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_cBtvg262SvdvpaPTbyPOmTYd004Y0FGB1A');

//$conn = mysqli_connect("localhost","root","","gait")
$conn = mysqli_connect("localhost","root","","gait")
			or die("cannot connected");

?>
