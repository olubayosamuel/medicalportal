<!DOCTYPE html>

<html>
<head>
<title>online voting</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- <link href="css/user_styles.css" rel="stylesheet" type="text/css" /> -->
<script language="JavaScript" src="js/user.js"></script>
</head>

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
                <li><i class="fa fa-phone"></i> +8801773254014</li>
                <li><i class="fa fa-envelope-o"></i> r.haque.249.rh@gmail.com </li>
            </ul>
        </div>
    </div>
</div>

<?php require('partials/header.html')?>

<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/background1.jpg');">
  <section id="testimonials" class="hoc container clear">
    <h2 class="font-x3 uppercase btmspace-80 underlined"> Online <a href="#">Voting</a></h2>
    <ul class="nospace group">
      <li class="one_half">
      	<div >
            <h1>LOGIN PAGE </h1>
		</div>
          <div>

		<?php
			ini_set ("display_errors", "1");
			error_reporting(E_ALL);
			ob_start();

			session_start();
			require_once('db.php');

			// Defining your login details into variables
			$myusername=$_POST['myusername'];
			$mypassword=$_POST['mypassword'];

			$encrypted_mypassword=md5($mypassword); //MD5 Hash for security

			// MySQL injection protections
			$myusername = stripslashes($myusername);
			$mypassword = stripslashes($mypassword);

			$sql="SELECT * FROM tbmembers WHERE email='$myusername' and password='$encrypted_mypassword'" or die(mysqli_error());
			$result= mysqli_query($con,$sql) or die(mysqli_error());

			// Checking table row. 1 as a true condition
			$count=mysqli_num_rows($result);

			if($count==1){
				// If everything checks out, you will now be forwarded to voter.php
				$user = mysqli_fetch_assoc($result);
				$_SESSION['member_id'] = $user['member_id'];
				header("location:voter.php");
			}
			//If the username or password is wrong, you will receive this message below.
			else {
				echo "Wrong Username or Password<br><br>Return to <a href=\"login.php\">Login</a>";
			}
			ob_end_flush();
		?>
		</div>
      
      </li>
    </ul>
  </section>
</div>

<?php require('partials/footer.html')?>
</div>
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
