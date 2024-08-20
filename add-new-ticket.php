<?php 
include('connection.php');
$pgTitle = "Add New Ticket | ";
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
                <div class="user_block support_title_block">
                    <h2>Add New Ticket</h2>
                    <a href="/support-and-help" class="add-new-tckt-btn"><i class="bi bi-arrow-left"></i></a>
                </div>
                <div class="ticket_form">
                    <form id="add_ticket" method="POST">
                        <div class="form_item">
                            <label>Title</label>
                            <input type="text" name="ticket_title" required>
                        </div>
                        <div class="form_item">
                            <label>Details</label>
                            <input type="text" name="ticket_details" required>
                        </div>
                        <div class="form_item">
                            <label>Prority</label>
                            <select name="ticket_priority" required=>
                                <option value="0" selected disabled>Select Priority</option>
                                <option value="Low">Low</option>
                                <option value="Medium">Medium</option>
                                <option value="High">High</option>
                            </select>
                        </div>
                        <button type="submit" id="submit_ticket">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
<script>
    jQuery('#add_ticket').submit(function(e){
		e.preventDefault(); // avoid to execute the actual submit of the form.
		var formData = new FormData(this);
		formData.append("reason", "add_new_ticket");
		jQuery.ajax({
			url: 'https://tracking.quickkship.com/actions/ajax.php',
			type: 'POST',
			data: formData,
			success: function (response) {
				if(response == 'success') {
					swal("Ticket Submitted!","Your ticket have been submitted successfully.", "success")
					.then(function(isConfirm) {
						if(isConfirm) {
							window.open('https://tracking.quickkship.com/support-and-help', '_SELF');
						}
					});
				}
			},
			cache: false,
			contentType: false,
			processData: false
		});
	})
</script>