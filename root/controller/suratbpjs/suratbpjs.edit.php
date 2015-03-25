<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
// surat detail
require_once ("component/Suratbpjs.php");
require_once ("component/List.php");

// get parameter
$suratbpjsId = $getVars_id;
$print       = $getVars_print;
$cetak       = $getVars_cetak;
$cetak1      = $getVars_cetak1;
$cetak2      = $getVars_cetak2;

if ($suratbpjsId) {
    // get detail surat
    $suratbpjs = new Suratbpjs($SerdangDB);
    $suratbpjs->id = $suratbpjsId;
    if (!$suratbpjs->detail())
        $errorCode = "invalidSurat";
    if (!$suratbpjs->edit())
        $errorCode = "invalidSurat";    
    if (!$errorCode){
        $list = new Lists($SerdangDB);
        $M_KAWIN = $list->getMKawin();
        $M_AGAMA = $list->getMAgama();
        $M_WARGA = $list->getMWarga();
        $M_KERJA = $list->getMKerja();
        $M_PENDIDIDKAN = $list->getMPendidikan();
        
		$confSurat = $M_SURAT[$suratbpjs->kSurat];
        $content = json_decode($suratbpjs->content, true);
        
        foreach($content as $key => $value){
            if(!$value)
                $content[$key] = "&nbsp;";
        }
        
		$id          = $suratbpjs->id;
        $noSurat     = $suratbpjs->noSurat;
        $kSurat      = $suratbpjs->kSurat;
        $tglBuat     = $suratbpjs->tglBuat;
        $alias       = $suratbpjs->nama;
        $pemohon     = $suratbpjs->pemohon;
        $namapemohon = $suratbpjs->namapemohon;
        
        if ($print)
            include_once ("template/" . $confSurat["template"]["print"]);
        else            
        
        if ($cetak)
            include_once ("template/" . $confSurat["template"]["cetak"]);
        
		else            
        
        if ($cetak1)
            include_once ("template/" . $confSurat["template"]["cetak1"]);
		
		else            
        
        if ($cetak2)
            include_once ("template/" . $confSurat["template"]["cetak2"]);
		
        else
            include_once ("template/suratbpjs.edit.php");
    }
}
?>