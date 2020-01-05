<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Kütüphane"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Anasayfa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hakkımızda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="duyuru.php">Duyuru</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kitap.php">Kitaplar</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kategoriler
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Yazar</a>
                    <a class="dropdown-item" href="#">Kitap Türü</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="iletisim.php">İletişim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kayit.html">KAYIT OL</a>
            </li>
        </ul>
        <form action="kitap.php" method="post" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="<?php if(isset($_GET['arama'])) { echo $_GET['arama']; } else { echo 'Ara'; } ?>" aria-label="Search" name="arama" />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="ara">Ara</button>
        </form>
    </div>
</nav>
