<?php
/**
 * @author [ar3t4]
 * @copyright 2014
 */
 

class Penduduk
{
    var $id;
    var $username;
	var $password;
    var $nama;
    var $noKTP;
    var $tempatLahir;
    var $tglLahir;
    var $kelamin;
    var $kAgama;
    var $agama;
    var $kKerja;
    var $pekerjaan;
    var $alamat;
    var $rt;
    var $rw;
    var $kelurahan;
    var $kecamatan;
    var $kWarga;
    var $kKawin;
    var $kPendidikan;
    var $pendidikan;
    var $umur; 
    var $isAdmin;
    var $SerdangDB;


    function Penduduk(&$SerdangDB)
    {
        $this->SerdangDB = &$SerdangDB;
    }
    
   function add(){
    
        $statement = "
		INSERT INTO penduduk (
            username, password, nama, no_ktp, tempat_lahir, tgl_lahir,
            kelamin, k_agama, agama, k_kerja, pekerjaan,
			alamat, rt, rw, kelurahan, kecamatan,
			k_warga, k_kawin, k_pendidikan, pendidikan,is_admin)
		VALUES (
            " .  $this->SerdangDB->text($this->username).", 
		    " .  $this->SerdangDB->text(md5($this->password)).",
            " .  $this->SerdangDB->text($this->nama) . ", 
			" . ($this->noKTP ? $this->SerdangDB->text($this->noKTP) : "NULL"). ", 
			" . $this->SerdangDB->text($this->tempatLahir) . ",
            " . ($this->tglLahir ? $this->SerdangDB->text($this->tglLahir) : "NULL"). ",
			" . $this->SerdangDB->text($this->kelamin). ",
			" . (int)$this->kAgama . ", 
            " . $this->SerdangDB->text($this->agama) . ", 
			" . (int)$this->kKerja . ", 
            " . $this->SerdangDB->text($this->pekerjaan) . ", 
			" . $this->SerdangDB->text($this->alamat) . ", 
			" . $this->SerdangDB->text($this->rt) . ", 
			" . $this->SerdangDB->text($this->rw) . ", 
            " . $this->SerdangDB->text($this->kelurahan) . ",
            " . $this->SerdangDB->text($this->kecamatan) . ",
			" . (int)$this->kWarga . ", 
			" . (int)$this->kKawin . ", 
			" . (int)$this->kPendidikan . ",
			" . $this->SerdangDB->text($this->pendidikan). ",
            " . (int)$this->isAdmin."
			); ";
			
        $result = $this->SerdangDB->execute($statement);
        if($this->SerdangDB->getNumAffected() > 0 ){
        	$this->id = $this->SerdangDB->getLastID();
			return true;
		}
		return false;
        	
    }
    
    function detail()
    {
    	$statement = "
		SELECT 
			username, password, nama,  no_ktp, tempat_lahir, 
            tgl_lahir, kelamin, k_agama, agama, k_kerja, pekerjaan, 
            alamat, rt, rw, kelurahan, kecamatan,k_warga, 
            k_kawin, k_pendidikan, pendidikan,is_admin, 
            EXTRACT(YEAR FROM now()) - EXTRACT(YEAR FROM tgl_lahir) 
        FROM penduduk WHERE id = " . (int)$this->id . "; ";
		
        $result = new Collection();
		$result = $this->SerdangDB->selectRecord($statement);
		if($result->isEmpty())
			return false;
        list($this->username, $this->password, $this->nama,
            $this->noKTP, $this->tempatLahir, $this->tglLahir, 
            $this->kelamin, $this->kAgama, $this->agama, 
            $this->kKerja,$this->pekerjaan, $this->alamat, 
            $this->rt, $this->rw, $this->kelurahan, $this->kecamatan,
            $this->kWarga, $this->kKawin, $this->kPendidikan,
            $this->pendidikan,$this->umur,$this->isAdmin) 
            = $result->elementAt(0);
			
		return !$result->isEmpty();
    }

    function edit()
    {
    	$statement = "
		UPDATE penduduk SET 
            username        = " . $this->SerdangDB->text($this->username).", 
		    password        = " . $this->SerdangDB->text(md5($this->password)).",
            nama            = " . $this->SerdangDB->text($this->nama) . ", 
			no_ktp          = " . $this->SerdangDB->text($this->noKTP). ",
			tempat_lahir    = " . $this->SerdangDB->text($this->tempatLahir) . ",
            tgl_lahir       = " .($this->tglLahir ? $this->SerdangDB->text($this->tglLahir) : "NULL") . ", 
			kelamin         = " . $this->SerdangDB->text($this->kelamin). ",
            k_agama         = " . (int)$this->kAgama . ", 
            agama           = " . $this->SerdangDB->text($this->agama) . ", 
			k_kerja         = " . (int)$this->kKerja . ", 
			pekerjaan       = " . $this->SerdangDB->text($this->pekerjaan) . ", 
			alamat          = " . $this->SerdangDB->text($this->alamat) . ",
			rt              = " . $this->SerdangDB->text($this->rt) . ", 
			rw              = " . $this->SerdangDB->text($this->rw) . ", 
            kelurahan       = " . $this->SerdangDB->text($this->kelurahan) . ",
            kecamatan       = " . $this->SerdangDB->text($this->kecamatan) . ",
			k_warga         = " . (int)$this->kWarga . ", 
			k_kawin         = " . (int)$this->kKawin . ", 
			k_pendidikan    = " . (int)$this->kPendidikan . ",
			pendidikan      = " . $this->SerdangDB->text($this->pendidikan). ",
            is_admin        = " . (int)$isAdmin."

		WHERE id = " . (int)$this->id . "; ";
        $result = $this->SerdangDB->execute($statement);

		return true;

    }

    function delete()
    {
    	$statement = "
		DELETE FROM penduduk 
		WHERE id = " . (int)$this->id . "; ";
		
        $result = $this->SerdangDB->execute($statement);
		return true;
    }
    
    function getPenduduk(){
		if($_SESSION["penduduk"]){
			$this->id            = $_SESSION["penduduk"]["id"];
			$this->username      = $_SESSION["penduduk"]["username"];
            $this->password      = $_SESSION["penduduk"]["password"];
			$this->nama          = $_SESSION["penduduk"]["nama"];
            $this->noKTP         = $_SESSION["penduduk"]["no_ktp"] ;
            $this->tempatLahir   = $_SESSION["penduduk"]["tempat_lahir"];
            $this->tglLahir      = $_SESSION["penduduk"]["tgl_lahir"];
            $this->alamat        = $_SESSION["penduduk"]["alamat"];
            $this->rt            = $_SESSION["penduduk"]["rt"]  ;
            $this->rw            = $_SESSION["penduduk"]["rw"];
            $this->kelurahan     = $_SESSION["penduduk"]["kelurahan"];
            $this->kecamatan     = $_SESSION["penduduk"]["kecamatan"];
            $this->kelamin       = $_SESSION["penduduk"]["kelamin"];
            $this->kAgama        = $_SESSION["penduduk"]["k_agama"]; 
            $this->agama         = $_SESSION["penduduk"]["agama"] ;
            $this->kKerja        = $_SESSION["penduduk"]["k_kerja"];     
            $this->pekerjaan     = $_SESSION["penduduk"]["pekerjaan"];
            $this->isAdmin       = $_SESSION["penduduk"]["is_admin"];
			return true;
		}else
			return false;
	}
    

    function search($keyword, $limit = 20, $page = 0)
    {
    	
		$statement = "
		SELECT count(*)
		FROM penduduk
		WHERE 
			LCASE(nama) LIKE '%" . strtolower($keyword) . "%' OR
			LCASE(tgl_lahir) LIKE '%" . strtolower($keyword) . "%' OR 
			LCASE(no_ktp) LIKE '%" . strtolower($keyword) . "%';";
		
		$result  = $this->SerdangDB->selectRecord($statement);
		$result  = $result->elementAt(0);
		$numRows = $result[0];
		
		if($numRows > 0){
			$numPage = ceil($numRows/$limit);
		}else
			$numPage = 1;
			
		$offset = ($page > $numPage ? 0 : ($page * $limit));
		
		$statement = "
		SELECT 
			id,username, password, nama,  
            no_ktp, nama , k_agama ,agama,
            k_kerja , pekerjaan , alamat , 
			rt , rw , kelurahan , kecamatan, tempat_lahir , 
			kelamin , k_warga , k_kawin ,k_pendidikan , pendidikan,is_admin, 
            DATE_FORMAT(tgl_lahir, '%d %M %Y') tgl_lahir, 
			EXTRACT(YEAR FROM now()) - EXTRACT(YEAR FROM tgl_lahir) umur
		FROM penduduk
		WHERE 
			LCASE(nama) LIKE '%" . strtolower($keyword) . "%' OR
			LCASE(tgl_lahir) LIKE '%" . strtolower($keyword) . "%' OR 
			LCASE(no_ktp) LIKE '%" . strtolower($keyword) . "%' ".
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
    
    
    function searchAdvance($kField, $keyword = '', $limit = 20, $page = 0, $kAgama = 'x', $kKerja = 'x', $kKawin = 'x', $kPendidikan = 'x', $isDownload = false)
    {
    	global $M_FIELD;
		$statement = "
		SELECT count(*)
		FROM penduduk
		WHERE 1 ".
        ($kAgama != 'x' ? " AND k_agama = ".(int)$kAgama : "").
        ($kKawin != 'x' ? " AND k_kawin = ".(int)$kKawin : "").
        ($kPendidikan != 'x' ? " AND k_pendidikan = ".(int)$kPendidikan : "").
        ($kKerja != 'x' ? " AND k_kerja = ".(int)$kKerja : "").
        ($keyword != '' ? " AND LCASE(".$M_FIELD[$kField].") LIKE '%".$keyword."%'" : "");

		$result  = $this->SerdangDB->selectRecord($statement);
		$result  = $result->elementAt(0);
		$numRows = $result[0];
		
		if($numRows > 0){
			$numPage = ceil($numRows/$limit);
		}else
			$numPage = 1;
			
		$offset = ($page > $numPage ? 0 : ($page * $limit));
		
		$statement = "
		SELECT 
			id,username, password, nama, 
            no_ktp, nama, k_agama, k_kerja, pekerjaan, 
            alamat, rt, rw, kelurahan, kecamatan,
            tempat_lahir, DATE_FORMAT(tgl_lahir, '%d %M %Y') tgl_lahir,  
			EXTRACT(YEAR FROM now()) - EXTRACT(YEAR FROM tgl_lahir) umur, 
            kelamin, k_warga, k_kawin,
			k_pendidikan, pendidikan, is_admin 
		FROM penduduk 
		WHERE 1 ".
        ($kAgama != 'x' ? " AND k_agama = ".(int)$kAgama : "").
        ($kKawin != 'x' ? " AND k_kawin = ".(int)$kKawin : "").
        ($kPendidikan != 'x' ? " AND k_pendidikan = ".(int)$kPendidikan : "").
        ($kKerja != 'x' ? " AND k_kerja = ".(int)$kKerja : "").
        ($keyword != '' ? " AND LCASE(".$M_FIELD[$kField][0].") LIKE '%".$keyword."%'" : "").
		($isDownload ? $this->SerdangDB->limit($offset, $limit) : "")." ;";
		
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

	function statUsia()
	{
		$statement = "
		SELECT EXTRACT( YEAR FROM now( ) ) - EXTRACT( YEAR FROM tgl_lahir ) UMUR, 
			count( EXTRACT( YEAR FROM now( ) ) - EXTRACT( YEAR FROM tgl_lahir ) ) JUMLAH
		FROM penduduk
		WHERE tgl_lahir is not NULL or tgl_lahir <> '0000-00-00' 
		GROUP BY umur
		ORDER BY umur ASC ";
		$result = $this->SerdangDB->selectAll($statement, false);
		if(!$result->isEmpty()){
			return $result->getElements();
		}
		return false;		
	}

	function statJenisKelamin()
	{
		$statement = "
		SELECT kelamin `JENIS KELAMIN` , count( kelamin ) JUMLAH
		FROM `penduduk`
		GROUP BY kelamin";
		$result = $this->SerdangDB->selectAll($statement, false);
		if(!$result->isEmpty()){
			return $result->getElements();
		}
		return false;		
	}


	function statPekerjaan()
	{
		$statement = "
		SELECT b.content PEKERJAAN, count( b.content ) JUMLAH
		FROM penduduk a, m_kerja b
		WHERE a.k_kerja = b.k_kerja
		GROUP BY b.content
		ORDER BY PEKERJAAN";
		$result = $this->SerdangDB->selectAll($statement, false);
		if(!$result->isEmpty()){
			return $result->getElements();
		}
		return false;		
	}
	
	function statPendidikan()
	{
		$statement = "
		SELECT b.content PENDIDIKAN, count( b.content ) JUMLAH
		FROM penduduk a, m_pendidikan b
		WHERE a.k_pendidikan = b.k_pendidikan
		GROUP BY b.content
		ORDER BY PENDIDIKAN";
		$result = $this->SerdangDB->selectAll($statement, false);
		if(!$result->isEmpty()){
			return $result->getElements();
		}
		return false;		
	}
	
}

?>