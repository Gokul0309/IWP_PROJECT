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

  <title>Master User - JOB PORTAL</title>

  <link rel="index" href="./" title="Home" />
  <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
  <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
  <style type="text/css">
    .style1 {
      color: #000066;
      font-weight: bold;
    }

    .style3 {
      font-weight: bold
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
                <td height="27" bgcolor="#A0B9F3"><strong>Create New User</strong></td>
              </tr>
              <tr>
                <td height="26">
                  <form id="form1" name="form1" method="post" action="InsertUser.php">
                    <table width="100%" height="95" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="35"><span class="style10">User Name:</span></td>
                        <td>
                          <label>
                            <input type="text" name="txtUserName" id="txtUserName" />
                          </label>
                          <span class="textfieldRequiredMsg">A value is required.</span>
                        </td>
                      </tr>
                      <tr>
                        <td><span class="style10">Password:</span></td>
                        <td>
                          <label>
                            <input type="password" name="txtPassword" id="txtPassword" />
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
                <td height="25" bgcolor="#A0B9F3"><strong>User List</strong></td>
              </tr>
              <tr>
                <td>
                  <table width="100%" border="1" bordercolor="#1CB5F1">
                    <tr>
                      <th height="32" bgcolor="#1CB5F1" class="style3">
                        <div align="left" class="style9 style5"><strong>Id</strong></div>
                      </th>
                      <th bgcolor="#1CB5F1" class="style3">
                        <div align="left" class="style9 style5"><strong>UserName</strong></div>
                      </th>
                      <th bgcolor="#1CB5F1" class="style3">
                        <div align="left" class="style9 style5"><strong>Edit</strong></div>
                      </th>
                      <th bgcolor="#1CB5F1" class="style3">
                        <div align="left" class="style12">Delete</div>
                      </th>
                    </tr>
                    <?php
                    // Establish Connection with Database
                    $con = mysqli_connect("localhost", "gokul", "Gokul0309", "job");
                    // Specify the query to execute
                    $sql = "select * from user_master";
                    // Execute query
                    $result = mysqli_query($con, $sql);
                    // Loop through each records 
                    while ($row = mysqli_fetch_array($result)) {
                      $Id = $row['UserId'];
                      $UserName = $row['UserName'];

                    ?>
                      <tr>
                        <td class="style3">
                          <div align="left" class="style9 style5"><strong><?php echo $Id; ?></strong></div>
                        </td>
                        <td class="style3">
                          <div align="left" class="style9 style5"><strong><?php echo $UserName; ?></strong></div>
                        </td>
                        <td class="style3">
                          <div align="left" class="style9 style5"><strong><a href="EditUser.php?UserId=<?php echo $Id; ?>">Edit</a></strong></div>
                        </td>
                        <td class="style3">
                          <div align="left" class="style9 style5"><strong><a href="DeleteUser.php?UserId=<?php echo $Id; ?>">Delete</a></strong></div>
                        </td>
                      </tr>
                    <?php
                    }
                    // Retrieve Number of records returned
                    $records = mysqli_num_rows($result);
                    ?>
                    <tr>
                      <td colspan="4" class="style3">
                        <div align="left" class="style12"><?php echo "Total " . $records . " Records"; ?> </div>
                      </td>
                    </tr>
                    <?php
                    // Close the connection
                    mysqli_close($con);
                    ?>
                  </table>
                </td>
              </tr>
            </table>

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