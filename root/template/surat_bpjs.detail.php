<link rel="stylesheet" href="themes/areta/table/css/rwd-table.min.css"/>
<script type="text/javascript" src="themes/areta/table/js/rwd-table.js"></script>
<script type="text/javascript" src="javascript/scriptaculous/scriptaculous.js"></script>
<script type="text/javascript" src="javascript/prototype.js"></script>
    <div class="container">
    <div id="target-1" class="widget">
    <div class="widget-header"> 
    <i class="icon-bookmark"></i><h3><?php echo $pageTitle ; ?></h3></div>
    <div class="widget-content">
    <div class="shortcuts"> 
    <div class="form-region">
        <p class='pull-left'>
	       
           <a href='index.php?form=C.03&print=true&id=<?php echo $id;?>'
                target='_blank'
                class="btn" ><i class='icon-print'></i>&nbsp;Format A </a>
           
           <a href='index.php?form=C.03&cetak=true&id=<?php echo $id;?>'
                target='_blank'
                class="btn" ><i class='icon-print'></i>&nbsp;Format B </a>
                
           <a href='index.php?form=C.03&cetak1=true&id=<?php echo $id;?>'
                target='_blank'
                class="btn" ><i class='icon-print'></i>&nbsp;Format C </a>
           
           <a href='index.php?form=C.03&cetak2=true&id=<?php echo $id;?>'
                target='_blank'
                class="btn" ><i class='icon-print'></i>&nbsp;Format D </a> 
          </p><br /><br />
        
        
<div class="form-horizontal" data-pattern="">
<table cellspacing="0" border="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
    
    <tr>
        <td width="30%"><strong>Nomor Surat</strong></td>
        <td width="100%" style="padding: 2px">&nbsp;<?php echo $content['noSurat'] ; ?></td>
    </tr>
    
    <tr>
        <td><strong>Nama</strong></td>
        <td style="padding: 2px">&nbsp;<?php echo $content['nama']; ?></td>
    </tr>
    
    <tr>
        <td><strong>No. KTP/SKTLD</strong></td>
        <td style="padding: 2px">&nbsp;<?php echo $content['noKTP']; ?></td>
    </tr>
    
    <tr>
        <td><strong>Tempat/Tanggal Lahir</strong></td>
        <td style="padding: 2px">&nbsp;<?php echo $content['tempatLahir']; ?> <?php echo $content['tglLahir']; ?>&nbsp; <?php echo $content['btglLahir']; ?>&nbsp; <?php echo $content['ttglLahir']; ?> </td>
    </tr>
    
    <tr>
        <td><strong>Jenis Kelamin </strong></td>
        <td style="padding: 2px">&nbsp;<?php echo $content['kelamin']; ?></td>
    </tr>
    
    <tr>
      <td><strong>Agama</strong></td>
      <td style="padding: 2px">&nbsp;<?php echo $M_AGAMA[$content['kAgama']]; ?><?php echo $content['agama']; ?></td>
    </tr>
    
    
    <tr>
        <td><strong>Alamat</strong></td>
        <td style="padding: 2px">&nbsp;<?php echo $content['alamat']; ?>&nbsp;RT.&nbsp;<?php echo $content['rt']; ?>&nbsp;RW.&nbsp;<?php echo $content['rw']; ?>
        Kel / Desa &nbsp;<?php echo $content['kelurahan']; ?>&nbsp; <?php echo $content['kecamatan']; ?></td>
    </tr>
    
    <tr>
        <td><strong>Pekerjaan</strong></td>
        <td style="padding: 2px">&nbsp;<?php echo $content['pekerjaan']; ?><?php echo $M_KERJA[$content['kKerja']]; ?></td>
    </tr>
    
    <tr>
        <td><strong>Maksud/Keperluan</strong></td>
        <td style="padding: 2px"> &nbsp;<p align="justify">Bahwa nama tersebut diatas berdasarkan pengantar RT/RW setempat adalah warga kami yang&nbsp;&nbsp; saat ini berdomisili di &nbsp; <?php echo $content['alamat']; ?> 
        &nbsp;RT.&nbsp;<?php echo $content['rt']; ?> &nbsp;RW.&nbsp;<?php echo $content['rw']; ?> &nbsp;
        Kel/Desa &nbsp;<?php echo $content['kelurahan']; ?>&nbsp; <?php echo $content['kecamatan']; ?>&nbsp;
        Surat Keterangan ini diperlukan Untuk Mengurus Kartu BPJS Kesehatan <?php echo $content['pemohon']; ?> <?php echo $content['namapemohon']; ?></p></td>   
    </tr>
    
    <tr>
        <td><strong>Permohonan</strong></td>
        <td style="padding: 2px">&nbsp;<?php echo $content['pemohon']; ?></td>        
    </tr>
      
    <tr>
        <td><strong>Nama Anak</strong></td>
        <td style="padding: 2px">&nbsp;<?php echo $content['namapemohon']; ?></td>
    </tr>
    
    <tr>
        <td><strong>Tanggal Surat</strong></td>
        <td style="padding: 2px">&nbsp;<?php echo $content['tglSurat'];?></td>
    </tr>
    
    <tr>
        <td><strong>Waktu Akses</strong></td>
        <td style="padding: 2px">&nbsp;<?php echo $hari;?> <?php echo $content['waktu'];?></td>
    </tr>
    
     <tr>
        <td><strong>Penanggung Jawab</strong></td>
        <td style="padding: 2px">&nbsp;<?php echo $content['alias'];?></td>
    </tr>
    
     </table>
          </div>
          
        <td style="padding: 5px 5px 5px 5px"><div align="left">
            <input class="btn btn-invert" type="button" name="back" id="back" value="&laquo; BATAL" onclick="window.location = 'index.php?form=C.04'"/></td>
            <input class="btn btn-invert" type="button" name="edit" id="edit" value="&laquo; EDIT &raquo;" onclick="window.location = 'index.php?form=C.05&id=<?php echo $suratbpjs->id; ?>'"/></td>
            <input class="btn btn-invert" type="button" name="hapus" id="hapus" value="HAPUS &raquo;"/>
        </div></td>

          <script type="text/javascript">
          var hapus = $('hapus');
					hapus.observe('click', function(){
							if(confirm('Anda yakin akan menghapus Surat Dengan BPJS : <?php echo htmlentities($suratbpjs->noSurat); ?>, Yang dibuat oleh <?php echo $content["alias"]; ?>'))
									window.location = 'index.php?form=C.03&id=<?php echo $suratbpjs->id; ?>&delete=true';
					});
          </script>
          