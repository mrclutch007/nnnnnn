<?php
require "header1.php";
?>

<main>


<?php

if (isset($_SESSION['userId'])) { // eger kullanici giris yaparsa , tum olaylar bu if in altinda olmasi gerek
  echo '<div class="card-body">
        <p class="login-status">Basariyla giris yaptiniz!</p>
        <p>2 Asamali Dogrulama kodunuzu giriniz</p>
        </div>';

  include '2fa.php'; // eğer kullanici basariyla giris yaparsa , 2fa ya yonlendirilir

}
else { // eger kullanici giris yapamazsa , tum offline isler bunun altinda olmali
  echo '<div class="card-body">
    <p class="login-status">Su an bagli degilsiniz</p>
    </div>';
}

 ?>


 <?php // Facebook ile giris tarafi



 require_once 'Facebook/autoload.php';
 require_once 'Facebook/Facebook.php';

 $fb = new Facebook\Facebook([
   'app_id' => '2659133240842943',
   'app_secret' => 'c075d71e22db9b56b8937abb1c445a7d',
 ]);

 $helper = $fb -> getRedirectLoginHelper();
 $loginUrl = $helper -> getLoginUrl('fb-callback.php'); //callback php gostermen lazim

//echo '<a href="'.$loginUrl.'">Facebook ile Giris Yap</a>';



  ?>


</main>

<?php
require "footer1.php";
?>
