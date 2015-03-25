<?php

/**
 * SerdangConnection
 *
 * @package App-Serdang
 * @author Slow Team
 * @copyright 2014
 * @version $Id$
 * @access public
 */
class SerdangConnection
{
    var $driver;
    var $hostname;
    var $username;
    var $password;
    var $database;
    var $debug = false;

    var $connectionID;
    var $isPersistentConnection = false;
    var $statement;
    var $resourceID;

    var $sysTimestamp;

    function SerdangConnector()
    {
        die("Virtual class: cannot instantiate");
    }

    function connect($hostname, $username, $password, $database, $forceNew = false)
    {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->open($forceNew);
        return $this->isConnected();
    }

    function execute($queryString)
    {
        if ($this->isConnected())
        {
            $this->statement = $queryString;
            if ($this->debug)
                $this->printQueryHTML();
            $isSuccess = $this->query();

            if ($this->getError() && $this->debug)
                print '<div><strong>^ Error</strong></div>';
            return $isSuccess;
        }
    }

    function selectRecord($queryString, $fetchMode = true)
    {
        $collection = new Collection;
        $this->execute($queryString);
        $record = $this->fetch($fetchMode);
        if ($record)
            $collection->insert($record);
        return $collection;
    }

    function selectAll($queryString, $fetchMode = true)
    {
        $collection = new Collection;
        $this->execute($queryString);
        while ($record = $this->fetch($fetchMode))
            $collection->insert($record);
        return $collection;
    }

    function isConnected()
    {
        return is_resource($this->connectionID);
    }

    function printQueryHTML()
    {
        print '<div>' . htmlentities($this->statement) . '</div>';
    }
}

/**
 * SerdangConnection_mysql
 *
 * @package App-Serdang
 * @author Slow Team
 * @copyright 2014
 * @version $Id$
 * @access public
 */
class SerdangConnection_mysql extends SerdangConnection
{
    var $driver = "mysql";
    var $sysTimestamp = "now()";

    function open($forceNew = false)
    {
        $this->connectionID = @mysql_connect($this->hostname, $this->username, $this->
            password);
        if ($this->database)
            $this->selectDB();
    }

    function selectDB()
    {
        @mysql_select_db($this->database, $this->connectionID);
    }

    function query()
    {
        $this->resourceID = mysql_query($this->statement, $this->connectionID);
        return (is_resource($this->resourceID));
    }
    
    function getNumAffected()
    {
		return mysql_affected_rows($this->connectionID);
	}
	
	function getLastID()
	{
		return mysql_insert_id($this->connectionID);
	}

    function fetch($fetchMode)
    {
        if (is_resource($this->resourceID))
            return mysql_fetch_array($this->resourceID, $fetchMode ? MYSQL_NUM:MYSQL_ASSOC);
    }

    function text($text)
    {
       //return "'" . mysql_escape_string(stripslashes($text)) . "'";
        return "'" . mysql_real_escape_string(stripslashes($text)). "'";
         
    }

    function limit($offset, $numRecord)
    {
        return " LIMIT " . (int)$numRecord . " OFFSET " . (int)$offset;
    }

    function getError()
    {
        return (int)mysql_errno($this->connectionID);
    }
}

/**
 * Collection
 *
 * @package App-Serdang
 * @author Slow Team
 * @copyright 2014
 * @version $Id$
 * @access public
 */
class Collection
{
    var $elements;

    function getElements()
    {
        return ($this->isEmpty() ? false:$this->elements);
    }

    function elementAt($index)
    {
        return $this->elements[$index];
    }

    function insert($element, $index = false)
    {
        if ($index === false)
            $index = $this->size();
        $this->elements[$index] = $element;
    }

    function remove($index)
    {
        unset($this->elements[$index]);
    }

    function isEmpty()
    {
        return ($this->size() < 1);
    }

    function size()
    {
        return count($this->elements);
    }

    function clear()
    {
        $this->elements = null;
    }
}

function SerdangConnector($driver)
{
    $driver = strtolower($driver);
    $classname = "SerdangConnection_" . $driver;
    if (class_exists($classname))
        $object = new $classname();
    return $object;
}

?>