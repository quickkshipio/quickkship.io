<?php 
include('connection.php');
$pgTitle = "Support and Help | ";
include('header.php'); 
$user_id = $_SESSION['id'];
$userEmail = $_SESSION['email'];
if(empty($userEmail)) {
    echo "<script>window.open('https://quickkship.com/login.php', '_SELF');</script>";

}

$getUser = mysqli_query($conn,'SELECT * FROM auth WHERE email = "'.$userEmail.'"');
$userArray = mysqli_fetch_array($getUser);

$getTickets = mysqli_query($conn,'SELECT * FROM tickets WHERE user_id = "'.$user_id.'"');
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
                <div class="user_block support_title_block">
                    <h2>Support and Help</h2>
                    <a href="/add-new-ticket" class="add-new-tckt-btn"><i class="bi bi-plus"></i>Add New Ticket</a>
                </div>
                <div class="tickets">
                    <?php
                    if(mysqli_num_rows($getTickets) > 0) {
                    ?>
                    <ul>
                    <?php
                    while($ticketsList = mysqli_fetch_array($getTickets)) {
                    ?>
                    <li>
                        <h3><?php echo $ticketsList['ticket_title']; ?></h3>
                        <p><?php echo $ticketsList['ticket_details']; ?></p>
                        <span>Priority: <strong class="<?php echo $ticketsList['ticket_priority']; ?>"><?php echo $ticketsList['ticket_priority']; ?></strong></span>
                        <div><?php echo $ticketsList['created_at']; ?></div>
                    </li>
                    <?php
                    }
                    ?>
                    </ul>
                    <?php
                    } else {
                    ?>
                    <p class="no_tickets">No tickets found!</p>
                    <?php
                    }
                    ?>
                </div>
                <div class="faqs_block">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                FAQ Item 1
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element.
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                FAQ Item 2
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.
                              </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                FAQ Item 3
                              </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="call_support">
                    <p><i class="bi bi-telephone"></i> For immediate assistance, call now at <a href="tel:01234567890">+012 3456 7890</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>