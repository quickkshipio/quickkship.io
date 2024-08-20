<?php 
include('connection.php');
$pgTitle = "Dashboard | ";
include('header.php'); 
$userEmail = $_SESSION['email'];
if(empty($userEmail)) {
    echo "<script>window.open('https://quickkship.com/login.php', '_SELF');</script>";
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
                    <h2>Welcome, <span><?php echo $userArray['fullname'];?></span></h2>
                    <p>Welcome to your QuickkShip Account. You can navigate your details and proceed.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>