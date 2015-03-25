<?php

/**
 * @author [ar3t4]
 * @copyright 2014
 */

include_once ("common/config.php");

$bagianWhere = "";

if (isset($_POST['noSuratCat']))
{
   $noSurat = $_POST['noSurat'];
   if (empty($bagianWhere))
   {
		$bagianWhere .= "no_surat = '$noSurat'";
   }
}

if (isset($_POST['aliasCat']))
{
   $alias = $_POST['alias'];
   if (empty($bagianWhere))
   {
		$bagianWhere .= "alias LIKE '%$alias%'";
   }
   else
   {
        $bagianWhere .= " AND alias LIKE '%$alias%'";
   }
}

if (isset($_POST['useridCat']))
{
   $userid = $_POST['userid'];
   if (empty($bagianWhere))
   {
		$bagianWhere .= "userid LIKE '%$userid%'";
   }
   else
   {
        $bagianWhere .= " AND userid LIKE '%$userid%'";
   }
}

if (isset($_POST['kSuratCat']))
{
   $kSurat = $_POST['kSurat'];
   if (empty($bagianWhere))
   {
		$bagianWhere .= "k_surat = '$kSurat'";
   }
   else
   {
        $bagianWhere .= " AND k_surat = '$kSurat'";
   }
}
//$query = "SELECT * FROM suratbpjs WHERE ".$bagianWhere;
//$hasil = mysql_query($query);

            $query = "SELECT * FROM suratbpjs WHERE ".$bagianWhere;
            $hasil = mysql_query($query);        
        
?>