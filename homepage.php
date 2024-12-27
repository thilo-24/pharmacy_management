<?php
session_start();
include("register.php");

// Check if the user is logged in
if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    $query=mysqli_query($mysqli, "SELECT users.* FROM `users` WHERE users.email='$email'");
    // Check if user data is found
    if(mysqli_num_rows($query) > 0) {
        // Redirect to home.html
        header("Location: home.html");
        exit(); // Ensure no further code execution after redirection
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p style="font-size:50px; font-weight:bold;">
       Hello
      </p>
    </div>
</body>
</html>
