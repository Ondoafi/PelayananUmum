<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
// get param
require_once ("component/Suratbpjs.php");

$page   = $postVars_page;
$kSurat = $postVars_kSurat;
$limit  = $LIMIT_SURAT_INDEX;

if(!$kSurat)
    $kSurat = '1';

$suratbpjs = new Suratbpjs ($SerdangDB);
$result    = $suratbpjs->fetchPages();

for ($i = 0; $i < $result["numPage"]; $i++) {
    $pageOptions[$i] = ($i + 1);
}


foreach($M_SURAT as $kodeSurat => $suratbpjs){
    $kTipeSuratOption[$kodeSurat] = $suratbpjs['name'];
}

$kTipeSuratOption['x'] = 'Seluruh Surat bpjs';
$no = ($page*$limit)+1;

include_once ("template/suratbpjs.index.php");

?>