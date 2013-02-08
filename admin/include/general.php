<?php
require_once "include/class.html2text.inc";


class general
{
	private $host,$username,$password,$db,$con,$DB,$getAllPosts;
	
	function __construct(){
		$this->host="localhost";
		$this->username="root";
		$this->password="root";
		$this->db="cms";
		$this->con=mysql_connect($this->host,$this->username,$this->password) or die(mysql_error());
		$this->DB=mysql_select_db($this->db,$this->con);
		$this->getAllPosts="SELECT * FROM post";
	}
	
	function convertPost($body)
	{
		$h2t =& new html2text($body);
		echo substr($h2t->get_text(),0,250);
		if (strlen($body)> 250){
			echo "[...]";
		}
		
	}
	
	
	function newID($table)
	{	
		$con=mysql_connect("localhost","root","root") or die(mysql_error());
		$query="SELECT MAX(id) FROM `cms`.`".$table."`";
		$result=mysql_query($query,$con) or die(mysql_error());
		$result=mysql_fetch_array($result);
		return ++$result['MAX(id)'];
		
	}
}
?>