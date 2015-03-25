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
<div class="form-region">
            <? if ($errorCode) { ?>
              <tr>
                <td>&nbsp;</td>
                <td style="padding-bottom: 5px" class="errors"><?php echo $errorCode ?></td>
              </tr>
              <? } ?>
              
              <tr>
                <td><strong>No. KTP</strong></td>
                <td style="padding: 2px"><?php echo htmlentities($penduduk->noKTP); ?></td>
              </tr>
              
              <tr>
                <td><strong>Nama</strong></td>
                <td style="padding: 2px"><?php echo htmlentities($penduduk->nama); ?></td>
              </tr>
              
              <tr>
                <td><strong>Tempat Lahir </strong></td>
                <td style="padding: 2px"><?php echo htmlentities($penduduk->tempatLahir); ?></td>
              </tr>
              
              <tr>
                <td><strong>Tanggal Lahir </strong></td>
                <td style="padding: 2px"><?php echo htmlentities($penduduk->tglLahir); ?></td>
              </tr>
              
              <tr>
                <td><strong>Umur</strong></td>
                <td style="padding: 2px"><?php echo htmlentities($penduduk->umur); ?></td>
              </tr>
              
              <tr>
                <td><strong>Jenis Kelamin </strong></td>
                <td style="padding: 2px"><?php echo htmlentities($M_GENDER[$penduduk->kelamin]); ?></td>
              </tr>
              
              <tr>
                <td><strong>Agama</strong></td>
                <td style="padding: 2px"><?php echo htmlentities($M_AGAMA[$penduduk->kAgama]); ?></td>
              </tr>
              
                        
              <tr>
                <td><strong>Pekerjaan</strong></td>
                <td style="padding: 2px"><?php echo ($penduduk->kKerja == 0 ? htmlentities($penduduk->pekerjaan): htmlentities($M_KERJA[$penduduk->kKerja])); ?></td>
              </tr>
              
              <tr>
                <td><strong>Alamat</strong></td>
                <td style="padding: 2px"><?php echo htmlentities($penduduk->alamat); ?></td>
              </tr>
              
              <tr>
                <td><strong>RT</strong></td>
                <td style="padding: 2px"><?php echo htmlentities($penduduk->rt); ?></td>
              </tr>
              
              <tr>
                <td><strong>RW</strong></td>
                <td style="padding: 2px"><?php echo htmlentities($penduduk->rw); ?></td>
              </tr>
              
              <tr>
                <td><strong>Kecamatan</strong></td>
                <td style="padding: 2px"><?php echo htmlentities($penduduk->kecamatan); ?></td>
              </tr>
              
              <tr>
                <td><strong>Kelurahan</strong></td>
                <td style="padding: 2px"><?php echo htmlentities($penduduk->kelurahan); ?></td>
              </tr>
              
                   
              <tr>
                <td><strong>Status Perkawinan </strong></td>
                <td style="padding: 2px"><?php echo htmlentities($M_KAWIN[$penduduk->kKawin]); ?></td>
              </tr>
              
              <tr>
                <td><strong>Pendidikan</strong></td>
                <td style="padding: 2px"><?php echo ($penduduk->kPendidikan == "0" ? htmlentities($penduduk->pendidikan): htmlentities($M_PENDIDIDKAN[$penduduk->kPendidikan])); ?></td>
              </tr>
              
              
            </table>
          </div>
          <br />
          <tr>
                <td  style="padding: 10px 2px 2px 2px"><input class="formbutton" type="button" name="back" id="back" value="BACK &raquo;" onclick="window.location = 'index.php?form=B.01&id=<?php echo $penduduk->id; ?>'"/></td>
                <td  style="padding: 10px 2px 2px 2px"><input class="formbutton" type="button" name="edit" id="edit" value="EDIT &raquo;" onclick="window.location = 'index.php?form=B.04&id=<?php echo $penduduk->id; ?>'"/></td>
                <input class="formbutton" type="button" name="hapus" id="hapus" value="HAPUS &raquo;"/>
                <td style="padding: 10px 220px 2px 2px"><div align="right">
                 
                  </div></td>
              </tr>

          <script type="text/javascript">
          var hapus = $('hapus');
					hapus.observe('click', function(){
							if(confirm('Anda yakin akan menghapus penduduk?'))
									window.location = 'index.php?form=B.03&id=<?php echo $penduduk->id; ?>&delete=true';
					});
          </script>
          