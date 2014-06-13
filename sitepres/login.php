<?php



include ('database_connection.php');
include ('check-login.php');


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Connextion | Bartender</title>
<style>
	body {background: url(images/login.jpg) no-repeat;
		background-size: cover;
		color: #565656;
		font-family: 'lato';
		font-weight: 400;
		font-size: 20px;

	}
	
	.errormsgbox, .warning, .success {
		margin: 150px auto;
		margin-bottom: 0px;
		padding: 1px 15px 40px 15px;
		border-radius: 3px;
		display: block;
		width: 300px;
		background: rgba(255,255,255, 0.8);
		position: relative;
	}
	a {color: #565656;}
	
	fieldset {
margin: auto;
width: 300px;
border: 0px;
color: #565656;
margin-top: 0px;
background: rgba(255, 255, 255, 0.8);
border-radius: 3px;

	}
	
	fieldset input {float: right;
		height: 30px;
		display: block;
	}
	
	fieldset label {
	height: 30px;
	
	width: 120px;
	
	}
	
	.elements {
		height: 40px;
	}

	
	fieldset legend {
		color: #565656;
		margin:  0px auto;
		padding-top: 50px;
		font-weight: 600;
	}
	
	input[type="submit"]{
 cursor:pointer;
 width: 150px;
 height: 30px;
 background: #565656;
 color: #FFF;
 border: none;
 display: block;
 
 
 
}
input[type="submit"]:hover{
 cursor:pointer;
 width: 150px;
 height: 30px;
 background: none;
 color: #565656;
 border: 2px solid #565656;
 
 
}
</style>
</head>
<body>


<form action="login.php" method="post" class="registration_form">
  <fieldset>
    <legend>Connexion</legend>

    <p>Entre tes identifiants </p>
    
    <div class="elements">
      <label for="name">E-mail :</label>
      <input type="text" id="e-mail" name="e-mail" size="25" />
    </div>
  
    <div class="elements">
      <label for="Password">Password:</label>
      <input type="password" id="Password" name="Password" size="25" />
    </div>
    <div class="submit">
     <input type="hidden" name="formsubmitted" value="TRUE" />
      <input type="submit" value="Entrer" /> <a href="signup.php">S'inscrire</a>
    </div>
  </fieldset>
</form>

</body>
</html>
