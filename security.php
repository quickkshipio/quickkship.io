<?php 
include('connection.php');
include_once 'vendor/sonata-project/google-authenticator/src/FixedBitNotation.php';
include_once 'vendor/sonata-project/google-authenticator/src/GoogleAuthenticatorInterface.php';
include_once 'vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php';
include_once 'vendor/sonata-project/google-authenticator/src/GoogleQrUrl.php';


$pgTitle = "Security | ";
include('header.php'); 
$userEmail = $_SESSION['email'];
if(empty($userEmail)) {
	echo "<script>window.open('https://quickkship.com/login.php', '_SELF');</script>";

}
$getUser = mysqli_query($conn,'SELECT * FROM auth WHERE email = "'.$userEmail.'"');
$userArray = mysqli_fetch_array($getUser);

$g = new \Google\Authenticator\GoogleAuthenticator();
$secret = $g->generateSecret();
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
                    <h2>Security Settings</h2>
                    <div class="security_block">
                        <p>
                            Change Password
                            <a href="/change-password.php" class="changePasswordBtn">Click Here</a>
                        </p>
                        <?php
                        if($userArray['two_factor'] == NULL) {
                        ?>
                        <p>
                            Activate 2FA
                            <a href="javascript:;" id="enable-2fa">Enable</a>
                        </p>
                        <?php
                        }
                        else {
                        ?>
                        <p>
                            De-activate 2FA
                            <a href="javascript:;" id="disable-2fa">Disable</a>
                        </p>
                        <?php
                        }
                        ?>
                    </div>
                    <?php
                    if($userArray['two_factor'] == NULL) {
                    ?>
                    <div class="gfa-qr-block">
                        <?php
                        echo '<img src="'.$g->getURL($userArray['firstname'], $userArray['email'], $secret).'" />';
                        ?>
                        <form id="google-auth-form" method="POST">
                            <input type="hidden" name="secret" value="<?php echo $secret; ?>">
                            <input type="text" name="secret_code" placeholder="Enter Code from Google Autheticator App" required>
                            <button id="submit_code" type="submit">Verify</button>
                        </form>
                    </div>
                    <?php
                    }
                    else {
                    ?>
                    <div class="2fa-deactivate-block">
                        
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
<script>
    $("#enable-2fa").click(function() {
        $(".gfa-qr-block").css('height','250px');
    });
    jQuery('#userEmail').change(function(){
		var email = jQuery(this).val();
		jQuery.ajax({
			url: 'https://quickkship.com/actions/ajax.php',
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
			url: 'https://quickkship.com/actions/ajax.php',
			type: 'POST',
			data: formData,
			success: function (response) {
				if(response == 'success') {
					swal("Profile Updated!","Your new details are updated successfully.", "success")
					.then(function(isConfirm) {
						if(isConfirm) {
							window.open('https://quickkship.com/account-information', '_SELF');
						}
					});
				}
			},
			cache: false,
			contentType: false,
			processData: false
		});
	});
</script>