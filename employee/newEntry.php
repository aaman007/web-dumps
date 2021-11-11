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
			<div class="card-header">Employee Information</div>
			<div class="card-body">
				<form action="createEmployee.php" method="POST">
					<input type = "text" name = "firstname" placeholder="First Name"> <br>
					<input type = "text" name = "lastname" placeholder="Last Name"> <br>
					<input type = "email" name = "email" placeholder="Email"> <br>
					<input type = "number" name = "phone" placeholder="Phone Number"> <br>
					<input class="btn btn-primary" type="submit" name="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
</body>
</html>