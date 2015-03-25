<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Dashboard - Pelayanan</title>
<?php
session_start();
$tpl_Username  = $_SESSION["root"]["nama"];
$tpl_pageTitle = ucwords($pageTitle);
?>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet"/>
    <link href="themes/areta/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="themes/areta/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="themes/areta/css/font-awesome.css" rel="stylesheet"/>
    <link href="themes/areta/css/style.css" rel="stylesheet"/>
    <link href="themes/areta/css/pages/dashboard.css" rel="stylesheet"/>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="themes/areta/js/html5.js"></script>
    <![endif]-->
</head>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
      <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.php?form=A.01">ADMINISTRATOR </a>        
        <div class="nav-collapse">
          <ul class="nav pull-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="icon-user"></i> Selamat Datang <strong><?php echo $root->nama ?><?php echo $user->nama ?></strong> <b class="caret"></b></a>
               <ul class="dropdown-menu">
              <li><a onclick="javascript:return confirm('Anda yakin akan keluar aplikasi ?')" href="index.php?out=true">Logout</a></li>
            </ul></li></ul>
    </div><br />
</div></div></div>
<!-- /navbar -->
<!-- /subnavbar-inner --> 
<!-- /widget -->
    <div class="control-group">	
        <div class="accordion" id="accordion2" id="accordion3" id="accordion4">
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" data-parent="#accordion3" data-parent="#accordion4"href="#collapseOne">
                MENU PELUM SURAT</a>
                </div>
            <div id="collapseOne" class="accordion-body collapse in">
        <div class="accordion-inner">
    <div class="control-group">	
<br />										
    <label class="control-label" for="nama"></label>
        <div class="controls">
            <div class="widget-content">
                <div class="shortcuts">
                    <a href="index.php?form=C.02&kSurat=2"target='_blank' class="shortcut"><img src="themes/areta/admin/add_page.png" /><span class="shortcut-label">BUAT SURAT BPJS</span> </a>
                    <a href="index.php?form=E.02&kSurat=3"target='_blank' class="shortcut"><img src="themes/areta/admin/add_page.png" /><span class="shortcut-label">BUAT SURAT KJP</span> </a>
                    <a href="index.php?form=D.02&kSurat=4"target='_blank' class="shortcut"><img src="themes/areta/admin/add_page.png" /><span class="shortcut-label">BUAT SURAT SKCK </span> </a>
                <br /><br />
                    <a href="index.php?form=C.04"target='_blank' class="shortcut"><img src="themes/areta/admin/mail_search.png" /><span class="shortcut-label">PERIKSA SURAT BPJS</span> </a>
                    <a href="index.php?form=E.04"target='_blank' class="shortcut"><img src="themes/areta/admin/mail_search.png" /><span class="shortcut-label">PERIKSA SURAT KJP</span> </a>
                    <a href="index.php?form=D.04"target='_blank' class="shortcut"><img src="themes/areta/admin/mail_search.png" /><span class="shortcut-label">PERIKSA SURAT SKCK </span> </a>
                <br /><br />
                <a href="index.php?form=F.03"target='_blank' class="shortcut"><img src="themes/areta/admin/mail_search.png" /><span class="shortcut-label">PERIKSA SURAT FILTER 1</span> </a>
                <a href="index.php?form=F.04"target='_blank' class="shortcut"><img src="themes/areta/admin/mail_search.png" /><span class="shortcut-label">PERIKSA SURAT FILTER 2</span> </a>
                <a href="http://localhost/pelum/suport/mobile/index.php"target='_blank' class="shortcut"><img src="themes/areta/admin/comments.png" /><span class="shortcut-label">SERVER CHATING </span> </a>


                </div></div>
            </div><!-- /controls --></div> <!-- /control-group -->
            <br /><hr style="color:yellow"/>
            </div>
                </div>
                    </div>

            <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" data-parent="#accordion3" href="#collapsetwo">
                        MENU PELUM PENDUDUK
                    </a>
                </div>
            <div id="collapsetwo" class="accordion-body collapse">
        <div class="accordion-inner">
    <div class="control-group">											
<label class="control-label" for=""></label>
    <div class="controls">
        <div class="widget-content">
            <div class="shortcuts">
                <a href="index.php?form=B.01"target='_blank' class="shortcut"><img src="themes/areta/admin/search_user.png" /><span class="shortcut-label">CARI WARGA</span> </a>
                <a href="index.php?form=B.02"target='_blank' class="shortcut"><img src="themes/areta/admin/add_user.png" /><span class="shortcut-label">TAMBAH WARGA</span> </a>
                <a href="index.php?form=B.07"target='_blank' class="shortcut"><img src="themes/areta/admin/chart.png" /><span class="shortcut-label">STATIC WAARGA</span> </a>
            <br /><br />
                <a href="index.php?form=F.01"target='_blank' class="shortcut"><img src="themes/areta/admin/add_to_database.png" /><span class="shortcut-label">IMPORT MASTER WARGA</span> </a>
                <a href="index.php?form=F.02"target='_blank' class="shortcut"><img src="themes/areta/admin/add_to_database.png" /><span class="shortcut-label">IMPORT TRANSAKSI WARGA</span> </a>
                <a href="index.php?form=B.08"target='_blank' class="shortcut"><img src="themes/areta/admin/warning.png" /><span class="shortcut-label">ENCRIP PASSWORD</span> </a>
                </div></div> 
                </div><!-- /controls --></div> <!-- /control-group -->
            <br /><hr style="color:yellow"/>
            </div>
                </div>
                    </div>
            
            <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" data-parent="#accordion3" href="#collapsethree">
                        MENU PELUM LAPORAN
                    </a>
                </div>
            <div id="collapsethree" class="accordion-body collapse">
        <div class="accordion-inner">
    <div class="control-group">											
<label class="control-label" for=""></label>
    <div class="controls">
        <div class="widget-content">
            <div class="shortcuts">
                <a href="index.php?form=C.06"target='_blank' class="shortcut"><img src="themes/areta/admin/excel.png" /><span class="shortcut-label">CETAK LAPORAN BPJS EXCEL</span> </a>
                <a href=""target='_blank' class="shortcut"><img src="themes/areta/admin/excel.png" /><span class="shortcut-label">CETAK LAPORAN SKCK EXCEL</span> </a>
                <a href=""target='_blank' class="shortcut"><img src="themes/areta/admin/excel.png" /><span class="shortcut-label">CETAK LAPORAN KJP EXCEL</span> </a>
            <br /><br /> 
                <a href="index.php?form=C.07"target='_blank' class="shortcut"><img src="themes/areta/admin/pdf.png" /><span class="shortcut-label">CETAK LAPORAN BPJS PDF</span> </a>
                <a href="index.php?form=D.07"target='_blank' class="shortcut"><img src="themes/areta/admin/pdf.png" /><span class="shortcut-label">CETAK LAPORAN SKCK PDF</span> </a>
                <a href="index.php?form=E.07"target='_blank' class="shortcut"><img src="themes/areta/admin/pdf.png" /><span class="shortcut-label">CETAK LAPORAN KJP PDF</span> </a>
                </div></div> 
                </div><!-- /controls --></div> <!-- /control-group -->
            <br /><hr style="color:yellow"/>
            </div>
                </div>
                    </div>              
<script src="themes/areta/js/jquery-1.7.2.min.js"></script> 
<script src="themes/areta/js/excanvas.min.js"></script> 
<script src="themes/areta/js/chart.min.js" type="text/javascript"></script> 
<script src="themes/areta/js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="themes/areta/js/full-calendar/fullcalendar.min.js"></script>
<script src="themes/areta/js/base.js"></script> 
