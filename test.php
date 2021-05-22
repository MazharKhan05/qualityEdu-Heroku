<?php 
include("connect.php");
if(isset($_POST['reg'])){
$u=$_POST["nm"];
$ps=$_POST["em"];
$su=$_POST["sb"];
$e_m=$_POST["cm"];
$database=new DatabaseManager();
$query ="INSERT INTO feedbacks (name,email,sub,comment) VALUES ('$u','$ps','$su','$e_m')"; 
//echo $query;
$status=$database->fireSafeQuery($query,NUll);
echo $query;
echo $status;
}
?>