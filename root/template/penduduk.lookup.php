<?php if($result): ?>
<ul>
<?php for($i=0; $i < count($result["content"]); $i++): 
$result["content"][$i]["pendidikan"] = ($result["content"][$i]["pendidikan"] ? $result["content"][$i]["pendidikan"] : $M_PENDIDIDKAN[$result["content"][$i]["k_pendidikan"]]);
$result["content"][$i]["pekerjaan"] = ($result["content"][$i]["pekerjaan"] ? $result["content"][$i]["pekerjaan"] : $M_KERJA[$result["content"][$i]["k_kerja"]]);
?>
<li id="<?php echo $result["content"][$i]["id"];?>"><?php echo $result["content"][$i]["nama"];?>
<span class="data" ><?php echo ($result["content"][$i]["no_ktp"] ? $result["content"][$i]["no_ktp"] : "") ;?></span>
<span class="data_hide" style="display:none"><?php echo json_encode($result["content"][$i]);?></span></li>	
<?php endfor ?>
</ul>	
<?php endif ?>