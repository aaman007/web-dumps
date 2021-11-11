<!DOCTYPE html>
<html>
<head>
	<title>Users List</title>
	<link rel = "icon" type = "image/png" href = "icon.png">
	<link rel = "stylesheet" href = "showUsers.css" >
</head>
<body>

		<h1 style="color: white;background-color: #0f4b88;"> All User List </h1>

		<div class="tableDesign">
			<table style="width: 100%;">
				<thead>
					<tr style="background-color:#0f4b88;color: white;">
						<td> Username </td>
						<td>Email</td>
					</tr>
				</thead>
				<tbody>
					<?php 
						$conn = new mysqli('localhost','root','','logininfo');

						if($conn->connect_error)
							die("Connection failed ". $conn->connect_error);

						$sql = "select username,email from userdetails";

						$result = $conn->query($sql);

						if($result->num_rows > 0)
						{
							while($row = $result->fetch_assoc())
							{
								$username = $row['username'];
								$email = $row['email'];

								echo '<tr style="background-color:#0f4b88;color: white;">
										<td>' . $username . '</td>
										<td>' . $email . '</td>
									</tr>';
							}
						}

						$conn->close();
					 ?>
				 </tbody>
		</table>
	</div>
</body>
</html>