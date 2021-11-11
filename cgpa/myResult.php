<!DOCTYPE html>
<html>
<head>
	<link rel = "icon" type = "image/png" href = "icon.png">
	<style>
		body{
			font-family: sans-serif;
			background-image : url(library.jpg);
		}
		td,tr{
			padding: 5px;
		}
		table,th,td{
			border: 1px solid white;
			border-collapse: collapse;
		}
		h1{
			padding: 5px;
		}
		h3{
			border: 1px solid white;
			padding: 5px;
			background-color:#0f4b88;
			color: white;
		}
	</style>
	<title>My Result</title>
</head>
<body>

	<div class="toxic">
		<form action="addResult.php" method = "POST">
			<input type="text" name = "username" placeholder="Username">
			<input type="text" name="courseName" placeholder="Course Name">
			<input type="number" step="0.01" name="courseCredits" placeholder="Course Credits">
			<input type="number" step = "0.01" name="courseGPA" placeholder="Course GPA">
			<input type="submit" name="" value="ADD">
		</form>
	</div>
	<div style="margin-top: 10px;">
		<form action="deleteResult.php" method = "POST">
			<input type="text" name="deleteUsername" placeholder="Username">
			<input type="text" name="deleteCourseName" placeholder="Course Name">
			<input type="submit" name="" value="Delete">
		</form>
	</div>

	<div style="margin-top: 10px;">

		<form action="myResult.php" method = "POST">
			<input type="text" name = "user" placeholder="Username">
			<input type="submit" name="" value="See Result">
		</form>
	</div>

	<br>

		<h1 style="color: white;background-color: #0f4b88;text-align:center;"> User Result </h1>

		<div>
			<table style="width: 100%;">
				<thead>
					<tr style="background-color:#0f4b88;color: white;">
						<td> Course Name </td>
						<td>Course Credits</td>
						<td>Grade</td>
						<td>GPA</td>
					</tr>
				</thead>
				<tbody>
					<?php 

						$conn = new mysqli('localhost','root','','logininfo');

						if($conn->connect_error)
							die("Connection failed ". $conn->connect_error);

						if(isset($_POST['user']))
						{
							$user = $_POST['user'];
							$user = strtolower($user);

							$sql = "select * from userresult where username = '$user'";

							$result = $conn->query($sql);

							$creditsCompleted = 0.0;
							$sum = 0.0;

							while($row = $result->fetch_assoc())
							{
								$courseName = $row['courseName'];
								$courseCredits = $row['courseCredits'];
								$grade = $row['courseGrade'];
								$gpa = $row['courseGPA'];

								if($grade != "F"){
									$creditsCompleted += $courseCredits;
									$sum += $gpa * $courseCredits;
								}

								echo '<tr style="background-color:#0f4b88;color: white;">
										<td>' . $courseName . '</td>
										<td>' . $courseCredits . '</td>
										<td>' . $grade . '</td>
										<td>' . $gpa . '</td>
									  </tr>';
							}
							echo "</tbody>
								</table>
								</div>";

							if($creditsCompleted)
								$cgpa = $sum / $creditsCompleted;
							else
								$cgpa = 0.0;
							echo "<h3>Credits Completed : " . $creditsCompleted . "<br> Current CGPA : " . round($cgpa,2) . " </h3>";
						}
						$conn->close();
					 ?>
</body>
</html>