<?php
include ('check-signup.php');





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<title>Inscription | Bartender</title>
<style>
	body {background: url(images/signup.jpg) no-repeat;
		background-size: cover;
		color: #565656;
		font-family: 'lato';
		font-weight: 400;
		font-size: 20px;

	}
	
	.errormsgbox , .success, .warning {
		margin: 150px auto;
		margin-bottom: 0px;
		padding: 1px 15px 40px 15px;
		border-radius: 3px;
		display: block;
		width: 300;
		background: rgba(255,255,255, 0.8);
		position: relative;
	}
	
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

<form action="signup.php" method="post" class="registration_form">
  <fieldset>
    <legend>Inscription </legend>

    <p>Nouveau compte</p>
    
    <div class="elements">
      <label for="name">Nom :</label>
      <input type="text" id="name" name="name" size="25" />
    </div>
    <div class="elements">
      <label for="e-mail">E-mail :</label>
      <input type="text" id="e-mail" name="e-mail" size="25" />
    </div>
    <div class="elements">
      <label for="Password">Password:</label>
      <input type="password" id="Password" name="Password" size="25" />
    </div>
    <div class="submit">
     <input type="hidden" name="formsubmitted" value="TRUE" />
      <input type="submit" value="Envoyer" />
    </div>
  </fieldset>
</form>
</body>
</html>