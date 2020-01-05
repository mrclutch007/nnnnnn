<?php

require_once '../PHPGangsta/GoogleAuthenticator.php';
//M66XPGTHAZPXSCBP
$ga = new PHPGangsta_GoogleAuthenticator();

$secret = $ga -> createSecret();
echo $secret. '<br />';

$qr = $ga -> getQRCodeGoogleUrl('Tutorial', $secret);
echo '<img src"' .$qr. '" />';

$myCode = $ga -> getCode($secret);

$result = $ga -> verifyCode($secret, $myCode, 3);

echo $result;


 ?>
