<?php
	require_once 'admin/connect.php';
	if(ISSET($_POST['add_customer'])){
		$name = $_POST['name'];
		$dateofbirth = $_POST['dateofbirth'];
		$email = $_POST['email'];
		$city = $_POST['city'];
		$pincode = $_POST['pincode'];
		$contactno = $_POST['contactno'];
		$transportation_id = $_POST['transportation_id'];
		$restaurant_id = $_POST['restaurant_id'];
		$accom_id = $_POST['accom_id'];	
		$conn->query("INSERT INTO `customer` (name, dateofbirth, email, city,pincode, contactno,transportation_id,restaurant_id,accom_id) VALUES('$name', '$dateofbirth', '$email', '$city', '$pincode','$contactno','$transportation_id','$restaurant_id','$accom_id')") or die(mysqli_error());
		$query = $conn->query("SELECT * FROM `customer` WHERE `name` = '$name' && `email` = '$email' && `contactno` = '$contactno'") or die(mysqli_error());
	}