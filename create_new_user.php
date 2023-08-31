<?php
function create_new_user($username, $password, $mysqli)
{
    //Hash the password for safe storage
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    //MySQLi INSERT Prepared statement 
    $stmt = $mysqli->prepare("INSERT INTO users (username, password_hash) values (?, ?)");
    if(!$stmt)
    {
        printf("Query Prep Failed: %s\n", $mysqli->error);
        exit;
    }

    $stmt->bind_param('ss', $username, $hash_password);
    if($stmt->execute())
    {
        echo "New User Added!";
    }
    
    $stmt->close();
}
?>
