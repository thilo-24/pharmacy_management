<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$itemname = $_POST['itemname'];
		$type = $_POST['type'];
		$quantity = $_POST['quantity'];
		$itemdetail = $_POST['itemdetail'];
		$image = $_POST['image'];
		$sql = "UPDATE members SET itemname = '$itemname', type = '$type', quantity = '$quantity', itemdetail = '$itemdetail', image = '$image' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Data updated successfully';
		}
		else{
			$_SESSION['error'] = 'Something went wrong in updating data';
		}
	}
	else{
		$_SESSION['error'] = 'Select Data to edit first';
	}

	header('location: index.php');

?>