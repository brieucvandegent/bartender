<?php

/*Define constant to connect to database */
DEFINE('DATABASE_USER', 'bvandegeforum');
DEFINE('DATABASE_PASSWORD', 'ZzbK3TXtsEsR');
DEFINE('DATABASE_HOST', 'mysql51-125.perso');
DEFINE('DATABASE_NAME', 'bvandegeforum');
/*Default time zone ,to be able to send mail */
date_default_timezone_set('UTC');

/*You might not need this */
ini_set('SMTP', "mail.myt.mu"); // Overide The Default Php.ini settings for sending mail


//This is the address that will appear coming from ( Sender )
define('EMAIL', 'Support@bartender.com');

/*Define the root url where the script will be found such as http://website.com or http://website.com/Folder/ */
DEFINE('WEBSITE_URL', 'http://b-vandegent.be/bartender/sitepres');


// Make the connection:
$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,
    DATABASE_NAME);

if (!$dbc) {
    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}

?>