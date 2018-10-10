<?php
/**
 * Created by PhpStorm.
 * User: oluwapelumi
 * Date: 10/10/18
 * Time: 8:34 AM
 */

require ('../db.php');
require ('redirect.php');

$table_name = "patients";

if($_POST['patient']) {
    $patient_id = $_POST['patient'];
} else {
    redirect('fetch-patient-id.php');
}
$patient_id = stripslashes($patient_id);

//Store patient id in session
$_SESSION['patient-id'] = $patient_id;
redirect('manage-patient.php');