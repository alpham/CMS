<?php
require_once "include/general.php";
/**
 * post class
 * all functions and variables related to posts
 */

class Post {
	private $body, $title, $id, $author_id, $author_name = "TROSC team", $time, $comment, $state, $g;
	function __construct($post = array ("body"=>"","title"=>"","id"=>"","author_id"=>"1","author_name"=>"TROSC Team","time"=>"","comment"=>"TRUE","state"=>"PUBLISHED")) {
		$this -> g = new general();
		$con = mysql_connect("localhost", "root", "root") or die(mysql_error());
		$DB = mysql_select_db("cms") or die(mysql_error());
		$this -> id = mysql_real_escape_string($post['id'], $con);
		//$this->author_id=mysql_real_escape_string($post['author_id'],$con);
		$this -> body = mysql_real_escape_string($post['body'], $con);
		$this -> title = mysql_real_escape_string($post['title'], $con);
		//$this->comment=mysql_real_escape_string($post['comment'],$con);
		//$this->time=mysql_real_escape_string($post['time'],$con);
		$this -> state = mysql_real_escape_string($post['state'], $con);
	}

	function addNewPost($post) {
		$this -> __construct($post);
		$con = mysql_connect("localhost", "root", "root") or die(mysql_error());
		$DB = mysql_select_db("cms") or die(mysql_error());
		$new = $this -> g -> newID("post");
		$this -> id = mysql_real_escape_string($new);
		//$query="INSERT INTO post('id','title','body','author_name','author_id','time','comment','state') VALUES('".$this->id."','".$this->title."','".$this->body."','".$this->author_name."','".$this->author_id."','".$this->time."','".$this->comment."','".$this->state."')";
		$query = "INSERT INTO `cms`.`post` (`id`,`title`,`body`,`state`,`author_id`) VALUES('" . $this -> id . "','" . $this -> title . "','" . $this -> body . "','" . $this -> state . "','1')";
		$result = mysql_query($query, $con) or die(mysql_error());
		return TRUE;
	}

	function editPost($id, $modification = "") {
		$this -> __construct($modification);
		$con = mysql_connect("localhost", "root", "root") or die(mysql_error());
		$DB = mysql_select_db("cms") or die(mysql_error());
		$id = mysql_real_escape_string($id, $con);
		//$query="UPDATE `post` SET `id`='".$this->id."',`title`='".$this->title."',`body`='".$this->body."',`author_name`='".$this->author_name."',`author_id`=,'".$this->author_id."',`time`='".$this->time."',`comment`='".$this->comment."',state`='".$this->state."' WHERE id='".$id."')";
		$query = "UPDATE `cms`.`post` SET `title`='" . $this -> title . "',`body`='" . $this -> body . "',`state`='" . $this -> state . "' WHERE id=\"" . $id . "\"";
		$result = mysql_query($query, $con) or die(mysql_error());
		return TRUE;
	}

	function removePost($id) {
		$con = mysql_connect("localhost", "root", "root") or die(mysql_error());
		$id = mysql_real_escape_string($id) or die(mysql_error());
		$query = "DELETE FROM `cms`.`post` WHERE id='" . $id . "'";
		$result = mysql_query($query);
		return TRUE;
	}

	function selectPost($id) {
		$general = new general();
		$con = mysql_connect("localhost", "root", "root") or die(mysql_error());
		$id = mysql_real_escape_string($id) or die(mysql_error());
		$query = "SELECT * FROM `cms`.`post` WHERE id='" . $id . "'";
		$result = mysql_query($query);
		$result = mysql_fetch_array($result);
		return $result;
	}

	function selectAllPosts($id) {
		$con = mysql_connect("localhost", "root", "root") or die(mysql_error());
		$id = mysql_real_escape_string($id) or die(mysql_error());
		$query = "SELECT * FROM `cms`.`post` WHERE 1";
		$result = mysql_query($query);
		$result = mysql_fetch_array($result);
		return $result;
	}

	function publishPost($id) {
		$con = mysql_connect("localhost", "root", "root") or die(mysql_error());
		$DB = mysql_select_db("cms") or die(mysql_error());
		$id = mysql_real_escape_string($id, $con);
		$query = "UPDATE `cms`.`post` SET `state`='PUBLISHED' WHERE id=\"" . $id . "\"";
		$result = mysql_query($query, $con) or die(mysql_error());
	}

	function unpublishPost($id) {
		$con = mysql_connect("localhost", "root", "root") or die(mysql_error());
		$DB = mysql_select_db("cms") or die(mysql_error());
		$id = mysql_real_escape_string($id, $con);
		$query = "UPDATE `cms`.`post` SET `state`='UNPUBLISHED' WHERE id=\"" . $id . "\"";
		$result = mysql_query($query, $con) or die(mysql_error());
	}

}
?>
