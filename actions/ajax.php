<?php
include('../connection.php');

//Check Email Query
if($_POST['reason'] == 'check_email') {
    $email = $_POST['email'];
    
    $checkUser = mysqli_query($conn,'SELECT * FROM auth WHERE email = "'.$email.'"');
    if(mysqli_num_rows($checkUser) > 0) {
        echo "found";
    }
}

//Check Profile Email Query
if($_POST['reason'] == 'check_email_profile') {
    $email = $_POST['email'];
    
    $checkUser = mysqli_query($conn,'SELECT * FROM auth WHERE email = "'.$email.'"');
    if(mysqli_num_rows($checkUser) > 0) {
        if($email != $_SESSION['email']) {
            echo "found";
        }
        else {
            echo "noissue";
        }
    }
}

//Register User Query
if($_POST['reason'] == 'register_user') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = md5($_POST['userpass']);
    $username = strstr($email, '@', true);
    
    $registerQuery = mysqli_query($conn,'INSERT INTO auth (`username`,`fullname`,`email`,`password`,`status`) VALUES ("'.$username.'", "'.$fullname.'", "'.$email.'", "'.$password.'", "active")');
    if($registerQuery) {
        echo "success";
    }
    else {
        echo "fail";
    }

}

//Login User Query
if($_POST['reason'] == 'login_user') {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $checkUser = mysqli_query($conn,'SELECT * FROM auth WHERE email = "'.$email.'" AND password = "'.$password.'"');
    $userArray = mysqli_fetch_array($checkUser);
    if(mysqli_num_rows($checkUser) > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $userArray['id'];
        echo "success";
    }
}

//Update Profile Query
if($_POST['reason'] == 'update_user') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = strstr($email, '@', true);
    
    $UpdateProfileQuery = mysqli_query($conn,'UPDATE auth SET `username` = "'.$username.'",`fullname` = "'.$fullname.'",`email` = "'.$email.'"');
    if($UpdateProfileQuery) {
        echo "success";
    }
    else {
        echo "fail";
    }

}

//Check Old Password
if($_POST['reason'] == 'check_old_pass') {
    $oldPass = md5($_POST['oldPass']);
    $email = $_SESSION['email'];
    
    $checkUserPassword = mysqli_query($conn,'SELECT * FROM auth WHERE email = "'.$email.'" AND password = "'.$oldPass.'"');
    if(mysqli_num_rows($checkUserPassword) > 0) {
        echo "passmatched";
    }

}

//Update Password
if($_POST['reason'] == 'update_password') {
    $password = md5($_POST['password']);
    
    $UpdatePasswordQuery = mysqli_query($conn,'UPDATE auth SET `password` = "'.$password.'"');
    if($UpdatePasswordQuery) {
        echo "success";
    }
    else {
        echo "fail";
    }
}

//Add Ticket Query
if($_POST['reason'] == 'add_new_ticket') {
    $ticket_title = $_POST['ticket_title'];
    $ticket_details = $_POST['ticket_details'];
    $ticket_priority = $_POST['ticket_priority'];
    $user_id = $_SESSION['id'];
    
    $ticketQuery = mysqli_query($conn,'INSERT INTO tickets (`user_id`, `ticket_title`,`ticket_details`,`ticket_priority`) VALUES ("'.$user_id.'", "'.$ticket_title.'", "'.$ticket_details.'", "'.$ticket_priority.'")');
    if($ticketQuery) {
        echo "success";
    }
    else {
        echo "fail";
    }

}


//Add Feedback Query
if($_POST['reason'] == 'add_feedback') {
    $fullname = $_POST['fullname'];
    
    // $ticketQuery = mysqli_query($conn,'INSERT INTO tickets (`user_id`, `ticket_title`,`ticket_details`,`ticket_priority`) VALUES ("'.$user_id.'", "'.$ticket_title.'", "'.$ticket_details.'", "'.$ticket_priority.'")');
    if($fullname != "") {
        echo "success";
    }
    else {
        echo "fail";
    }

}

?>