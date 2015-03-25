<?php

/**
 * @author [ar3t4]
 * @copyright 2014
 */

require_once ("component/Penduduk.php");
require_once ("component/List.php");


// get parameter
$id = (int)$getVars_id;
$delete = $getVars_delete;

if(!$id)
		header("Location:index.php?form=B.01");

$penduduk = new Penduduk($SerdangDB);
    
if($delete){
	$penduduk->id = $id;
	$penduduk->delete();
	header("Location:index.php?form=B.01");
}

if ($id){
    $list = new Lists($SerdangDB);

    $M_KAWIN = $list->getMKawin();
    $M_AGAMA = $list->getMAgama();
    $M_WARGA = $list->getMWarga();
    $M_KERJA = $list->getMKerja();
    $M_PENDIDIDKAN = $list->getMPendidikan();

    $penduduk->id = $id;
	if(!$penduduk->detail())
		$errorCode = "notFound";    
}
include_once ("template/penduduk.detail.php");

?>