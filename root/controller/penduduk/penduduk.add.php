<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
require_once ("component/Penduduk.php");
require_once ("component/List.php");

// get parameter
$username    = $postVars_username;
$password    = $postVars_password;
$nama 		 = $postVars_nama;
$isAdmin     = $postVars_isAdmin;
$noKTP 		 = $postVars_noKTP;
$tempatLahir = $postVars_tempatLahir;
$tglLahir    = $postVars_tglLahir;
$kelamin     = $postVars_kelamin;
$kAgama 	 = $postVars_kAgama;
$agama       = $postVars_agama;
$kKerja 	 = $postVars_kKerja;
$pekerjaan 	 = $postVars_pekerjaan;
$alamat 	 = $postVars_alamat;
$rt 		 = $postVars_rt;
$rw 		 = $postVars_rw;
$kelurahan   = $postVars_kelurahan;
$kecamatan   = $postVars_kecamatan;
$kWarga 	 = $postVars_kWarga;
$kKawin 	 = $postVars_kKawin;
$kPendidikan = $postVars_kPendidikan;
$pendidikan  = $postVars_pendidikan;
$next 		 = $postVars_next;

$list = new Lists($SerdangDB);

$M_KAWIN = $list->getMKawin();
$M_AGAMA = $list->getMAgama();
$M_WARGA = $list->getMWarga();
$M_KERJA = $list->getMKerja();
$M_PENDIDIDKAN = $list->getMPendidikan();



if ($next) {
    // validate parameter
    if (!$nama)
        $errorCode = "Silahkan mengisi nama!";
    if ($kKawin && !$M_KAWIN[$kKawin])
        $errorCode = "invalidkKawin";
    if ($kAgama && !$M_AGAMA[$kAgama])
        $errorCode = "invalidkAgama";
    if ($kWarga && !$M_WARGA[$kWarga])
        $errorCode = "invalidkWarga";
    if ($kPendidikan !== "0" && !$M_PENDIDIDKAN[$kPendidikan])
        $errorCode = "invalidkPendidikan";

    $pendidikan = ($kPendidikan === "0" ? $pendidikan : "");
    $kPendidikan = ($pendidikan ? "0" : $kPendidikan);
    
    if($kKerja == "0" && !$pekerjaan)
    	$errorCode = "Silahkan mengisi pekerjaan!";
    if($kPendidikan == "0" && !$pendidikan)
    	$errorCode = "Silahkan mengisi pendidikan!";

    if (!$errorCode) {
        $penduduk = new Penduduk($SerdangDB);      
        //fill param
        
        $penduduk->username    = $username;
        $penduduk->password    = $password;
        $penduduk->nama        = $nama;
        $penduduk->isAdmin     = $isAdmin;
        $penduduk->noKTP       = $noKTP;
        $penduduk->tempatLahir = $tempatLahir;
        $penduduk->tglLahir    = $tglLahir;
        $penduduk->kelamin     = $kelamin;
        $penduduk->kAgama      = $kAgama;
        $penduduk->agama       = $agama;
        $penduduk->kKerja      = $kKerja;
        $penduduk->pekerjaan   = $pekerjaan;
        $penduduk->alamat      = $alamat;
        $penduduk->rt          = $rt;
        $penduduk->rw          = $rw;
        $penduduk->kelurahan   = $kelurahan;
        $penduduk->kecamatan   = $kecamatan;
        $penduduk->kWarga      = $kWarga;
        $penduduk->kKawin      = $kKawin;
        $penduduk->kPendidikan = $kPendidikan;
        $penduduk->pendidikan  = $pendidikan;

        
		

        // save
        if ($penduduk->add()) {
            // go to where
            header("Location:index.php?form=B.03&id=".$penduduk->id);
        }
        else // error
            $errorCode = "addFail";

    }
}

//load template
include_once ("template/penduduk.add.php");

?>