<?php
	
	function alert($msg) {
    	echo "<script type='text/javascript'>alert('$msg');</script>";
	}
	function getGrade($gpa)
	{
		if($gpa > 4)
			$gpa = 4;
		if($gpa == 4)
			return "A+";
		else if($gpa >= 3.75)
			return "A";
		else if($gpa >= 3.50)
			return "A-";
		else if($gpa >= 3.25)
			return "B+";
		else if($gpa >= 3.00)
			return "B";
		else if($gpa >= 2.75)
			return "B-";
		else if($gpa >= 2.50)
			return "C+";
		else if($gpa >= 2.25)
			return "C";
		else if($gpa >= 2.00)
			return "D";
		return "F";
	}
	
	$username = $_POST['username'];
	$username = strtolower($username);

	$courseName = $_POST['courseName'];

	$courseCredits = $_POST['courseCredits'];
	$courseGPA = $_POST['courseGPA'];
	$courseGrade = getGrade($courseGPA);

	$conn = mysqli_connect('localhost','root','','logininfo');

	$sql = "INSERT INTO userresult(username,courseName,courseCredits,courseGrade,courseGPA)
						VALUES('$username','$courseName',$courseCredits,'$courseGrade',$courseGPA)";

	if(strlen($username) && strlen($courseGrade) && strlen($courseName) && $courseGrade != NULL && $courseGPA != NULL && $conn->query($sql) == TRUE)
		alert("Result Added Successfully!!!");
	else
		alert("Enter Valid Information");				
?>