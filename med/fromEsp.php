<?php
require_once('db.php');
//loop through and grab variables off the URL
foreach($_REQUEST as $key => $value){
  if($key =="powerStatus"){
  $powerStatus = $value;
  }

  if($key =="print_id"){
  $print_id = $value;
  }

}

$fetch_result = mysqli_query($con,"UPDATE validateprint SET status = '{$powerStatus}' , print_id='{$print_id}' WHERE id = 1 ");
if ($fetch_result) {
  echo 'I got here first';
} else {
  echo 'I didn\'t get here';
}
echo "successfully verified patient with Id number: {$print_id} <br/>";

date_default_timezone_set('Africa/Lagos');
$t1 = date("gi");//many different possible formats, but this gives 12 hr format, and returns 1:23 as 123
if(strlen($t1) == 4){
  $newHour = substr($t1, 0,2);
  $newMinute = substr($t1, 2,4);

}
if(strlen($t1) == 3){
  $newHour = substr($t1, 0,1);
  $newMinute = substr($t1, 1,2);
}

$newTime = $newHour .":". $newMinute;// wto rewrite the time with a ":"
echo "time: {$newTime}"; 

?>