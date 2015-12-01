<?php

namespace mhoob\aena\database;

class DatabaseLoader {
	private static $instance;
	private static $dsn;
	private static $user;
	private static $password;
	private $dbh;
	
	private function __construct() {
	/*
		$config = ConfigReader::load('database');
		$this->setDsn($config['dsn']);
		$this->setUser($config['user']);
		$this->setPassword($config['password']);*/
	}
	
	public static function getInstance() {
		if (!is_object(self::$instance)) {
			self::$instance = new DatabaseLoader();
		}
		return self::$instance;
	}
	
	public static function setDsn($dsn) {
		self::$dsn = $dsn;
	}
	
	public static function getDsn() {
		return self::$dsn;
	}
	
	public static function setUser($user) {
		self::$user = $user;
	}
	
	public static function getUser() {
		return self::$user;
	}
	
	public static function setPassword($password) {
		self::$password = $password;
	}
	
	public static function getPassword() {
		return self::$password;
	}
	
	private function setDbh($dbh) {
		self::$dbh = $dbh;
	}
	
	private function getDbh() {
		if (!isset($this->dbh)) {
			$this->dbh = new \PDO(self::$dsn, self::$user, self::$password);
		}
		return $this->dbh;
	}
    
    public function quote($string) {
        return $this->getDbh()->quote($string);
    }
	
	public function query($sql) {
		try {
			$response = $this->getDbh()->query($sql);
		} catch (Exception $e) {
			return false;
		}
		if ($response == false) {
			return false;
		}
		$result = array();
		foreach ($response as $row) {
			$result[] = $row;
		}
		return $result;
	}
	

}