<?php

/**
 * Surat
 *
 * @package App-Serdang
 * @author Slow Team
 * @copyright 2014
 * @version $Id$
 * @access public
 */
class Suratkjp
{
	var $id;
	var $kSurat;
	var $noSurat;
	var $userid;
	var $tglBuat;
    var $alias;
    var $pemohon;
    var $anak;
    var $sekolah;
	var $content;
	var $SerdangDB;
	
	function Suratkjp(&$SerdangDB)
	{
		$this->SerdangDB =& $SerdangDB;
	}
	
	function add()
	{
		$statement = "
		INSERT INTO suratkjp (
			k_surat ,
			no_surat,
			userid ,
			tgl_buat,
            alias,
            pemohon,
            anak,
            sekolah,
			content)
		VALUES (
			".(int)$this->kSurat.", 
			".$this->SerdangDB->text($this->noSurat).", 
			".$this->SerdangDB->text($this->userid).", 
			NOW(),
            ".$this->SerdangDB->text($this->alias).",
            ".$this->SerdangDB->text($this->pemohon).",
            ".$this->SerdangDB->text($this->anak).",
            ".$this->SerdangDB->text($this->sekolah).",
			".$this->SerdangDB->text($this->content).");";
		$result = $this->SerdangDB->execute($statement);
		if($this->SerdangDB->getNumAffected() > 0){
			$this->id = $this->SerdangDB->getLastID();
			return true;
		}
		return false;
	}
    
    
    function edit()
    {
    	$statement = "
		UPDATE suratkjp SET 
			k_surat = " .(int) $this->kSurat. ",
			no_surat = ".$this->SerdangDB->text($this->noSurat).",
            userid = " .$this->SerdangDB->text($this->userid). ",
			tgl_buat = NOW(),
            alias =  ".$this->SerdangDB->text($this->alias).", 
			pemohon =  ".$this->SerdangDB->text($this->pemohon).",
            anak =  ".$this->SerdangDB->text($this->anak).",
            sekolah = ".$this->SerdangDB->text($this->sekolah).",
			content = ".$this->SerdangDB->text($this->content)."
              
		WHERE id = " . (int)$this->id . "; ";
        $result = $this->SerdangDB->execute($statement);

		return true;

    }
    
    function delete()
    {
    	$statement = "
		DELETE FROM suratkjp 
		WHERE id = " . (int)$this->id . "; ";
		
        $result = $this->SerdangDB->execute($statement);
		return true;
    } 
	
	function detail()
	{
		$statement = "
		SELECT k_surat, no_surat, userid, tgl_buat, alias, pemohon, anak, sekolah, content 
		FROM suratkjp 
		WHERE id = ".$this->SerdangDB->text($this->id);
		$result = new Collection;
		$result = $this->SerdangDB->selectRecord($statement);
		if(!$result->isEmpty()){
			list
                (
                $this->kSurat,
                $this->noSurat,
				$this->userid, 
                $this->tglBuat, 
                $this->alias,
                $this->pemohon,
                $this->anak, 
                $this->sekolah,
                $this->content)
                = $result->elementAt(0);
			return true;
		}
		return false;		
	}
	
	function fetchAll()
	{
		$statement = "
		SELECT id, k_surat, no_surat, tgl_buat, alias, pemohon, anak, sekolah, userid
		FROM suratkjp
		ORDER BY tgl_buat DESC LIMIT 20";
		$result = new Collection;
		$result = $this->SerdangDB->selectAll($statement,false);
		if(!$result->isEmpty())
			return $result->getElements();
		return false;
		
	}
	
    function fetchPages($limit = 20, $page = 0, $kSurat = 'x')
    {
    	
		$statement = "SELECT count(*) FROM suratkjp ".
        ($kSurat != 'x' ? 'WHERE k_surat = '.(int)$kSurat : "");
		
		$result  = $this->SerdangDB->selectRecord($statement);
		$result  = $result->elementAt(0);
		$numRows = $result[0];
		
		if($numRows > 0){
			$numPage = ceil($numRows/$limit);
		}else
			$numPage = 1;
			
		$offset = ($page > $numPage ? 0 : ($page * $limit));
		
		$statement = "
		SELECT id, k_surat, no_surat, tgl_buat, alias, pemohon, anak, sekolah, userid
		FROM suratkjp ".
        ($kSurat != 'x' ? 'WHERE k_surat = '.(int)$kSurat : "")."
		ORDER BY tgl_buat DESC ".
		$this->SerdangDB->limit($offset, $limit)." ;";
		
		
		$result = $this->SerdangDB->selectAll($statement, false);
		if(!$result->isEmpty()){
			$res["numRows"] = $numRows;
			$res["numPage"] = $numPage;
			$res["limit"]	= $limit;
			$res["content"] = $result->getElements();
			return $res;
		}
		return false;
    }
	
}
?>