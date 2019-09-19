<?php

?><!DOCTYPE html>
<html>
<head>
	<title>The documentation</title>
</head>
<body>
<br><br>
<b>Expected POST Variables(Register)</b>
<UL>
	
	<li>username</li>
	<li>email</li>
	<li>password</li>
</UL>
<br>
<b>Expected POST Variables(Login)</b>
<UL>
	<li>email</li>
	<li>password</li>
</UL>
<br><br><br><br>
index.php/register

<b>On Success</b>
{"error":0,"successMessage":"New Account Registered","report":"registered"}
index.php/register
<br>
<br>
<b>On failed</b>
{"error":1,"errorMessage":"Email Exist already","report":"emailExists"}
<br><br>
/index.php/register
<b>On failed(empty email or password)</b>

{"error":1,"errorMessage":"Email and password can not be empty","report":"emptyemailorpassword"}

<br><br>
index.php/login
<b>On Success Login Authentication</b>

{"error":0,"successMessage":"New Account Registered","report":"logged_in"}
<br><br>
index.php/login
<b>On failed Login Authentication</b>

{"error":1,"errorMessage":"Incorrect Password","report":"incorrectdetails"}

<br>
index.php/login
<b>On Email not found</b>

{"error":1,"errorMessage":"Either the Email is Incorrect or Acount not exists","report":"accountnotexists"}




<br>

{"error":1,"errorMessage":"You are not logged in","report":"logged_out"}
<br><br>
<b> To logout</b>
<br>
/indexp.php/logout
it returns
{"error":0,"successMessage":"User Logged out Successfully","report":"logged_out"}




</body>
</html>













?>