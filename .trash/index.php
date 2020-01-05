<?php
include 'includes/header.php';
?>
    <div class="container mt-3">
    
        <div class="row">
            <div class="col-lg-8 col-sm-12"><div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/kutuphane-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/kutuphane2_16_9_1522063639.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/preview_bedales_library__1920___1080_-900-x-600-900x580.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div>
            <div class="col-lg-4 col-sm-12">
        <div class="card card-signin mb-5">
          <div class="card-body">
            <h5 class="card-title text-center">Giriş Yap</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email adres</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Şifre</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Şifreyi Hatırla</label>
              </div>
              <!-- Button trigger modal -->
<button type="submit" class="btn btn-primary text-uppercase" data-toggle="modal" data-target="#exampleModal">
  Giriş Yap
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">2 Faktörlü Doğrulama</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Lütfen gönderilen kodu giriniz</p>
        <input type="text" class="form-control" placeholder="Lütfen kodu giriniz.">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
        <button type="button" class="btn btn-primary">Onayla</button>
      </div>
    </div>
  </div>
</div>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Google ile Giriş Yap</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Facebook ile Giriş Yap</button>
            </form>
          </div>
        </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                  <img class="card-img-top" src="images/logo.png" alt="Card 1">
                  <div class="card-body">
                    <h5 class="card-title">Kitap</h5>
                    <p class="card-text">Kütüphanemizde mevcut olan kitapları gör.</p>
                    <a href="kitap.html" class="btn btn-primary">Daha Fazlası...</a>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                  <img class="card-img-top" src="images/logo.png" alt="Card 1">
                  <div class="card-body">
                    <h5 class="card-title">Yeni Gelen Yayımlar</h5>
                    <p class="card-text">Kütüphanemize yeni gelen yayımları gör.</p>
                    <a href="yenigelen.html" class="btn btn-primary">Daha Fazlası...</a>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card">
                  <img class="card-img-top" src="images/logo.png" alt="Card 1">
                  <div class="card-body">
                    <h5 class="card-title">E-Kitap</h5>
                    <p class="card-text">Kütüphanemizde mevcut e-kitapları gör.</p>
                    <a href="ekitap.html" class="btn btn-primary">Daha Fazlası...</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
 
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    
<?php
include 'includes/footer.php';
?>