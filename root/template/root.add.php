<?php include "navigation_sr.php" ?>		
<link rel="stylesheet" href="themes/areta/table/css/rwd-table.min.css"/>
<script type="text/javascript" src="themes/areta/table/js/rwd-table.js"></script>
<div class="container">
<div id="target-1" class="widget">
<div class="widget-header"> 
<i class="icon-bookmark"></i><h3><?php echo $pageTitle; ?></h3></div>
<div class="widget-content">
<div class="shortcuts"> 
<? if ($errorCode) { ?>
    <tr>
        <td>&nbsp;</td>
            <td style="padding-bottom: 5px" class="errors"><?php echo $errorCode ?></td>
    </tr>
<? } ?>	

    <form id="form1" method="post" action="index.php?form=X.02">
        <div class="form-region">
            <div class="table-responsive" data-pattern="">
                 <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">

    <tr>
        <td><strong>Username&nbsp;</strong></td>
        <td style="padding: 5px"><input type="text" id="username" name="username" value="<?php echo $username; ?>" style="width: 250px"/></td>
    </tr>
                  
    <tr>
        <td><strong>Nama&nbsp;</strong></td>
        <td style="padding: 5px"><input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" style="width: 250px"/></td>
    </tr>
                  
    <tr>
        <td><strong>Password&nbsp;</strong></td>
        <td style="padding: 5px"><input type="text" id="password" name="password" value="<?php echo $password; ?>" style="width: 250px"/></td>
    </tr>
                  
    <tr>
        <td><strong>Is Admin&nbsp;</strong></td>
        <td style="padding: 5px;" align="left"><input type="checkbox" id="isAdmin" name="isAdmin" value="1" <?php echo ($isAdmin ? "checked" : "");?>/></td>
    </tr>
                 
    </table>
        <input type="hidden" name="next" value="true"/>
        </div>
                
    <td style="padding: 5px 5px 5px 5px"><div align="left">
        <input class="btn btn-invert" type="button" name="batal" id="batal" value="&laquo; BATAL" onclick="window.location = 'index.php?form=X.04'"/>
        <input class="btn btn-invert" type="submit" name="next" id="next" value="SIMPAN &raquo;"/>
        </div></td>
    </form>
          