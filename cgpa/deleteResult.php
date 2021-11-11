<?php 
	function alert($msg) {
    	echo "<script type='text/javascript'>alert('$msg');</script>";
	}

	$username = $_POST['deleteUsername'];
	$username = strtolower($username);
	$courseName = $_POST['deleteCourseName'];

	$conn = mysqli_connect('localhost','root','','logininfo');

	$sql = "Select * from userresult where username = '$username' and courseName = '$courseName'";

	if($conn->query($sql)->num_rows == 0)
		alert("Enter Valid Information");
	else
	{
		$sql = "Delete from userresult where username = '$username' and courseName = '$courseName'";

		if($conn->query($sql))
			alert("Result Deleted Successfully!!!");
	}
?>