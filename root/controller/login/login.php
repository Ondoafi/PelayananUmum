<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
// get parameter
session_start();
if(isset($_SESSION['root']))
unset($_SESSION['root']);

$username	= $postVars_username;
$password	= $postVars_password;
$login 		= $postVars_login;
$out 		= $getVars_out;


if($out){
	$string = mysql_real_escape_string($root->logout());
}
    
// if(next)

if($login){
//		validate parameter -- dipastikan semua data yg dimasukkan user benar+aman    
    if($username && $password){
		// validate login
		$errorCode = $string = mysql_real_escape_string($root->login($username, $password)); 
	}else{
		$errorCode = "Username dan password harus diisi!";
	}

}

require_once("template/login.php");


?>