<fieldset>
<script type="text/javascript" src="javascript/prototype.js"></script>
<script type="text/javascript" src="javascript/scriptaculous/scriptaculous.js"></script>
<script type="text/javascript" src="javascript/surat_kjp.edit.js"></script>
<form id="form2" class="form-horizontal" method="post" action="index.php?form=E.02&id=<?php echo $suratkjp->id; ?>">
  
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
                    <input type="text" class="span3" id="nama" name="nama"  value=" <?php echo $content['nama']; ?> "/>
                    <input type="text" class="span3" id="noKTP" name="noKTP"  value="<?php echo $content['noKTP']; ?>"/>
                    <input type="text" class="span3" id="noSurat" name="noSurat"  value="<?php echo $content['noSurat'] ; ?>"/>

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
                        <input type="text" class="span2" id="tglLahir" name="tglLahir"  value="<?php echo $content['tglLahir']; ?>&nbsp;<?php echo $content['btglLahir']; ?>&nbsp;<?php echo $content['ttglLahir']; ?> "/> /Sesuaikan, Tanggal, Bulan & Tahun Lahir Dalam Format Indonesia 
                        
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
                <input type="text" class="span1" id="rt" name="rt"value="<?php echo $content['rt']; ?>"/>
                <input type="text" class="span1" id="rw" name="rw"value="<?php echo $content['rw'];; ?>"/>
                <input type="text" class="span2" id="kelurahan" name="kelurahan"  value="<?php echo $content['kelurahan'];; ?>"/>
                <input type="text" class="span2" id="kecamatan" name="kecamatan"  value="<?php echo $content['kecamatan'];; ?>"/>
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
    <label class="control-label" for="pemohon">PERMOHONAN</label>
    <div class="controls">
        <input type="text" class="span6" id="pemohon" name="pemohon"  value="<?php echo $content['pemohon']; ?>"/>
    <br />
    <samp>Keterangan :</samp>
    <pre>
    Contoh Format Yang Diketikan : 
    Anaknya Yang Bernama 
    </pre>
    </div> <!-- /controls --></div> <!-- /control-group -->
        <br /><hr style="color:yellow"/>
        
    <div class="control-group">											
    <label class="control-label" for="anak">NAMA ANAK</label>
    <div class="controls">
        <input type="text" class="span6" id="anak" name="anak" value="<?php echo $content['anak']; ?>"/>
    <br />
    <samp>Keterangan : </samp>
    <br />
    <pre>
    Format Nama Anak Huruh Kapital (Huruf Besar)
    </pre>
    </div> <!-- /controls --></div> <!-- /control-group -->
        <br /><hr style="color:yellow"/>
        
    <div class="control-group">											
    <label class="control-label" for="sekolah">SEKOLAH</label>
    <div class="controls">
        <input type="text" class="span6" id="sekolah" name="sekolah" value="<?php echo $content['sekolah']; ?>"/>
    <br />
    <samp>Keterangan : </samp> 
    <pre>
    Contoh Format Yang Diketikan :
    SLTP NEGERI 1 JAKARTA 
    SMK NEGERI 2 JAKARTA 
    SMU 22 JAKARTA ( SESUAIKAN DENGAN NAMA SEKOLAH ANAK ANDA)
    </pre>  
    </div> <!-- /controls --></div> <!-- /control-group -->
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
          <label class="control-label" for="tglSurat">TANGGAL PEMBUATAN</label>
		  <div class="controls">
		<input type="text" class="span6" id="tglSurat" name="tglSurat" value="<?php echo $content['tglSurat']; ?>"readonly=""/>
		</div> <!-- /controls --></div> <!-- /control-group -->
        
        <div class="control-group">											
		  <label class="control-label" for="waktu">HARI / WAKTU AKSES</label>
		  <div class="controls">
		<input type="text" class="span6" id="waktu" name="waktu" value="<?php echo $content['waktu']; ?> / EDIT"readonly=""/>
		</div> <!-- /controls --></div> <!-- /control-group -->
        
        <div class="control-group">											
		  <label class="control-label" for="alias">PENANGGUNG JAWAB</label>
		  <div class="controls">
		<input type="text" class="span6" id="alias" name="waktu" value="<?php echo $content['alias']; ?>"readonly=""/>
		</div> <!-- /controls --></div> <!-- /control-group -->
        
        <br /><hr style="color:yellow"/>    
    </div>
        
<td style="padding: 5px 5px 5px 5px"><div align="right">
    <input class="btn btn-invert" type="button" name="batal" id="batal" value="&laquo; BATAL" onclick="window.location = 'index.php?form=E.04'"/>
    <input class="btn btn-invert" type="submit" name="next" id="next" value="SIMPAN &raquo;"/>
</div></td>
<input type="hidden" name="next" value="true"/>
<input type="hidden" name="kSurat" value="<?php echo $kSurat;?>"/>
</form>
</table>
</fieldset>
