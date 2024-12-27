<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$itemname = $_POST['itemname'];
		$type = $_POST['type'];
		$quantity = $_POST['quantity'];
		$itemdetail = $_POST['itemdetail'];
		$image = $_POST['image'];
		$sql = "INSERT INTO members (itemname, type, quantity, itemdetail, image) VALUES ('$itemname', '$type', '$quantity', '$itemdetail', '$image')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Data added successfully';
		}	
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>