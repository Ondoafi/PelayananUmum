<fieldset>
<? if ($errorCode) { ?>
        <tr>
            <td>&nbsp;</td>
            <td style="padding-bottom: 5px" class="errors"><?php echo $errorCode ?></td>
      </tr>
<? } ?> 
<table>
<script type="text/javascript" src="javascript/prototype.js"></script>
<script type="text/javascript" src="javascript/scriptaculous/scriptaculous.js"></script>
<script type="text/javascript" src="javascript/surat_kjp.add.js"></script>
<form id="form1" class="form-horizontal" method="post" action="index.php?form=E.02">

<div class="control-group">	
    <div class="accordion" id="accordion2" id="accordion3" id="accordion4" id="accordion5" >
    <div class="accordion-group">
    <div class="accordion-heading">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" data-parent="#accordion3" data-parent="#accordion4" data-parent="#accordion5"href="#collapseOne">
        LENGKAPI BIODATA & PERMOHONAN </a>
    </div>
    
    <div id="collapseOne" class="accordion-body collapse in">
    <div class="accordion-inner">
    <br />
        <ins><strong>NAMA WARGA / N0.KTP SKTLD / NO SURAT </strong></ins>
    <br />
    <br />
            <div class="control-group">	
            <label class="control-label" for="nama"></label>										
                    <div class="controls">
                        <input type="text" class="span4" id="nama" name="nama"  value=" <?php echo $_SESSION["penduduk"]["nama"]; ?> "readonly=""/>
                       -&nbsp;<input type="text" class="span3" id="noKTP" name="noKTP"  value="<?php echo $_SESSION["penduduk"]["no_ktp"]; ?>"readonly=""/>
                       -&nbsp;<input type="text" class="span4" id="noSurat" name="noSurat"value="<?php echo $LastID=FormatnoSurat(getnoSurat());?> / -1.755.9 "readonly=""/>
                    <div id="autocomplete_nama" class="autocomplete"></div></td>
                </div><!-- /controls -->
            </div> <!-- /control-group -->
            <br /><hr style="color:yellow"/>
        
        
            <ins><strong>TEMPAT LAHIR  / TANGGAL / BULAN / TAHUN </strong></ins>        
            <br />
            <br />
            <div class="control-group">											
                <label class="control-label" for="tempatLahir"></label>
                    <div class="controls">
            <input class="span4" type="text" id="rtempatLahir" name="rtempatLahir"  value="<?php echo $_SESSION["penduduk"]['tempat_lahir']; ?> <?php echo $_SESSION["penduduk"]['tgl_lahir']; ?>"readonly=""/> / Wajib Sesuaikan Tempat, Tahun-Bulan-Tanggal Lahir dalam Format Indonesia*  
            <br />
            <br />

            <input class="span4" type="text" id="tempatLahir" name="tempatLahir"  value="<?php echo $_SESSION["penduduk"]['tempat_lahir']; ?>"/>
            -
            
            <select class="span3" id="ttglLahir"  name="ttglLahir">
                <option id="ttglLahir" selected="ttglLahir" value="<?php echo $content['ttglLahir']; ?>">Tahun</option>
                <?php for($i=2011; $i>=1905; $i-=1){
                echo"<option> $i </option>";}?>
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
            <select class="span2" id="tglLahir" name="tglLahir">
                <option id="tglLahir" selected="tglLahir" value="<?php echo $content['tglLahir']; ?>">Tanggal</option>
                <?php for($a=1; $a<=31; $a+=1){echo"<option> $a </option>";}?>
            </select>
            </div><!-- /controls -->
            </div> <!-- /control-group -->
            <br /><hr style="color:yellow"/>
       
        <ins><strong>ALAMAT / RT / RW / KELURAHAN / KECAMATAN</strong></ins>
        <br />
        <br />
        <div class="control-group">											
            <label class="control-label" for="alamat"></label>
                <div class="controls">
                <input type="text" class="span4" id="alamat" name="alamat" value="<?php echo $_SESSION["penduduk"]['alamat']; ?>"/>
                &nbsp;-&nbsp;<input type="text" class="span1" id="rt" name="rt"  value="<?php echo $_SESSION["penduduk"]['rt']; ?>"/>
                &nbsp;-&nbsp;<input type="text" class="span1" id="rw" name="rw"  value="<?php echo $_SESSION["penduduk"]['rw']; ?>"/>
                &nbsp;-&nbsp;<input type="text" class="span2" id="kelurahan" name="kelurahan"  value="<?php echo $_SESSION["penduduk"]['kelurahan'];?>"/>
                &nbsp;-&nbsp;<input type="text" class="span3" id="kecamatan" name="kecamatan"  value="<?php echo $_SESSION["penduduk"]['kecamatan']; ?>"/>
            <br />
            <samp>Keterangan :</samp>
    <pre>
    Jika input Form Alamat Masih Kosong Silahkan Isikan Alamat Anda, Untuk Format RT yang benar, 
    adalah diawali dengan 00 bukan 0, sedangkan, Untuk Format RW diawali denga 0 bukan 00, 
    Silahkan ubah data anda sehingga sesuai dengan Format yang benar.
    Contoh : 
    Alamat    : Jl.Delta Serdang, 
    RT        : 004 atau 010  
    RW        : 05 atau 011
    Kelurahan : Serdang 
    Kecamatan : Kemayoran   
    </pre>
            
            </div> <!-- /controls -->
        </div> <!-- /control-group -->
        <br /><hr style="color:yellow"/>  
        
        <ins><strong>JENIS KELAMIN / AGAMA / PEKERJAAN</strong></ins>
        <br />
        <br />
        <div class="control-group">											
            <label class="control-label" for="kelamin"></label>
                <div class="controls">
                
                <input type="text" class="span4" id="kelamin" name="kelamin"  value="<?php echo $_SESSION ["penduduk"]['kelamin'];?>"/>
                -&nbsp;<input type="text" class="span3" id="agama" name="agama"  value="<?php echo $_SESSION["penduduk"]['agama'];?>"/>
                -&nbsp;<input type="text" class="span4" id="pekerjaan" name="pekerjaan"  value="<?php echo $_SESSION["penduduk"]['pekerjaan'];?>"/>
                <br />
                <br />
                
                <select class="span4" id="skelamin" name="skelamin">
                <option id="skelamin" selected="skelamin">PILIH JENIS KELAMIN</option>
                <?php echo printOptions($M_GENDER, $skelamin); ?>
                </select>
                
                -&nbsp;<select class="span3" id="kAgama" name="kAgama">
                <option id="kAgama" selected="kAgama">PILIH AGAMA</option>
                <?php echo printOptions($M_AGAMA, $content['kAgama']); ?>
                </select>
                
                -&nbsp;<select class="span4" id="kKerja" name="kKerja">
                <option id="kKerja" selected="kKerja">PILIH PEKERJAAN</option>
                <?php echo printOptions($M_KERJA, $content['kKerja']); ?>
                </select>

               </div> <!-- /controls --><!-- /control-group --> 
        </div>
        <br /><hr style="color:yellow"/>
    	
    <ins><strong>PERMOHONAN YANG DIAJUKAN</strong></ins>
    <br />
    <br />
    
    
    <div class="control-group">											
            <label class="control-label" for="pemohon">*PERMOHONAN</label>
                <div class="controls">
        <input type="text" class="span6" id="pemohon" name="pemohon"  value="<?php echo $content['pemohon']; ?>"/>
    <br />
    <samp>Keterangan : </samp>
    <pre>
    Format Yang di ketikan atau di inputkan :  
    Anaknya yang bernama
    </pre>
                   
    </div> <!-- /controls --></div> <!-- /control-group -->
        <br /><hr style="color:yellow"/>
        
    <div class="control-group">											
    <label class="control-label" for="anak">*NAMA ANAK</label>
    <div class="controls">
        <input type="text" class="span6" id="anak" name="anak" value="<?php echo $content['anak']; ?>"/>
    <br />
    <samp>Keterangan : </samp>
    <br />
    <pre>Nama Anak Harus Huruf Besar (Kapital)</pre>
    </div> <!-- /controls --></div> <!-- /control-group -->
        <br /><hr style="color:yellow"/>
        
    <div class="control-group">											
    <label class="control-label" for="sekolah">*SEKOLAH</label>
    <div class="controls">
        <input type="text" class="span6" id="sekolah" name="sekolah" value="<?php echo $content['sekolah']; ?>"/>
    <br />
    Keterangan : 
    <br />
    <pre>
    Format nama tempat sekolah anak anda menempuh pendidikan contoh : 
    SLTP NEGERI 2 JAKARTA 
    SMK NEGERI 2 JAKARTA 
    SMU NEGERI 2 JAKARTA
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
		<input type="text" class="span6" id="waktu" name="waktu" value="<?php echo $content['waktu']; ?> "readonly=""/>
		</div> <!-- /controls --></div> <!-- /control-group -->
        
        <div class="control-group">											
          <label class="control-label" for="alias">PENANGGUNG JAWAB</label>
		  <div class="controls">
		<input type="text" class="span6" id="alias" name="alias" value="<?php echo $content["alias"]; ?>"readonly=""/>
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

