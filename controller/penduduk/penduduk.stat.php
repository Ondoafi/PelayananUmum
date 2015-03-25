<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */

require_once ("component/Penduduk.php");
require_once ("component/List.php");

// get parameter
$kStat = $postVars_kStat;
$next = $postVars_next;

if ($next){
    $penduduk = new Penduduk($SerdangDB);
    
	switch ($kStat){ 

	case 1:
		$stat = $penduduk->statUsia();
		if($stat){
			// loop stat
			for($i = 0 ; $i < count($stat); $i++){
				
				for($j=0; $j< count($GROUP_USIA);$j++){
					if($stat[$i]["UMUR"] >= $GROUP_USIA[$j][0] && $stat[$i]["UMUR"] <= $GROUP_USIA[$j][1]){
						$newStat[$j] +=  $stat[$i]["JUMLAH"];
						break;
					}
						
				}		
			}	
		}
			
		unset($stat);
		for($i=0; $i<count($GROUP_USIA);$i++){
			$stat[$i]["KELOMPOK UMUR"] = "Usia dari ".$GROUP_USIA[$i][0].($GROUP_USIA[$i][1] != 1000 ? " hingga ".$GROUP_USIA[$i][1] : " keatas");
			$stat[$i]["JUMLAH"] = (int)$newStat[$i];	
		}
	break;

	case 2:
		$stat = $penduduk->statJenisKelamin();
		for($i=0; $i< count($stat);$i++){
			if($stat[$i]["JENIS KELAMIN"] == "L"){
				$newStat[$i]["JENIS KELAMIN"] = "Laki-laki"; 
				$newStat[$i]["JUMLAH"] = $stat[$i]["JUMLAH"];
			}else{
				$newStat[$i]["JENIS KELAMIN"] = "Perempuan"; 
				$newStat[$i]["JUMLAH"] = $stat[$i]["JUMLAH"];
			}			
		}
		$stat = $newStat;
	break;

	case 3:
		$stat = $penduduk->statPekerjaan();
	break;
	
	case 4:
		$stat = $penduduk->statPendidikan();
	break;
	
	default :

}

}
include_once ("template/penduduk.stat.php");

?>