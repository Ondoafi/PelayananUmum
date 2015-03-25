<?php include "navigation_sr.php" ?>		
<link rel="stylesheet" href="themes/areta/table/css/rwd-table.min.css"/>
<script type="text/javascript" src="themes/areta/table/js/rwd-table.js"></script>
<div class="container">
<div id="target-1" class="widget">
<div class="widget-header"> 
<i class="icon-bookmark"></i><h3><?php echo "Detail ".$confSurat["name"]; ?></h3></div>
<div class="widget-content">
<div class="shortcuts"> 
<div class="table-responsive" data-pattern="">
<table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
<script type="text/javascript" src="javascript/prototype.js"></script>
<script type="text/javascript" src="javascript/penduduk.edit.js"></script>
<form id="form1" method="post" action="index.php?form=B.04">
<div class="form-region">
                <tbody>
                  <? if ($errorCode) { ?>
                  <tr>
                    <td>&nbsp;</td>
                    <td style="padding-bottom: 5px" class="errors"><?php echo $errorCode ?></td>
                  </tr>
                  <? } ?>
        
                
        <tr>
            <td><strong>No. KTP</strong></td>
            <td style="padding: 2px"><input type="text" id="noKTP" name="noKTP" value="<?php echo htmlentities($noKTP) ?>" style="width: 250px"/></td>
        </tr>
        
        <tr>
            <td><strong>Nama</strong></td>
            <td style="padding: 2px"><input type="text" id="nama" name="nama" value="<?php echo htmlentities($nama) ?>" style="width: 250px"/></td>
        </tr>
        
        <tr>
            <td><strong>Tempat Lahir </strong></td>
            <td style="padding: 2px"><input type="text" id="tempatLahir" name="tempatLahir" value="<?php echo htmlentities($tempatLahir) ?>" style="width: 250px"/></td>
        </tr>
            
        <tr>
            <td><strong>Tanggal Lahir</strong></td>
            <td style="padding: 2px"><input type="text" id="tglLahir" name="tglLahir" value="<?php echo htmlentities($tglLahir) ?>" style="width: 250px"/></td> 
        </tr>
                  
        <tr>
        <td><strong>Jenis Kelamin </strong></td>
            <td style="padding: 2px"><select style="width: 254px" id="kelamin" name="kelamin">
            <?php echo printOptions($M_GENDER, $kelamin); ?>
        </select></td>
        </tr>
        
        <tr>
            <td><strong>Agama</strong></td>
            <td style="padding: 2px"><select style="width: 254px" id="kAgama" name="kAgama">
            <?php echo printOptions($M_AGAMA, $kAgama); ?>
            </select></td>
        </tr>
        
        <tr>
            <td><strong>Pekerjaan</strong></td>
            <td style="padding: 2px"><select style="width: 254px" id="kKerja" name="kKerja">
            <?php echo printOptions($M_KERJA, $kKerja); ?>
            </select></td>
        </tr>
        </tbody>
            <tbody id="dPekerjaan" style="display:none;">
        
        <tr>
            <td><strong>Pekerjaan</strong></td>
            <td style="padding: 2px"><input type="text" id="pekerjaan" name="pekerjaan" value="<?php echo htmlentities($pekerjaan) ?>" style="width: 250px"/></td>
            </tr>
        </tbody>
        <tbody>
        
        <tr>           
           <td><strong>Alamat</strong></td>
           <td style="padding: 2px"><input type="text" id="alamat" name="alamat" value="<?php echo htmlentities($alamat) ?>" style="width: 250px"/></td>
        </tr>
                  
        <tr>
            <td><strong>RT</strong></td>
            <td style="padding: 2px"><input type="text" id="rt" name="rt" value="<?php echo htmlentities($rt) ?>" style="width: 250px"/></td>
        </tr>
        
        <tr>
            <td><strong>RW</strong></td>
            <td style="padding: 2px"><input type="text" id="rw" name="rw" value="<?php echo htmlentities($rw) ?>" style="width: 250px"/></td>
        </tr>
                 
        <tr>
            <td><strong>Kelurahan</strong></td>
            <td style="padding: 2px"><input type="text" id="kelurahan" name="kelurahan" value="<?php echo htmlentities($kelurahan) ?>" style="width: 250px"/></td>
        </tr>
                 
        <tr>
            <td><strong>Kecamatan</strong></td>
            <td style="padding: 2px"><input type="text" id="kecamatan" name="kecamatan" value="<?php echo htmlentities($kecamatan) ?>" style="width: 250px"/></td>
        </tr>
        
        
        
        <tr>
            <td><strong>Warga Negara </strong></td>
            <td style="padding: 2px"><select style="width: 254px" id="kWarga" name="kWarga">
        <?php echo printOptions($M_WARGA, $kWarga); ?>
        </select></td>
        </tr>
        
        <tr>
            <td><strong>Status Perkawinan </strong></td>
            <td style="padding: 2px"><select style="width: 254px" id="kKawin" name="kKawin">
            <?php echo printOptions($M_KAWIN, $kKawin); ?>
            </select></td>
        </tr>
        
        <tr>
            <td><strong>Pendidikan</strong></td>
            <td style="padding: 2px"><select style="width: 254px" id="kPendidikan" name="kPendidikan">
            <?php echo printOptions($M_PENDIDIDKAN, $kPendidikan); ?>
            </select></td>
        </tr>
            </tbody>
            <tbody id="dPendidikan" style="display:none;">
        <tr>
            <td><strong>Pendidikan</strong></td>
            <td style="padding: 2px"><input type="text" id="pendidikan" name="pendidikan" value="<?php echo htmlentities($pendidikan) ?>" style="width: 250px"/></td>
        </tr> 
        </tbody>
                
        </table>
        
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <input type="hidden" name="next" value="true"/>
            </div>
          </form>
          
          <tr>
            <td  style="padding: 10px 2px 2px 2px"><input class="formbutton" type="button" name="back" id="back" value="BACK &raquo;" onclick="window.location = 'index.php?form=B.03&id=<?php echo $penduduk->id; ?>'"/></td>
            <input class="formbutton" type="button" name="next" id="next" value="SIMPAN &raquo;"/>
          </tr>

