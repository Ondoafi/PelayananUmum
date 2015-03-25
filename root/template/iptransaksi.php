<?php include "navigation_sr.php" ?>		
<link rel="stylesheet" href="themes/areta/table/css/rwd-table.min.css"/>
<script type="text/javascript" src="themes/areta/table/js/rwd-table.js"></script>
<div class="container">
<div id="target-1" class="widget">
<div class="widget-header"> 
<i class="icon-bookmark"></i><h3><?php echo $pageTitle ; ?></h3></div>
<div class="widget-content">
<div class="shortcuts">
<form method="post" enctype="multipart/form-data" action="index.php?form=F.02">
Silakan Pilih File Excel: <input name="userfile" type="file"/>
<input name="upload" type="submit" value="Import"/>
<br />
<br />
<?php
//include("controller/excelimport/proses.php");
include_once("controller/excelimport/ptransaksi.php");
?>
</form>