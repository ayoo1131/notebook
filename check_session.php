<?php
    session_start();

    //check if the session exists, if the session is not set, redirects to the Login page
    if(! isset($_SESSION["logged_in"]))
    {
        header("Location: login.php");

    }

?>