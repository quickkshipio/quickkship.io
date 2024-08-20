<?php
session_start();
include('connection.php');
require_once('vendor/autoload.php'); // Adjust the path based on your project structure
\Stripe\Stripe::setApiKey($stripeApiKey);
$stripe = new \Stripe\StripeClient($stripeApiKey);
$returnArr = [];

if ($_POST['reason'] == 'create-payment-intent') {
	$user_id = $_SESSION['id'];
	$email = $_SESSION['email'];
	
	$paymentMethodId = $_POST['paymentMethodId'];
	$totalPrice = $_POST['totalPrice'];
	$OrderID = $_POST['OrderID'];
	$package = $_POST['packageName'];
	$total_payment = $totalPrice * 100;
	
	if($paymentMethodId != '') {
	    try {
            // Create the product
            $product = \Stripe\Product::create([
                'name' => $package,
                'type' => 'service',
            ]);
        
            // Create the customer
            $customer = \Stripe\Customer::create([
                'email' => $email,
                'payment_method' => $paymentMethodId,
                'invoice_settings' => [
                    'default_payment_method' => $paymentMethodId,
                ],
            ]);
        
            // Create the subscription
            $subscription = \Stripe\Subscription::create([
                'customer' => $customer->id,
                'items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'unit_amount' => $total_payment,
                            'product' => $product->id, // Use the product ID instead of name
                            'recurring' => [
                                'interval' => 'month',
                            ],
                        ],
                    ],
                ],
            ]);
        
            // Retrieve subscription and invoice IDs
            $subscription_id = $subscription->id;
            $latest_invoice_id = $subscription->latest_invoice;
    		$invoice = \Stripe\Invoice::retrieve($latest_invoice_id);
    		$invoice_id = $invoice->id;
        
    	    $updateUserTable = mysqli_query($conn, "UPDATE auth SET package = '".$package."' WHERE id = $user_id");
    		$insertOrder = mysqli_query($conn, "INSERT INTO orders (`user_id`, `order_id`, `payment`, `subscription_id`, `invoice_id`) VALUES ('".$user_id."', '".$OrderID."', 'success', '".$subscription_id."', '".$invoice_id."')");
    		$insertSubscription = mysqli_query($conn, "INSERT INTO subscription (`user_id`, `package`, `start_at`) VALUES ('".$user_id."', '".date("Y-m-d")."', '".$user_id."')");
    		$returnArr = [
    			'error' => 'no', 
    			'message' => 'Payment Successful!',
    		];
    		
        } catch (Exception $e) {
            // Handle the exception, log errors, or debug the issue.
            $returnArr = [
    			'error' => 'yes', 
    			'message' => 'Error: ' . $e->getMessage(),
    		];
        }

		
	} else {
		$returnArr = [
			'error' => 'yes', 
			'message' => 'Payment Failed! Please Try Again.',
		];
	}
	
	
	echo json_encode($returnArr);
	
}
?>