<?php
ob_start();
include("db.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email = $_POST['email'];
	$mobile=$_POST['mobile'];
	$message=$_POST['message'];
	
	date_default_timezone_set('Asia/Calcutta');
	$date = date("d-m-Y g:i:s A");

	mysql_query("SET character_set_client=utf8", $dbLink);  
	mysql_query("SET character_set_connection=utf8", $dbLink);  
	$insert_query = mysql_query("insert into commenttable(name,email,mobile,message,date)values('$name','$email','$mobile','$message','$date')")or die(mysql_error());
	mysql_query($insert_query, $dbLink);  

	
	header("Location:index1.php");
	}
?>