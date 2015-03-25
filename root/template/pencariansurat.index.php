<?php include "navigation_sr.php" ?>		
<link rel="stylesheet" href="themes/areta/table/css/rwd-table.min.css"/>
<script type="text/javascript" src="themes/areta/table/js/rwd-table.js"></script>
    <div class="container">
    <div id="target-1" class="widget">
    <div class="widget-header"> 
        <i class="icon-bookmark"></i><h3><?php echo $pageTitle ?></h3></div>
    <div class="widget-content">
    <div class="shortcuts"> 
        <form id="form1" method="post" action="index.php?form=F.03">
        
<body>
<form action="search.php" method="post">
<input type="text" name="query" />
<select name="pencarian">
<option value="k_surat">KODE SURAT
<option value="no_surat">NOMOR SURAT
<option value="tgl_buat">TANGGAL BUAT
<option value="userid">ID PEMBUAT
<option value="alias">NAMA PEMBUAT
</select>
<input type="submit" name="submit" value="Cari" />
</form>
</body>

<div class="form-region">
<div class="table-responsive" data-pattern="">
<table id="tech-companies-1" class="table table-small-font table-bordered table-striped">
	<tr>
		<th>NO</th>
        <th>KODE SURAT</th>
		<th>NOMOR SURAT</th>
        <th>TANGGAL BUAT</th>
        <th>ID PEMBUAT</th>
        <th>NAMA PEMBUAT</th>
		
   </tr>
<?php
	if($cek){
		while($row=mysql_fetch_array($query))
        
        {
                        
?>
	<tr>
		<td><?php echo $no=$no+1;?></td>
		<td><?php echo $row['k_surat'];?></td>
		<td><?php echo $row['no_surat'];?></td>
		<td><?php echo $row['tgl_buat'];?></td>
		<td><?php echo $row['userid'];?></td>
        <td><?php echo $row['alias'];?></td>
		
	</tr>
<?php
			
		}
		
	}else{
		echo "Tidak ada data";
	}
	unset($_POST['submit']);
?>
</table><br />

<?php

?>