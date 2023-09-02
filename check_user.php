<?php
function check_user($username, $mysqli) //Return true if user is in database, false if user not in database
{
    //MySQLi SELECT Prepared statement (check if username exists)
    $stmt = $mysqli->prepare("SELECT username FROM users WHERE username=?"); 
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result
    $num_rows = mysqli_num_rows($result); //Get the number of records that match the SQL prepared statement parameters

    if ($num_rows >= 1)//Username already exists in the database
    {
        $name_error = "Username already taken";
        return true;
    }

    else //Username is not registered in the database
    {
        $stmt->close();
        return false;
    }
}
?>
