<?php

/**
* 
*/
class Database{
	static public $db;
	static public $result;
	
	function __construct(){
		# code...
	}

	static public function connectDb(){
		global $db;
		if(!$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DATABASE)){
			die('Ima greske');
		}

	}

	static public function query($sql){
		global $db;
		global $result;
		return $result = $db->query($sql);
	}

	static public function fetchData($table, $return, $where=null, $what=null, $optional=null){
		$sql='';
		$sql.='SELECT '.$return.' FROM '.$table;

		/* check for where/what and build statemant */
		if($where!=null || $what!=null){
			if(count($where)==count($what)){
				$sql.=' WHERE ';
				$countWhereWhat = count($where);
				for($i=0; $i<$countWhereWhat;$i++){
					$sql.=' '.$where[$i].'="'.$what[$i].'" AND';
				}
				$sql= rtrim($sql, 'AND');
			}
		}
		if($optional!=null){
			$sql.=' '.$optional;
		}
		//echo $sql;
		return Database::query($sql);
	}

	static public function returnCatName($cat_id){
		$cat= Database::fetchData('category', 'cat_name', array('cat_id'), array($cat_id));
		$res= $cat->fetch_assoc();
		return $res['cat_name'];
	}

	/* serach data */
	static public function fetchSearchData($find, $limit=20, $optional=null){
		$sql="SELECT * FROM products WHERE prod_tags LIKE '%$find%' OR prod_name LIKE '%$find%' LIMIT $limit";

		if($optional!=null){
			$sql.=' '.$optional;
		}
		//echo $sql;
		return Database::query($sql);
	}



}