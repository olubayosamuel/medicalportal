<?php
    session_start();
   $log1=0;
  require('../db.php');
  if($_SESSION) {
    $log1 = $_SESSION['log1'];
  }

  $health_history = mysqli_query($con, "SELECT * FROM healthhistory");

  $patient_reg_id = mysqli_query($con, "SELECT * FROM `validateprint`");
  $patient_reg_id = mysqli_fetch_array($patient_reg_id);
  $patient_reg_id_number = $patient_reg_id['print_id'];

  //Fetch patient details.
  $patient = mysqli_query($con, "SELECT * FROM patients WHERE `patient_reg_id`=$patient_reg_id_number");
  $patient = mysqli_fetch_array($patient);
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
    <style type="text/css">
        #myInput {
            background-position: 10px 10px;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            padding: 20px 20px 20px 20px;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #myTable th, #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header, #myTable tr:hover {
            background-color: #f1f1f1;
        }
    </style>
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

<div id="container" class="hoc clear container" style="width:100%;" class="row">                                   
  <div id="left" style="float:left; width:50%;" align="left" class="col-xs-6"> 
    <div class="row">
      <div id="list-key">
        <p><strong>Name:</strong></p>
      </div>
      <div id="list-pair">
        <p><?php echo $patient['firstname'] . " " . $patient['lastname']?></p>
      </div>
    </div>
    <div class="row">
      <div id="list-key">
        <p><strong>Age:</strong></p>
      </div>
      <div id="list-pair">
        <p><?php echo $patient['age'] . ' years'?></p>
      </div>
    </div>
    <div class="row">
        <div id="list-key">
          <p><strong>Sex:</strong></p>
        </div>
        <div id="list-pair">
          <p><?php echo $patient['sex']?></p>
        </div>
      </div>
      <div class="row">
        <div id="list-key">
          <p><strong>Blood Group:</strong></p>
        </div>
        <div id="list-pair">
          <p><?php echo $patient['bloodgroup']?></p>
        </div>
      </div>
      <div class="row">
      <div id="list-key">
        <p><strong>Genotype:</strong></p>
      </div>
      <div id="list-pair">
        <p><?php echo $patient['genotype']?></p>
      </div>
    </div>
  </div>                     
  <div id="right" style="float:right; width:50%;">
    <div class="row">
      <div id="list-key">
        <p><strong>Allegies:</strong></p>
      </div>
      <div id="list-pair">
        <p><?php echo $patient['allegies']?></p>
      </div>
    </div>
    <div class="row">
      <div id="list-key">
        <p><strong>Address:</strong></p>
      </div>
      <div id="list-pair">
        <p><?php echo $patient['address']?></p>
      </div>
    </div>
    <div class="row">
      <div id="list-key">
        <p><strong>Phone:</strong></p>
      </div>
      <div id="list-pair">
        <p><?php echo $patient['phone']?></p>
      </div>
    </div>
  </div>                   
  </div>

  <!-- Health History -->
  <div id="container" class="hoc clear container row" style="width:100%;">
    <center>
        <div class="row">
            <div>
                <p><strong>Health History</strong></p>
            </div>
            <div style="align-content: right">
                <button class="btn"><i class="fa fa-ad"></i> Fetch Patient</button>
            </div>
        </div>
    </center>
  </div>
    <div class="nospace">
        <table id="myTable" style="background-color:powderblue;" width="100%" border="0" cellpadding="3" cellspacing="1" >
            <tr>
                <th style="color:#000000"; width="200" >Doctor's Name</td>
                <th style="color:#000000"; width="6">Tests Description</td>
                <th style="color:#000000"; width="6">Test Document</td>
            </tr>

            <?php
            while ($history = mysqli_fetch_array($health_history)) {
                echo '<tr>
              <td style="color:#000000"; width="200" >' . $history['docname'] . '</td>
              <td style="color:#000000"; width="6">' . $history['description'] . '</td>
              <td style="color:#000000"; width="6">' . $history['link'] . '</td>
          </tr>';
            }
            ?>
        </table>
    </div>

  </div>

  <?php 
  //Set patient registration id number back to 0.
  mysqli_query($con,"UPDATE validateprint SET print_id = 0 Where id = 1" );
  ?>

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
