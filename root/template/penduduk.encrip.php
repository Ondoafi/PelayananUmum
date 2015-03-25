<?php include "navigation_sr.php" ?>		
<link rel="stylesheet" href="themes/areta/table/css/rwd-table.min.css"/>
<script type="text/javascript" src="themes/areta/table/js/rwd-table.js"></script>
<div class="container">
<div id="target-1" class="widget">
<div class="widget-header"> 
<i class="icon-bookmark"></i><h3><?php echo $pageTitle; ?></h3></div>
<div class="widget-content">
<div class="shortcuts"> 
<div class="widget-content">
<html>
<head><title>Encrypt passwords</title></head>
<body>
Total Password Dalam Table - <?php echo $total; ?><br/>
<?php if($enc==$total && $total>0) { ?>
Semua Password Telah di encrypted.
<?php } else if($total>0) { ?>
Yang Belum Ter-Unencrypted - <?php echo $total-$enc; ?><br/><br/>
Click "GO" Untuk Meningkatkan keamana <?php echo $total-$enc; ?> passwords.<br/>
WARNING! HANYA DIGUNAKAN JIKA ADA PENAMBAHAN WARGA .<br/>
<input type=button value="GO" onclick="window.location=index.php?form=B.08"/>
<?php } ?>
</body>
</html>