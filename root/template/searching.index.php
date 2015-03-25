<?php include "navigation_sr.php" ?>		
<link rel="stylesheet" href="themes/areta/table/css/rwd-table.min.css"/>
<script type="text/javascript" src="themes/areta/table/js/rwd-table.js"></script>
    <div class="container">
    <div id="target-1" class="widget">
    <div class="widget-header"> 
        <i class="icon-bookmark"></i><h3><?php echo $pageTitle ?></h3></div>
    <div class="widget-content">
    <div class="shortcuts"> 
    <div class="form-region">
    <form id="form1" method="post" action="index.php?form=F.04">

<body>
<form action="proses.php" method="post">
<table id="tech-companies-1" class="table table-small-font table-bordered table-striped">
   <tr><td><input type="checkbox" name="noSuratCat"/>&nbsp;Nomor Surat</td><td><input type="text" name="noSurat"/></td></tr>
   <tr><td><input type="checkbox" name="aliasCat"/>&nbsp;Nama Warga</td><td><input type="text" name="alias"/></td></tr>
   <tr><td><input type="checkbox" name="useridCat"/>&nbsp;No.KTP</td><td><input type="text" name="userid"/></td></tr>
   <tr><td><input type="checkbox" name="kSuratCat"/>&nbsp;Jenis Surat</td><td><input type="radio" name="kSurat" value="2"/> BPJS <input type="radio" name="kSurat" value="4"/> SKCK <input type="radio" name="kSurat" value="3"/> KJP</td></tr>
   <tr><td></td><td><input class="btn btn-invert" type="submit" name="submit" value="Search"/></td></tr>   
</table>
</form>
</body>

<div class="table-responsive">
<table id="tech-companies-1" class="table table-small-font table-bordered table-striped">
	<tr>
		<th>NO</th>
        <th>NOMOR SURAT</th>
		<th>NAMA WARGA</th>
        <th>NO.KTP</th>
        <th>JENIS SURAT</th>	
	</tr>

<?php
	if($hasil){
		while ($data = mysql_fetch_array($hasil))
    {
 ?>
	<tr>
		<td><?php echo $no=$no+1;?></td>
		<td><?php echo $data['no_surat'];?></td>
		<td><?php echo $data['alias'];?></td>
		<td><?php echo $data['userid'];?></td>
        <td><?php echo $data['k_surat'];?></td>
	</tr>


<?php
 
 }
		
	}else{
		echo "Tidak ada data";
	}
    if (isset($_POST['submit']));
?>
</table><br />

<?php

?>