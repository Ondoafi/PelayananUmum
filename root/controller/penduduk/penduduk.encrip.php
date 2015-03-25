<?php

/**
 * @author ar3t4
 * @copyright 2014
 */

if ($user->detail() && $root->isAdmin != 1)
    header("Location:index.php?form=A.02");
    
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "indonesia");
define("DB_NAME", "serdangapp");
define("TBL_USERS", "penduduk");
define("FLD_USER", "username");
define("FLD_PASS", "password");

//set_magic_quotes_runtime(0);
@set_magic_quotes_runtime(false);
ini_set('magic_quotes_rintime',0);
ini_set('max_execution_time', 300); //300 seconds = 5 minutes

$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME, $connection) or die(mysql_error());

$q = "SELECT ".FLD_PASS.",".FLD_USER." FROM ".TBL_USERS."";
$result = mysql_query($q, $connection);

$total=0;
$enc=0;

$doencrypt=false;
if (@$_REQUEST["form"]=="B.08")
  $doencrypt=true;

while($data = mysql_fetch_array($result))
{
  if ($doencrypt)
  {
    $total++;
    if (!encrypted($data[0]))
    {
      $q="UPDATE ".TBL_USERS." SET ".FLD_PASS."='".md5($data[0])."' where ".FLD_USER."='".
      str_replace("'","''",$data[1])."'";
      mysql_query($q, $connection);
    }
   $enc++;
 }
 else
 {
   $total++;
   if (encrypted($data[0]))
     $enc++;
 }
}

function encrypted($str)
{
  if (strlen($str)!=32)
    return false;
 
  for($i=0;$i<32;$i++)
    if ((ord($str[$i])<ord('0') || ord($str[$i])>ord('9')) && (ord($str[$i])<ord('a') || ord($str[$i])>ord('f')))
     return false;
 
return true;
}
include_once ("template/penduduk.encrip.php");

?>