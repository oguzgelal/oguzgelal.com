<?php
namespace Resource;

class Portfolio {
	/* Class Defaults */
	private $tableName = "portfolio";

	/* Class Vars */
	private $app;

	function __construct(){
		$this->app = \Slim\Slim::getInstance();
	}

	function get(){
		$ins = [];
		// build sql
		$sql = "SELECT * FROM $this->tableName ORDER BY `order`";
		// query db
		$query = \Resource\Utils::querydb($this->app->db, $sql, $ins);
		$portfolio = $query->fetchAll(PDO_FETCH_ASSOC);
		if (count($portfolio)>0){ return $portfolio; }
		else { return null; }
	}
}