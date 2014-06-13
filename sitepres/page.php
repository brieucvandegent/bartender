<?php
	ob_start();
    session_start();
    if(!isset($_SESSION['Username'])){
         header("Location: login.php");
    }
    
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Member Area </title>
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
	</style>
</head>

<body>
<div class="success"><p>Bonjour <?php echo $_SESSION['Username']	; ?>, tu peux maintenant utiliser l'app Bartender</p></div>
</body>
</html>
