<?php include "navigation_sr.php" ?>		
<link rel="stylesheet" href="themes/areta/table/css/rwd-table.min.css"/>
<script type="text/javascript" src="themes/areta/table/js/rwd-table.js"></script>
<div class="container">
<div id="target-1" class="widget">
<div class="widget-header"> 
<i class="icon-bookmark"></i><h3><?php echo "Detail ".$confSurat["name"]; ?></h3></div>
<div class="widget-content">
<div class="shortcuts">  
<form id="form1" method="post" action="index.php?form=B.07">
  <div class="form-region">
    <table border="0" cellspacing="0">
      <? if ($errorCode) { ?>
      <tr>
        <td>&nbsp;</td>
        <td style="padding-bottom: 5px" class="errors"><?php echo $errorCode ?></td>
      </tr>
      <? } ?>
      <tr>
        <td><strong>Jenis Statistik&nbsp;</strong>&nbsp;&nbsp;</td>
        <td style="padding-right: 3px"><select style="width: 254px" id="kStat" name="kStat">
              <?php echo printOptions($M_STAT, $kStat); ?>
            </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="padding-top: 10px"><input class="formbutton" type="submit" name="next" id="next" value="TAMPILKAN &raquo;"/></td>
      </tr>
    </table>
    <input type="hidden" name="next" value="true"/>
  </div>
    <?php if($stat) : $total = 0;?>
    <div class="table-responsive" data-pattern="">
    <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
      <tr>
            <?php foreach ($stat[0] as $header => $value):?>
            <th width="50%"><?php echo $header; ?></th>
            <?php endforeach ?>
      </tr>
           <?php foreach ($stat as $index => $item): $total += $item['JUMLAH'];?>
      <tr>
           <?php foreach ($item as $key => $value):  ?>
      <td><?php echo $value ;?></td>
          <?php endforeach ?>
      </tr>
          <?php endforeach ?>
            <tr style="font-size:12px;background-color:#EEE;">
                <td><b>TOTAL</b></td>
                <td><b><?php echo $total;?></b></td>
            </tr>
    </table>
   </div>
</form>
<?php endif ?>
