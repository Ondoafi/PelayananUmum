<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
// get param
require_once ("component/Suratskck.php");

$page = $postVars_page;
$kSurat = $postVars_kSurat;
$limit = $LIMIT_SURAT_INDEX;

if(!$kSurat)
    $kSurat = '1';

$suratskck = new Suratskck ($SerdangDB);
$result = $suratskck->fetchPages();

for ($i = 0; $i < $result["numPage"]; $i++) {
    $pageOptions[$i] = ($i + 1);
}

foreach($M_SURAT as $kodeSurat => $suratskck){
    $kTipeSuratOption[$kodeSurat] = $suratskck['name'];
}

$kTipeSuratOption['x'] = 'Seluruh Surat SKCK';
$no = ($page*$limit)+1;

include_once ("template/suratskck.index.php");

?>