<?php
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$conn = mysqli_connect('localhost','root','','mydb');

	$sql = "INSERT INTO employee(firstname,lastname,email,phone) VALUES('$firstname','$lastname','$email','$phone')";

	if($conn->query($sql))
	{
		//$conn->close();
		$_SESSION['message'] = "Record Has been created";
		$_SESSION['msg_type'] = "success";

		header("Location:http://localhost/Employee/indexEmployee.php");
	}
	else
		echo "Couldn't add the entry".$conn->error;
	$conn->close();
?>