<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />

    <title>Edit Master User - JOB PORTAL</title>

    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <style type="text/css">
        .style10 {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: small;
            font-weight: bold;
            color: #FFFFFF;
        }

        .style8 {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: small;
            font-weight: bold;
        }
    </style>
    <style type="text/css">
        .style11 {
            color: #192666
        }
    </style>
</head>

<body>
    <!-- Main -->
    <div id="main" class="box">
        <?php
        include "Header.php"
        ?>
        <?php
        include "menu.php"
        ?>
        <!-- Page (2 columns) -->
        <div id="page" class="box">
            <div id="page-in" class="box">
                <!-- Content -->
                <div id="content">
                    <!-- Article -->
                    <div class="article">
                        <h2><span><a href="#">Welcome To Control Panel</a></span></h2>

                        <table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td height="33" bgcolor="#A0B9F3"><span class="style10 style11">Edit Record</span></td>
                            </tr>
                            <tr>
                                <td><?php
                                    $Id = $_GET['UserId'];
                                    // Establish Connection with Database
                                    $con = mysqli_connect("localhost", "gokul", "Gokul0309", "job");
                                    // Specify the query to execute
                                    $sql = "select * from user_master where UserId=" . $Id . "";
                                    // Execute query
                                    $result = mysqli_query($con, $sql);
                                    // Loop through each records
                                    while ($row = mysqli_fetch_array($result)) {
                                        $Id = $row['UserId'];
                                        $Name = $row['UserName'];
                                        $Password = $row['Password'];
                                    }
                                    ?>
                                    <form method="post" action="UpdateUser.php">
                                        <table width="100%" border="0">
                                            <tr>
                                                <td height="32"><span class="style8">User Id</span></td>
                                                <td>
                                                    <label>
                                                        <input name="txtUserId" type="text" id="txtUserId" value="<?php echo $Id; ?>" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="36"><span class="style8">User Name:</span></td>
                                                <td>
                                                    <label>
                                                        <input name="txtUserName" type="text" id="txtUserName" value="<?php echo $Name; ?>" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="36"><span class="style8">Password:</span></td>
                                                <td>
                                                    <label>
                                                        <input name="txtPass" type="password" id="txtPass" value="<?php echo $Password; ?>" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" name="submit" value="Update Record" /></td>
                                            </tr>
                                        </table>
                                    </form>
                                    <?php
                                    // Close the connection
                                    mysqli_close($con);
                                    ?>
                                    <form method="post" action="UpdateUser.php">
                                        <table width="100%" border="0">
                                        </table>
                                    </form>
                                </td>
                            </tr>
                        </table>
                        <p>&nbsp;</p>

                        <p class="btn-more box noprint">&nbsp;</p>
                    </div> <!-- /article -->
                </div> <!-- /content -->

                <?php
                include "right.php"
                ?>

            </div> <!-- /page-in -->
        </div> <!-- /page -->

        <?php
        include "footer.php"
        ?>
    </div> <!-- /main -->
</body>

</html>