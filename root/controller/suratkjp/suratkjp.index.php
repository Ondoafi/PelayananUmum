<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
// get param
require_once ("component/Suratkjp.php");

$page = $postVars_page;
$kSurat = $postVars_kSurat;
$limit = $LIMIT_SURAT_INDEX;

if(!$kSurat)
    $kSurat = '1';

$suratkjp = new Suratkjp ($SerdangDB);
$result = $suratkjp->fetchPages();

for ($i = 0; $i < $result["numPage"]; $i++) {
    $pageOptions[$i] = ($i + 1);
}

foreach($M_SURAT as $kodeSurat => $suratkjp){
    $kTipeSuratOption[$kodeSurat] = $suratkjp['name'];
}


$kTipeSuratOption['x'] = 'Seluruh Surat KJP';
$no = ($page*$limit)+1;

include_once ("template/suratkjp.index.php");

?>