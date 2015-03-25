<?php include "navigation_sr.php" ?>		
<link rel="stylesheet" href="themes/areta/table/css/rwd-table.min.css"/>
<script type="text/javascript" src="themes/areta/table/js/rwd-table.js"></script>
    <div class="container">
    <div id="target-1" class="widget">
    <div class="widget-header"> 
        <i class="icon-bookmark"></i><h3><?php echo $pageTitle ?></h3></div>
    <div class="widget-content">
    <div class="shortcuts"> 
        <form id="form1" method="post" action="index.php?form=C.04">
        <div class="form-region">
        <div class="table-responsive" data-pattern="">
        <table id="tech-companies-1" class="table table-small-font table-bordered table-striped">

<tr>
      	<th>NO</th>
        <th><a class="icon-large icon-external-link"></a> JENIS SURAT </th>
        <th><a class="icon-large icon-list-ol"></a></a> NO SURAT</th>
        <th><a class="icon-large icon-calendar"></a> TANGGAL BUAT</th>
        <th><a class="icon-large icon-group"></a> PEMBUAT</th>
        <th><a class="icon-large icon-eye-open"></a> ALIAS </th>
        <th><a class="icon-large icon-comment"></a> STATUS</th>
        <th><a class="icon-large icon-book"></a> PERMOHONAN</th>
        <th><a class="icon-large icon-wrench"></a> TINDAKAN</th>
</tr>
        <?php for($i=0; $i < count($result["content"]); $i++) : ?>
    <tr>
      <td><?php echo ($no++); ?></td>
      <td><?php echo $M_SURAT[$result["content"][$i]["k_surat"]]["singkat"];?></td>
      <td><?php echo $result["content"][$i]["no_surat"];?></td>
      <td><?php echo $result["content"][$i]["tgl_buat"];?> </td>
      <td><?php echo $result["content"][$i]["userid"];?></td> 
      <td><?php echo $result["content"][$i]["alias"];?></td>
      <td><?php echo ($listRoot[$i]["is_admin"] ? "Admin" : "Warga") ;?></td>
      <td><?php echo $result["content"][$i]["pemohon"]; ?> <?php echo $result ["content"][$i]["namapemohon"];?></td>
      <td><a href="index.php?form=C.03&id=<?php echo $result["content"][$i]["id"];?>"class="icon-large icon-zoom-in">Lihat &nbsp;          
      </a></td>
      </tr>
<?php endfor ?>
    </table>
  </div></div></div></div></div></div>
</form>
   