<?php

/**
 * @author [ar3t4]
 * @copyright 2014
 */

// get param
$delete = $getVars_delete;

if ($root->detail() && $root->isAdmin != 1)
    header("Location:index.php?form=A.02");

if($delete){
	$root->delete($delete);
}
$listRoot = $root->fetchAll();

include_once ("template/root.index.php");

?>