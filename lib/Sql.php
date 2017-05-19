<?php
error_reporting(E_ALL);

ini_set("display_errors", 1);




class Sql
{
	private	$mysql_hostname = 'localhost';
	private $mysql_username = 'tint';
	private $mysql_password = '12341234';
	private $mysql_database = 'tint';
	private $mysql_port = '3306';
	private $mysql_charset = 'utf8';
	private $connect;
	public $result;
	public function connect(){
		$this->connect = new mysqli($this->mysql_hostname, $this->mysql_username, $this->mysql_password, $this->mysql_database);
		
		if($this->connect->connect_errno){
				echo '[연결실패] : '.mysql_error().'<br>'; 
					die('MySQL 서버에 연결할 수 없습니다.');
		}
	}
	public function query($query){
		$this->result=$this->connect->query($query);
	}
	public function fetch(){
		return $this->result->fetch_object();
	}
	public function close(){
		$this->result->free();
	}
}


?>

