<?php
$tpl_pageTitle = ucwords($pageTitle);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Aplikasi Kelurahan</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
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
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.php?form=A.01">PELAYANAN ONLINE KELURAHAN </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i><strong>&nbsp;<?php echo $_SESSION["penduduk"]["nama"]; ?></strong> <b class="caret"></b></a>
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
        <li><a href="index.php?form=A.01"><i class="icon-large icon-home"></i><span>Dashboard</span> </a> </li>
         <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-large icon-file"></i><span>SURAT</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="index.php?form=C.02&kSurat=2">Surat BPJS</a></li>
            <li><a href="index.php?form=D.02&kSurat=4">Surat SKCK</a></li>
            <li><a href="index.php?form=E.02&kSurat=3">Surat KJP</a></li>
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