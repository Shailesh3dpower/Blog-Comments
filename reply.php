<?php
	ob_start();
	error_reporting("0");
	include("db.php");

	$mid = $_POST['id'];
	$mreply = $_POST['reply'];
	$mname = $_POST['mname'];
	$memail = $_POST['memail'];

	mysql_query("SET character_set_client=utf8", $dbLink);  
	mysql_query("SET character_set_connection=utf8", $dbLink);  
	$insert_query = mysql_query("UPDATE commenttable SET reply = '$mreply' WHERE id = '$mid'")or die(mysql_error());
	mysql_query($insert_query, $dbLink);  
	
	
		//  Send Emails using php
		
		$inipath = php_ini_loaded_file();

				if ($inipath) {
			   // echo 'Loaded php.ini: ' . $inipath."<p>";
				} else {
				    echo 'A php.ini file is not loaded';
				}

 		

			require 'class.phpmailer.php'; // path to the PHPMailer class

			require 'class.smtp.php';

			$mail = new PHPMailer();


			$name = $mname;
			$visitor_email = $memail;
			$mtext = stripslashes($mreply);
			$subject =  $mname ."'s Blog Comment Received ";
			$user_message = " \n\n".$mtext;

			$memailid = "shailesh3dpower@gmail.com";  // To // Sir's email address  "ranjitpatil090@gmail.com"

	    
            $mail->IsSMTP();  // telling the class to use SMTP
            $mail->SMTPDebug = 2;
            $mail->Mailer = "smtp";
	    	$mail->SMTPSecure = 'tls';
            $mail->Host = "ssl://smtp.gmail.com";
	   		$mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPAuth = true; // turn on SMTP authentication

            $mail->Username = "shailesh3dpower@gmail.com"; // SMTP username
            $mail->Password = "shailesh@123"; // SMTP password 
            $Mail->Priority = 1;

            $mail->AddAddress("$memailid", ""); // To
            $mail->SetFrom($visitor_email, "3D Power Visulization Pvt. Ltd."); // From
            $mail->AddReplyTo($visitor_email, $name); // Reply

            $mail->Subject  = $subject;
            $mail->Body     = $user_message;
            $mail->WordWrap = 50;  
		
            if(!$mail->Send()) {
            
			$value1 = 'Message was not sent. ';
			
			echo	$value1 = $value1. ' Mailer error: ' . $mail->ErrorInfo;
        
           // setcookie("myCookiepassn", $value1);	
			
            } else {
            
            $value = " Your Message has been sent to ".$visitor_email;
            // setcookie("myCookiepass", $value);
            
            }
		// End Send Email


	header("Location: index1.php");

?>