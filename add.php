<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newusername = $_POST['new-username'];
    $newpassword = $_POST['new-password'];
    if (empty($newusername) || empty($newpassword)){
       echo 'Please enter both new username and new password';
    } else {
        $file = 'hello.txt';
        $data = $newusername . ':' . $newpassword . "\n";
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX); // LOCK_EX ensures exclusive lock while writing
        echo "User registered successfully!";
    }
}
?>
