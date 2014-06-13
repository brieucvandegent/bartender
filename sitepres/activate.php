<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Activez votre compte</title>


    

</head>
<body><?php
include ('database_connection.php');

if (isset($_GET['email']) && preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $_GET['email']))
{
    $email = $_GET['email'];
}
if (isset($_GET['key']) && (strlen($_GET['key']) == 32))//The Activation key will always be 32 since it is MD5 Hash
{
    $key = $_GET['key'];
}


if (isset($email) && isset($key))
{

    // Update the database to set the "activation" field to null

    $query_activate_account = "UPDATE members SET Activation=NULL WHERE(Email ='$email' AND Activation='$key')LIMIT 1";

   
    $result_activate_account = mysqli_query($dbc, $query_activate_account) ;

    // Print a customized message:
    if (mysqli_affected_rows($dbc) == 1)//if update query was successfull
    {
    echo '<div class="success">Votre compte a été activé, vous pouvez vous <a href="login.php">Connecter</a></div>';

    } else
    {
        echo '<div class="errormsgbox"><p>Désolé, compte non activé. Copiez-collez le lien ou contactez moi. Votre compte est peut-être déja activé.</p></div>';

    }

    mysqli_close($dbc);

} else {
        echo '<div class="errormsgbox">Erreur.</div>';
}


?>
</body>
</html>