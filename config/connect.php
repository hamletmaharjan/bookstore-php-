<?php

/**
 * 
 */
class Connection{
	private $dbserver;
	private $db;
	private $user;
	private $pass;
	function __construct($dbserver,$db,$user,$pass){
		$this->dbserver = $dbserver;
		$this->db = $db;
		$this->user = $user;
		$this->pass = $pass;
	}


	function ConnectDB(){
		try{
			$conn = new PDO("mysql:host=$this->dbserver;dbname=$this->db",$this->user,$this->pass);


			$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			return $conn;
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}
}
?>