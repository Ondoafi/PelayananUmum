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
$print        = $getVars_print;

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
            include_once ("template/suratkjp.detail.php");
    }
}
else
    header("Location:index.php?form=A.02");

?>