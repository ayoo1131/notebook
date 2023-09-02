<?php

function username_password_login($username, $password)
{
    //MySQLi SELECT Prepared statement (check if username exists)
    $stmt = $mysqli->prepare("SELECT password_hash FROM users WHERE username=?"); 
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $password_hash = $row['password_hash'];
    echo $password_hash;
}

?>