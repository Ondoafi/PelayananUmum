<?php

/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
require_once ("component/Penduduk.php");
require_once ("component/List.php");

$penduduk = new Penduduk($SerdangDB);
$list = new Lists($SerdangDB);

// get parameter
$id             = $postVars_id ? $postVars_id:$getVars_id;
$isAdmin        = $postVars_isAdmin;
$username       = $postVars_username;
$password       = $postVars_password;
$noKTP          = $postVars_noKTP;
$nama           = $postVars_nama;
$tempatLahir    = $postVars_tempatLahir;
$tglLahir       = $postVars_tglLahir;
$kelamin        = $postVars_kelamin;
$kAgama         = $postVars_kAgama;
$kKerja         = $postVars_kKerja;
$pekerjaan      = $postVars_pekerjaan;
$alamat         = $postVars_alamat;
$rt             = $postVars_rt;
$rw             = $postVars_rw;
$kelurahan      = $postVars_kelurahan;
$kecamatan      = $postVars_kecamatan;
$kWarga         = $postVars_kWarga;
$kKawin         = $postVars_kKawin;
$kPendidikan    = $postVars_kPendidikan;
$pendidikan     = $postVars_pendidikan;
$umur           = $postVars_umur;
$next           = $postVars_next;

$M_KAWIN = $list->getMKawin();
$M_AGAMA = $list->getMAgama();
$M_WARGA = $list->getMWarga();
$M_KERJA = $list->getMKerja();
$M_PENDIDIDKAN = $list->getMPendidikan();

if(!$id)
		header("Location:index.php?form=B.01");

if ($next)
{
    // validate parameter
    if (!$nama)
        $errorCode = "emptyNama";
    if ($kKawin && !$M_KAWIN[$kKawin])
        $errorCode = "invalidkKawin";
    if ($kAgama && !$M_AGAMA[$kAgama])
        $errorCode = "invalidkAgama";
    if ($kKerja !== "0" && !$M_KERJA[$kKerja])
        $errorCode = "invalidkKerja";
    if ($kWarga && !$M_WARGA[$kWarga])
        $errorCode = "invalidkWarga"; 
    if ($kPendidikan !== "0" && !$M_PENDIDIDKAN[$kPendidikan])
        $errorCode = "invalidkPendidikan";

    $pekerjaan = ($kKerja === "0" ? $pekerjaan : "");
    $kKerja = ($pekerjaan ? "0" : $kKerja);
    $pendidikan = ($kPendidikan === "0" ? $pendidikan : "");
    $kPendidikan = ($pendidikan ? "0" : $kPendidikan);
    
    if($kKerja == "0" && !$pekerjaan)
    	$errorCode = "emptyPekerjaan";
    if($kPendidikan == "0" && !$pendidikan)
    	$errorCode = "emptyPendidikan";

    if (!$errorCode)
    {
        //fill param
        $penduduk->id           = $id;
        $penduduk->username     = $username;
        $password->password     = $password;
        $penduduk->noKTP        = $noKTP;
        $penduduk->nama         = $nama;
        $penduduk->tempatLahir  = $tempatLahir;
        $penduduk->tglLahir     = $tglLahir;
        $penduduk->kelamin      = $kelamin;
        $penduduk->kAgama       = $kAgama;
        $penduduk->agama        = $agama;
        $penduduk->kKerja       = $kKerja;
        $penduduk->pekerjaan    = $pekerjaan;
        $penduduk->alamat       = $alamat;
        $penduduk->rt           = $rt;
        $penduduk->rw           = $rw;
        $penduduk->kelurahan    = $kelurahan;
        $penduduk->kecamatan    = $kecamatan;
        $penduduk->kWarga       = $kWarga;
        $penduduk->kKawin       = $kKawin;
        $penduduk->kPendidikan  = $kPendidikan;
        $penduduk->pendidikan   = $pendidikan;
        $penduduk->umur         = $umur;
        $penduduk->isAdmin      = $isAdmin;


        // save
        if ($penduduk->edit())
        {
            // go to where
            header("Location:index.php?form=B.03&id=" . $penduduk->id);
        }
        else // error
            $errorCode = "editFail";
    }
}
else
{
    //init
    if ($id)
    {
        $penduduk->id = $id;
        if ($penduduk->detail())
        {
            
            $username    = $penduduk->username;
            $password    = $penduduk->password;
            $noKTP       = $penduduk->noKTP;
            $nama        = $penduduk->nama;
            $tempatLahir = $penduduk->tempatLahir;
            $tglLahir    = $penduduk->tglLahir;
            $kelamin     = $penduduk->kelamin;
            $kAgama      = $penduduk->kAgama;
            $agama       = $penduduk->agama;
            $kKerja      = $penduduk->kKerja;
            $pekerjaan   = $penduduk->pekerjaan;
            $alamat      = $penduduk->alamat;
            $rt          = $penduduk->rt;
            $rw          = $penduduk->rw;
            $kelurahan   = $penduduk->kelurahan;
            $kecamatan   = $penduduk->kecamatan;
            $kWarga      = $penduduk->kWarga;
            $kKawin      = $penduduk->kKawin;
            $kPendidikan = $penduduk->kPendidikan;
            $pendidikan  = $penduduk->pendidikan;
            $umur        = $penduduk->umur;
            $isAdmin     = $penduduk->isAdmin;
        }
        else
            $errorCode = "invalidID";
    }

}

//load template
include_once ("template/penduduk.edit.php");

?>