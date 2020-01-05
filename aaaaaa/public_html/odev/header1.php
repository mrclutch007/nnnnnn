
<?php

session_start();

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1); error_reporting(E_ALL);


 ?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="description" content="This is example">
    <meta name=viewport content="width-device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/227e4b609c.js" crossorigin="anonymous"></script>


    <title></title>


    <!--link rel="stylesheet" href="style.css">-->

    <!--buraya stylesheet gelicek guzel gorunmesi icin-->



</head>

<body>

    <?php include 'include/header.php' ?> 
  
  
   <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card card-signin flex-row my-5">
            <div class="card-img-left d-none d-md-flex">
                 </div>
                
              
  
  <!--
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="LibrarySystem32"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Anasayfa <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="duyuru.html">Duyuru</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admin
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="kitapekle.html">Kitap Ekle-Sil</a>
            <a class="dropdown-item" href="kullaniciekle.html">Kullanıcı Ekle-Sil</a>
          </div>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="sozluk.html">Sözlükler</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kitaplar
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="kitap.html">Kitap</a>
            <a class="dropdown-item" href="sepet.html">Ödünç</a>
            <a class="dropdown-item" href="bagis.html">Bağış</a>
            <a class="dropdown-item" href="yenigelen.html">Yeni Gelen Yayımlar</a>
            <a class="dropdown-item" href="ekitap.html">E-Kitap</a>
          </div>
        </li>
              <li class="nav-item">
          <a class="nav-link" href="iletisim.html">İletişim ve İstek Formu</a>
        </li>
                    <li class="nav-item">
          <a class="nav-link" href="profil.html">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kayit.html">KAYIT OL</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Ara" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
      </form>
    </div>
          </nav>
        <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card card-signin flex-row my-5">
            <div class="card-img-left d-none d-md-flex">
               
            </div>

            <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
              <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                  </div>

  -->
 
  
  
  

<header>

    <nav>
        <a href="#">

        </a>

        <ul>

        </ul>

          <div>
            <div class="col-md"


            <?php
            
            /* <form action="include/login.inc.php" method="post">

                  <div class="form-label-group">
                  <input type="text" name="mailuid" class="form-control" placeholder="Kullanici Adi/EMail....">
                  </div>

                  <div class="form-label-group">
                    <input type="password" name="pwd" class="form-control" placeholder="Sifre...">
                    </div>

                    <div class="card-body">
                    <button class="btn btn-lg btn-primary btn-block btn-success " type="submit" name="login-submit">Giris Yap</button>
                    </div>
                    
                    
                      <form action="include/logout.inc.php" method="post">

                <div class="card-body">
                <button class="form-control mr-sm-2" type="submit" name="logout-submit">Cikis Yap</button>
                </div>

              </form>
              

                */


            if (isset($_SESSION['userId'])) { // eger kullanici giris yaparsa , tum olaylar bu if in altinda olmasi gerek
          
              echo '
              
                    <div class="card-body">
                      <a class="form-control mr-sm-2" href="oturumcikis.php">Cikis Yap</a>
                    </div>
             
              ';
              
              
              
              
            }
            else {
                // eger kullanici giris yapamazsa , tum offline isler bunun altinda olmali
                
              echo '
              
                    <div class="card-body">
                      <a class="btn btn-lg btn-primary btn-block " href="login.php">Giris Yap</a>
                    </div>

                    <div class="card-body">
                      <a class="btn btn-lg btn-primary btn-block " href="signup.php">Kayit Ol</a>
                    </div>

                    <div class="card-body">
                    <a href=".$loginUrl.">Facebook ile Giris Yap</a>
                    </div>

                  </form>';

                  include 'google.php';


            }

             ?>


             <!--
             <div class="card-body">
               <a class="btn btn-lg btn-primary btn-block text-uppercase" href="signup.php">Sign Up</a>
            </div>


          -->


        </div>





    </nav>

    </header>
