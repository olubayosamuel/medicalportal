<?php
/**
 * Created by PhpStorm.
 * User: oluwapelumi
 * Date: 10/10/18
 * Time: 1:46 AM
 */
session_start();
$log1=0;
require('../db.php');
if($_SESSION) {
    $log1 = $_SESSION['log1'];
    $docName = $_SESSION['docName'];
}
?>

<?php
if(isset($_COOKIE['$email']) && $_COOKIE['$pass']){
    $curnam = $_SESSION['curname'];
    $curpas = $_SESSION['curpass'];
}
else if($log1 == 11)
{
    $curnam = $_SESSION['curname'];
    $curpas = $_SESSION['curpass'];
}
else
{
    echo '<img src="images/e1.jpg" width="100%" height="100%"  />';  /* here goes the page when destroy the cookies */
    exit;
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>NHIS portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <a href="https://icons8.com">Icon pack by Icons8</a>

    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <script language="JavaScript" src="js/user.js">
    </script>

</head>

<style type="text/css">
    #list-key{
        display:inline-block;
        margin-right:10px;
    }
    #list-pair{
        display:inline-block;
    }

</style>
<body id="top">

<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
        <div class="fl_left">
            <ul class="faico clear">
                <li><a class="faicon-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                <li><a class="faicon-pinterest" href="https://uk.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                <li><a class="faicon-twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                <li><a class="faicon-dribble" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="faicon-linkedin" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="faicon-google-plus" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="faicon-rss" href="https://www.rss.com/"><i class="fa fa-rss"></i></a></li>
            </ul>
        </div>
        <div class="fl_right">
            <ul class="nospace inline pushright">
                <li><i class=></i> Patient's portal</li>
                <li><i class="fa fa-envelope-o"></i> info@nhis.com </li>
            </ul>
        </div>
    </div>
</div>

<?php require('partials/admin_manage_patient_header.html') ?>

<div class="wrapper bgded overlay" style="background-image:url('hospital/manage.jpg');">

    <center>
        <form name=patient action="FetchPatientById.php" method="post">
            <input type="submit" value="Go to Login">
        </form>
        <div class="row">
            <div class="input-container">
                <input name="patientId"  type="text" required="required"/>
                <label>Patient Id</label>
                <span class="validationMessage"> Enter the id of the patient to fetch </span>
                <div class="bar"></div>
            </div>
        </div>

        <div class="button-container">

            <button name="Submit"><span>Fetch Patient</span></button>

        </div>
    </center>

</div>

<?php require('partials/admin_footer.html')?>

<div class="wrapper row5">
    <div id="copyright" class="hoc clear">
        <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Md. Rezwanul Haque</a></p>
        <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>

