<?php

	$conn = mysqli_connect('localhost','root','','mydb');

	if(isset($_GET['id']))
	{

		$id = $_GET['id'];

		$sql = "DELETE FROM employee WHERE id = '$id'";
		$conn->query($sql);
		$conn->close();
	}

	header("Location:http://localhost/Employee/indexEmployee.php");
?>