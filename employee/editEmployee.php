<?php
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$id = $_POST['id'];

	$conn = mysqli_connect('localhost','root','','mydb');


	$sql = "UPDATE employee SET firstname='$firstname',lastname='$lastname',email='$email',phone='$phone' WHERE id = '$id'";

	if($conn->query($sql))
	{

		header("Location:http://localhost/Employee/indexEmployee.php");
	}
	else
		echo "Couldn't edit the entry".$conn->error;
	$conn->close();
?>