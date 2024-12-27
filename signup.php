<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "mavericks";
$mysqli = mysqli_connect($host, $user, $pass, $db);

if(isset($_POST['submit'])){
    $username = $_POST['Uname'];
    $address = $_POST['address'];
    $age = $_POST['Age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $mysqli->query($checkEmail);
    
    if($result->num_rows > 0){
        echo "Email Address Already Exists!";
    } else {
        $sql = "INSERT INTO users (username, address, age, email, password) VALUES ('$username', '$address', '$age', '$email', '$password')";
        $result = mysqli_query($mysqli, $sql);
        
        if($result) {
            header("Location: login.php");
            exit(); 
        } else {
            echo "Error: " . $mysqli->error;
        }
    }
}
?>
