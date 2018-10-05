<?php
//all of this code used for refreshing the page
$page = $_SERVER['PHP_SELF'];
$sec = "3";
$message = "Device not yet online";
$status = 0;
$patientID = 0;
require('db.php');
  $result = mysqli_query($con,"SELECT * FROM validatePrintMed");

  while($row = mysqli_fetch_array($result)) {
      $status =$row['status'] ;
      $patientID = $row['patient_id'];
  }

  if ($status == 1) {
    $message = "Device online, place the patient's thumb on the scanner";
  }

  if ($patientID != 0 ) {
      $res = mysqli_query($con,"SELECT * FROM tbmembers where voter_id = '{$patientID}' " );
      while($row = mysqli_fetch_array($res)) {
          $patientName =$row['first_name'] ;
          $patientLastName = $row['last_name'];
          $message = "Identified patient " . $last_name . " " . $first_name;
      }
  }
  ?>

<!DOCTYPE html>

<html>
<head>
<title>patient portal</title>
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
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
    
    <!-- ################################################################################################ -->
  </div>
</div>

<?php require('partials/login-header.html') ?>

<div class="wrapper bgded overlay" style="background-image:url('hospital/Hopital_Varsovie-hd.jpg');">
  <section id="testimonials" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <h2 class="font-x3 uppercase btmspace-80 underlined"> Place patient's thumb on the  <a href="#">Scanner</a></h2>
    <ul class="nospace group">
      <li class="one_half">
        

<?php
echo "<h2>" . $message . "</h2>";
if($patientID != 0){
    mysqli_query($con,"UPDATE validatePrint SET patient_id = 0");
    header("Location: admin/admin.php");
}
?>

<table style="background-color:blue;" width="300" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
        <form name="form1" method="post" action="checklogin.php" onSubmit="return loginValidate(this)">
            <td>
                <table style="background-color:red;" width="100%" border="0" cellpadding="3" cellspacing="1" >

                </table>
            </td>
        </form>
    </tr>
</table>
          <center>
              <br>Not yet registered? <a href="registeracc.php"><b>Register Here</b></a>
          </center>
      </li>
    </ul>
  </section>
</div>

<?php require('partials/footer.html') ?>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">OAU team</a></p>
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
