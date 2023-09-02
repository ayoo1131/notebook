<?php

    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_repeat = $_POST["password_repeat"];

    if (isset($_POST['signup_button'])) 
    {
        //Server side validation of user entered username and password
        require ('username_password_validate.php');
        $signup_error = username_password_validate($username, $password, $password_repeat);

        if ($signup_error == null)
        {
            //Connect to the Database from PHP
            require ('database.php');

            
            //Prepared statement to check MySQL DB if username is present
            require('check_user.php');
            $username_in_DB = check_user($username, $mysqli);

            
            if (!$username_in_DB)
            {
                //Username and password are valid, create a new user
                require('create_new_user.php');
                create_new_user($username, $password, $mysqli);
            }

            else
            {
                $signup_error = "Username is already taken";
            }
        }
        
    }
?>