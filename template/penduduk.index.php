<?php include "navigation_sr.php" ?>		
<link rel="stylesheet" href="themes/areta/table/css/rwd-table.min.css"/>
<script type="text/javascript" src="themes/areta/table/js/rwd-table.js"></script>
<div class="container">
<div id="target-1" class="widget">
<div class="widget-header"> 
<i class="icon-bookmark"></i><h3><?php echo $pageTitle ?></h3></div>
<div class="widget-content">
<div class="shortcuts"> 
<form id="form1" method="post" action="index.php?form=B.01">
            <div class="form-region">
              <table border="0" cellspacing="0" width="100%">
                <? if ($errorCode) { ?>
                <tr>
                  <td colspan="4"><span class="errors" style="padding-bottom: 5px"><?php echo $errorCode ?></span></td>
                </tr>
                <? } ?>
                <tr>
<tr>
    <td style="padding:2px;"><span style="font-weight: bold">Agama</span></td>
    <td style="padding:2px;"><select id="kAgama" name="kAgama" style="width:140px;">
    <?php echo printOptions($M_AGAMA, $agama); ?>
</select></td>
</tr>
<tr>
    <td style="padding:2px;"><span style="font-weight: bold">Pekerjaan</span></td>
    <td style="padding:2px;"><select id="kKerja" name="kKerja" style="width:140px;">
    <?php echo printOptions($M_KERJA, $kKerja); ?>
</select></td>
    <td style="padding:2px;"><span style="font-weight: bold">Status</span></td>
    <td style="padding:3px;"><select id="kKawin" name="kKawin" style="width:140px;">
    <?php echo printOptions($M_KAWIN, $kKawin); ?>
</select></td>
</tr>
<tr>
    <td width="15%" style="padding-right:0px;padding-top:2px;padding-bottom:2px;"><select id="kField" name="kField" style="width:80px;font-weight:bold;background-color:#FDFDFD;">
    <?php echo printOptions($fieldOptions, $kField); ?>
</select></td>
    <td width="44%" style="padding: 2px"><input type="text" id="keyword" name="keyword" value="<?php echo htmlentities($keyword) ?>" style="width:250px;"/></td>
    <td width="17%" style="padding: 2px"><span style="font-weight: bold">Pendidikan</span></td>
    <td width="24%" style="padding: 2px"><select id="kPendidikan" name="kPendidikan" style="width:140px;">
    <?php echo printOptions($M_PENDIDIDKAN, $kPendidikan); ?>
</select></td>
</tr>
<tr>
    <td style="padding-top:10px;">&nbsp;</td>
    <td style="padding-top:10px;"><input class="formbutton" type="submit" name="next" id="next" value="CARI &raquo;"/></td>
    <td  style="padding: 10px 2px 2px 2px"><input class="formbutton" type="button" name="add" id="add" value="TAMBAH &raquo;" onclick="window.location = 'index.php?form=B.02&id=<?php echo $penduduk->id; ?>'"/></td>
    <td colspan="2" style="padding-top:10px;"><input class="formbutton" type="submit" name="download" id="download" value="DOWNLOAD &raquo;"/></td>
</tr>
</table>
    <input type="hidden" name="next" value="true"/>
    </div>
    <br />
    <td colspan="3">Jumlah &nbsp;:&nbsp; <?php echo $result["numRows"];?></td>
    <td colspan="3" align="right">halaman &nbsp;:&nbsp;
    <select id="page" name="page" onchange="submit()">
    <?php echo printOptions($Options, $page); ?>
</select></td>
    <br />
    <?php if($result) : ?>

<div class="table-responsive" data-pattern="">
<table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">

<tr>
    <th>NO</th>
    <th>NAMA</th>
    <th>NO KTP</th>
    <th>TGL LAHIR</th>
    <th>ALAMAT</th>
    <th>AKSI</th>
</tr>
<?php for($i=0; $i < count($result["content"]); $i++) : $link = "<a href=\"index.php?form=B.03&id=".$result["content"][$i]["id"]."\" class=\"text\">Detail</a>";
?>
<tr>
    <td><?php echo ($no++); ?></td>
    <td><?php echo ($result["content"][$i]["nama"] ? $result["content"][$i]["nama"]  : "&nbsp;") ;?></td>
    <td><?php echo ($result["content"][$i]["no_ktp"] ? $result["content"][$i]["no_ktp"] : "&nbsp;") ;?></td>
    <td><?php echo ($result["content"][$i]["tgl_lahir"] ? $result["content"][$i]["tgl_lahir"] : "&nbsp;") ;?></td>
    <td><?php echo ($result["content"][$i]["alamat"] ? $result["content"][$i]["alamat"] : "&nbsp;") ;?></td>
    <td><?php echo $link ;?></td>
</tr>
    <?php endfor ?>
        </table>
            </div>
                </form>
                    <?php endif ?>
       
