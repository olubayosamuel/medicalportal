<!DOCTYPE html>

<html>
<body style="background-color:powderblue;">


<?php

require('../db.php');

$tbl_name="tbAdministrators"; // Table name


$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$encrypted_mypassword=md5($mypassword); 

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
//$myusername = $mysqli->escape_string($_POST['myusername']);
//$mypassword = $mysqli->escape_string($_POST['mypassword']);

$result = mysqli_query($con,"SELECT * FROM $tbl_name WHERE email='$myusername' and password='$encrypted_mypassword' ");//table select

//loop through the table and filter out data for this unit id
while($row = mysqli_fetch_array($result)) {


//$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$encrypted_mypassword'" or die(mysql_error());
//$result= mysqli_query($sql);


    $count=mysqli_num_rows($result); 


    if($count==1){
     $user = $result->fetch_assoc();
     $_SESSION['admin_id'] = $user['admin_id'];

    
                if(isset($_POST['remember']))
                {

                    setcookie('$email',$_POST['myusername'], time()+30*24*60*60); // 30 days
                    setcookie('$pass', $_POST['mypassword'],time()+30*24*60*60); // 30 days

                    $_SESSION['curname']=$myusername;
                    $_SESSION['curpass']=$mypassword;
                     $_SESSION['docName']= $_POST['docName'];


                    $user = $result->fetch_assoc();
     				$_SESSION['admin_id'] = $user['admin_id'];

                    header("Location: admin.php");
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
                    header("Location: admin.php");
                    exit;
                }
            


    }

    else {
    echo "<br> <br> <br> ";
    echo "<center> <h3>Wrong Username or Password<br><br>Return to <a href=\"index.php\">login</a> </h3></center>";
    }

}
ob_end_flush();

?> 




</body>
</html>