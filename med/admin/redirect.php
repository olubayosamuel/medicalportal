<?php
/**
 * Created by PhpStorm.
 * User: oluwapelumi
 * Date: 10/6/18
 * Time: 10:47 AM
 */

/**
 * Redirect to a new route
 * @param $newLocation
 */
function redirect($newLocation){

    header("Location: " . $newLocation);
    exit;
}

?>