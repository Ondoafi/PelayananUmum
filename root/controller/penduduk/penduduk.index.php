<?php

/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
require_once ("component/Penduduk.php");
require_once ("component/List.php");

// get parameter
$kAgama = $postVars_kAgama;
$kKerja = $postVars_kKerja;
$kKawin = $postVars_kKawin;
$kPendidikan = $postVars_kPendidikan;
$tglLahir   = $postVars_tglLahir;
$kField = $postVars_kField;
$keyword = $postVars_keyword;
$next = $postVars_next;
$download = $postVars_download;
$page = $postVars_page;
$limit = $LIMIT_PENDUDUK_INDEX;

$list = new Lists($SerdangDB);

$M_KAWIN = $list->getMKawin();
$M_AGAMA = $list->getMAgama();
$M_WARGA = $list->getMWarga();
$M_KERJA = $list->getMKerja();
$M_PENDIDIDKAN = $list->getMPendidikan();


$M_KAWIN = array('x' => 'Seluruh Status') + $M_KAWIN;
$M_AGAMA = array('x' => 'Seluruh Agama') + $M_AGAMA;
$M_KERJA = array('x' => 'Seluruh Pekerjaan') + $M_KERJA;
$M_PENDIDIDKAN = array('x' => 'Seluruh Pendidikan') + $M_PENDIDIDKAN;
foreach ($M_FIELD as $key => $field) {
    $fieldOptions[$key] = $field[1];
}

if ($next || $download) {
    
    if (!$errorCode) {
        $penduduk = new Penduduk($SerdangDB);
        $result = $penduduk->searchAdvance($kField, $keyword, $limit, $page, $kAgama, $kKerja, $kKawin, $kPendidikan, $download);

        if ($download) {
            require_once ('psxlsgen/PhpSimpleXlsGen.php');
            require_once ('controller/excelimport/PHPExcel/PHPExcel.php');
            $myxls = new PhpSimpleXlsGen;
            $myxls->filename = "download";
            $myxls->writeText_pos(0, 0,  'No'); 
            $myxls->WriteText_pos(0, 1,  'Nama Pengguna');
            $myxls->WriteText_pos(0, 2,  'Password');
            $myxls->WriteText_pos(0, 3,  'Nama');
            $myxls->WriteText_pos(0, 4,  'Status');
            $myxls->WriteText_pos(0, 5,  'No.KTP');
            $myxls->WriteText_pos(0, 6,  'Agama');
            $myxls->WriteText_pos(0, 7,  'Pekerjaan');
            $myxls->WriteText_pos(0, 8,  'Alamat');
            $myxls->WriteText_pos(0, 9,  'RT');
            $myxls->WriteText_pos(0, 10, 'RW');
            $myxls->WriteText_pos(0, 11, 'Kecamatan');
            $myxls->WriteText_pos(0, 12, 'Kelurahan');
            $myxls->WriteText_pos(0, 13, 'Tempat Lahir');
            $myxls->WriteText_pos(0, 14, 'Tanggal Lahir');
            $myxls->WriteText_pos(0, 15, 'Umur');
            $myxls->WriteText_pos(0, 16, 'Jenis Kelamin');
            $myxls->WriteText_pos(0, 17, 'Kewarganegaraan');
            $myxls->WriteText_pos(0, 18, 'Status Perkawinan');
            $myxls->WriteText_pos(0, 19, 'Pendidikan');

            for ($i = 0; $i < count($result['content']); $i++) {
                $row = $i + 1;
                $myxls->WriteText_pos($row, 0, ($i + 1));
                $myxls->WriteText_pos($row, 1, $result['content'][$i]['username']);
                $myxls->WriteText_pos($row, 2, $result['content'][$i]['password']);
                $myxls->WriteText_pos($row, 3, $result['content'][$i]['nama']);
                $myxls->WriteText_pos($row, 4, $result['content'][$i]['is_admin']);
                $myxls->WriteText_pos($row, 5, $result['content'][$i]['no_ktp']);
                $myxls->WriteText_pos($row, 6, $M_AGAMA[$result['content'][$i]['k_agama']]);
                $myxls->WriteText_pos($row, 7, ($result['content'][$i]['k_kerja'] == 0 ? $result['content'][$i]['pekerjaan'] : $M_PENDIDIDKAN[$result['content'][$i]['k_kerja']]));
                $myxls->WriteText_pos($row, 8, $result['content'][$i]['alamat']);
                $myxls->WriteText_pos($row, 9, $result['content'][$i]['rt']);
                $myxls->WriteText_pos($row, 10, $result['content'][$i]['rw']);
                $myxls->WriteText_pos($row, 11, $result['content'][$i]['kelurahan']);
                $myxls->WriteText_pos($row, 12, $result['content'][$i]['kecamatan']);
                $myxls->WriteText_pos($row, 13, $result['content'][$i]['tempat_lahir']);
                $myxls->WriteText_pos($row, 14, $result['content'][$i]['tgl_lahir']);
                $myxls->WriteText_pos($row, 15, $result['content'][$i]['umur']);
                $myxls->WriteText_pos($row, 16, $result['content'][$i]['kelamin']);
                $myxls->WriteText_pos($row, 17, $M_WARGA[$result['content'][$i]['k_warga']]);
                $myxls->WriteText_pos($row, 18, $M_KAWIN[$result['content'][$i]['k_kawin']]);
                $myxls->WriteText_pos($row, 19, ($result['content'][$i]['k_pendidikan'] == 0 ? $result['content'][$i]['pendidikan'] : $M_PENDIDIDKAN[$result['content'][$i]['k_pendidikan']]));
                $myxls->WriteText_pos($row, 20, $result['content'][$i]['umur']);
                
            }
            $myxls->SendFile();
            exit();
        }

        for ($i = 0; $i < $result["numPage"]; $i++) {
            $pageOptions[$i] = ($i + 1);
        }
        $no = ($page * $limit) + 1;

        if (!$result)
            $errorCode = "Tidak ada penduduk yang memenuhi kriteria pencarian.";
    }
}

include_once ("template/penduduk.index.php");

?>