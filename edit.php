<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>
<html>
<head>	
	<title>Edit Student Data</title>
</head>

<body style="font-family: Arial, sans-serif; text-align: center; margin-top: 20px;">

    <h2 style="font-size: 28px; color: #0074d9;">Edit Data</h2>
    
    <p>
        <a href="index.php" style="text-decoration: none; background-color: #0074d9; color: #fff; padding: 10px 15px; border-radius: 5px;">Home</a>
    </p>
    
    <form name="edit" method="post" action="editAction.php" style="margin: 0 auto;">
        <table border="0" style="width: 25%; margin: 0 auto;">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name; ?>" style="width: 100%; padding: 5px; border: 1px solid #ccc; border-radius: 5px;"></td>
            </tr>
            <tr> 
                <td>Age</td>
                <td><input type="text" name="age" value="<?php echo $age; ?>" style="width: 100%; padding: 5px; border: 1px solid #ccc; border-radius: 5px;"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email; ?>" style="width: 100%; padding: 5px; border: 1px solid #ccc; border-radius: 5px;"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                <td><input type="submit" name="update" value="Update" style="background-color: #4CAF50; color: #fff; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer;"></td>
            </tr>
        </table>
    </form>
</body>

</html>
