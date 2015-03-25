<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 


class Root
{
	var $userid;
	var $username;
	var $nama;
	var $password;
	var $isAdmin;
	var $SerdangDB;
	
	function root($SerdangDB)
	{
		$this->SerdangDB = $SerdangDB;
	}
       
	function login($username, $password)
	{
		$statement = "
		SELECT 
			userid, nama, password, is_admin 
		FROM 
			root 
		WHERE username='".$username."'";
		$result = new Collection();
		$result = $this->SerdangDB->selectRecord($statement);
		if($result->isEmpty())
		return "username dan password salah silahkan dicoba lagi";		
		list($this->userid, $this->nama, $pass) = $result->elementAt(0);
	
        if($pass === md5($password)){ 
			$_SESSION["root"]["userid"]   = $this->userid; 
			$_SESSION["root"]["username"] = $username;
			$_SESSION["root"]["nama"]     = $this->nama;
			$_SESSION["root"]["is_admin"] = $this->isAdmin;
			
			header("Location:index.php?form=A.01");
		}else
			return "Silahkan mengisi username dan password dengan benar!";	
				
	}
	
    
    function logout()
	{
		//session_unregister('user');
        session_start();
        if(isset($_SESSION['root']))
        unset($_SESSION['root']);
	}
	
	
    function detail()
	{
		$statement = "
		SELECT 
			userid, nama, password ,is_admin 
		FROM 
			root 
		WHERE username=".$this->SerdangDB->text($this->username);
		
		$result = new Collection();
		$result = $this->SerdangDB->selectRecord($statement);
		if($result->isEmpty())
			return false;
		list($this->userid, $this->nama, $this->password ,$this->isAdmin) = $result->elementAt(0);
		return true;
		
	}

	function fetchAll()
	{
		$statement = "
		SELECT 
			userid, username, nama, is_admin 
		FROM 
			root";
		
		$result = new Collection();
		$result = $this->SerdangDB->selectAll($statement,false);
		if($result->isEmpty())
			return false;
		
		return $result->getElements();
		
	}
	
	function getRoot()
	{
		if($_SESSION["root"]){
			$this->userid = $_SESSION["root"]["userid"];
			$this->username = $_SESSION["root"]["username"];
			$this->nama = $_SESSION["root"]["nama"];
			$this->isAdmin = $_SESSION["root"]["is_admin"];
			return true;
		}else
			return false;
	}
	
	function add($username, $password, $nama, $isAdmin)
	{
		$statement = "
		INSERT INTO root(username, password, nama, is_admin) VALUES (
		".$this->SerdangDB->text($username).", 
		".$this->SerdangDB->text(md5($password)).", 
		".$this->SerdangDB->text($nama).", 
		".(int)$isAdmin." 
		)";
		
        $result = $this->SerdangDB->execute($statement);
        if($this->SerdangDB->getNumAffected() > 0 ){
        	$this->userid = $this->SerdangDB->getLastID();
			return true;
		}
		return false;
		return "username sudah terdaftar!";
	}
	
	function changePassword($newPassword)
	{
		$statement = "
		UPDATE root SET password = ".$this->SerdangDB->text(md5($newPassword))." 
		WHERE userid = ".(int)$this->userid;
		$result = $this->SerdangDB->execute($statement);
		return true;
	}
	
	function delete($userid)
	{
		$statement = "
		DELETE FROM root 
		WHERE userid = ".(int)$userid;
		if($root->isAdmin == 1)
        {
			$result = $this->SerdangDB->execute($statement);
			return true;	
		}
		return false;
	}
	
}

?>