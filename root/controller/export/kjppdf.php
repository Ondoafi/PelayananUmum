<?php

/**
 * @author [ar3t4]
 * @copyright 2014
 */

// koneksi ke mysql
include ("common/config.php");
require ("fpdf17/fpdf.php");
     
    $query ="select * from suratkjp";
    $db_query = mysql_query($query) or die("Query gagal");
    //Variabel untuk iterasi
    $i = 0;
    //Mengambil nilai dari query database
    while($data=mysql_fetch_row($db_query))
    {
        $cell[$i][0] = $data[0];
        //$cell[$i][1] = $data[1];
        $cell[$i][2] = $data[2];
        //$cell[$i][3] = $data[3];
        $cell[$i][4] = $data[4];
        $cell[$i][5] = $data[5];
        $cell[$i][6] = $data[6];
        $cell[$i][7] = $data[7];
        $cell[$i][8] = $data[8];
        $i++;
    }
    //memulai pengaturan output PDF
    class PDF extends FPDF
    {
        //untuk pengaturan header halaman
        function Header()
        {
            //Pengaturan Font Header
            $this->SetFont('Arial','B',14); //jenis font : Times New Romans, Bold, ukuran 14
            //untuk warna background Header
            $this->SetFillColor(255,255,255);
            //untuk warna text
            $this->SetTextColor(0,0,0);
            //Menampilkan tulisan di halaman
            $this->Cell(41,1,'LAPORAN SURAT KJP','TBLR',0,'C',1); //TBLR (untuk garis)=> B = Bottom,
            // L = Left, R = Right
            //untuk garis, C = center 
        }
    }
    //pengaturan ukuran kertas P = Portrait
    
    $pdf = new PDF('l','cm','A3');
    $pdf->Open();
    $pdf->AddPage();
    //Ln() = untuk pindah baris
    $pdf->Ln();
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(1,1,'No','LRTB',0,'C');
    //$pdf->Cell(3,1,'KODE ','LRTB',0,'C');
    $pdf->Cell(4,1,'NOMOR','LRTB',0,'C');
    $pdf->Cell(5,1,'TANGGAL','LRTB',0,'C');
    //$pdf->Cell(6,1,'NO KTP','LRTB',0,'C');
    $pdf->Cell(7,1,'NAMA','LRTB',0,'C');
    $pdf->Cell(8,1,'PERMOHONAN','LRTB',0,'C');
    $pdf->Cell(9,1,'NAMA ANAK','LRTB',0,'C');
    $pdf->Cell(10,1,'NAMA SEKOLAH','LRTB',0,'C'); 
    $pdf->Ln();
    $pdf->SetFont('Arial',"",12); 
    for($j=0;$j<$i;$j++)
    {
        //menampilkan data dari hasil query database
        $pdf->Cell(1,1,$j+1,'LBTR',0,'C');
        //$pdf->Cell(3,1,$cell[$j][1],'LBTR',0,'L');
        $pdf->Cell(4,1,$cell[$j][2],'LBTR',0,'L');
        $pdf->Cell(5,1,$cell[$j][4],'LBTR',0,'L');
        //$pdf->Cell(6,1,$cell[$j][3],'LBTR',0,'L');
        $pdf->Cell(7,1,$cell[$j][5],'LBTR',0,'L');
        $pdf->Cell(8,1,$cell[$j][6],'LBTR',0,'L');
        $pdf->Cell(9,1,$cell[$j][7],'LBTR',0,'L');
        $pdf->Cell(10,1,$cell[$j][8],'LBTR',0,'L');
        $pdf->Ln();
    }
    //menampilkan output berupa halaman PDF
    $pdf->Output();

include_once ("template/pdf.index.php");

?>