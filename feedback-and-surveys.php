<?php 
include('connection.php');
$pgTitle = "Feedback and Surveys | ";
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
                    <h2>Feedback and Surveys</h2>
                </div>
                <div class="feedback_form">
                    <form id="feedback_survey_form" method="POST">
                        <div class="form_item">
                            <label>Fullname</label>
                            <input type="text" name="fullname" value="<?php echo $userArray['fullname']; ?>" readonly>
                        </div>
                        <div class="form_item">
                            <label>Email Address</label>
                            <input type="email" name="useremail" value="<?php echo $userArray['email']; ?>" readonly>
                        </div>
                        <div class="form_item">
                            <label>Feedback</label>
                            <textarea name="feedback" placeholder="Write feedback in detail..." required></textarea>
                        </div>
                        <button type="submit" id="submit_feedback">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
<script>
    jQuery('#feedback_survey_form').submit(function(e){
		e.preventDefault(); // avoid to execute the actual submit of the form.
		var formData = new FormData(this);
		formData.append("reason", "add_feedback");
		jQuery.ajax({
			url: 'https://tracking.quickkship.com/actions/ajax.php',
			type: 'POST',
			data: formData,
			success: function (response) {
				if(response == 'success') {
					swal("Feedback Submitted!","Your feedback have been emailed successfully.", "success")
					.then(function(isConfirm) {
						if(isConfirm) {
							window.open('https://tracking.quickkship.com/feedback-and-surveys', '_SELF');
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