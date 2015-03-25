<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
require_once("main.php");

// get parameters
$currentForm = strtoupper($getVars_form);
if($getVars_form){
    if(!$root->getRoot())
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
//////////////////////////////////////////////////////////////

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
		$pageTitle="Cari Warga"; 
		require_once "controller/penduduk/penduduk.index.php"; 
		break;
        
	case 'B.02': 
		$pageTitle="Tambah Warga"; 
		require_once "controller/penduduk/penduduk.add.php"; 
		break;
        
	case 'B.03': 
		$pageTitle="Detail Warga"; 
		require_once "controller/penduduk/penduduk.detail.php"; 
		break;
        
	case 'B.04': 
		$pageTitle="Edit Warga"; 
		require_once "controller/penduduk/penduduk.edit.php"; 
		break;
        
	case 'B.05': 
        $pageTitle="Warga lookup"; 
		require_once "controller/penduduk/penduduk.lookup.php"; 
		break;
        
	case 'B.06': 
		$pageTitle="Warga Home"; 
		require_once "controller/penduduk/penduduk.home.php"; 
		break;
        		
	case 'B.07': 
		$pageTitle="Statistik Warga"; 
		require_once "controller/penduduk/penduduk.stat.php"; 
		break;
    
    case 'B.08':
		$pageTitle="Encrip Password"; 
		require_once "controller/penduduk/penduduk.encrip.php"; 
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
        		
	case 'C.04': 
		$pageTitle="DAFTAR SURAT BPJS"; 
		require_once "controller/suratbpjs/suratbpjs.index.php"; 
		break;
        
    case 'C.05': 
		$pageTitle="EDIT SURAT BPJS"; 
		require_once "controller/suratbpjs/suratbpjs.edit.php"; 
		break;
        
    case 'C.06': 
		$pageTitle="EXPORT EXCEL SURAT BPJS"; 
		require_once "controller/export/excel.php"; 
		break; 
             
    case 'C.07': 
		$pageTitle="EXPORT PDF SURAT BPJS"; 
		require_once "controller/export/bpjspdf.php"; 
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
        	
	case 'D.04': 
		$pageTitle="DAFTAR SURAT SKCK"; 
		require_once "controller/suratskck/suratskck.index.php"; 
		break;
        
    case 'D.05': 
		$pageTitle="EDIT SURAT SKCK"; 
		require_once "controller/suratskck/suratskck.edit.php"; 
		break;          
   
   case 'D.06': 
		$pageTitle="EXPORT EXCEL SURAT SKCK"; 
		require_once "controller/export/excel.php"; 
		break; 
             
    case 'D.07': 
		$pageTitle="EXPORT PDF SURAT SKCK"; 
		require_once "controller/export/skckpdf.php"; 
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
	
    case 'E.04': 
		$pageTitle="DAFTAR SURAT KJP"; 
		require_once "controller/suratkjp/suratkjp.index.php"; 
		break;
        
     case 'E.05': 
		$pageTitle="EDIT SURAT KJP"; 
		require_once "controller/suratkjp/suratkjp.edit.php"; 
		break;
        
     case 'E.06': 
		$pageTitle="EXPORT EXCEL SURAT KJP"; 
		require_once "controller/export/excel.php"; 
		break; 
             
    case 'E.07': 
		$pageTitle="EXPORT PDF SURAT KJP"; 
		require_once "controller/export/kjppdf.php"; 
		break;                


//------------Import & Export File--------------------------------------->

    case 'F.01': 
		$pageTitle="Import Data Excel Master"; 
		require_once "controller/excelimport/pprosesmaster.php"; 
		break;
        
    case 'F.02':
        $pageTitle="Import Data Excel Transaksi";
        require_once "controller/excelimport/pprosestransaksi.php";
        break;
        
    case 'F.03':
        $pageTitle="Pencarian Surat BPJS, SKCK & KJP";
        require_once "controller/surat/pencarian.php";
        break;
        
     case 'F.04':
        $pageTitle="Pencarian Surat BPJS, SKCK & KJP";
        require_once "controller/surat/searching.php";
        break;                  


//---------------HALAMAN SURAT ALL------------------------------->


//--------------HALAMAN USER------------------------------------>
        
 	
        
 //--------------HALAMAN ADMIN------------------------------------>	
		
	case 'X.01':
		$pageTitle="Admin"; 
		require_once "controller/root/root.home.php"; 
		break;
        
	case 'X.02':
		$pageTitle="Tambah Admin"; 
		require_once "controller/root/root.add.php"; 
		break;
        
	case 'X.03':
		$pageTitle="Ganti password"; 
		require_once "controller/root/root.change.php"; 
		break;
        
	case 'X.04':
		$pageTitle="Daftar Admin"; 
		require_once "controller/root/root.index.php"; 
		break;
 	
     
        
//--------------LOGIN-------------------------------------------->        
	default    : 
		$pageTitle="Login"; 
		require_once "controller/login/login.php"; 
}

?>