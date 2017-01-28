<!DOCTYPE HTML>
<html lang="mr">
<head>
<meta http-equiv="Content-Language" content="mr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<title>Blog Comments</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Letter FX" />

    <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic|Montez|Muli:400,400italic' rel='stylesheet' type='text/css'>
    <link href="jquery-letterfx.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi">
    </script>
    <script type="text/javascript">
	
	 // https://developers.google.com/transliterate/v1/getting_started	
    
	// Load the Google Transliterate API
      google.load("elements", "1", {
            packages: "transliteration"
          });

      function onLoad() {
        var options = {
            sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                [google.elements.transliteration.LanguageCode.HINDI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };

        // Create an instance on TransliterationControl with the required
        // options.
        var control =
            new google.elements.transliteration.TransliterationControl(options);

        // Enable transliteration in the textbox with id
        // 'transliterateTextarea'.
        control.makeTransliteratable(['transliterateTextarea']);
		control.makeTransliteratable(['transliterateTextarea1']);
		control.makeTransliteratable(['transliterateInput']);
		control.makeTransliteratable(['transliterateInput1']);
      }
      google.setOnLoadCallback(onLoad);
    </script>
	
	
	
	<style type="text/css">
	#sty
	{
		margin:0 auto;
		margin-top:25px;
		border:#000 dashed 1px;
		width:450px;
		padding:25px;
		
		
		}
		
	#fileid
	{
		width:85px;
		height:20px;
		}
	img
	{
		margin-right:20px;
	}
	#nameid
	{
		font-size:14px;
		color:#000;
		font-family::"Arial", Helvetica, sans-serif;
		margin-bottom:5px;
	}
	#dateid
	{
		font-size:14px;
		color:#000;
		font-family:"Arial", Helvetica, sans-serif;
		margin-bottom:5px;
		
	}
	#mobid
	{
		font-size:14px;
		color:#000;
		font-family:"Arial", Helvetica, sans-serif;	
		margin-left:0px;
		
	}

	#msgid
	{
		font-size:15px;
		color:#000;
		font-family::"Arial", Helvetica, sans-serif;
		margin-left:70px;
		margin-bottom:5px;
		
	}

	#one
	{
		font-size:14px;
		font-family:"Times New Roman", Times, serif;
		color:#000;
	}
	#submit
	{
		width:200px;
		height:30px;
		background-color:#999;
		color:#FFF;
		border:#666 solid 1px;
	}

	.detail {margin-bottom:10px;}

	</style>

</head>

<body class="letterfx-docs" style="background-color:#FFFFFF;"> 


<div class="container-fluid">
  
  <div class="row">
    <div class="col-sm-4">
	  
	  <img src="600 x 1080.jpg" alt="Shivaji Maharaj" align="right" class="img-responsive" />
	  
	  
	  
	  </div>
	 
<div class="col-sm-4" >	 
<div width="350" align="center">	  
 <h1 class="tagline" align="center">मी मराठा ब्लॉग </h1> 
 <p><p><p>
  Type in English it will translet in Marathi <p>
 (Press Ctrl+g to toggle between English and Marathi) <p>	
  <?php session_start();?>
<form name="comment" method="post" action="comment.php" >
<table width="350" border="0" style="margin-left:1px;margin-top:30px;">
  <tr>
    <td align="right" id="one"></td>
    <td><input type="hidden" name="name" value="<?php echo  $_SESSION['mname']; ?>"  class="form-control detail" ></td>
  </tr>
  <tr>
	<td><input type="hidden" name="email" value="<?php echo  $_SESSION['email']; ?>"  class="form-control detail" ></td>
  </tr>
  <tr>
    <td align="right" id="one">विषय / टॉपिका :<span style="color:#000;">*</span></td>
    <td><input type="text" name="mobile" id="transliterateInput1"  required class="form-control detail" ></td> 
  </tr>
  <tr>
	<td></td>
  </tr>
  <tr>
  <tr>
  
    <td align="right" id="one">टिप्पणी / कमेंट : </td>
    <td>
	
	<textarea name="message" id="transliterateTextarea" class="form-control detail" ></textarea></td>  
  </tr><p>
  
  <tr>
  <td align="right" id="one"></td>
  <td><input type="submit" name="submit" value="Submit Comment" class="btn btn-default" data-letterfx="custom[2]"><input type="button" class="btn btn-default" value="Logout" onclick="newDoc()"></td>
  </tr>
</table>

</form>


 
 
</div>

<div style="margin-bottom: 105px">&nbsp;</div>
<?php
// echo '<div id="msgid"><button id="addFixed">Toggle Page Scroll</button></div>';



	require_once("db.php");

	$select=mysql_query("SELECT commenttable . *,  image . * FROM commenttable JOIN image ON commenttable .email = image.iemail ORDER BY commenttable .id DESC");



	while($row=mysql_fetch_array($select))
	{
	
	echo "<div id='sty'>";
	
	if ($row['size']=="") {
	echo "<img src='files/marathalogo.png'"."' width='70px' height='70px' align='left' />";?>
	
	<?php }
	
	else { ?>
	
	<img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" title="<?php echo $row['name'];?>" width='70px' height='70px' align='left' />
	
	<?php
	
	}
	echo "<div id='nameid'>".$row['name']."</div>";
	
	echo "<div id='mobid'>".$row['mobile']."</div>";	
	echo "<div id='dateid'>"."Posted On ".$row['date']."</div>";
	echo "<p>";
	echo "<div id='msgid'>".$row['message']."</div>";
	
	echo '<p class="flip">Reply</p>';
	echo '<div class="panel" >';
	
	echo '<form name="comment" method="post" action="reply.php">';
	$mid = $row['id'];
	$mname = $row['name'];
	$memail = $row['email'];
	echo  '<div id="msgid">Please Enter Reply</div>'; 
	
	?>
	
	<input type="hidden" name="id" value="<?php echo $mid; ?>"  class="form-control detail" >
	<input type="hidden" name="mname" value="<?php echo $mname; ?>"  class="form-control detail" >
	<input type="hidden" name="memail" value="<?php echo  $memail; ?>"  class="form-control detail" >
	
    <?php	
	echo '<div id="msgid"><textarea name="reply" id="transliterateTextarea1" class="form-control detail" style="width:250px;" ></textarea></div>';
	echo '<div id="msgid"><input type="submit" name="submit" value="Submit Reply" class="btn btn-default" ></div>';
	echo '</form>';
	echo "</div><br />";
	echo "<div id='msgid'>".$row['reply']."</div>";
	echo "</div><br />";
	
}
//echo '<div id="msgid"><button id="addFixed1">Toggle Page Scroll</button></div>';
?>


<!-- <span style="margin-left:70px;"><input type="button" id="btnShow" value="Reply" /></span> -->

<div id="dialog" style="display: none" align = "center">
   <form name="comment" method="post" action="reply.php">
<table width="400" border="0" cellspacing="3" cellpadding="3" style="margin:auto;margin-top:30px;">
  <tr>
    <td align="right" id="one"></td>
    <td><input type="text" name="name" readonly value="<?php echo  $_SESSION['mname']; ?>" id="transliterateInput"  style="width:250px;"  class="form-control detail" ></td>
  </tr>
  
  <tr>
	<td></td>
  </tr>
  <tr>
  <tr>
  
    <td align="right" id="one">उत्तर / रिप्लाई : </td>
    <td>
	
	<textarea name="message" id="transliterateTextarea" class="form-control detail" style="width:250px;" ></textarea></td>  
  </tr><p>
  <tr>
  <td align="right" id="one"></td>
  <td><input type="submit" name="submit" value="Submit Reply" class="btn btn-default" data-letterfx="custom[2]"></td>
  </tr>
</table>
</form>		
</div>

</div>
<!--/.Mask-->

	<div class="col-sm-4"> <img src="02 600 x 1080.jpg" alt="Maratha" style="margin-left:70px;" class="img-responsive"  /></div>
	
	</div>
    
  </div>
</div>


<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="tuxsudo.min.js"></script>
<script src="jquery-letterfx.js"></script>
<script src="demo.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
    rel="stylesheet" type="text/css" />
<script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            modal: true,
            autoOpen: false,
            title: "Add Reply",
            width: 500,
            height: 450
        });
        $("#btnShow").click(function () {
            $('#dialog').dialog('open');
        });
    });
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".flip").click(function() {
			$(".panel").slideToggle("slow");
		});
	});
</script>

<script>
function newDoc() {
    window.location.assign("logout.php")
	}
</script>
<script>
//Freeze page content scrolling
function freeze() {
        if($("html").css("position") != "fixed") {
            var top = $("html").scrollTop() ? $("html").scrollTop() : $("body").scrollTop();
            if(window.innerWidth > $("html").width()) {
                $("html").css("overflow-y", "scroll");
            }
            $("html").css({"width": "100%", "height": "100%", "position": "fixed", "top": -top});
        }
}
//Unfreeze page content scrolling
function unfreeze() {
        if($("html").css("position") == "fixed") {
            $("html").css("position", "static");
            $("html, body").scrollTop(-parseInt($("html").css("top")));
            $("html").css({"position": "", "width": "", "height": "", "top": "", "overflow-y": ""});
        }
}
var frozen = false;
$( "#addFixed" ).click(function() {
	if(frozen) {
		unfreeze();
		frozen = false;
	} else {
		freeze();
		frozen = true;
	}
});

$( "#addFixed1" ).click(function() {
	if(frozen) {
		unfreeze();
		frozen = false;
	} else {
		freeze();
		frozen = true;
	}
});

</script>
<style type="text/css">
div.panel,p.flip {
	margin: 0px;
	padding: 5px;
	text-align: center;
	
	border: solid 1px #000;
	
}
 
div.panel {
	widht: 50%;
	height: 150px;
	display: none;
}

</style>

<style type="text/css">
html, body {min-height:100%;}
body {overflow-y:scroll; cursor:default;}

.fixed #container-wrapper {position:fixed;left:0;width:100%;}

</style>



</body>
</html>