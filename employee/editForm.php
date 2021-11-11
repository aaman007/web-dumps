<!DOCTYPE html>
<html>
<head>
	<title>New Employee</title>
	<link rel = "icon" type = "image/png" href = "icon.png">
	<link rel="stylesheet" type="text/css" href="style.css">

	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container" style="margin-top: 10%;">
		<div class="card justify-content-center text-center">
			<div class="card-header">Edit Employee Information</div>
			<div class="card-body">
				<form action="editEmployee.php" method="POST">
					<?php
						if(isset($_GET['id'])){
							$id = $_GET['id'];

							$conn = mysqli_connect('localhost','root','','mydb');

							$sql = "SELECT *FROM employee WHERE id='$id'";

							$result = $conn->query($sql);
							$row = $result->fetch_assoc();

							echo '<input type = "text" name = "firstname" value="'.$row['firstname'].'"><br>';
							echo '<input type = "text" name = "lastname" value="'.$row['lastname'].'"><br>';
							echo '<input type = "email" name = "email" value="'.$row['email'].'"><br>';
							echo '<input type = "number" name = "phone" value="'.$row['phone'].'"><br>';
							echo '<input type = "hidden" name = "id" value="'.$row['id'].'"><br>';

						}
					?>
					<input class="btn btn-primary" type="submit" name="update" value="Update">
				</form>
			</div>
		</div>
	</div>
</body>
</html>