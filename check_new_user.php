<?php
function check_new_user($username,$mysqli)
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
        return false;
    }

    $stmt->close();
    return true;
}
?>
