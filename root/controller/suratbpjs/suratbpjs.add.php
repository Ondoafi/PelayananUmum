<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
// surat add
require_once ("component/Suratbpjs.php");
require_once ("component/Root.php");
require_once ("component/Penduduk.php");
require_once ("component/List.php");


// get parameter surat
	$kSurat       = $getVars_kSurat ? $getVars_kSurat : $postVars_kSurat;
	$noSurat      = $postVars_noSurat;
    $tglBuat      = $tglBuat;
    $alias        = $getVars_alias ? $getVars_alias : $postVars_alias;
    $pemohon      = $postVars_pemohon;
    $namapemohon  = $postVars_namapemohon;
    $next         = $postVars_next;
	$content      = $_REQUEST; 

//get user 
    $nama = $postVars_nama;

//fuction no auto
    function getnoSurat() {
        $querycount="SELECT MAX(ID) AS LastID FROM suratbpjs"; 
        $result=mysql_query($querycount) or die(mysql_error()); 
        $row=mysql_fetch_array($result, MYSQL_ASSOC);
        return $row['LastID'];
    }

//fuction Format nosurat    
    function FormatnoSurat($num)
    { 
        $num=$num+1; 
        switch (strlen($num)) 
        { 
            case 1 : $noSurat = "00".$num; break;     
            case 2 : $noSurat = "0".$num; break; 
            case 3 : $noSurat = "".$num; break;
            case 4 : $noSurat = "".$num; break;       
            default: $noSurat = $num;
        }
        return $noSurat; 
    }
    
    
    
 //Function tgl surat   
   function indonesian_date ($timestamp = '', $date_format = 'j F Y ') {
    if (trim ($timestamp) == '')
    {
            $timestamp = time ();
    }
    elseif (!ctype_digit ($timestamp))
    {
        $timestamp = strtotime ($timestamp);
    }
    # remove S (st,nd,rd,th) there are no such things in indonesia :p
    setlocale (LC_TIME, 'INDONESIA');
    date_default_timezone_set("Asia/Jakarta"); 
    $date_format = preg_replace ("/S/", "", $date_format);
    $pattern = array (
        '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
        '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
        '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
        '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
        '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
        '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
        '/April/','/June/','/July/','/August/','/September/','/October/',
        '/November/','/December/',
    );
    $replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
        'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
        'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
        'Januari','Februari','Maret','April','Juni','Juli','Agustus','September',
        'Oktober','November','Desember',
    );
    $date = date ($date_format, $timestamp);
    $date = preg_replace ($pattern, $replace, $date);
    $date = "{$date} {$suffix}";
    return $date;
} 


//fuction tgl Bukti   
   function serdang_date ($timestamp = '', $date_format = 'l, j F Y / H:i', $suffix = 'WIB') {
    if (trim ($timestamp) == '')
    {
            $timestamp = time ();
    }
    elseif (!ctype_digit ($timestamp))
    {
        $timestamp = strtotime ($timestamp);
    }
    # remove S (st,nd,rd,th) there are no such things in indonesia :p
    setlocale (LC_TIME, 'INDONESIA');
    date_default_timezone_set("Asia/Jakarta"); 
    $date_format = preg_replace ("/S/", "", $date_format);
    $pattern = array (
        '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
        '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
        '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
        '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
        '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
        '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
        '/April/','/June/','/July/','/August/','/September/','/October/',
        '/November/','/December/',
    );
    $replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
        'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
        'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
        'Januari','Februari','Maret','April','Juni','Juli','Agustus','September',
        'Oktober','November','Desember',
    );
    $date = date ($date_format, $timestamp);
    $date = preg_replace ($pattern, $replace, $date);
    $date = "{$date} {$suffix}";
    return $date;
} 

        
// validasi surat
    if(!$kSurat || !$M_SURAT[$kSurat]){
    header("Location:index.php?form=A.02");
    }
    
    $list = new Lists($SerdangDB);
            $M_KAWIN = $list->getMKawin();
            $M_AGAMA = $list->getMAgama();
            $M_WARGA = $list->getMWarga();
            $M_KERJA = $list->getMKerja();
            $M_PENDIDIDKAN = $list->getMPendidikan();
    
    $confSurat = $M_SURAT[$kSurat];
    // if next
            
if($next){
	// validasi data
	if(!$noSurat)
		$errorCode = "Silahkan mengisi no surat!";
    if(!$pemohon)
		$errorCode = "DATA HARUS DI ISI TIDAK BOLEH KOSONG";
    
        
    if(!$errorCode){
		$suratbpjs = new Suratbpjs($SerdangDB);
        
	// input
		$suratbpjs->kSurat      = $kSurat;
		$suratbpjs->noSurat     = $noSurat;
        $suratbpjs->tglBuat     = $tglBuat;
        $suratbpjs->alias       = $root->nama;
        $suratbpjs->pemohon     = $pemohon;
        $suratbpjs->namapemohon = $namapemohon;
		$suratbpjs->content     = json_encode($content);
        $suratbpjs->userid      = $root->username;
        
        
	// if success
		if($suratbpjs->add())
			header("Location:index.php?form=C.03&id=".$suratbpjs->id);
   
		else
			$errorCode = "Terjadi Kesalahan Silahkan Ulangi";
	}
}else{	
	
    $content["alias"]       = $root->nama;
    $content["pemohon"]     = $pemohon;
    $content["namapemohon"] = $namapemohon;
    $content["tglSurat"]    = indonesian_date();
    $content["waktu"]       = serdang_date();
}

include_once("template/suratbpjs.add.php");


?>