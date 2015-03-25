<?php

/**
 * @author [ar3t4]
 * @copyright 2014
 */
if ($root->detail() && $root->isAdmin != 1)
    header("Location:index.php?form=A.02");
    
// get param
$message = $_SESSION["message"];
//session_unregister("message");
    unset($_SESSION[massage]);
    unset($massage);
    $root->detail();

include_once("template/root.home.php");
?>