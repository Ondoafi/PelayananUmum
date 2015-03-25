<fieldset>
	<? if ($errorCode) { ?>
        <tr>
            <td>&nbsp;</td>
            <td style="padding-bottom: 5px" class="errors"><?php echo $errorCode ?></td>
      </tr>
    <? } ?> 
    
<script type="text/javascript" src="javascript/prototype.js"></script>
<script type="text/javascript" src="javascript/scriptaculous/scriptaculous.js"></script>
<script type="text/javascript" src="javascript/surat_skck.add.js"></script>

<form id="form1" class="form-horizontal " method="post" action="index.php?form=D.02">
    <div class="form-region">
    <table border="0" cellspacing="0" width="100%">
         
            <div class="control-group">	
            <div class="accordion" id="accordion2" id="accordion3" id="accordion4">
                    <div class="accordion-group">
                <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" data-parent="#accordion3" data-parent="#accordion4"href="#collapseOne">
        LENGKAPI BIODATA DAN PERMOHONAN</a>
        </div>
            <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                
            <div class="control-group">	
            <ins><strong>NAMA WARGA / NO.KTP/SKTLD / NO.SURAT</strong></ins>
            <br />
            <br />										
                <label class="control-label" for="nama"></label>
                    <div class="controls">
                    <input type="text" class="span4" id="nama" name="nama"  value=" <?php echo $content['nama']; ?> "/>
                    <input type="text" class="span3" id="noKTP" name="noKTP"  value="<?php echo $content['noKTP']; ?>"/>
                    <input type="text" class="span2" id="noSurat" name="noSurat"value="<?php echo $LastID=FormatnoSurat(getnoSurat());?> / -1.755.9 "/>
                    <div id="autocomplete_nama" class="autocomplete"></div></td>
                </div><!-- /controls -->
            </div> <!-- /control-group -->
            <br /><hr style="color:yellow"/>
        
            <div class="control-group">
            <ins><strong>TEMPAT LAHIR & TANGGAL LAHIR</strong></ins>
            <br />
            <br />										
											
                <label class="control-label" for="tempatLahir"></label>
                    <div class="controls">
                        <input type="text" class="span2" id="tempatLahir" name="tempatLahir"  value="<?php echo $content['tempatLahir']; ?>"/>
                        <input type="text" class="span2" id="tglLahir" name="tglLahir"  value="<?php echo $content['tglLahir']; ?>"/> /Sesuaikan, Tanggal, Bulan & Tahun Lahir Dalam Format Indonesia 
                    <br />
                    <br />
            <select class="span2" id="tglLahir" name="tglLahir">
                <option id="tglLahir" selected="tglLahir" value="<?php echo $content['tglLahir']; ?>">Tanggal</option>
                <?php for($a=1; $a<=31; $a+=1){echo"<option> $a </option>";}?>
            </select>
          
            -
            <select class="span2" id="btglLahir" name="btglLahir">
                <option id="btglLahir" selected="btglLahir" value="<?php echo $content['btglLahir']; ?>">Bulan</option>
                <?php $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                $jlh_bln=count($bulan);
                for($c=0; $c<$jlh_bln; 
                $c+=1)
                {echo"<option> $bulan[$c] </option>";}?>
            </select>
            -
            <select class="span2" id="ttglLahir"  name="ttglLahir">
                <option id="ttglLahir" selected="ttglLahir" value="<?php echo $content['ttglLahir']; ?>">Tahun</option>
                <?php for($i=2011; $i>=1905; $i-=1){
                echo"<option> $i </option>";}?>
            </select>
            </div><!-- /controls -->
            </div> <!-- /control-group -->
            <br /><hr style="color:yellow"/>
                    
        
    
        <div class="control-group">
        <ins><strong>ALAMAT/RT/RW/KELURAHAN/KECAMATAN</strong></ins>
            <br />
            <br />												
            <label class="control-label" for="alamat"></label>
                <div class="controls">
                <input type="text" class="span3" id="alamat" name="alamat" value="<?php echo $content['alamat']; ?>"/>
                <input type="text" class="span1" id="rt" name="rt"value="<?php echo htmlentities($rt) ?>"/>
                <input type="text" class="span1" id="rw" name="rw"value="<?php echo htmlentities($rw) ?>"/>
                <input type="text" class="span2" id="kelurahan" name="kelurahan"  value="<?php echo htmlentities($kelurahan) ?>"/>
                <input type="text" class="span2" id="kecamatan" name="kecamatan"  value="<?php echo htmlentities($kecamatan) ?>"/>
            </div> <!-- /controls -->
        </div> <!-- /control-group -->
        <br /><hr style="color:yellow"/>
        
        
        <ins><strong>JENIS KELAMIN / AGAMA / PEKERJAAN</strong></ins>
        <br />
        <br />
        <div class="control-group">											
            <label class="control-label" for="kelamin"></label>
                <div class="controls">
                
                <input type="text" class="span3" id="kelamin" name="kelamin"  value="<?php echo $content['kelamin']; ?>"/>
                -&nbsp;<input type="text" class="span3" id="agama" name="agama"  value="<?php echo $content['agama']; ?>"/>
                -&nbsp;<input type="text" class="span3" id="pekerjaan" name="pekerjaan"  value="<?php echo $content['pekerjaan']; ?>"/>
                <br />
                <br />
                </div> <!-- /controls --></div> <!-- /control-group --> 
        <br /><hr style="color:yellow"/>      	
        
     <ins><strong>PERMOHONAN YANG DIAJUKAN</strong></ins>
    <br />
    <br />
     <div class="control-group">											
                <label class="control-label" for="maksud">PERMOHONAN</label>
                    <div class="controls">
                    <input type="text" class="span6" id="maksud" name="maksud" value="<?php echo htmlentities($maksud) ?>"/>
     <br />
     <samp>Keterangan : </samp>
     <br />
     <pre>
        Untuk Melamar Kerja
        Untuk Mengurus Surat Kehilangan ( Sesuaikan Dengan Kebutuhan Anda)  
     </pre>                
     </div> <!-- /controls -->	</div> <!-- /control-group -->
     <br /><hr style="color:yellow"/>
     </div>
     </div>
        </div>
            
            <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapsethree">
                        BUKTI PEMBUATAN SURAT
                    </a>
                </div>
            <div id="collapsethree" class="accordion-body collapse">
        <div class="accordion-inner">
        
        <div class="control-group">											
            <label class="control-label" for="noSurat">NOMOR SURAT</label>
            <div class="controls">
        <input type="text" class="span6" id="noSurat" name="noSurat"value="<?php echo $LastID=FormatnoSurat(getnoSurat());?> / -1.755.9 "readonly=""/>
        </div> <!-- /controls --></div> <!-- /control-group -->
        
        <div class="control-group">											
          <label class="control-label" for="tglSurat">TANGGAL PEMBUATAN</label>
		  <div class="controls">
		<input type="text" class="span6" id="tglSurat" name="tglSurat" value="<?php echo $content['tglSurat']; ?>"readonly=""/>
		</div> <!-- /controls --></div> <!-- /control-group -->
        
        <div class="control-group">											
		  <label class="control-label" for="waktu">HARI / WAKTU AKSES</label>
		  <div class="controls">
		<input type="text" class="span6" id="waktu" name="waktu" value="<?php echo $content['waktu']; ?>"readonly=""/>
		</div> <!-- /controls --></div> <!-- /control-group -->
        
        <div class="control-group">											
          <label class="control-label" for="alias">Penanggung Jawab</label>
		  <div class="controls">
		<input type="text" class="span6" id="alias" name="alias" value="<?php echo $content['alias']; ?>"readonly=""/>
		</div> <!-- /controls --></div> <!-- /control-group -->
        
        <br /><hr style="color:yellow"/>    
    </div>
<td style="padding: 5px 5px 5px 5px"><div align="right">
    <input class="btn btn-invert" type="button" name="batal" id="batal" value="&laquo; BATAL" onclick="window.location = 'index.php?form=A.02'"/>
    <input class="btn btn-invert" type="button" name="next" id="next" value="SIMPAN &raquo;"/>
</div></td>
<input type="hidden" name="next" value="true"/>
<input type="hidden" name="kSurat" value="<?php echo $kSurat;?>"/>
</form>
</table>
</fieldset>
