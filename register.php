<?php
ob_start();
if(isset($_POST['Submit'])) {
	require_once("db.php");

	$fullname=$_POST['fullname'];
	$address=$_POST['address'];
	$country=$_POST['country'];
	$residingstate=$_POST['residingstate'];
	$residingcity=$_POST['residingcity'];
	$profession=$_POST['profession'];
	$gender=$_POST['gender'];
	$dayob=$_POST['dayob'];
	$monthob=$_POST['monthob'];
	$yearob=$_POST['yearob'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	date_default_timezone_set('Asia/Calcutta');
	$sdate = date("d-m-Y g:i:s A");

	$insert=mysql_query("insert into user(srno,fullname, address, country, residingstate,residingcity, profession, gender, dayob, monthob, yearob, mobile, email, password,mdate )
	values('null','$fullname','$address','$country','$residingstate','$residingcity','$profession','$gender','$dayob','$monthob','$yearob','$mobile','$email','$password','$sdate')")or die(mysql_error());

		//  Upload Image Start
		
	if(is_uploaded_file($_FILES['filename']['tmp_name'])){
	
		
	$maxsize=$_POST['MAX_FILE_SIZE'];		
	$size=$_FILES['filename']['size'];
	
	
	if($size>$maxsize){
	echo "Maximum Size is ".$maxsize."<br>";
	echo "Size of Uploaded file is ".$size."<br>";
	exit("Maximum Size Limit Excessed");
	}
	
	// getting the image info..
	$imgdetails = getimagesize($_FILES['filename']['tmp_name']);
	$mime_type = $imgdetails['mime']; 
	//print_r($imgdetails);
		
	// checking for valid image type
	if(($mime_type=='image/jpeg')||($mime_type=='image/gif') || ($mime_type=='image/png')){
	  // checking for size yet again
	  if($size<$maxsize){
	    $filename=$_FILES['filename']['name'];	
	    $imgData =addslashes (file_get_contents($_FILES['filename']['tmp_name']));
		
			
			
	    $sql="INSERT into image(imgname,image,type,size,sdate,iemail) values ('$filename','$imgData','".$mime_type."','".addslashes($imgdetails[3])."','$sdate','$email')";					

		mysql_query($sql,$conn) or die(mysql_error());
			   
				
	  }else{
	    echo "<font class='error'>Image to be uploaded is too large..Error uploading the image!!</font>";
	  }
	}else{
	  echo "<font class='error'>Not a valid image file! Please upload jpeg or gif image.</font>";
	}
	
}else {			

	
	
  	$sqlnoimg="INSERT into image(sdate,iemail) values ('$sdate','$email')";					
	    
	mysql_query($sqlnoimg,$conn) or die(mysql_error());
  
  switch($_FILES['filename']['error']){
	case 0: //no error; possible file attack!
	  echo "<font class='error'>There was a problem with your upload.</font>";
	  break;
	case 1: //uploaded file exceeds the upload_max_filesize directive in php.ini
	  echo "<font class='error'>The file you are trying to upload is too big.</font>";
	  break;
	case 2: //uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the html form
	  echo "<font class='error'>The file you are trying to upload is too big.</font>";
	  break;
	case 3: //uploaded file was only partially uploaded
	  echo "<font class='error'>The file you are trying upload was only partially uploaded.</font>";
	  break;
	case 4: //no file was uploaded
	  echo "<font class='error'>You must select an image for upload.</font>";
	  break;
	default: //a default error, just in case! 
	  echo "<font class='error'>There was a problem with your upload.</font>";
	  break;
  }		
  
  
}	

// Send Image End
	

	

	header("Location: index1.php");	

}

?>