<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "mavericks";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	
    $stmt = $conn->prepare("INSERT INTO delivery_registration (name, address, mail, telephone, city, postal, order_yes) VALUES ($name, $address, $mail, $telephone, $city, $postal, $order_yes)");
    $stmt->bind_param("sssssis", $name, $address, $mail, $telephone, $city, $postal, $order_yes);

    $name = $_POST['name'];
    $address = $_POST['address'];
    $mail = $_POST['mail'];
    $telephone = $_POST['telephone'];
    $city = $_POST['city'];
    $postal = $_POST['postal'];
    $order_yes = isset($_POST['YoN']) ? 1 : 0;

    $stmt->execute();

    echo "New record created successfully";

    $stmt->close();
    $conn->close();
}
?>
