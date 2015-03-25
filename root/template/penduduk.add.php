<?php include "navigation_sr.php" ?>

<script type="text/javascript" src="javascript/prototype.js"></script>
<script type="text/javascript" src="javascript/penduduk.add.js"></script>
<script type="text/javascript" src="javascript/lib/jquery.min.js"></script>
<script type="text/javascript" src="javascript/lib/zebra_datepicker.js"></script>
<link rel="stylesheet" href="javascript/lib/css/default.css" />

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
		



<form id="form1" class="form-horizontal" method="post" action="index.php?form=B.02">
  <div class="form-region">
    <table border="0" cellspacing="0" width="100%">
         	   	
                         
        <div class="control-group">																

        <pre>
                USERNAME
                <input type="text" class="span6" id="username" name="username" value="<?php echo $username; ?>"/>
        <hr style="color:yellow"/>
                PASSWORD
                <input type="text" class="span6" id="password" name="password" value="<?php echo $password; ?>"/>
        <hr style="color:yellow"/>    
                NO.KTP
                <input type="text" class="span6" id="noKTP" name="noKTP" value="<?php echo htmlentities($noKTP) ?>"/>
        <hr style="color:yellow"/>       
                NAMA WARGA
                <input type="text" class="span6" id="nama" name="nama" value="<?php echo htmlentities($nama) ?>"/>
        <hr style="color:yellow"/>
                TEMPAT LAHIR
                <input type="text" class="span6" id="tempatLahir" name="tempatLahir" value="<?php echo htmlentities($tempatLahir) ?>"/>
        <hr style="color:yellow"/>      
                TANGGAL LAHIR
                <input type="text" class="span6" id="tglLahir" name="tglLahir" value="<?php echo htmlentities($tglLahir) ?>"/> 
        <hr style="color:yellow"/>
                ALAMAT
                <input type="text" class="span6" id="alamat" name="alamat" value="<?php echo htmlentities($alamat) ?>"/>
        <hr style="color:yellow"/>        
                RT
                <input type="text" class="span6" id="rt" name="rt"  value="<?php echo htmlentities($rt) ?>"/>
        <hr style="color:yellow"/>        
                RW
                <input type="text" class="span6" id="rw" name="rw"  value="<?php echo htmlentities($rw) ?>"/>
        <hr style="color:yellow"/>		
                KELURAHAN
                <input type="text" class="span6" id="kelurahan" name="kelurahan"  value="<?php echo htmlentities($kelurahan) ?>"/>
        <hr style="color:yellow"/>       
                KECAMATAN
                <input type="text" class="span6" id="kecamatan" name="kecamatan"  value="<?php echo htmlentities($kelurahan) ?>"/>
        <hr style="color:yellow"/>    
                <select class="span6" id="kelamin" name="kelamin">
                <option id="kelamin" selected="kelamin">PILIH JENIS KELAMIN</option>
                <?php echo printOptions($M_GENDER, $kelamin); ?>
            </select>
        <hr style="color:yellow"/>        
                <select class="span6" id="kAgama" name="kAgama">
                <option id="kAgama" selected="kAgama">PILIH AGAMA</option>
                <?php echo printOptions($M_AGAMA, $kAgama); ?>
            </select>
        <hr style="color:yellow"/>        
                <select class="span6" id="kKerja" name="kKerja">
                <option id="kKerja" selected="kKerja">PILIH PEKERJAAN</option>
                <?php echo printOptions($M_KERJA, $kKerja); ?>
            </select>
            
                MANUAL PEKERJAAN
                <input type="text" class="span6" id="pekerjaan" name="pekerjaan"  value="<?php echo htmlentities($pekerjaan) ?>"/>      
        <hr style="color:yellow"/>
                <select class="span6" id="kWarga" name="kWarga">
                <option id="kelamin" selected="kelamin">PILIH WARGA NEGARA</option>
                <?php echo printOptions($M_WARGA, $kWarga); ?>
            </select>
        <hr style="color:yellow"/>       
                <select class="span6" id="kKawin" name="kKawin">
                <option id="kKawin" selected="kKawin">PILIH STATUS</option>
                <?php echo printOptions($M_KAWIN, $kKawin); ?>
            </select>
          <hr style="color:yellow"/>      
                <select class="span6" id="kPendidikan" name="kPendidikan">
                <option id="kPendidikan" selected="kPendidikan">PILIH PENDIDIKAN</option>
                <?php echo printOptions($M_PENDIDIDKAN, $kPendidikan); ?>
            </select>
        </pre><br /><hr style="color:yellow"/>    

    <td style="padding: 5px 5px 5px 5px"><div align="right">
    <input class="btn btn-invert" type="button" name="batal" id="batal" value="&laquo; BATAL" onclick="window.location = 'index.php?form=X.04'"/>
    <input class="btn btn-invert" type="submit" name="next" id="next" value="SIMPAN &raquo;"/>
</div></td>
</div></div></div></div></div></div>                
<input type="hidden" name="next" value="true"/>
</form>
</table>
<script>
    $(document).ready(function(){
        $('#tglLahir').Zebra_DatePicker({
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#password').Zebra_DatePicker({
        });
    });
</script>  	
     



       
        
        