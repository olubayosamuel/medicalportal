<?php
    session_start();
   $log1=0;
  require('../db.php');
  if($_SESSION) {
    $log1 = $_SESSION['log1'];
    $docName = $_SESSION['docName'];
  }
  $patients = mysqli_query($con, "SELECT * FROM patients");
  
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

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script language="JavaScript" src="js/user.js">
</script>

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
        <li><i class=></i> Patient's portal</li>
        <li><i class="fa fa-envelope-o"></i> info@nhis.com </li>
      </ul>
    </div>
  </div>
</div>

<?php require('partials/admin_welcome_header.html') ?>

<div class="wrapper bgded overlay" style="background-image:url('hospital/manage.jpg');">
  <section id="testimonials" class="hoc container clear"> 
   
    <h2 class="font-x3 uppercase btmspace-80 underlined"> Registered Patients</h2>

    <div class="nospace" style="color: #000000">
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for patients by name..">
    </div>

    <div class="nospace">
      <table id="myTable" style="background-color:powderblue;" width="100%" border="0" cellpadding="3" cellspacing="1" >
        <tr>
        <th style="color:#000000"; width="200" >Full Name</td>
        <th style="color:#000000"; width="6">Age</td>
        <th style="color:#000000"; width="6">Sex</td>
        <th style="color:#000000"; width="120">Blood Group</td>
        <th style="color:#000000"; width="50">Genotype</td>
        <th style="color:#000000"; width="70">Allegies</td>
        <th style="color:#000000"; width="120">Address</td>
        <th style="color:#000000"; width="50">Phone</td>

        </tr>

        <?php
          while ($patient = mysqli_fetch_array($patients)) {
            echo '<tr>
              <td style="color:#000000"; width="200" >' . $patient['firstname'] . " " . $patient['lastname'] . '</td>
              <td style="color:#000000"; width="6">' . $patient['age'] . '</td>
              <td style="color:#000000"; width="6">' . $patient['sex'] . '</td>
              <td style="color:#000000"; width="120">' . $patient['bloodgroup'] . '</td>
              <td style="color:#000000"; width="50">' . $patient['genotype'] . '</td>
              <td style="color:#000000"; width="70">' . $patient['allegies'] . '</td>
              <td style="color:#000000"; width="200">' . $patient['address'] . '</td>
              <td style="color:#000000"; width="50">' . $patient['phone'] . '</td>
          </tr>';
          }
        ?>
    </table>
    </div>

  </section>
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
