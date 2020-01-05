<?php

session_start();
require_once 'Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '2659133240842943',
  'app_secret' => 'c075d71e22db9b56b8937abb1c445a7d',
]);

$helper = $fb -> getRedirectLoginHelper();

try {
  $accessToken = $helper -> getAccessToken();
} catch (Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Hata Olustu ->' .$e -> getMessage();
}

$token = $accessToken->getValue();
$response = $fb->get('/me?fields=id,name,gender', $accessToken->getValue()); // istenilen bilgileri getirir. biz isim ve cinsiyeti istedik

if($response) {
try {
  $user = $response->getGraphUser();
} catch (Facebook\Exceptions\FacebookResponseException $e) {

  echo "Hata Olustu ->" .$e->getMessage();
}

}

if ($response) {
  echo "<pre>";
  print_r($user);
  echo "<pre>";
}

 ?>
