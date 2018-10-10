<?php
require('../db.php');
require('redirect.php');
//session_start();
ini_set ("display_errors", "1");
error_reporting(E_ALL);
ob_start();
session_start();

$tbl_name="tbAdministrators"; // Table name
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$encrypted_password=md5($mypassword);

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

//Fetch existing admin with email and password
$result = mysqli_query($con,"SELECT * FROM $tbl_name WHERE email='$myusername' and password='$encrypted_password' ");//table select

//loop through the table and filter out data for this unit id
while($row = mysqli_fetch_array($result)) {
    $count=mysqli_num_rows($result);
    if($count==1){
        $user = $result->fetch_assoc();
        $_SESSION['admin_id'] = $user['admin_id'];

        //If user want's to be remembered
        if(isset($_POST['remember']))
        {
            //Set username and password in cookie
            setcookie('$email',$_POST['myusername'], time()+5*24*60*60); // 5 days
            setcookie('$pass', $_POST['mypassword'],time()+5*24*60*60); // 5 days

            //Set session params on login
            $_SESSION['curname']=$myusername;
            $_SESSION['curpass']=$mypassword;
            $_SESSION['docName']= $_POST['docName'];

            $user = $result->fetch_assoc();
            $_SESSION['admin_id'] = $user['admin_id'];
            redirect('admin.php');
            exit;
        }
        else
        {
            $log1=11;
            $_SESSION['log1'] = $log1;
            $_SESSION['curname']=$myusername;
            $_SESSION['curpass']=$mypassword;
            $_SESSION['docName']= $_POST['docName'];
            $user = $result->fetch_assoc();
            $_SESSION['admin_id'] = $user['admin_id'];
            redirect('admin.php');
        }
    }
    else {
        //Redirect to login page
        redirect('#');
    }
}
ob_end_flush();
?> 
