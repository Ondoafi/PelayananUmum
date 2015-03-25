<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
// surat detail
require_once ("component/Suratskck.php");
require_once ("component/List.php");

// get parameter
$suratskckId   = $getVars_id;
$print         = $getVars_print;

if ($suratskckId) {
    // get detail surat
    $suratskck = new Suratskck($SerdangDB);
    $suratskck->id = $suratskckId;
    if (!$suratskck->detail())
        $errorCode = "invalidSurat";
    if (!$errorCode){
        $list = new Lists($SerdangDB);

        $M_KAWIN = $list->getMKawin();
        $M_AGAMA = $list->getMAgama();
        $M_WARGA = $list->getMWarga();
        $M_KERJA = $list->getMKerja();
        $M_PENDIDIDKAN = $list->getMPendidikan();
        
		$confSurat = $M_SURAT[$suratskck->kSurat];
        $content = json_decode($suratskck->content, true);
        
        foreach($content as $key => $value){
            if(!$value)
                $content[$key] = "&nbsp;";
        }
        
		$id = $suratskck->id;
        $noSurat = $suratskck->noSurat;
        $kSurat = $suratskck->kSurat;
        $tglbuat = $suratskck->tglBuat;
        $alias = $suratskck->alias;
        $maksud = $suratskck->maksud;
  
        
        if ($print)
            include_once ("template/" . $confSurat["template"]["print"]);
        else
            include_once ("template/suratskck.detail.php");
    }
}
else
    header("Location:index.php?form=A.02");

?>