<?php

/**  
 * 
 * EXCEL Import Master
 * @author ar3t4
 * @copyright 2014
 */
 
// koneksi ke mysql
    include_once("common/config.php");

// menggunakan class phpExcelReader
    include_once("pformat.php");
    include_once("pclean.php");
    

// membaca file excel yang diupload
    $data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);

// membaca jumlah baris dari data excel
    $baris = $data->rowcount($sheet_index=0);

// nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
    $sukses = 0;
    $gagal = 0;

// import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
    
    for ($i=2; $i<=$baris; $i++){
        
    $Nama 		  = $data->val ($i, 2);
    $Tempat 	  = $data->val ($i, 3);
    $TanggalLahir = $data->val ($i, 4);
    $NoKTP 		  = $data->val ($i, 5);   
    $Alamat 	  = $data->val ($i, 8);
    $RT 		  = $data->val ($i, 9);
    $RW 		  = $data->val ($i, 10);
    $JenisKelamin = $data->val ($i, 13); 

    
  //sisipkan ke dalam tabel penduduk
    $date = date("Y-m-d",strtotime(str_replace('/','-',$date)));
    $old_date_format = strtotime("yyyy-mm-dd");
    $new_date_format = date("m-d-Y", $old_date_format);
    
    $sql_insert1="select no_ktp from penduduk where no_ktp='$NoKTP'"; 
    $ada=mysql_query($sql_insert1) or die(mysql_error()); 
    if(mysql_num_rows($ada)>0) 
    { 
      echo "<h3>ADA DUPLIKASI DATA.</h3>"; 
    } else {  
     
    
    $sql_insert1 = "INSERT INTO penduduk (username, nama, password, tempat_lahir,kelamin,k_agama,agama,no_ktp,alamat,rt,rw,kelurahan,kecamatan,k_kerja, pekerjaan,tgl_lahir)
                     VALUES  
                    ('$NoKTP','$Nama',STR_TO_DATE('$TanggalLahir', '%m/%d/%Y'),'$Tempat','$JenisKelamin','$Agama','$Agama','$NoKTP','$Alamat','$RT','$RW','$Kelurahan','$Kecamatan','$Pekerjaan','$Pekerjaan',STR_TO_DATE('$TanggalLahir', '%m/%d/%Y'))";


    
    //$sql_insert1 = "INSERT INTO penduduk (username, nama, password, no_ktp, tempat_lahir, kelamin ,alamat, rt, tgl_lahir) 
    //              VALUES('$NoKTP ','$Nama',STR_TO_DATE('$TanggalLahir', '%m/%d/%Y'),'$NoKTP','$Tempat','$JenisKelamin','$Alamat','$RT','$RW',STR_TO_DATE('$TanggalLahir', '%m/%d/%Y'))";
                                                             
    
    $hasil = mysql_query($sql_insert1);
       

  // jika proses insert data sukses, maka counter $sukses bertambah
  // jika gagal, maka counter $gagal yang bertambah
     if ($hasil) $sukses++;
        else $gagal++;


// tampilan status sukses dan gagal
    echo "<h3>Proses import data selesai.</h3>";
    echo "<p>Jumlah data yang sukses diimport : ".$sukses."<br>";
    echo "Jumlah data yang gagal diimport : ".$gagal."</p>";
    
    }
}
?>
