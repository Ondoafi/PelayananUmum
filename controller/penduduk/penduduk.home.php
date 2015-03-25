<?php

/**
 * @author [ar3t4]
 * @copyright 2014
 */

// get param
$message = $_SESSION["message"];
//session_unregister("message");
unset($_SESSION[massage]);
unset($massage);

include_once("template/penduduk.home.php");
?>