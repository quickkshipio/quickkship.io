<?php 
include('connection.php');
$pgTitle = "Checkout | ";
include('header.php'); 
$userEmail = $_SESSION['email'];
$packageType = $_GET['package'];
$orderId = $_GET['order'];
$getUser = mysqli_query($conn,'SELECT * FROM auth WHERE email = "'.$userEmail.'"');
$userArray = mysqli_fetch_array($getUser);

if($packageType == 'basic') {
    $totalPrice = '34.99';
    $packageName = "Basic Plan";
}
if($packageType == 'standard') {
    $totalPrice = '69.99';
    $packageName = "Standard Plan";
}
if($packageType == 'premium') {
    $totalPrice = '149.99';
    $packageName = "Premium Plan";
}

?>
<div class="inner_page_header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>QuickkShip</h4>
                <h2>Order Checkout</h2>
            </div>
        </div>
    </div>
</div>
<div class="checkout_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" id="payment-form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="order_details">
                                <h2>Order Summary</h2>
                                <?php
                                if($packageType == 'basic') {
                                ?>
                                <h3 class="basic_plan_title">
                                    Basic Plan
                                    <span>$34.99/month</span>
                                </h3>
                                <ul class="package_item_list">
                                    <li>
                                        <strong>Shipments:</strong>
                                    </li>
                                    <li>Up to 10 shipments</li>
                                    <li>
                                        <strong>Features:</strong>
                                    </li>
                                    <li>Basic tracking for all shipments</li>
                                    <li>Email support</li>
                                </ul>
                                <?php
                                }
                                else if($packageType == 'standard') {
                                ?>
                                <h3 class="standard_plan_title">
                                    Standard Plan
                                    <span>$69.99/month</span>
                                </h3>
                                <ul class="package_item_list">
                                    <li>
                                        <strong>Shipments:</strong>
                                    </li>
                                    <li>Up to 30 shipments</li>
                                    <li>
                                        <strong>Features:</strong>
                                    </li>
                                    <li>Enhanced tracking with real-time updates</li>
                                    <li>Priority email support</li>
                                    <li>Shipment insurance coverage up to $500</li>
                                </ul>
                                <?php
                                }
                                else if($packageType == 'premium') {
                                ?>
                                <h3 class="premium_plan_title">
                                    Premium Plan
                                    <span>$149.99/month</span>
                                </h3>
                                <ul class="package_item_list">
                                    <li>
                                        <strong>Shipments:</strong>
                                    </li>
                                    <li>Unlimited shipments</li>
                                    <li>
                                        <strong>Features:</strong>
                                    </li>
                                    <li>Advanced tracking with detailed analytics</li>
                                    <li>Priority phone and email support</li>
                                    <li>Access to QuickkShip API for seamless integration with e-commerce platforms</li>
                                    <li>Shipment insurance coverage up to $1000</li>
                                    <li>Dedicated account manager for personalized assistance</li>
                                </ul>
                                <?php
                                }
                                else {}
                                ?>
                                <h2>Process to Payment</h2>
                                <div class="form-row">
                                    <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                    </div>
                                    
                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                </div>
                                <img src="jobado/layout/images/Loading-GIF.gif" id="loader-image" style="display:none;">
                                <button type="submit">Proceed to Payment</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
	var stripe = Stripe('pk_test_51PDVEyCs4G4QqMriLgipTc41aBQvYLz9vDBP3LhmeNkWZkGI9UKrDvPMSfUajJpH4L1wvOg6D8bGoM3Pj0hrndT100FEVyWzGC'); // Replace with your actual Stripe public key
	var elements = stripe.elements();
	
	  // Create an instance of the card Element.
	  var card = elements.create('card');
	
	  // Add an instance of the card Element into the `card-element` div.
	  card.mount('#card-element');
	
	  // Handle form submission.
	  var form = document.getElementById('payment-form');
	  form.addEventListener('submit', function (event) {
		event.preventDefault();
		$("#loader-image").show();
		stripe.createPaymentMethod({
		  type: 'card',
		  card: card,
		}).then(function (result) {
		  if (result.error) {
			// Display error message to the user.
			var errorElement = document.getElementById('card-errors');
			errorElement.textContent = result.error.message;
		  } else {
			// The PaymentMethod was created successfully. Pass it to your server.
			var paymentMethodId = result.paymentMethod.id;
			var totalPrice = <?php echo $totalPrice; ?>;
			var packageName = "<?php echo $packageName; ?>";
			var OrderID = <?php echo $orderId; ?>;
			
			var formData = new FormData(form);
			formData.append("paymentMethodId", paymentMethodId);
			formData.append("reason", "create-payment-intent");
			formData.append("totalPrice", totalPrice);
			formData.append("packageName", packageName);
			formData.append("OrderID", OrderID);
			
			$.ajax({
				url: 'https://quickkship.com/payment.php',
				type: 'POST',
				data: formData,
				success: function (response) {
				    $("#loader-image").hide();
				    console.log(response);
					response = JSON.parse(response);
					if(response.error == 'no') {
						Swal.fire({
						  icon: 'success',
						  title: response.message,
						  text: "You have successfully subscribed to "+packageName+".",
						}).then((result) => {
						  window.open('https://quickkship.com/subscriptions', '_SELF');
						})
					} else {
						Swal.fire({
						  icon: 'error',
						  title: 'Oops...',
						  text: response.message,
						})
					}
				},
				cache: false,
				contentType: false,
				processData: false
			});	
		  }
		});
	  });
</script>
