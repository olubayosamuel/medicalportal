<?php
	session_start();
?>


<!DOCTYPE html>

<html>
<head>
<title>Patient's portal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- <link href="css/user_styles.css" rel="stylesheet" type="text/css" /> -->
<script language="JavaScript" src="js/user.js">
</script>

</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
  </div>
</div>

<?php require('partials/logout-header.html')?>

<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/background1.jpg');">
  <section id="testimonials" class="hoc container clear">
    <h2 class="font-x3 uppercase btmspace-80 underlined"> Online <a href="#">Voting</a></h2>
    <ul class="nospace group">
      <li class="one_half">
        <blockquote>
            <div id="page">
                <div id="header">
                    <h1>Logged Out Successfully </h1>
                    <p align="center">&nbsp;</p>
                </div>
                <?php
                session_destroy();
                ?>
                You have been successfully logged out.<br><br><br>
                Return to <a href="login.php">Login</a>

            </div>
        </blockquote>
      
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>

<?php require('partials/footer.html') ?>

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








