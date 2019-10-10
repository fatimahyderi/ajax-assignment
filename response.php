<?php
require_once('connect.php');

if(isset($_POST['action'])){
	if(isset($_POST['username']) && !empty(trim($_POST['username']))){
		$name = $_POST['username'];
		$email = $_POST['email'];
		$age = $_POST['age'];
	} else {
		die("hi");
	}
	$results = mysqli_query($connect, "INSERT INTO users ( username, email,age) VALUES ( '$name', '$email','$age')");
		if($results){
			$last_id = mysqli_insert_id($connect);
			echo "Username : " . $name . "</br>";
			echo "Email : " . $email . "</br>" ;
			echo "Your id is " . $last_id;
		} else{
			echo mysqli_error($connect);
		}
	
	
		
	}
	?>