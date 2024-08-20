<?php 
include('connection.php');
$pgTitle = "Login | ";
include('header.php'); 
if(!empty($_SESSION)) {
    echo "<script>window.open('https://quickkship.com/login.php', '_SELF');</script>";
}
?>
<div class="auth_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-5">
                <h3>User Login</h3>
                <p>Please enter your credentials below and proceed to your profile.</p>
                <form class="auth_form" id="login-form" method="POST">
                    <div class="form-field">
                        <label>Email Address</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="form-field">
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>
                    <button type="submit" id="login-submit">Login</button>
                    <p class="already_user">Not Registered Yet? Click here to <a href="/register">Register</a>.</p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
<script>
    jQuery('#login-form').submit(function(e){
		e.preventDefault(); // avoid to execute the actual submit of the form.
		var formData = new FormData(this);
		formData.append("reason", "login_user");
		jQuery.ajax({
			url: 'https://quickkship.com/actions/ajax.php',
			type: 'POST',
			data: formData,
			success: function (response) {
				if(response == 'success') {
					swal("Login Successful!","You will be redirected to your profile.", "success")
					.then(function(isConfirm) {
						if(isConfirm) {
							window.open('https://quickkship.com/dashboard', '_SELF');
						}
					});
				} else {
				    swal("Login Failed!","It looks like you have entered invalid credentials.", "error");
				}
			},
			cache: false,
			contentType: false,
			processData: false
		});
	});
</script>