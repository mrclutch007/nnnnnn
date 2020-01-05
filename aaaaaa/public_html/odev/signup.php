<?php
require "header1.php";
?>

<main>

    <?php

    if (isset($_GET['error'])) { // eger kullanici kayit olurken bos yer birakirsa hata mesaji
      if ($_GET['error'] == "emptyfields") {
        echo '<p class="signuperror>"Fill in all fields!</p>';
      }
      else if ($_GET['error'] == "invaliduidmail") {
        echo '<p class="signuperror>"Invalid username or email!</p>';
      }
      else if ($_GET['signup'] == "success") {
        echo '<p class="signuperror>"SignUp Successful!</p>';
      }

    }

     ?>

     <div class="card">
  <div class="card-body">

  <h3> Bilgilerinizi giriniz </h3>


    <form class="form-signup" action="include/signup.inc.php" method="post">

        <div class="form-label-group">
            <h5>Kullanici Adi</h5>
        <input type="text" name="uid" class="form-control" placeholder="Kullanici Adi">
        </div>

        <div class="form-label-group">
            <h5>E-mail</h5>
        <input type="text" name="mail" class="form-control" placeholder="Email">
        </div>

        <div class="form-label-group">
            <h5>Sifre</h5>
        <input type="password" name="pwd" class="form-control" placeholder="Sifre">
        </div>

        <div class="form-label-group">
            <h5>Sifreyi Tekrarla</h5>
        <input type="password" name="pwd-repeat" class="form-control" placeholder="Sifre Tekrar">
        </div>

        <div class="card-body">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup-submit">Kayit Ol</button>
        </div>


    </form>

  </div>
</div>

</main>

<?php
require "footer1.php";
?>
