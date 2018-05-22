<?php

	class dbCon{

		private $dbName = dbName;
		private $dbPass = dbPWord;
		private $dbAdmin = dbAdmin;
		private $dbHost = dbHost;

	public function __construct(){

		$this->connectDb($this->dbHost,$this->dbAdmin,$this->dbPass,$this->dbName);

	}


	public function connectDb($dbHost,$dbAdmin,$dbPass,$dbName){

		$sql = new mysqli($dbHost,$dbAdmin,$dbPass,$dbName);

		if ($sql->connect_error){

			die("Failed to connect to Server");
		}

		else{

			return true;
			$this->closeDb($sql);

		}

	}

	// public function closeDb($db){

	// 	$db->close();
	// }

}