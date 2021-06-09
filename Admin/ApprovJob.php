<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Approve Job</title>
</head>

<body>
    <?php
    $Id = $_GET['JobId'];
    // Establish Connection with Database
    $con = mysqli_connect("localhost", "gokul", "Gokul0309", "job");
    // Specify the query to Update Record
    $sql = "update jobseeker_reg set Status='Confirm' where JobSeekId=" . $Id . "";
    // Execute query
    mysqli_query($con, $sql);
    // Close The Connection
    mysqli_close($con);
    echo '<script type="text/javascript">alert("Job Seeker Request Confirmed");window.location=\'ManageJob.php\';</script>';
    ?>
</body>

</html>