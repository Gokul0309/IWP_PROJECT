<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Delete News</title>
</head>

<body>
	<?php

	$Id = $_GET['NewsId'];
	// Establish Connection with MYSQL
	$con = mysqli_connect("localhost", "gokul", "Gokul0309", "job");

	// Specify the query to Insert Record
	$sql = "delete from news_master where NewsId='" . $Id . "'";
	// execute query
	mysqli_query($con, $sql);
	// Close The Connection
	mysqli_close($con);
	echo '<script type="text/javascript">alert("News Deleted Succesfully");window.location=\'News.php\';</script>';

	?>
</body>

</html>