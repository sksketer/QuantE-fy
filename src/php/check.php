<?php
    session_start();
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $email = $_SESSION['email'];
    $user = $_SESSION['user-type'];
    if($fname == "" && $lname == "") {
        header("Location: http://localhost/QuantE-FY/src/php/signIn-signUp/ask.html");
    }
    else {
        if($user == "Admin")
            header("Location: http://localhost/QuantE-FY/src/php/users/admin/admin.php");
        else
            header("Location: http://localhost/QuantE-FY/src/php/users/ask2.php");
    }

?>