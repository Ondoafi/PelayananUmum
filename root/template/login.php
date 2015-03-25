<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ADMINISTRATOR-SERDANG</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
</head>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
	       <a class="brand" href="">HALAMAN ADMINISTRATOR</a>        
              <div class="nav-collapse">
            <ul class="nav pull-right">
        </ul>
    </div><!--/.nav-collapse -->	
</div> <!-- /container -->
</div> <!-- /navbar-inner -->
</div> <!-- /navbar -->
    <div class="account-container">
        <div class="content clearfix">
            <div class="form-region">

<form name="login" action="index.php" method="post" onSubmit="return validasi(this)">

    <?php if ($errorCode) { ?>
    <center><?php echo $errorCode ?></center>
    <?php } ?>

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
            </div>
                </div>
                    </div>
                        </div>
                    </form>
        <!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="themes/js/jquery-1.7.2.min.js"></script> 
<script src="themes/js/excanvas.min.js"></script> 
<script src="themes/js/chart.min.js" type="text/javascript"></script> 
<script src="themes/js/bootstrap.js"></script>
<script src="themes/js/base.js"></script> 
