<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Approve Employee</title>
</head>

<body>
    <?php
    $Id = $_GET['EmpId'];
    // Establish Connection with MYSQL
    $con = mysqli_connect("localhost", "gokul", "Gokul0309", "job");
    // Select Database

    // Specify the query to Update Record
    $sql = "update employer_reg set Status='Confirm' where EmployerId=" . $Id . "";
    // Execute query
    mysqli_query($con, $sql);
    // Close The Connection
    mysqli_close($con);
    echo '<script type="text/javascript">alert("Employer Request Confirmed");window.location=\'ManageEmployer.php\';</script>';
    ?>
</body>

</html>