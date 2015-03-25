<?php

/**
 * @author [ar3t4]
 * @copyright 2014
 */

include_once("common/config.php");
require_once ("component/Suratbpjs.php");
require_once ("component/Suratskck.php");
require_once ("component/Suratkjp.php");

$query     = $_POST['query'];
$pencarian  = $_POST['pencarian'];


	
if ($_POST['submit']) {
	$query =mysql_query("select * from suratbpjs where $pencarian like '%$query%' ");
    $cek =mysql_num_rows($query);
  }
?>
	