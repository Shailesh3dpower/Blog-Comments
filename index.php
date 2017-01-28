<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head lang="en">
	<title>Login / Registration Form</title>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   <link rel="stylesheet" href="css/bootstrap.min.css"/>    
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="http://iamrohit.in/lab/js/location.js"></script>
	
	<style>
	   
	html,
	body,
	.view {
	   height: 100%;
	   font-size:12px;
	   
	}

	.view {
	   background: "" no-repeat center center fixed;
	   -webkit-background-size: cover;
	   -moz-background-size: cover;
	   -o-background-size: cover;
	   background-size: cover;
	}

	.form-control {
	  font-size: 12px;
	}
		
	.form-group {
		font-size: 12px;	
	}
	
	.detail {margin-bottom:5px;}
	.panel-default {width: 550px;}
	</style>
	
	<style>
			#container1 {
			 background-color: #e2dada;
			}

			.centered-form {
			 margin-top: 90px;
			 margin-bottom: 0px;
			}

			.centered-form .panel {
			 background: rgba(255, 255, 255, 0.8);
			 box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
			}
	</style>
	
</head>


<body style="background:url('Kranti_Morcha 1920 x 1080.jpg') no-repeat center">

 
		<?php

			
		session_start();
		// remove all session variables
		session_unset(); 

		// destroy the session 
		session_destroy(); 
		

	?>
	
    
<div style="background-color:orange; height:70px;" align="center">

	<div class="col-sm-4"><p>&nbsp;</p>		
		<span style="margin-left:570px;"></span>
	</div>	
	<div class="col-sm-6">	
				<form class="form-inline navbar-form navbar-right"  action="login.php" method="post"> 
 
					
					<div class="form-group"><label class="sr-only" for="email">Email:</label>
				   <input type="email" class="form-control"placeholder="Enter email" name="email" size="15"/>   
					</div>
					<div class="form-group">
					  <label class="sr-only" for="pwd">Password:</label>
					 <input type="password" class="form-control" required placeholder="Enter password" name="password" size="15"/> 
				   
					</div>
					<div class="form-group">
					 <input type="submit"  name="login"  value="Login" class="btn btn-primary" style="width:155px;"/>
					</div>
					 
				
			 </form>

	</div>
</div>	
	
 	
				
	
	<div class="view" align="center">
		<!--Intro content-->
		<div class="full-bg-img flex-center">
			    
			<div class="row centered-form" style="margin-top:110px;">
				<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title text-center"><span class="style2">Please Register to Login</span></h3>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<form class="AdvancedForm" action="register.php" enctype="multipart/form-data" method="post">
									
																		
									<div align="left" class="form-group">
									
									<div class="col-sm-4"><label for="usr">User Name:</label> </div>
									<div class="col-sm-8"><input type="text" name = "fullname" required  class="form-control detail"  placeholder ="Enter Full Name"/></div>
									</div>
									
									<div><p></div>
									
									<div align="left" class="form-group">
										<div class="col-sm-4"><label for="usr">Address:</label> </div>
										<div class="col-sm-8"><input type="text" name = "address" required  class="form-control detail"  placeholder ="Address"/></div>
									</div>
									
									<div><p></div>
									
																			
										<div align="left" class="form-group">
											<div class="col-sm-4"><label for="sel1">Country living in * :</label></div>
											<div class="col-sm-8">   <select   class="form-control countries detail" name="country" id="countryId sel1" >
    																<option value="">Select Country</option>
											  </select>
											
										</div>
										</div>
										
										<div><p></div>
										
										<div align="left" class="form-group">
											<div class="col-sm-4"><label for="sel1">State living in&nbsp;* :</label> </div>
											<div class="col-sm-8">
											
											<select  class="form-control states detail" name="residingstate" id="sel12 stateId">
											   <option value="">Select State</option>
											</select>
											
										</div>
										</div>
										
										<div><p></div>
										
										<div align="left" class="form-group">
											<div class="col-sm-4"><label for="usr">City living in * :</label> </div>
											<div class="col-sm-8"> 
											
											<select  class="form-control cities detail" id="sel13 cityId" name="residingcity">
   												<option value="">Select City</option>
											</select>
																					
											</div>
										</div>

										<div><p></div>
									
									<div align="left" class="form-group">
										<div class="col-sm-4"><label for="usr">Profession:</label> </div>
										<div class="col-sm-8"><input type="text" name = "profession"  class="form-control detail"  placeholder ="Profession"/></div>
									</div>
									
									<div><p></div>
									
									<div align="left" class="form-group">
										<div class="col-sm-4"><label for="usr">Enter Gender:</label></div>
										<div class="col-sm-8"><span class="radio" id="detail" >
											<label><input type="radio" name="gender" value="M" />Male</label> <label><input type="radio" name="gendere" value="F" />Female</label>
										</span></div>
									</div>
									
									<div><p></div>
									<div align="left" class="form-group">
									<div align="left">
										<div class="col-sm-4"><label for="sel1">Date of birth:</label></div>
									</div>
									<div  class="form-inline">
										<div align="left" class="form-group" id="detail" >
										<div class="col-sm-12">	<select name="dayob"  style=" width:78px;" class="form-control" >
			<option value="0" selected="selected">DD</option>
			<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
			
			<select style="width:78px;"  name="monthob"  class="form-control" >
				<option value="0" selected="selected">MM</option>
			<option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">July</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
			
			<select name="yearob" style="width:78px;" class="form-control" >
				<option value="0" selected="selected">YY</option>
			<option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option></select>
										</div>
									</div>
									</div>
								<div><p></div>
								<div align="left">
										<div class="col-sm-4"><label for="sel1">Upload Photo:</label></div>
									</div>
									<div class="form-inline">
										<div align="left" class="form-group"><div class="col-sm-12">
											
										<input name='filename' class='form-control detail' type='file' style="width: 210px;">
										<input type="hidden" class="form-control detail" name="MAX_FILE_SIZE" value="5342888" />
										</div>
									</div>
									</div>
								</div>
								<div><p></div>	
                          
									<div align="left" class="form-group">
										<div class="col-sm-4"><label for="sel1">Mobile Number:</label></div>
									
									
										<div class="col-sm-8">
											
										<input type="text" name="mobile" class="form-control detail" required placeholder = "Mobile Number" />
										
										</div>
										
									</div>
									
									
									<div><p></div>
									
									<div align="left" class="form-group">
										<div class="col-sm-4"><label for="usr">Email ID:</label></div>
										<div class="col-sm-8"> <input type="text" name="email" maxlength="50" required  class="form-control detail"  placeholder="Email ID"/></div>
									</div>
									
									<div><p></div>
									
									<div align="left" class="form-group">
										<div class="col-sm-4"><label for="usr">Login Password:</label></div>
										<div class="col-sm-8"><input type="password" name="password"  maxlength="20" required class="form-control detail" value="" autocomplete="off"/></div>
									</div>
									
									<div><p></div>
									
									<div align="left" class="form-inline">
										
										<div class="col-sm-4"><p>&nbsp;</p></div>
										<div class="col-sm-8"><p>&nbsp;</p><input type="submit" name="Submit" alt="Register Free" value="Register Free" class="btn btn-primary" style="width:155px;"/></div>
									</div>
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
					</div><!--/Intro content-->
	</div><!--/.Mask-->
	<div id="footer" class="footer navbar-fixed-bottom">
		<div class="container">
			<p style="padding-top:5px">&nbsp;</p>
			<p align="center">COPYRIGHT 2017 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.3dpower.in/" target="_blank">3D POWER VISULIZATION PVT. LTD.</a></p>
		</div>
	</div> 
</body>
</html>