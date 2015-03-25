<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>LOGIN - PELUM SERDANG</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes"/> 
<link href="themes/areta/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="themes/areta/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="themes/areta/css/font-awesome.css" rel="stylesheet"/>
<link rel="stylesheet" href="themes/areta/css/areta.css" type="text/css"/>
<link href="themes/areta/css/style.css" rel="stylesheet" type="text/css"/>
<link href="themes/areta/css/pages/signin.css" rel="stylesheet" type="text/css"/>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet"/>
<link href="themes/areta/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
</head>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        <span class="icon-bar"></span></a>
    <a class="brand" href="">
<marquee align="" behavior="alternate" direction="right" onmouseout="this.start()" onmouseover="this.stop()" scrollamount="3" width="">SYSTEM INFORMASI PELAYANAN ONLINE KELURAHAN SERDANG KEMAYORAN</marquee></a>		
    <div class="nav-collapse">
        <ul class="nav pull-right">
            <li class="">
                <a href="" class=""></a>	
            </li>
        </ul>
    </div><!--/.nav-collapse -->	
</div> <!-- /container -->
</div> <!-- /navbar-inner -->
</div> <!-- /navbar -->
<div class="account-container">
<div class="content clearfix">
<div class="form-region">
<form name="login" action="index.php" method="post" onSubmit="return validasi(this)">
<?php if ($errorCode) { ?><center><?php echo $errorCode ?></center><?php } ?>
<center><img src="themes/areta/images/logo.png"/></center>
<div class="login-fields">
<center><?php echo date("l,  d F Y ") ?></center>
<div class="field">
    <label for="username">Username</label>
        <input type="text" id="username" name="username" value="<?php echo htmlentities($username); ?>" placeholder="Username" class="login username-field" />
            </div> <!-- /field -->
                <div class="field">
                    <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Password" class="login password-field"/>
                    </div> <!-- /password -->
                </div> <!-- /login-fields -->
            <div class="login-actions">
        <span class="login-checkbox">
    <input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
<label class="choice" for="Field">remember</label>
</span>
    <button class="button btn btn-success btn-large" >Login</button>
        <input type="hidden" name="login" value="login" />
        <br />
        <br />
        <br />
       <kbd> BAGI WARGA YANG INGIN MENCOBA DEMO PELAYANAN SILAHKAN GUNAKAN<br />
        Username : 012301230123<br />
        Password : 1999-09-09 </kbd>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="themes/js/jquery-1.7.2.min.js"></script> 
<script src="themes/js/excanvas.min.js"></script> 
<script src="themes/js/chart.min.js" type="text/javascript"></script> 
<script src="themes/js/bootstrap.js"></script>
<script src="themes/js/base.js"></script> 
<script language="javascript">
function validasi(form){
  if (form.username.value == ""){
    alert("Anda belum mengisikan Username.");
    form.username.focus();
    return (false);
  }

  if (form.password.value == ""){
    alert("Anda belum mengisikan Password.");
    form.password.focus();
    return (false);
  }
  return (true);
}
</script>
<script language="javascript">
function validasi(form){
  if (form.username.value == ""){
    alert("Anda belum mengisikan Username.");
    form.username.focus();
    return (false);
  }

  if (form.password.value == ""){
    alert("Anda belum mengisikan Password.");
    form.password.focus();
    return (false);
  }
  return (true);
}
</script>
</html>

<li>
<a>
<!-- LiveZilla Chat Button Link Code (ALWAYS PLACE IN BODY ELEMENT) --><!-- LiveZilla Tracking Code (ALWAYS PLACE IN BODY ELEMENT) --><div id="livezilla_tracking" style="display:none"></div><script type="text/javascript">
var script = document.createElement("script");script.async=true;script.type="text/javascript";var src = "http://pelumserdang.mbs.web.id/suport/server.php?a=69f84&request=track&output=jcrpt&intgroup=UGVsdW1vbmxpbmU_&intid=YWRtaW5pc3RyYXRvcg__&pref=dXNlcg__&fbpos=10&fbml=0&fbmt=0&fbmr=0&fbmb=0&fbw=32&fbh=112&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);</script><noscript><h1><img src="http://pelumserdang.mbs.web.id/suport/server.php?a=69f84&amp;request=track&amp;output=nojcrpt&amp;intgroup=UGVsdW1vbmxpbmU_&amp;intid=YWRtaW5pc3RyYXRvcg__&amp;pref=dXNlcg__" width="0" height="0" style="visibility:hidden;" alt=""></h1></noscript><!-- http://www.LiveZilla.net Tracking Code --><div style="display:none;"><a href="javascript:void(window.open('http://pelumserdang.mbs.web.id/suport/chat.php?a=84d8e&amp;intgroup=UGVsdW1vbmxpbmU_&amp;intid=YWRtaW5pc3RyYXRvcg__&amp;pref=dXNlcg__','','width=590,height=760,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))" class="lz_fl"><img id="chat_button_image" src="http://pelumserdang.mbs.web.id/suport/image.php?a=45e9f&amp;id=1&amp;type=overlay" width="32" height="112" style="border:0px;" alt="Pelum Serdang Live Chat Software"></a></div><!-- http://pelumserdang.mbs.web.id -->
</a>
</li>
