<?php
    $login_username = $_POST["username"];
    $login_password = $_POST["password"];

    if(isset($_POST["login_button"]))
    {
        $login_error = null;
        if (empty($login_username))
        {
            $login_error = "Please enter the username";
        }

        elseif(empty($login_password))
        {
            $login_error="Please enter the password";
        }

        else
        {
            //Connect to the Database from PHP
            require ('database.php');

            //Check if the user is in the Database
            require('check_user.php');
            $username_in_DB = check_user($login_username, $mysqli);

            if ($username_in_DB)
            {
                require ('username_password_login.php');
                $verify_success=username_password_login($login_username, $login_password, $mysqli);

                if($verify_success)//Username and password are valid, logging in user
                {
                    session_start();
                    $_SESSION["username"] = $login_username;
                    $_SESSION["logged_in"]= true;

                    header('Location: notebook.php');
                    exit();
                }

                else //Username and password are not valid.
                {
                    $login_error = "Username and/or Password not correct";
                }
            }

            else
            {
                $login_error ="Username is not registered";
            }
        }
    }
?>