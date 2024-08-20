<?php 
include('connection.php');
$pgTitle = "Account Information | ";
include('header.php'); 
$userEmail = $_SESSION['email'];
if(empty($userEmail)) {
    echo "<script>window.open('https://tracking.quickkship.com/login.php', '_SELF');</script>";
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
                    <h2>Profile
                        <a href="/change-password.php" class="changePasswordBtn">Change Password</a>
                    </h2>
                    <p>Update your profile settings.</p>
                    <form class="profile-form">
                        <div class="form-field">
                            <label>Fullname</label>
                            <input type="text" name="fullname" value="<?php echo $userArray['fullname']; ?>" required>
                        </div>
                        <div class="form-field">
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $userArray['username']; ?>" readonly>
                        </div>
                        <div class="form-field">
                            <label>Email Address</label>
                            <input type="email" name="email" id="userEmail" value="<?php echo $userArray['email']; ?>" required>
                        </div>
                        <button type="submit" id="profile-submit">Update Profile</button>
                        <p class="user_not_found">Email Address already exist. Please try with a different one.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
<script>
    jQuery('#userEmail').change(function(){
		var email = jQuery(this).val();
		jQuery.ajax({
			url: 'https://tracking.quickkship.com/actions/ajax.php',
			type: 'POST',
			data: {reason: 'check_email_profile', email: email},
			success: function (response) {
				if(response == 'found') {
					jQuery(".user_not_found").css('opacity','1');
					jQuery("#userEmail").addClass('invalid');
					jQuery("#register-submit").prop('disabled', true);
				}
				else {
				    jQuery(".user_not_found").css('opacity','0');
				    jQuery("#userEmail").removeClass('invalid');
				    if(jQuery('#Password').hasClass('notmatched')) {
                        jQuery("#register-submit").prop('disabled', true);
                    }else {
                        jQuery("#register-submit").prop('disabled', false);
                    }
				}
			}
		});
	});
	
	jQuery('.profile-form').submit(function(e){
		e.preventDefault(); // avoid to execute the actual submit of the form.
		var formData = new FormData(this);
		formData.append("reason", "update_user");
		jQuery.ajax({
			url: 'https://tracking.quickkship.com/actions/ajax.php',
			type: 'POST',
			data: formData,
			success: function (response) {
				if(response == 'success') {
					swal("Profile Updated!","Your new details are updated successfully.", "success")
					.then(function(isConfirm) {
						if(isConfirm) {
							window.open('https://tracking.quickkship.com/account-information', '_SELF');
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