<?php

$dbHost = 'localhost'; 
$dbName = 'mavericks'; 
$dbUser = 'root'; 
$dbPass = '';

try {
   
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
