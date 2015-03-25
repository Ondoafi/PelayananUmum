<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
// surat detail
require_once ("component/Suratkjp.php");
require_once ("component/List.php");

// get parameter
$suratkjpId   = $getVars_id;
$print          = $getVars_print;
$cetak          = $getVars_cetak;
$cetak1         = $getVars_cetak1;
$cetak2         = $getVars_cetak2;
$delete         = $getVars_delete;


if(!$suratkjpId)
		header("Location:index.php?form=E.04"); 

$suratkjp = new Suratkjp($SerdangDB);
    
if($delete){
    $suratkjp->id = $suratkjpId;
	$suratkjp->delete();
	header("Location:index.php?form=E.04");
}

if ($suratkjpId) {
    // get detail surat
    $suratkjp = new Suratkjp($SerdangDB);
    $suratkjp->id = $suratkjpId;
    if (!$suratkjp->detail())
        $errorCode = "invalidSurat";
    if (!$errorCode){
        $list = new Lists($SerdangDB);

        $M_KAWIN = $list->getMKawin();
        $M_AGAMA = $list->getMAgama();
        $M_WARGA = $list->getMWarga();
        $M_KERJA = $list->getMKerja();
        $M_PENDIDIDKAN = $list->getMPendidikan();
        
		$confSurat = $M_SURAT[$suratkjp->kSurat];
        $content = json_decode($suratkjp->content, true);
        
        foreach($content as $key => $value){
            if(!$value)
                $content[$key] = "&nbsp;";
        }
        
		$id = $suratkjp->id;
        $noSurat = $suratkjp->noSurat;
        $kSurat = $suratkjp->kSurat;
        $alias = $suratkjp->alias;
        $pemohon = $suratkjp->pemohon;
        $anak = $suratkjp->anak;
        $sekolah = $suratkjp->sekolah;
        
        
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
            include_once ("template/suratkjp.detail.php");
    }
}
else
    header("Location:index.php?form=A.02");

?>