<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 
session_start();
require_once("common/config.php");
require_once("component/SerdangDB.php");
require_once("component/Penduduk.php");
require_once("component/Root.php");


///////////////////////////////////////

function unsetMagicQuotes($GPC) {
	return is_array($GPC) ? array_map('unsetMagicQuotes', $GPC) : stripslashes(trim($GPC));
}

function autoTrims($GPC) {
	return is_array($GPC) ? array_map('autoTrims', $GPC) : trim($GPC);
}


// set HTML option
function printOptions($options, $selected) {
	if (is_array($options))
		foreach ($options as $key => $value) {
			$buffer .= '<option value="'.htmlentities($key).'"';
			if (! $isSelected && (string)$key == (string)$selected) $buffer .= ' selected';
			$buffer .= '>'.htmlentities($value).'</option>';
		}
	return $buffer;
}

////////////////////////////////////////////////////////////

// strip magic quotes
function unsetMagicQuotesGPC() {
	if (get_magic_quotes_gpc()) {
		foreach (array('POST', 'GET', 'REQUEST', 'COOKIE') as $GPC)
			if (is_array($GLOBALS["_$GPC"]))
				$GLOBALS["_$GPC"] = array_map('unsetMagicQuotes', $GLOBALS["_$GPC"]);

	} else {
		foreach (array('POST', 'GET', 'REQUEST', 'COOKIE') as $GPC)
			if (is_array($GLOBALS["_$GPC"]))
				$GLOBALS["_$GPC"] = array_map('autoTrims', $GLOBALS["_$GPC"]);
	}
}


//////////////////////////////////////////////////////
extract($_POST, EXTR_PREFIX_ALL, 'postVars');
extract($_GET, EXTR_PREFIX_ALL, 'getVars');


// strip all magic quotes on parameters
unsetMagicQuotesGPC();

/////////////////////////////////////////////////

// database connector
$SerdangDB = new SerdangConnection_mysql();
$SerdangDB->database = $DB_Database;
$SerdangDB->hostname = $DB_Hostname;
$SerdangDB->username = $DB_Username;
$SerdangDB->password = $DB_Password;
$SerdangDB->debug 	 = $DB_PrintQuery;
$SerdangDB->open(true);

////////////////////////////////////////////////////////////
$root = new Root($SerdangDB);

?>