<?php 
include('connection.php');
$pgTitle = "Packages | ";
include('header.php'); 
$userEmail = $_SESSION['email'];
$randCode = rand(1000,10000);
?>
<div class="inner_page_header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Subscription</h4>
                <h2>Packages</h2>
            </div>
        </div>
    </div>
</div>
<div class="packages_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="user_block">
                    <h2>Select Your Package</h2>
                </div>
                <div class="package_box">
                    <div class="pack_item pack_basic">
                        <div class="pack_title">
                            <h2>Basic Plan</h2>
                            <p>$34.99/month</p>
                        </div>
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
                        if(empty($userEmail)) {
                        ?>
                        <a href="/register" class="package_purchase">Sign Up</a>
                        <?php
                        }
                        else {
                        ?>
                        <a href="/checkout?package=basic&order=<?php echo $randCode; ?>" class="package_purchase" id="basic-pack">Buy Package</a>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="pack_item pack_standard">
                        <div class="pack_title">
                            <h2>Standard Plan</h2>
                            <p>$69.99/month</p>
                        </div>
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
                        if(empty($userEmail)) {
                        ?>
                        <a href="/register" class="package_purchase">Sign Up</a>
                        <?php
                        }
                        else {
                        ?>
                        <a href="/checkout?package=standard&order=<?php echo $randCode; ?>" class="package_purchase" id="standard-pack">Buy Package</a>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="pack_item pack_premium">
                        <div class="pack_title">
                            <h2>Premium Plan</h2>
                            <p>$149.99/month</p>
                        </div>
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
                        if(empty($userEmail)) {
                        ?>
                        <a href="/register" class="package_purchase">Sign Up</a>
                        <?php
                        }
                        else {
                        ?>
                        <a href="/checkout?package=premium&order=<?php echo $randCode; ?>" class="package_purchase" id="premium-pack">Buy Package</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>