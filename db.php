<?php
// http://www.phptechi.com/php-%E2%80%93-mysql-and-unicode-solution-to-marathi-chinese-or-any-language.html#comment-33405
$conn = mysql_connect("localhost","root","");  
mysql_query("SET character_set_results=utf8", $conn);  
mb_language('uni');  
mb_internal_encoding('UTF-8');  
mysql_select_db("commentsystem", $conn);  
mysql_query("set names 'utf8'",$conn);  


$db=mysql_select_db("commentsystem",$conn);

	$db_host="localhost";
	$db_user="root";
	$db_pass='';
	$db_name="commentsystem";
	
function connect($sql) {
		$conn=mysql_connect($this->host,$this->user,$this->passwd) or die (mysql_error());
        $db=mysql_select_db($this->dataBase,$conn) or die ("Unable to connect to database1");
        
        $result = mysql_query($sql, $conn) or die ("Query failed");
            return $result;
    }
?>