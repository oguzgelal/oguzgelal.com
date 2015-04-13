<?php
namespace Resource;

class Pages {
	/* Class Defaults */
	private $tableName = "pages";

	/* Class Vars */
	private $app;

	function __construct(){ 
		$this->app = \Slim\Slim::getInstance();
	}

	function get(){
		$ins = [];
		// build sql
		$sql = "SELECT * FROM $this->tableName";
		// query db
		$query = \Resource\Utils::querydb($this->app->db, $sql, $ins);
		$pages = $query->fetchAll(PDO_FETCH_ASSOC);
		if (count($pages)>0){ return $pages; }
		else { return null; }	
	}

	// no need for these right now
	/* 
	function post(){
		// check variables
		if ($this->title && $this->path && \Resource\Utils::isAdminLoggedIn()){
			$ins = [];
			$ins["title"] = $this->title;
			$ins["path"] = $this->path;
			$ins["active"]=1;
			$ins["posttime"]=date("Y-m-d H:i:s", time());
			$ins["transcript"]="";
			if ($this->transcript){ $ins["transcript"]=$this->transcript; }
			// build sql
			$sql = "INSERT INTO $this->tableName SET ";
			foreach($ins as $key=>$val){ $sql .= "$key=:$key,"; }
			$sql = substr($sql, 0, -1);
			// query db
			$query = Utils::querydb($this->app->db, $sql, $ins);
			if ($query){ return $this->app->db->lastInsertId(); }
			else{ throw new Exception("Insertion failed"); }
		}
		else { throw new Exception("Missing data or auth fail"); }
	}

	function put(){
		if ($this->found && \Resource\Utils::isAdminLoggedIn()){
			// populate PUT variable
			$params = false;
			$ins = [];
			$ins["title"]=$this->title;
			$ins["posttime"]=$this->posttime;
			$ins["transcript"]=$this->transcript;
			$ins["path"]=$this->path;
			$ins["active"]=$this->active;
			// build sql
			$sql = "UPDATE $this->tableName SET ";
			foreach($ins as $key=>$val){ $sql .= "$key=:$key,"; }
			$sql = substr($sql, 0, -1);
			$sql .= " WHERE id=:id";
			$ins["id"] = $this->id;
			// query db
			$query = Utils::querydb($this->app->db, $sql, $ins);
			if ($query){ return true; }
			else{ throw new Exception("Comic update failed."); }
		}	
	}

	function delete(){
		if ($this->found && \Resource\Utils::isAdminLoggedIn()){
			// build sql
			$sql = "DELETE FROM $this->tableName WHERE id=:id";
			$ins = [];
			$ins["id"] = $this->id;
			// query db
			$query = Utils::querydb($this->app->db, $sql, $ins);
			if ($query){ return true; }
			else { throw new Exception("Delete comic failed"); }
		}
	}
	*/
}