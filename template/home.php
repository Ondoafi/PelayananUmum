<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>
<title>Dashboard - Pelayanan</title>
<?php
$tpl_Username  = $penduduk->nama;
$tpl_pageTitle = ucwords($pageTitle);
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet"/>
<link href="themes/areta/css/bootstrap.min.css" rel="stylesheet">
<link href="themes/areta/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="themes/areta/css/font-awesome.css" rel="stylesheet">
<link href="themes/areta/css/style.css" rel="stylesheet">
<link href="themes/areta/css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="themes/areta/js/html5.js"></script>
    <![endif]-->
</head>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
      <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="form=A.01"></a>
        <div class="nav-collapse">
        <br />
          <ul class="nav pull-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="icon-user"></i> Selamat Datang <strong><?php echo $tpl_Username ?></strong> <b class="caret"></b></a>
               <ul class="dropdown-menu">
              <li><a onclick="javascript:return confirm('Anda yakin akan keluar aplikasi ?')" href="index.php?out=true">Logout</a></li>
            </ul>
          </li>
        </ul>
</div>
    </div>
        </div>
            </div>
<!-- /navbar -->
<!-- /subnavbar-inner --> 
<!-- /widget -->
<div class="widget-header"> <i class="icon-bookmark"></i>
    <h3>Pilih Aplikasi Pelayanan</h3>
        </div>
            <!-- /widget-header -->
                <div class="widget-content">
                    <div class="shortcuts">
                    <br />
                    <br /> 
                    <a href="index.php?form=C.02&kSurat=2" class="shortcut" target='_blank'><img src="themes/areta/images/surat.png" /><span class="shortcut-label"><strong>LAYANAN SURAT BPJS</strong></span> </a>
                    <a href="index.php?form=E.02&kSurat=3" class="shortcut"target='_blank'><img src="themes/areta/images/surat.png" /><span class="shortcut-label"><strong>LAYANAN SURAT KJP</strong></span> </a>
                    <a href="index.php?form=D.02&kSurat=4" class="shortcut"target='_blank'><img src="themes/areta/images/surat.png"/><span class="shortcut-label"><strong>LAYANAN SURAT SKCK </strong></span> </a>
                    <br /><br />
                <br /><br />
                </div>
<script src="themes/areta/js/jquery-1.7.2.min.js"></script> 
<script src="themes/areta/js/excanvas.min.js"></script> 
<script src="themes/areta/js/chart.min.js" type="text/javascript"></script> 
<script src="themes/areta/js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="themes/areta/js/full-calendar/fullcalendar.min.js"></script>
<script src="themes/areta/js/base.js"></script> 
