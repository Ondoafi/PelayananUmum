<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
session_start();
require_once("main.php");
// get parameters
$currentForm = strtoupper($getVars_form);
if($getVars_form){
    if(!$penduduk->getPenduduk())
		header("Location:index.php?out=true");	
}
////////////////////////////////////////////////////////////

//Security level 1

function seo_friendly_url($title, $options=NULL) {
  // Remove all unwanted characters.
  $title = preg_replace('/[^a-z0-9 -]/i', '', $title);
  // Change all spaces to dashes.
  $title = preg_replace('/[ \-]+/', '-', $title);
  // Remove any dashes still located at the start or end of the title.
  $title = trim($title, '-');

  return $title;
}

///////////////////////////////////////

//Security level 2
    function anti_injection( $username, $password ) {
        $banlist = ARRAY (
        "insert", "select", "update", "delete", "distinct", "having", "truncate", "replace",
        "handler", "like", " as ", "or ", "procedure", "limit", "order by", "group by", "asc", "desc"
        );
        // ---------------------------------------------
        IF ( EREGI ( "[a-zA-Z0-9]+", $username ) ) {
                    $username = TRIM ( STR_REPLACE ( $banlist, '', STRTOLOWER ( $username ) ) );
            } ELSE {
                    $username = NULL;
        }
        // ---------------------------------------------
          
        IF ( EREGI ( "[a-zA-Z0-9]+", $password ) ) {
                    $password = TRIM ( STR_REPLACE ( $banlist, '', STRTOLOWER ( $password ) ) );
            } ELSE {
                    $password = NULL;
        }
        
        $array = ARRAY ( 'username' => $username, 'password' => $password );
        // ---------------------------------------------
        IF ( IN_ARRAY ( NULL, $array ) ) {
                    DIE ( 'Invalid use of login and/or password. Please use a normal method.' );
            } ELSE {
                    RETURN $array;
        }
    }
/////////////////////////////////////////////////////////////

///Security level 3

    function cleanuserinput($dirty){
        if (get_magic_quotes_gpc()) {
        $clean = mysql_real_escape_string(stripslashes($dirty));    
    }else{
        $clean = mysql_real_escape_string($dirty); 
    }
    return $clean;
}

///////////////////////////////////////////////////////////////

//Security level 4

function url_slug($str)
{	
	#convert case to lower
	$str = strtolower($str);
	#remove special characters
	$str = preg_replace('/[^a-zA-Z0-9]/i',' ', $str);
	#remove white space characters from both side
	$str = trim($str);
	#remove double or more space repeats between words chunk
	$str = preg_replace('/\s+/', ' ', $str);
	#fill spaces with hyphens
	$str = preg_replace('/\s+/', '-', $str);
	return $str;
}

// goto controller
switch ($currentForm) {
	
    case 'A.01': 
		$pageTitle="Home"; 
		require_once "controller/home.php"; 
		break;
	
    case 'A.02': 
		$pageTitle="Surat"; 
		require_once "controller/surat.home.php"; 
		break;	
        
//--------------HALAMAN PENDUDUK------------------------------>		
	
    case 'B.01': 
		$pageTitle="Cari Penduduk"; 
		require_once "controller/penduduk/penduduk.index.php"; 
		break;
        
	case 'B.02': 
		$pageTitle="Tambah Penduduk"; 
		require_once "controller/penduduk/penduduk.add.php"; 
		break;
        
	case 'B.03': 
		$pageTitle="Detail Penduduk"; 
		require_once "controller/penduduk/penduduk.detail.php"; 
		break;
        
	case 'B.04': 
		$pageTitle="Edit Penduduk"; 
		require_once "controller/penduduk/penduduk.edit.php"; 
		break;
        
	case 'B.05':
        $pageTitle="Daftar Penduduk";
		require_once "controller/penduduk/penduduk.lookup.php"; 
		break;
        
	case 'B.06': 
		$pageTitle="Penduduk"; 
		require_once "controller/penduduk/penduduk.home.php"; 
		break;

            	

//-------------HALAMAN SURAT BPJS--------------------------->	
			

	
    case 'C.02': 
		$pageTitle="MEMBUAT SURAT BPJS"; 
		require_once "controller/suratbpjs/suratbpjs.add.php"; 
		break;
        		
	case 'C.03': 
		$pageTitle="DETAIL SURAT BPJS"; 
		require_once "controller/suratbpjs/suratbpjs.detail.php"; 
		break;
        		
        	
//-----------HALAMAN SURAT SKCK------------------------------>        


        
	case 'D.02': 
		$pageTitle="BUAT SURAT SKCK"; 
		require_once "controller/suratskck/suratskck.add.php"; 
		break;		
        
	case 'D.03': 
		$pageTitle="DETAIL SURAT SKCK"; 
		require_once "controller/suratskck/suratskck.detail.php"; 
		break;	
        	
        
//--------------HALAMAN SURAT KJP------------------------------->
    

    case 'E.02': 
		$pageTitle="BUAT SURAT KJP"; 
		require_once "controller/suratkjp/suratkjp.add.php"; 
		break;		
	
    case 'E.03': 
		$pageTitle="DETAIL SURAT KJP"; 
		require_once "controller/suratkjp/suratkjp.detail.php"; 
		break;		
	

//------------Import & Export File--------------------------------------->
   

        
//--------------HALAMAN USER------------------------------------>
        
    case 'Z.01':
		$pageTitle="Pengguna"; 
		require_once "controller/user/user.home.php"; 
		break;
        
	case 'Z.02':
		$pageTitle="Tambah user"; 
		require_once "controller/user/user.add.php"; 
		break;
        
	case 'Z.03':
		$pageTitle="Ganti password"; 
		require_once "controller/user/user.change.php"; 
		break;
        
	case 'Z.04':
		$pageTitle="Daftar User"; 
		require_once "controller/user/user.index.php"; 
		break;
 	
        
 //--------------HALAMAN ADMIN------------------------------------>	
		

        
//--------------LOGIN-------------------------------------------->        
	default    : 
		$pageTitle="Login"; 
		require_once "controller/login/login.php"; 
}

?>