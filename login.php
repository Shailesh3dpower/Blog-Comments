<?php
ob_start();
if(isset($_POST['login'])) {

	require_once("db.php");
	
	$con=mysql_connect($db_host,$db_user,$db_pass);
		
		if(!$con)
		{
		  die ("Can't Connect");
		}
		
		$db=mysql_select_db("$db_name",$con) or die("Can't connect to database");
			
		$spassword=$_POST['password'];
		$suser=$_POST['email'];
					
				
		$sql = mysql_query("SELECT * FROM user WHERE password 	= '$spassword' AND email = '$suser'" );
		
		while($row = mysql_fetch_array($sql))
  			{
			  $mpassword=$row['password'];
			  $muser=$row['email']; 
			  $mname=$row['fullname'];		
			} 
		
		
		if (!$sql)
            	{
            	   die("Querry failed : ".mysql_error());
            	}	
				
				
		if ($spassword == $mpassword AND $suser == $muser  )
                {
					
				session_start();
				
				$_SESSION['mname'] = $mname;
				$_SESSION['email'] = $muser;
				
			    header('Location: index1.php');
        	 
                }
				
		else if ($spassword == "" AND $suser == "")
		{	
			header('Location: index.php');
		}		
		
	    else {
		
				header('Location: index.php');
		}
		
		mysql_close($con);	
	
	}

?>