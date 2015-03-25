<html>
<head>
<title>Export Excel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<link rel="stylesheet" type="text/css" href="themes/areta/print/style.css" />
</head>
<body>
<h2>align="center">LAPORAN SURAT BPJS</h2>

<?include_once ("./common/config.php"); ?>
<a href="javascript:;" ><img src="themes/areta/print/excel-icon.jpeg" width="18" height="18" border="0" onClick="window.open('./excel/export_excel.php','scrollwindow','top=200,left=300,width=800,height=500');"/></a>

<table class="datatable">
<tr>
      	<th>NO</th>
        <th>JENIS SURAT</th>
        <th>NO SURAT</th>
        <th>TANGGAL BUAT</th>
        <th>PEMBUAT</th>
        <th>ALIAS </th>
        <th>PERMOHONAN</th>
        <th>NAMA ANAK</th>
</tr>


<?php
$query=mysql_query("select * from suratbpjs order by id asc");
while($row=mysql_fetch_array($query)){
?>
<tr>
      <td><?php echo $c=$c+1; ?></td>
      <td><?php echo $row['k_surat'];?></td>
      <td><?php echo $row['no_surat'];?></td>
      <td><?php echo $row['tgl_buat'];?> </td>
      <td><?php echo $row['userid'];?></td> 
      <td><?php echo $row['alias'];?></td>
      <td><?php echo $row['pemohon']; ?> </td>
      <td><?php echo $row['namapemohon'];?></td>
      
</tr>
<?php
}
?>

</table>
</body>
</html>