<?php

    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_repeat = $_POST["password_repeat"];

    if (isset($_POST['register'])) 
    {
        //Server side validation of user entered username and password
        require ('username_password_validation.php');
        username_password_validation($username, $password, $password_repeat);

        //Connect to the Database from PHP
        require ('database.php');

        //Prepared statement to check MySQL DB if username is present
        require('check_new_user.php');
        $username_valid = check_new_user($username, $mysqli);
        if ($username_valid)
        {
            //Username and password are valid, create a new user
            require('create_new_user.php');
            create_new_user($username, $password, $mysqli);
            $username_error = false;
        }

        else
        {
            $username_error = true;
        }

    }
?>