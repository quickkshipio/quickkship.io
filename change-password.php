<?php 
include('connection.php');
$pgTitle = "Change Password | ";
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
                    <h2>Change Password</h2>
                    <p>Update your password</p>
                    <form class="password-form">
                        <div class="form-field">
                            <label>Old Password</label>
                            <input type="password" name="oldPassword" id="oldPassword" required>
                        </div>
                        <div class="form-field">
                            <label>New Password</label>
                            <input type="password" name="password" id="Password" disabled required>
                        </div>
                        <div class="form-field">
                            <label>Confirm New Password</label>
                            <input type="password" name="confirmPassword" id="confirmPassword" disabled required>
                        </div>
                        <button type="submit" id="password-submit">Update Password</button>
                        <p class="user_not_found">You have entered wrong old password.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
<script>
jQuery(document).ready(function() {
    jQuery("#password-submit").prop('disabled', true);
    jQuery('#confirmPassword').keyup(function() {
        var password = jQuery('#Password').val();
        var confirmPassword = jQuery(this).val();

        // Check if passwords match
        if (password !== confirmPassword) {
            jQuery(this).css("border-color","red");
            jQuery(this).css("background","#ffe4e4");
            jQuery("#password-submit").prop('disabled', true);
            jQuery(password).addClass('notmatched');
        }
        else {
            jQuery(this).css("border-color","#0b376d");
            jQuery(this).css("background","#fff");
            jQuery(password).removeClass('notmatched');
            jQuery("#password-submit").prop('disabled', false);
        }
    });
});
</script>
<script>
    jQuery('#oldPassword').change(function(){
		var oldPass = jQuery(this).val();
		jQuery.ajax({
			url: 'https://tracking.quickkship.com/actions/ajax.php',
			type: 'POST',
			data: {reason: 'check_old_pass', oldPass: oldPass},
			success: function (response) {
				if(response == 'passmatched') {
					jQuery("#Password").prop('disabled', false);
					jQuery("#confirmPassword").prop('disabled', false);
				}
				else {
				    jQuery("#Password").prop('disabled', true);
					jQuery("#confirmPassword").prop('disabled', true);
				}
			}
		});
	});
	
	jQuery('.password-form').submit(function(e){
		e.preventDefault(); // avoid to execute the actual submit of the form.
		var formData = new FormData(this);
		formData.append("reason", "update_password");
		jQuery.ajax({
			url: 'https://tracking.quickkship.com/actions/ajax.php',
			type: 'POST',
			data: formData,
			success: function (response) {
				if(response == 'success') {
					swal("Password Updated!","You will be logged out now. Login again with new password.", "success")
					.then(function(isConfirm) {
						if(isConfirm) {
							window.open('https://tracking.quickkship.com/logout.php', '_SELF');
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