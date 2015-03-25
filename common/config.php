<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
 
$microtime  = explode(' ', microtime());
$startTimer = $microtime[1].substr($microtime[0], 1);

// error reporting
error_reporting(0);
error_reporting(E_ALL ^ E_NOTICE);


// database properties
    $DB_Driver     = "mysql";
    $DB_Hostname   = "localhost";
    $DB_Username   = "root";
    $DB_Password   = "indonesia";
    $DB_Database   = "serdangapp";
    $DB_PrintQuery = false;


// DO NOT change this!
//set_magic_quotes_runtime(0);
@set_magic_quotes_runtime(false);
ini_set('magic_quotes_rintime',0);

///////////////////////////////////////////////

$M_GENDER["L"]="Laki-laki";
$M_GENDER["P"]="Perempuan";

////////////////////////////////////////////////
$M_SURAT["2"]["name"] = "Surat Keterangan BPJS (Badan Penyelenggara Jaminan Sosial)";
$M_SURAT["2"]["singkat"] = "BPJS";
$M_SURAT["2"]["template"]["input"] = "surat_bpjs.add.php";
$M_SURAT["2"]["template"]["detail"] = "surat_bpjs.detail.php";
$M_SURAT["2"]["template"]["print"] = "surat_bpjs.print.php";

$M_SURAT["3"]["name"] = "Surat Keterangan KJP (Kartu Jakarta Pintar)";
$M_SURAT["3"]["singkat"] = "KJP";
$M_SURAT["3"]["template"]["input"] = "surat_kjp.add.php";
$M_SURAT["3"]["template"]["detail"] = "surat_kjp.detail.php";
$M_SURAT["3"]["template"]["print"] = "surat_kjp.print.php";

$M_SURAT["4"]["name"] = "Surat Keterangan SKCK (Kelakuan Baik Kepolisian)";
$M_SURAT["4"]["singkat"] = "SKCK";
$M_SURAT["4"]["template"]["input"] = "surat_skck.add.php";
$M_SURAT["4"]["template"]["detail"] = "surat_skck.detail.php";
$M_SURAT["4"]["template"]["print"] = "surat_skck.print.php";

////////////////////////////////////////////
$M_FIELD["1"] = array('nama','Nama');
$M_FIELD["2"] = array('no_ktp','No. KTP');
$M_FIELD["3"] = array('alamat','Alamat');

//////////////////////////////////////////////
$LIMIT_PENDUDUK_INDEX = 20;
$LIMIT_SURAT_INDEX = 15;


/////////////////////////////////////////////////////
$M_STAT["1"] = "Penduduk Berdasarkan Usia";
$M_STAT["2"] = "Penduduk Berdasarkan Jenis Kelamin";
$M_STAT["3"] = "Penduduk Berdasarkan Pekerjaan";
$M_STAT["4"] = "Penduduk Berdasarkan Pendidikan";

$GROUP_USIA[] = array(0,10);
$GROUP_USIA[] = array(11,20);
$GROUP_USIA[] = array(21,30);
$GROUP_USIA[] = array(31,40);
$GROUP_USIA[] = array(41,50);
$GROUP_USIA[] = array(51,60);
$GROUP_USIA[] = array(61,70);
$GROUP_USIA[] = array(71,80);
$GROUP_USIA[] = array(81,1000);

///////////////////////////////

?>