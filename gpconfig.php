<?php
session_start();
include_once 'libraries/google-client/Google_Client.php';
include_once 'libraries/google-client/contrib/Google_Oauth2Service.php';

$client_id ='688607636536-qcs12g77iu3rqt9sarnvbhegj75vdksq.apps.googleusercontent.com'; // Google client ID
$client_secret = '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'; // Google Client Secret
$redirect_url = 'https://github.com/maspithie/hotspot/blob/main/google.php'; // Callback URL

// Call Google API
$gclient = new Google_Client();
$gclient->setClientId($client_id); 
$gclient->setClientSecret($client_secret); 
$gclient->setRedirectUri($redirect_url); 

$google_oauthv2 = new Google_Oauth2Service($gclient);
?>
