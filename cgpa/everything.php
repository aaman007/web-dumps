<?php

	include ("tempdatabase.php");

	function alert($msg) {
    	echo "<script type='text/javascript'>alert('$msg');</script>";
	}

	$username = $_POST['user'];
	$password = $_POST['pass'];

	$username = strtolower($username);

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	//$username = mysql_real_escape_string($username);
	//$password = mysql_real_escape_string($password);

	$con = mysqli_connect('localhost','root','','logininfo');

	if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

	$result = $con->query("select * from userdetails where username = '$username' and password = '$password'");
	$row = $result->fetch_assoc();

	$flag = 0;
	if(strlen($username) && strlen($password) && $row['username'] == $username && $row['password'] == $password)
	{
		$flag = 1;
		dataClass::setUsername($username);
	}
	else
		alert("Username or password is incorrect!!");

	$con->close();

	if($flag)
		header("Location: routine.php");
?>