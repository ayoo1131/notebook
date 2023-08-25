<?php
function username_password_validation($username, $password, $password_repeat)
{
    //Server side validation of user entered Sign-Up information
    if (empty($username))
    {
        die("Username is required");
    }

    if (strlen($password) < 8)
    {
        die("Password must be greater than 8 characters");
    }

    if( ! preg_match("/[a-zA-Z]/i", $password))
    {
        die("Password must contain at least one letter");
    }

    if( ! preg_match("/\d/", $password))
    {
        die("Password must containe at least one number");
    }

    if (strcmp($password, $password_repeat) !== 0)
    {
        die("Passwords do not match");
    }
}

?>