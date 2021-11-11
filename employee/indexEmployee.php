<!DOCTYPE html>
<html>
<head>
	<title>Employees</title>
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
	<?php
	session_start();
	if(isset($_SESSION['message'])):?>
	<div class="alert alert-<?php $_SESSION['msg_type'] ?>">
		<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
	</div>
	<?php endif ?>

	<div class="container" style="margin-top: 2%;">
		<div class="card justify-content-center text-center">
			<div class="card-header">Employee List</div>
			<div class="card-body">
				<table class="table table-striped">
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Action</th>
					</tr>
					<?php
						$conn = mysqli_connect('localhost','root','','mydb');
						$sql = "SELECT * FROM employee";
						$result = $conn->query($sql);

						if($result->num_rows)
						{
							while ($row = $result->fetch_assoc()) {
								$firstname = $row['firstname'];
								$lastname = $row['lastname'];
								$email = $row['email'];
								$phone = $row['phone'];
								$id = $row['id'];

								echo "<tr>";
									echo "<td>".$firstname."</td>";
									echo "<td>".$lastname."</td>";
									echo "<td>".$email."</td>";
									echo "<td>".$phone."</td>";
									echo "<td>";
									echo "<a href='editForm.php?id=";
									echo $id;
									echo "' class='btn btn-info' style='margin-right:5px;color:white;'>Edit</a>";
									echo "<a href='deleteEmployee.php?id=";
									echo $id;
									echo "' class='btn btn-danger' style='color:white;'>Delete</a>";
									echo "</td>";
									echo "</tr>";
							}
						}
					?>
				</table>
			</div>
			<div class="card-footer">
				<a href='http://localhost/Employee/newEntry.php' class='btn btn-primary'>New Employee</a>
			</div>
		</div>
	</div>
</body>
</html>