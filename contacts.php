<?php

$name = $_POST['name'];
$email = $_POST['email'];
$topic = $_POST['topic'];
$msg = $_POST['msg'];
if (empty($name) || empty($email) || empty($topic) || empty($msg)) {
    echo 'Please fill in all fields';
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mavericks";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact (name, email, topic, message) VALUES ('$name', '$email', '$topic', '$msg')";

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
