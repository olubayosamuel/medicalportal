
<!DOCTYPE html>

<html>
<head>
<title>online voting</title>
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
        <li><i class=></i>patient's portal</li>
        <li><i class=></i> info@portal.com </li>
      </ul>
    </div>
  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left">
      <h1><a href="index.php">Patient's Portal</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
      </ul>
    </nav>
  </header>
</div>

<div class="wrapper bgded overlay" style="background-image:url('hospital/10.jpg');">
  <section id="testimonials" class="hoc container clear">
    <h2 class="font-x3 uppercase btmspace-80 underlined"> Patient's <a href="#">portal</a></h2>
    <ul class="nospace group">
      <li class="one_half">
        <blockquote>


<div  >
  <?php
  	require('db.php');
  	//Process
  	if (isset($_POST['submit']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['voter_num']))
  	{

  		$myFirstName = addslashes( $_POST['firstname'] ); //prevents types of SQL injection
  		$myLastName = addslashes( $_POST['lastname'] ); //prevents types of SQL injection
  		$myVoterid = $_POST['voter_num'];

  		$sql = mysqli_query( $con, "INSERT INTO tbMembers(first_name, last_name, voter_id) VALUES ('$myFirstName','$myLastName',$myVoterid')" );

  	die( "You have registered for an account.<br><br>Go to <a href=\"index.php\">main page</a>" );
  	}

  	echo "<center><h3>Register an account by filling in the needed information below:</h3></center>";
  ?>
</div> 
		<table style="background-color:powderblue;" width="50%" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<form name="form1" method="post" action="registeracc.php" onSubmit="return registerValidate(this)">
<td>
<table style="background-color:powderblue;" width="100%" border="0" cellpadding="3" cellspacing="1" >
	<tr>
	<td style="color:#000000"; width="120" >First Name</td>
	<td style="color:#000000"; width="6">:</td>
	<td style="color:#000000"; width="294"><input name="firstname" type="text" required="required" ></td>
	</tr>

	<tr>
	<td style="color:#000000"; width="120" >Last Name</td>
	<td style="color:#000000"; width="6">:</td>
	<td style="color:#000000"; width="294"><input name="lastname" type="text" required="required" ></td>
	</tr>


	<tr>
  <td style="color:#000000"; width="120" >patient's ID number</td>
  <td style="color:#000000"; width="6">:</td>
  <td style="color:#000000"; width="294"><input name="voter_num" type="text" required="required" ></td>
  </tr>

	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td style="color:#000000";><input type="submit" name="submit" value="Register Account"></td>
	</tr>

</table>
</td>
</form>
</tr>
</table>

<center>
<br>Go back to the  <a href="index.php"><b>main page</b></a>
</center>
        </blockquote>
      </li>
    </ul>
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

