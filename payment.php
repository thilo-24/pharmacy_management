<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "mavericks";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardType = $_POST['card_type'];
    $cardNumber = $_POST['card_number'];
    $expiryDate = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    $sql = "INSERT INTO payments (card_type, card_number, expiry_date, cvv) 
            VALUES ('$cardType', '$cardNumber', '$expiryDate', '$cvv')";

    if ($conn->query($sql) === TRUE) {
        echo "Payment details inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
