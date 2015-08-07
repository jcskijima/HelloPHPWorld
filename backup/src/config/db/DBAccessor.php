<?php

class DBAccessor
{
	private $db_name;
	private $host;
    private $user;
    private $password;


	public function __construct($host, $db_name, $user, $password) {
        $this->host = $host;
        $this->db_name = $db_name;
        $this->user = $user;
        $this->password = $password;
	}

	public function connect() {
		$pdo = null;

		try {
		    $dsn = 'mysql:dbname='.$this->db_name.';host='.$this->host.';charset=utf8';
	        // $pdo = new PDO($dsn, $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_PERSISTENT => true));
	        /* 「ATTR_PERSISTENT => true」はDBプーリングの為 */
		    $pdo = new PDO($dsn, $this->user, $this->password, array(PDO::ATTR_PERSISTENT => true));
		} catch (PDOException $e) {
			print($e->getMessage());
			die();
		}

	    return $pdo;
	}

	public function connect_ora() {
		$pdo = null;

		try {
			// $dsn = 'oci:dbname=//J1DJ0910P8:1521/XE';
			$dsn = 'oci:dbname=192.168.238.10:1521/XE';
			$pdo = new PDO($dsn, 'PHP_DEV', 'cl1ent');
		} catch (PDOException $e) {
			print($e->getMessage());
			die();
		}

		return $pdo;
	}
}

?>