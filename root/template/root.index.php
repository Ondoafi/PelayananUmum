<?php include "navigation_sr.php" ?>		
    <link rel="stylesheet" href="themes/areta/table/css/rwd-table.min.css"/>
    <script type="text/javascript" src="themes/areta/table/js/rwd-table.js"></script>
    <div class="container">
    <div id="target-1" class="widget">
    <div class="widget-header"><i class="icon-bookmark"></i><h3><?php echo $pageTitle; ?></h3></div>
        <div class="widget-content">
        <div class="shortcuts"> 
        <form id="form1" method="post" action="index.php?form=C.04">
        <div class="table-responsive" data-pattern="">
        <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">

                <tr>
      	             <th>NO</th>
                     <th>USERNAME</th>
                     <th>NAMA</th>
                     <th>STATUS</th>
                     <th>AKSI</th>
                </tr>
                    <?php for($i=0; $i < count($listRoot); $i++) : ?>
                <tr>
                    <td><?php echo ($i+1); ?></td>
                    <td><?php echo $listRoot[$i]["username"];?></td>
                    <td><?php echo $listRoot[$i]["nama"];?></td>
                    <td><?php echo ($listRoot[$i]["is_admin"] ? "Admin" : "Petugas") ;?></td>
                    <td><a href="index.php?form=X.04&delete=<?php echo $listRoot[$i]["userid"]; ?>" onclick="javascript:return confirm('Anda yakin akan menghapus user <?php echo $listRoot[$i]["username"];?>?')" class="text">hapus</a></td>
                    </tr>
                    <?php endfor ?>
        </table>
            <br />
        </div></div>
        </div></div>
        </div></form>
