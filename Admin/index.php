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

    <title>JOB PORTAL</title>

    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <style type="text/css">
        .style1 {
            color: #000066;
            font-weight: bold;
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


                        <p>&nbsp;</p>

                        <p class="btn-more box noprint">&nbsp;</p>
                    </div>
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