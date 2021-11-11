<?php
	function alert($msg) {
    	echo "<script type='text/javascript'>alert('$msg');</script>";
	}
	function checkDomain($email,$pos)
	{
		$pre = 0;
		$dot = 0;
		$post = 0;
		for($i=$pos;$i<strlen($email);$i++)
		{
			if($email[$i] >= 'a' && $email[$i] <= 'z')
			{
				if($pre == 1)
					$post = 1;
				else
					$pre = 1;
			}
			else if($email[$i] == '.')
			{
				if($dot || $pre == 0)
				{
					$dot = 0;
					break;
				}
				else
					$dot = 1;
			}
			else
				return false;
		}
		if($pre && $dot && $post)
			return true;
		return false;
	}
	function checkName($email,$pos)
	{
		for($i=0;$i<$pos;$i++)
		{
			if($email[$i] >= 'a' && $email[$i] <= 'z')
				continue;
			else if($email[$i] >= '0' && $email[$i] <= '9')
				continue;
			else
				return false;
		}
		return true;
	}
	function validEmail($email)
	{
		$at = -1;

		for($i=0;$i<strlen($email);$i++)
		{
			if($email[$i] == '@')
			{
				$at = $i;
				break;					
			}
		}
		if($at == -1 || $at == 0 || $at == strlen($email) || checkDomain($email,$at+1) == 0 || checkName($email,$at) == 0)
			return false;
		return true;
	}

	$username = $_POST['user'];
	$password = $_POST['pass'];
	$email = $_POST['email'];

	$username = strtolower($username);
	$email = strtolower($email);

	if(validEmail($email) && strlen($username) && strlen($password))
	{

		$conn = mysqli_connect('localhost','root','','logininfo');

		$sql = "SELECT * FROM userdetails where username = '$username'";

		if($conn->query($sql)->num_rows > 0)
		{
			alert("Username already exists!!");
		}
		else
		{
			$sql = "INSERT INTO userdetails(username,email,password) VALUES('$username','$email','$password')";
			
			if ($conn->query($sql) === TRUE) {
				alert("Signed up successfully!!");
		    	//echo "Signed up successfully!!";
			} 	
			else {
		    	echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		}
    }
	else
		alert("Enter valid information");

?>