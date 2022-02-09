<?php
	require_once 'admin/connect.php';
	if(ISSET($_POST['add_issues'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$description = $_POST['description'];
		$conn->query("INSERT INTO `issues` (name, email, description) VALUES('$name','$email', '$description')") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `issues` WHERE `name` = '$name' && `email` = '$email' && `description` = '$description'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		
		
	}	
?>