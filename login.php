<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>HEALTH MONITORING</title>

    <style>

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}
#wgtmsr{
 width:260px;
height:40px; 
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: url('img/bg-banner.jpg');
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
button{
	width: 258px;
height: 45px;
font-weight: bold;
background: #bf7171;
border: none;
border-radius: 8px;
}
</style>

    

</head>

<body>

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Health<span>Mon</span></div>
		</div>
		<br><br>
		<div class="login">
		
		<form method="post" action="">
				<input type="text" placeholder="username" name="user"><br><br>
				<select name="wgtmsr" id="wgtmsr">
<option value="kg">Role</option>
<option value="gm">Doctor</option>
<option value="pound">Volunteer</option>
<option value="MetricTon">Manufacturer</option>
</select>
<br><br>
				<input type="password" placeholder="password" name="password"><br><br>
				
				<button type="submit" name="submit" >Login</button>
				</form>
			
		</div>

  

</body>

</html>



<?php

if(isset($_POST['submit'])) {


$username=$_POST['user'];

$password=$_POST['password'];


$host="localhost";

$un="root";

$pwd="";

$db="newdb";

$con=mysqli_connect($host,$un,$pwd,$db);

$sql=mysqli_query($con, "select * from admin where username='$username' and pwd='$password'");


$cnt=mysqli_num_rows($sql);


//echo '<script>alert("'.$cnt.'");</script>';

if($cnt!=1){
	
	echo '<script>alert("Usernamd or Password Wrong");</script>';
}

else {
	
	echo '
	<script>alert("Welcome Admin");
	window.location.href="doctor.php";
	</script>
	';
	
}



}

?>