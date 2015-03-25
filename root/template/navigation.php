<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Aplikasi Kelurahan</title>
<?php
session_start();
$tpl_Username  = $_SESSION["root"]["nama"];
$tpl_pageTitle = ucwords($pageTitle);
?>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet"/>
    <link href="themes/areta/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="themes/areta/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="themes/areta/css/areta-font.css" rel="stylesheet"/>
    <link href="themes/areta/css/font-awesome.css" rel="stylesheet"/>
    <link href="themes/areta/css/style.css" rel="stylesheet"/>
    <link href="themes/areta/css/pages/dashboard.css" rel="stylesheet"/>
    <link href="themes/areta/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="themes/areta/js/html5.js"></script>
    <![endif]-->
</head>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container"> 
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.php?form=A.01">PELAYANAN ONLINE KELURAHAN </a>
            <div class="nav-collapse">
        <ul class="nav pull-right">
    <li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="icon-user"></i> &nbsp;<strong><?php echo $_SESSION["root"]["nama"]; ?></strong> <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a onclick="javascript:return confirm('Anda yakin akan keluar aplikasi ?')" href="index.php?out=true">Logout</a></li>
    </ul>
        </li>
            </ul>
                </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li><a href="index.php?form=A.01"><i class="shortcut-icon icon-home"></i><span>DASHBOARD</span> </a> </li>
         
         <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="shortcut-icon icon-file"></i><span>SURAT</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="index.php?form=C.02&kSurat=2">Surat BPJS</a></li>
                <li><a href="index.php?form=D.02&kSurat=4">Surat SKCK</a></li>
                <li><a href="index.php?form=E.02&kSurat=3">Surat KJP</a></li>
          </ul>
        </li>
        
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="shortcut-icon icon-group"></i><span>WARGA</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="index.php?form=B.01">Cari Warga</a></li>
            <li><a href="index.php?form=B.02">Menambah Warga</a></li>
            <li><a href="index.php?form=B.07">Stastic Warga</a></li>
            <li><a href="index.php?form=F.01">Import Master Warga</a></li>
            <li><a href="index.php?form=F.02">Import Transaksi Warga</a></li>
            <li><a href="index.php?form=B.08">Encrip Password</a></li>
          </ul>
        </li>
        
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="shortcut-icon icon-user"></i><span>ADMIN</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="index.php?form=X.04">Daftar Admin</a></li>
            <li><a href="index.php?form=X.02">Menambah Admin</a></li>
            <li><a href="index.php?form=X.03">Ganti Password</a></li>
          </ul>
        </li>
                
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="shortcut-large icon-eye-open"></i><span>MONITORING</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="index.php?form=C.04">Periksa BPJS</a></li>
            <li><a href="index.php?form=D.04">Periksa SKCK</a></li>
            <li><a href="index.php?form=E.04">Periksa KJP</a></li>
            <li><a href="index.php?form=F.03">SEMUA SURAT</a></li>
            <li><a href="index.php?form=F.04">SEMUA SURAT</a></li>
          </ul>
        </li>
        
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>BANTUAN</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="">Chating</a></li>
            <li><a href="">Voice Call</a></li>
            <li><a href="">Video Call</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<script src="themes/areta/js/jquery-1.7.2.min.js"></script> 
<script src="themes/areta/js/excanvas.min.js"></script> 
<script src="themes/areta/js/chart.min.js" type="text/javascript"></script> 
<script src="themes/areta/js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="themes/areta/js/full-calendar/fullcalendar.min.js"></script>
<script src="themes/areta/js/base.js"></script> 