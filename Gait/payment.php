<?php 
// Include configuration file  
    include "header.php";
	include "config.php";
  session_start();
 
$payment_id = $statusMsg = ''; 
$ordStatus = 'error'; 
 
// Check whether stripe token is not empty 
if(!empty($_POST['stripeToken'])){ 
     
    // Retrieve stripe token, card and user info from the submitted form data 
    $token  = $_POST['stripeToken']; 
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $card_number = $_POST['card_number']; 
    $card_exp_month = $_POST['card_exp_month']; 
    $card_exp_year = $_POST['card_exp_year']; 
    $card_cvc = $_POST['card_cvc']; 
     
    // Include Stripe PHP library 
    require_once 'stripe-php/init.php'; 
     
    // Set API key 
    \Stripe\Stripe::setApiKey(STRIPE_API_KEY); 
     
    // Add customer to stripe 
    $customer = \Stripe\Customer::create(array( 
        'email' => $email, 
        'source'  => $token 
    )); 
     
    // Unique order ID 
    $orderID = strtoupper(str_replace('.','',uniqid('', true))); 
     
    // Convert price to cents 
    $itemPrice = ($itemPrice*100); 
     
    // Charge a credit or a debit card 
    $charge = \Stripe\Charge::create(array( 
        'customer' => $customer->id, 
        'amount'   => $itemPrice, 
        'currency' => $currency, 
        'description' => $itemName, 
        'metadata' => array( 
            'order_id' => $orderID 
        ) 
    )); 
     
    // Retrieve charge details 
    $chargeJson = $charge->jsonSerialize(); 
 
    // Check whether the charge is successful 
    if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){ 
        // Order details  
        $transactionID = $chargeJson['balance_transaction']; 
        $paidAmount = $chargeJson['amount']; 
        $paidCurrency = $chargeJson['currency']; 
        $payment_status = $chargeJson['status']; 
         
        // Include database connection file  
        include_once 'dbconfig.php'; 
         
        // Insert tansaction data into the database 
        $sql = "INSERT INTO orders(name,email,card_number,card_exp_month,card_exp_year,txn_id,payment_status,created,modified) VALUES('".$name."','".$email."','".$card_number."','".$card_exp_month."','".$card_exp_year."','".$transactionID."','".$payment_status."',NOW(),NOW())"; 
        $insert = $con->query($sql); 
        $payment_id = $con->insert_id; 
         
        // If the order is successful 
        if($payment_status == 'succeeded'){ 
            $ordStatus = 'success'; 
            $statusMsg = 'Your Payment has been Successful!'; 
        }else{ 
            $statusMsg = "Your Payment has Failed!"; 
        } 
    }else{ 
        //print '<pre>';print_r($chargeJson); 
        $statusMsg = "Transaction has been failed!"; 
    } 
}else{ 
    $statusMsg = "Error on form submission."; 
} 

// Below code turns premium Flag on when transaction is succesful
// if(!empty($payment_id)){
//     $sql = "UPDATE user SET PremiumFlag = True WHERE email='" . $_POST["email"]."' and name = '". $_POST['name']."'";

//     $query_run = mysqli_query ($conn,$sql);
//     if ($query_run) {
//         echo 'gotchu fam';
//      }
//      else {
//         echo 'sorry fam';
//      }


// }



?>


<div class="container" style="padding:60px; text-align:centre; border: 1px blue solid;">
    <div class="status">
        <?php if(!empty($payment_id)){ ?>
            <h1 class="<?php echo $ordStatus; ?>"><?php echo $statusMsg; ?></h1>
			
            <h4>Payment Information</h4>
            <p><b>Reference Number:</b> <?php echo $payment_id; ?></p>
            <p><b>Transaction ID:</b> <?php echo $transactionID; ?></p>
            <p><b>Paid Amount:</b> $25</p>
            <p><b>Payment Status:</b> <?php echo $payment_status; ?></p>
		
        <?php }else{ ?>
            <h1 class="error">Your Payment has Failed</h1>
        <?php } ?>
    </div>
    <button><a href="index.php" class="btn-link">Back to HomePage</a>  </button>
</div>