<?php 
include('connection.php');
$pgTitle = "Subscriptions | ";
include('header.php'); 
$user_id = $_SESSION['id'];
$userEmail = $_SESSION['email'];
if(empty($userEmail)) {
    echo "<script>window.open('https://tracking.quickkship.com/login', '_SELF');</script>";
}

$getUser = mysqli_query($conn,'SELECT * FROM auth WHERE email = "'.$userEmail.'"');
$userArray = mysqli_fetch_array($getUser);
?>
<div class="user_section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebarMain">
                    <?php include('dashboard-sidebar.php'); ?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="user_block">
                    <h2>Subscriptions</h2>
                </div>
                <?php
                if($userArray['package']==NULL) {
                ?>
                <div class="not_package_box">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <p>It seems like you haven't subscribed to any package. Click below to subscribe.</p>
                    <a href="/packages">Subscribe Now</a>
                </div>
                <?php
                }
                else {
                    $getOrderDetails = mysqli_query($conn,'SELECT * FROM orders WHERE user_id = "'.$user_id.'"');
                    $orderArray = mysqli_fetch_array($getOrderDetails);
                    
                    $dateFromDB = $orderArray["created_at"];

                    $currentDate = new DateTime();
                    $dateFromDB = new DateTime($dateFromDB);
                    $interval = $dateFromDB->diff($currentDate);
                    $daysPassed = $interval->days;
                    $remainingDays = 30 - $daysPassed;
                ?>
                <div class="subscription_details">
                    <div class="pack_subs_top">
                        <h3>
                            You are currently subscribed to
                            <span><?php echo $userArray['package']; ?></span>
                        </h3>
                        <p>
                            <?php echo $remainingDays; ?> Days
                            <span>Until next payment</span>
                        </p>
                    </div>
                    <div class="package_details_list">
                        <div class="row">
                            <div class="col-md-5">
                                <h4>Your Package Details:</h4>
                                <?php if($userArray['package']=="Basic Plan") { ?>
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
                                else if($userArray['package']=="Standard Plan") {
                                ?>
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
                                else if($userArray['package']=="Premium Plan") {
                                ?>
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
                                <?php } ?>
                            </div>
                            <div class="col-md-7">
                                <h4>Your Stripe Payment Details:</h4>
                                <div class="payment_list_item">
                                    <p><span>Order ID:</span><?php echo $orderArray['order_id']; ?></p>
                                    <p><span>Stripe Subscription ID:</span><?php echo $orderArray['subscription_id']; ?></p>
                                    <p><span>Stripe Invoice ID:</span><?php echo $orderArray['invoice_id']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="https://tracking.quickkship.com/packages" class="changeplanbtn">Change Your Plan</a>
                </div>
                <?php
                }
                ?>
                
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>