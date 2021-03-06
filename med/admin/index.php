<?php
//Start session
session_start();
if(isset($_SESSION['curname']) && isset($_SESSION['curpass'])) {
  $myusername = $_SESSION['curname'] ;
  $mypassword = $_SESSION['curpass'] ;
} elseif (isset($_COOKIE['$email']) && $_COOKIE['$pass']){
  $curnam = $_SESSION['curname'];
  $curpas = $_SESSION['curpass'];
}

//DB connection
require_once('../db.php');
$myusername = isset($_SESSION['curname'])?$_SESSION['curname']:"" ;
$mypassword = isset($_SESSION['curpass'])?$_SESSION['curpass']:"" ;
$encrypted_password=md5($mypassword);

require('redirect.php');
if(isset($_COOKIE['$email']) && $_COOKIE['$pass']){
    redirect('admin.php');
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

<script language="JavaScript" src="js/admin.js"></script>

</head>

<body style="background-image:url('hospital/untitled.png');">
<div class="pen-title">
    <h1>Doctor's Login Form</h1>
</div>

<div class="container" >
  <div class="card"></div>

  <div class="card">
    <h1 class="title">Login</h1>
      <center id="validationMessage"></center>
    <form name="form1" action="checklogin" method="post" onsubmit="return loginValidate(this)">

      <div class="input-container">
        <input name="myusername" value="<?php echo $myusername  ?>" type="text" required="required"/>
        <label>Email</label>
          <span class="validationMessage"> Please enter you email.</span>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input name="mypassword" value="<?php echo $mypassword ?>" type="password"  required="required"/>
        <label>Password</label>
          <span class="validationMessage"> Please enter you password.</span>
          <div class="bar"></div>
      </div>

       <div class="input-container">
        <input name="docName"  type="text" required="required"/>
        <label>Doctor's name</label>
           <span class="validationMessage"> Please enter the name of the doctor.</span>
           <div class="bar"></div>
      </div>
        <br/>
      <center><tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1"> <font color="blue">Remember Me</font></td></tr></center><br>

      <div class="button-container">

        <button name="Submit"><span>Login</span></button>

      </div>
      <br><br>
    <center>Return to <a href="http://localhost:8080/medicalPortal/med/index.php">main page</a></center>

    </form>
  </div>
  
</div>


</body>
</html>




