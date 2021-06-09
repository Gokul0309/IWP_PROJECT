<?php
session_start();
if (isset($_SESSION['$UserName'])) {
} else {
    header('location:../index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />

    <title>News - JOB PORTAL</title>

    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <style type="text/css">
        .style1 {
            color: #000066;
            font-weight: bold;
        }

        .style3 {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: small;
            font-weight: bold;
            color: #192666;
        }

        .style4 {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: small;
            font-weight: bold;
            color: #FFFFFF;
        }

        .style7 {
            font-size: small
        }

        .style8 {
            font-family: Verdana, Arial, Helvetica, sans-serif
        }

        .style9 {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: small;
        }

        .style10 {
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

                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="27" bgcolor="#A0B9F3"><span class="style4 style10">Create News</span></td>
                            </tr>
                            <tr>
                                <td height="26">
                                    <form id="form1" method="post" action="InsertNews.php">
                                        <table width="100%" height="109" border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td height="36"><span class="style9">News:</span></td>
                                                <td>
                                                    <label>
                                                        <input type="text" name="txtNews" id="txtNews" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="35"><span class="style9">News Date:</span></td>
                                                <td>
                                                    <label>
                                                        <input type="date" name="txtDate" id="txtDate" />
                                                    </label>
                                                    <span class="textfieldRequiredMsg">A value is required.</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td><label>
                                                        <input type="submit" name="button" id="button" value="Submit" />
                                                    </label></td>
                                            </tr>
                                        </table>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td height="25" bgcolor="#A0B9F3"><span class="style3">News List</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="100%" border="1" bordercolor="#1CB5F1">
                                        <tr>
                                            <th height="32" bgcolor="#1CB5F1">
                                                <div align="left" class="style12 style13 style7 style8">Id</div>
                                            </th>
                                            <th bgcolor="#1CB5F1">
                                                <div align="left" class="style11 style7 style8">News</div>
                                            </th>
                                            <th bgcolor="#1CB5F1">
                                                <div align="left" class="style11 style7 style8">Date</div>
                                            </th>
                                            <th bgcolor="#1CB5F1">
                                                <div align="left" class="style11 style7 style8">Delete</div>
                                            </th>
                                        </tr>
                                        <?php
                                        // Establish Connection with Database
                                        $con = mysqli_connect("localhost", "gokul", "Gokul0309", "job");
                                        // Specify the query to execute
                                        $sql = "select * from news_master";

                                        // Execute query
                                        $result = mysqli_query($con, $sql);

                                        // Loop through each records
                                        while ($row = mysqli_fetch_array($result)) {
                                            $Id = $row['NewsId'];
                                            $News = $row['News'];
                                            $NewsDate = $row['NewsDate'];
                                        ?>
                                            <tr>
                                                <td>
                                                    <div align="left" class="style11 style7 style8"><?php echo $Id; ?></div>
                                                </td>
                                                <td>
                                                    <div align="left" class="style11 style7 style8"><?php echo $News; ?></div>
                                                </td>
                                                <td>
                                                    <div align="left" class="style11 style7 style8"><?php echo $NewsDate; ?></div>
                                                </td>
                                                <td>
                                                    <div align="left" class="style11 style7 style8"><a href="DeleteNews.php?NewsId=<?php echo $Id; ?>">Delete</a></div>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        // Retrieve Number of records returned
                                        $records = mysqli_num_rows($result);
                                        ?>
                                        <tr>
                                            <td colspan="5">
                                                <div align="left" class="style11 style7 style8"><?php echo "Total " . $records . " Records"; ?> </div>
                                            </td>
                                        </tr>
                                        <?php
                                        // Close the connection
                                        mysqli_close($con);
                                        ?>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="26">
                                    <form method="post" action="InsertNews.php">
                                        <table width="100%" height="109" border="0" cellpadding="0" cellspacing="0">
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