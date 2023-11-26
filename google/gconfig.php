<?php


require_once 'vendor/autoload.php';


$google_client = new Google_Client();


$google_client->setClientId('963908178951-dvi2bcd563fa6pm3rjegc8rduee2cg3g.apps.googleusercontent.com');


$google_client->setClientSecret('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');


$google_client->setRedirectUri('http://localhost/google-login/dashboard.php');


$google_client->addScope('email');

$google_client->addScope('profile');


session_start();

?>