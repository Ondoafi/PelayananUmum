<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
 
session_start();
// get parameter

$username	= $postVars_username;
$password	= $postVars_password;
$login 		= $postVars_login;
$out 		= $getVars_out;


if($out){
    session_destroy();
	$string = mysql_real_escape_string($penduduk->logout());

}
    
// if(next)
if($login){
//		validate parameter -- dipastikan semua data yg dimasukkan user benar+aman
	if($username && $password){
		// validate login
		$errorCode = $string = mysql_real_escape_string 
        ($penduduk->login($id,$nama,$noKTP,$tempatLahir,$tglLahir, $alamat,  
                          $rt, $rw, $kelurahan ,$kecematan,$kelamin,  
                          $kAgama, $agama, $kKerja, $pekerjaan,$username, $password));
         
                   
	}else{
		$errorCode = "Username dan password harus diisi!"; 
	}
    
}

require_once("template/login.php");

?>