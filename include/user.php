<?php
require_once 'include/general.php'; 

/**
 * 
 */
class user {
	private $id,$name,$email,$real_name,$password,$state="PENDING",$type="USER";
	
	function __construct($user=array("id"=>"","name"=>"","email"=>"","real_name"=>"","password"=>"","state"=>"PENDING","type"=>"USER")) {
		$con=mysql_connect("localhost","root","root") or die(mysql_error());
		$DB=mysql_select_db("cms");
		$this->id=mysql_real_escape_string($user['id']);
		$this->name=mysql_real_escape_string($user['name']);
		$this->email=mysql_real_escape_string($user['email']);
		$this->real_name=mysql_real_escape_string($user['real_name']);
		$this->password=mysql_real_escape_string($user['password']);
		$this->state=mysql_real_escape_string($user['state']);
		$this->type=mysql_real_escape_string($user['type']);
		
	}
	
	function addUser($newUser)
	{
		$this->__construct($newUser);
		$con=mysql_connect("localhost","root","root") or die(mysql_error());
		$DB=mysql_select_db("cms") or die(mysql_error());
		$qurey="INSERT INTO `users`(`id`, `name`, `email`, `real_name`, `password`, `state`, `type`) VALUES (".$newUser['id'].",".$user['name'].",".$user['email'].",".$user['real_name'].",".$user['password'].",".$user['state'].",".$user['type'].")";
		$result=mysql_query($query) or die(mysql_error());
		
	}
	function editUser($id)
	{
		$this->__construct($_POST);
		$con=mysql_connect("localhost","root","root") or die(mysql_error());
		$DB=mysql_select_db("cms") or die(mysql_error());
		$query="UPDATE `users` SET `id`=".$this->id.",`name`=".$this->name.",`email`=".$this->email.",`real_name`=".$this->real_name.",`password`=".$this->password.",`state`=".$this->state.",`type`=".$this->type." WHERE `id`=".$id;
		$result=mysql_query($query);
		
	}
	
	function removePost($id){
		$con=mysql_connect("localhost","root","root") or die(mysql_error());
		$id=mysql_real_escape_string($id) or die(mysql_error());
		$query="DELETE FROM `cms`.`users` WHERE id='".$id."'";
		$result=mysql_query($query);
		return TRUE;
	}
	
	function getUserById($id)
	{
		$con=mysql_connect("localhost","root","root") or die(mysql_error());
		$id=mysql_real_escape_string($id) or die(mysql_error());
		$query="SELECT * FROM `cms`.`users` WHERE id='".$id."'";
		$result=mysql_query($query);
		return mysql_fetch_array($result);
	}
	
	function getUserByName($name)
	{
		$con=mysql_connect("localhost","root","root") or die(mysql_error());
		$id=mysql_real_escape_string($name) or die(mysql_error());
		$query="SELECT * FROM `cms`.`users` WHERE name='".$name."'";
		$result=mysql_query($query);
		return mysql_fetch_array($result);
	}
	
	function getUserByEmail($email)
	{
		$con=mysql_connect("localhost","root","root") or die(mysql_error());
		$id=mysql_real_escape_string($email) or die(mysql_error());
		$query="SELECT * FROM `cms`.`users` WHERE email='".$email."'";
		$result=mysql_query($query);
		return mysql_fetch_array($result);
	}
	
	function checkPassword($user,$password){
		$con=mysql_connect("localhost","root","root") or die(mysql_error());
		$query="SELECT * FROM `cms`.`users` WHERE `id`='".$user['id']."'";
		$result=mysql_query($query);
		$result=mysql_fetch_array($result);
		$password=mysql_real_escape_string($password);
		return ($result['password']==$password);
		}
	
	function getAll(){
		$con=mysql_connect("localhost","root","root") or die(mysql_error());
		$query="SELECT * FROM `cms`.`users` WHERE 1 ";
		$result=mysql_query($query);
		return $result;
	}
}

?>
