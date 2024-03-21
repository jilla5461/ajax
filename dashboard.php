<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
    <p>You are logged in.</p>
    <a href="logout1.php"><button id="logout">Logout</button></a><br><br>
    <a href="register1.php"><button id="add-user">Add User</button></a><br><br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="form.js"></script>
</body>
</html>
