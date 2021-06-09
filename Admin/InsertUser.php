<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Insert User</title>
</head>

<body>
	<?php

	$UserName = $_POST['txtUserName'];
	$Password = $_POST['txtPassword'];
	// Establish Connection with MYSQL
	$con = mysqli_connect("localhost", "gokul", "Gokul0309", "job");

	// Specify the query to Insert Record
	$sql = "insert into user_master	(UserName,Password) values('" . $UserName . "','" . $Password . "')";
	// execute query
	mysqli_query($con, $sql);
	// Close The Connection
	mysqli_close($con);
	echo '<script type="text/javascript">alert("User Inserted Succesfully");window.location=\'User.php\';</script>';

	?>
</body>

</html>