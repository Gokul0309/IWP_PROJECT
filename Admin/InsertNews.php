<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Insert News</title>
</head>

<body>
	<?php

	$News = $_POST['txtNews'];
	$Date = $_POST['txtDate'];
	// Establish Connection with MYSQL
	// Establish Connection with Database
	$con = mysqli_connect("localhost", "gokul", "Gokul0309", "job");
	// Specify the query to Insert Record
	$sql = "insert into news_master	(News,NewsDate) values('" . $News . "','" . $Date . "')";
	// execute query
	mysqli_query($con, $sql);
	// Close The Connection
	mysqli_close($con);
	echo '<script type="text/javascript">alert("New News Inserted Succesfully");window.location=\'News.php\';</script>';

	?>
</body>

</html>