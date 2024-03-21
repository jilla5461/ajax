<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = ($_POST['username']) ;
    $password = ($_POST['password']) ;

    if(empty($username) || empty($password)) {
        echo json_encode(array("status" => "error", "message" => "Username and password are required."));
    } else{
        if($username === "aaa" && $password === "111") {
            $_SESSION['username'] = $username;
            echo json_encode(array("status" => "success", "message" => "Login successful."));
        } else {
            echo json_encode(array("status" => "error", "message" => "Invalid username or password."));
        }
    }    
}

?>
