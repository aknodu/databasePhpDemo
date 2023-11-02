<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		h2 {
			text-align: center;
			font-size: 28px;
			margin-top: 20px;
			color: #0074d9;
		}
		a {
			text-decoration: none;
			background-color: #0074d9;
			color: #fff;
			padding: 10px 15px;
			border-radius: 5px;
			display: inline-block;
			margin-top: 20px;
		}
		form {
			text-align: center;
		}
		table {
			width: 25%;
			margin: 0 auto;
		}
		table td {
			padding: 10px;
		}
		input[type="text"] {
			width: 100%;
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 15px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h2>Add Data</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table>
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>
