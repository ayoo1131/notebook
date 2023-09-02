<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(isset($_POST["login_button"]))
    {
        //Connect to the Database from PHP
        require ('database.php');

        //Check if the user is in the Database
        
        require('check_user.php');
        $username_in_DB = check_user($username, $mysqli);
        $login_error = null;
        
        if ($username_in_DB)
        {
            echo "1";
            //require ('username_password_login.php');
            //$verify_success=username_password_login($username, $password);
        }

        else
        {
            $login_error ="Username is not registered";
        }
        
    }

?>