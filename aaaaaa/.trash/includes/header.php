<?php
session_start();
if (isset($_SESSION["shoppingCart"])){
    $shoppingCart = $_SESSION["shoppingCart"];
    $toplam_adet = $shoppingCart["summary"][$toplam_adet];
    $shopping_products = $shoppingCart["kitaplar"];

} else {
    $toplam_adet = 0;

}
?>
<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/227e4b609c.js" crossorigin="anonymous"></script>
 
    <title>LibrarySystem32.com</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="images/logo.png" alt="LibrarySystem32"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Anasayfa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="duyuru.php">Duyuru</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="kitapekle.php">Kitap Ekle-Sil</a>
          <a class="dropdown-item" href="kullaniciekle.php">Kullanıcı Ekle-Sil</a>
        </div>
      </li>
              <li class="nav-item">
        <a class="nav-link" href="sozluk.php">Sözlükler</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kitaplar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="kitap.php">Kitap</a>
          <a class="dropdown-item" href="sepet.php">Ödünç</a>
          <a class="dropdown-item" href="bagis.php">Bağış</a>
          <a class="dropdown-item" href="yenigelen.php">Yeni Gelen Yayımlar</a>
          <a class="dropdown-item" href="ekitap.php">E-Kitap</a>
        </div>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="iletisim.php">İletişim ve İstek Formu</a>
      </li>  
                  <li class="nav-item">
        <a class="nav-link" href="profil.php">Profil</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="kayit.php">KAYIT OL</a>
      </li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="sepet.php">
                <span class="fas fa-shopping-cart cart-icon"></span>
                <span class="badge cart-count"><?php echo $toplam_adet; ?></span>
            </a>
        </li>
      </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Ara" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
    </form>
  </div>
        </nav>

