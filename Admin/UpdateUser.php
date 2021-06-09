<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Update User</title>
</head>

<body>
    <?php
    $Id = $_POST['txtUserId'];
    $Name = $_POST['txtUserName'];
    $Password = $_POST['txtPass'];

    // Establish Connection with Database
    $con = mysqli_connect("localhost", "gokul", "Gokul0309", "job");
    // Specify the query to Update Record
    $sql = "update user_master set UserName='" . $Name . "',Password='" . $Password . "' where UserId=" . $Id . "";
    // Execute query
    mysqli_query($con, $sql);
    // Close The Connection
    mysqli_close($con);
    echo '<script type="text/javascript">alert("User Updated Succesfully");window.location=\'User.php\';</script>';
    ?>
</body>

</html>