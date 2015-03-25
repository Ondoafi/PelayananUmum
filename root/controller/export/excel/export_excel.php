<?php 
function xlsBOF() {
echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
return;
}

function xlsEOF() {
echo pack("ss", 0x0A, 0x00);
return;
}

function xlsWriteNumber($Row, $Col, $Value) {
echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
echo pack("d", $Value);
return;
}

function xlsWriteLabel($Row, $Col, $Value ) {
$L = strlen($Value);
echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
echo $Value;
return;
}

include "../common/config.php";
$queabsdetail = "SELECT * FROM suratbpjs order by id asc";
$exequeabsdetail = mysql_query($queabsdetail);
while($res = mysql_fetch_array($exequeabsdetail)){

	$data['k_surat'][] = $res['k_surat'];
	$data['no_surat'][] = $res['no_surat'];
	$data['userid'][] = $res['userid'];
	$data['tgl_buat'][] = $res['tgl_buat'];
	$data['alias'][] = $res['alias'];
	$data['pemohon'][] = $res['pemohon'];
	$data['namapemohon'][] = $res['namapemohon'];
} 

$jm = sizeof($data['id']);
header("Pragma: public" );
header("Expires: 0" );
header("Cache-Control: must-revalidate, post-check=0, pre-check=0" );
header("Content-Type: application/force-download" );
header("Content-Type: application/octet-stream" );
header("Content-Type: application/download" );;
header("Content-Disposition: attachment;filename=file_BPJS.xls " );
header("Content-Transfer-Encoding: binary " );
xlsBOF();
xlsWriteLabel(0,3,"Surat BPJS " );
xlsWriteLabel(2,0,"Nomor" );
xlsWriteLabel(2,1,"JENIS SURAT" );
xlsWriteLabel(2,2,"NOMOR SURAT" );
xlsWriteLabel(2,3,"TANGGAL BUAT" );
xlsWriteLabel(2,4,"PEMBUAT" );
xlsWriteLabel(2,5,"ALIAS" );
xlsWriteLabel(2,6,"PEMOHON" );
xlsWriteLabel(2,7,"NAMA PEMOHON" );
$xlsRow = 3;

for ($y=0; $y<$jm; $y++) {
	++$i;
	xlsWriteNumber($xlsRow,0,"$i" );
	xlsWriteLabel($xlsRow,1,$data['k_surat'][$y]);
	xlsWriteLabel($xlsRow,2,$data['no_surat'][$y]);
	xlsWriteLabel($xlsRow,3,$data['userid'][$y]);
	xlsWriteLabel($xlsRow,4,$data['tgl_buat'][$y]);
	xlsWriteLabel($xlsRow,5,$data['alias'][$y]);
    xlsWriteLabel($xlsRow,6,$data['pemohon'][$y]);
    xlsWriteLabel($xlsRow,7,$data['namapemohon'][$y]);
	$xlsRow++;
}
xlsEOF();
exit();