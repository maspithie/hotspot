<?php
session_start();
include_once 'libraries/google-client/Google_Client.php';
include_once 'libraries/google-client/contrib/Google_Oauth2Service.php';

$client_id ='688607636536-mdb8hq1ht6bmju6p77e2ije7u4m3csv5.apps.googleusercontent.com'; // Google client ID
$client_secret = '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'; // Google Client Secret
$redirect_url = 'https://mikrothie.oool.ooo/google.php'; // Callback URL

// Call Google API
$gclient = new Google_Client();
$gclient->setClientId($client_id); 
$gclient->setClientSecret($client_secret); 
$gclient->setRedirectUri($redirect_url); 

$google_oauthv2 = new Google_Oauth2Service($gclient);
?>
