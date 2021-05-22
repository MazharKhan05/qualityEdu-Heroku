<?php 
include("connect.php");
$u=$_REQUEST["usn"];
$ps=$_REQUEST["pwd"];
$ps=md5($ps);
$e_m=$_REQUEST["mail"];
$p=$_REQUEST["ph"];
$database=new DatabaseManager();
$query ="INSERT INTO users (name,password,email,phone,created_at,updated_at) VALUES ('$u','$ps','$e_m','$p',CURRENT_TIME(),CURRENT_TIME())"; 
//echo $query;
$status=$database->fireSafeQuery($query,NUll);
if ($status) {
	header("location: login.php");
};
 ?>     	

