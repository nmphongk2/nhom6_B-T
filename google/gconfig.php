<?php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('963908178951-dvi2bcd563fa6pm3rjegc8rduee2cg3g.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/google-login/dashboard.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>