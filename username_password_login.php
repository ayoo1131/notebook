<?php

function username_password_login($login_username, $login_password, $mysqli)
{
    //MySQLi SELECT Prepared statement (check if username exists)
    $stmt = $mysqli->prepare("SELECT password_hash FROM users WHERE username=?"); 
    $stmt->bind_param("s", $login_username);
    $stmt->execute();
    
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $password_hash = $row['password_hash'];
    
    return password_verify($login_password, $password_hash);
}

?>