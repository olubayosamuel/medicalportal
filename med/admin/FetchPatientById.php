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
	$patient_id = stripslashes($patient_id);
    $patient_id = $_POST['patient'];

	//Store patient id in session
	$_SESSION['patient-id'] = $patient_id;
	//Redirect to manage patient page
	redirect('manage-patients.php');
	exit;
} else {
    //Redirect to patient id page
    redirect('fetch-patient-id.php');
    exit;
}
