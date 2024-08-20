<?php 
$pgTitle = "Register | ";
include('header.php'); ?>
<div class="auth_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-5">
                <h3>User Registration</h3>
                <p>Please enter your details below.</p>
                <form class="auth_form" id="register-form" method="POST">
                    <div class="form-field">
                        <label>Fullname</label>
                        <input type="text" name="fullname" required>
                    </div>
                    <div class="form-field">
                        <label>Email Address</label>
                        <input type="email" name="email" id="userEmail" required>
                    </div>
                    <div class="form-field">
                        <label>Password</label>
                        <input type="password" id="Password" name="userpass" required>
                    </div>
                    <div class="form-field">
                        <label>Confirm Password</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" required>
                    </div>
                    <button type="submit" id="register-submit">Register</button>
                    <p class="already_user">Already Registered? Click here to <a href="/login">LOGIN</a>.</p>
                    <p class="user_not_found">Email Address already exist. Please try with a different one.</p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
<script>
jQuery(document).ready(function() {
    jQuery("#register-submit").prop('disabled', true);
    jQuery('#confirmPassword').keyup(function() {
        var password = jQuery('#Password').val();
        var confirmPassword = jQuery(this).val();

        // Check if passwords match
        if (password !== confirmPassword) {
            jQuery(this).css("border-color","red");
            jQuery(this).css("background","#ffe4e4");
            jQuery("#register-submit").prop('disabled', true);
            jQuery(password).addClass('notmatched');
        }
        else {
            jQuery(this).css("border-color","#0b376d");
            jQuery(this).css("background","#fff");
            jQuery(password).removeClass('notmatched');
            if(jQuery('#userEmail').hasClass('invalid')) {
                jQuery("#register-submit").prop('disabled', true);
            }else {
                jQuery("#register-submit").prop('disabled', false);
            }
        }
    });
});
</script>
<script>
    jQuery('#userEmail').change(function(){
		var email = jQuery(this).val();
		jQuery.ajax({
			url: 'https://quickkship.com/actions/ajax.php',
			type: 'POST',
			data: {reason: 'check_email', email: email},
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
	
	jQuery('#register-form').submit(function(e){
		e.preventDefault(); // avoid to execute the actual submit of the form.
		var formData = new FormData(this);
		formData.append("reason", "register_user");
		jQuery.ajax({
			url: 'https://tracking.quickkship.com/actions/ajax.php',
			type: 'POST',
			data: formData,
			success: function (response) {
				if(response == 'success') {
					swal("Registration Successful!","Now you can login to your profile.", "success")
					.then(function(isConfirm) {
						if(isConfirm) {
							window.open('https://tracking.quickkship.com/login', '_SELF');
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