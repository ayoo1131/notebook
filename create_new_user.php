<?php
function create_new_user($username, $password, $mysqli)
{
    //Hash the password for safe storage
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    echo $hash_password;
    echo "<br>";

    //MySQLi INSERT Prepared statement 
    echo "Starting Insert statement";
    echo "<br>";

    $stmt = $mysqli->prepare("INSERT INTO notebook (username, password_hash) values (?, ?)");
    if(!$stmt)
    {
        printf("Query Prep Failed: %s\n", $mysqli->error);
        exit;
    }

    $stmt->bind_param('ss', $username, $hash_password);
    $stmt->execute();
    $stmt->close();

    echo "New User Added!";
}
?>