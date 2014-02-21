<?php
require_once("interface_db.php");
class mysqldb implements interface_db{
	private $server;
	private $username;
	private $password;
	private $dbname;
	private $link;
	
	
	  public function __construct($server,$username,$password,$dbname){
		$this->setServer($server);
		$this->setUsername($username);
		$this->setPassword($password);		
		$this->setDbname($dbname);
	}
		
	public function getServer(){
		return $this->server;
	}

	public function setServer($value){
		$this->server = $value;
	}
	
	public function getUsername(){
		return $this->username;
	}

	public function setUsername($value){
		$this->username = $value;
	}
	
	public function getPassword(){
		return $this->password;
	}

	public function setPassword($value){
		$this->password = $value;
	}
	
	public function getDbname(){
		return $this->dbname;
	}

	public function setDbname($value){
		$this->dbname = $value;
	}
	
	public function connect(){	
		$this->link=mysql_connect($this->getServer(),$this->getUsername(),$this->getPassword());	
		mysql_query("SET NAMES 'utf8'");		
		if (!$this->link) {
			die('Error, could not connect: ' . mysql_error());
		}				
		return $this->link;
	}
	
	public function bd($database){
		$this->dbname = mysql_select_db($database, $this->link);
		if (!$this->dbname) {
			die ('Error, can\'t use database: ' . mysql_error());
		}
	}
	
	public function close()	{
		return mysql_close($this->link);
	}
	public function error()	{
		return mysql_error($this->link);
	}
	public function consulta($query){		
		$con = $this->connect();
		//$this->bd($this->getDbname());
		return mysql_query($query,$con) or die('Error, query failed: '. mysql_error());
	}
	
	public function consultaArray($query){		
		$con = $this->connect();
		$this->bd($this->getDbname());
		$res = array();
		$consulta = mysql_query($query, $con);
		while($result = mysql_fetch_array($consulta))
		{
			$res[] = $result;
		}
		return $res;
	}
	
}
    
?>
