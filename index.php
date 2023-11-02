<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
	<title>Student Ledger</title>
</head>

<body>
<h2 style="text-align: center; font-size: 28px; margin-top: 20px; margin-bottom: 20px; color: #0074d9;">Student Details</h2>
<p style="text-align: center;">
    <a href="add.php" style="text-decoration: none; background-color: #0074d9; color: #fff; padding: 10px 15px; border-radius: 5px;">Add New Student</a>
</p>
<table style="width: 80%; margin: 0 auto; border-collapse: collapse; margin-top: 20px;">
    <tr style="background-color: #0074d9; color: #fff;">
        <th style="padding: 10px;">Name</th>
        <th style="padding: 10px;">Age</th>
        <th style="padding: 10px;">Email</th>
        <th style="padding: 10px;">Action</th>
</tr>
    <?php
    // Fetch the next row of a result set as an associative array
    while ($res = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $res['name'] . "</td>";
        echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $res['age'] . "</td>";
        echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $res['email'] . "</td>";
        echo "<td style='padding: 10px;'>
            <a href=\"edit.php?id=$res[id]\" style='text-decoration: none; background-color: #4CAF50; color: #fff; padding: 5px 10px; border-radius: 5px;'>Edit</a> |
            <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\" style='text-decoration: none; background-color: #FF4136; color: #fff; padding: 5px 10px; border-radius: 5px;'>Delete</a></td>";
        echo "</tr>";
    }
    ?>
</table>



</body>
</html>
