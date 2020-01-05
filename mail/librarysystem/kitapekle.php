<?php
include 'includes/header.php';
?>
      
               <!--Section heading-->
    <h2 class="section-heading h1 pt-4">Kitap Ekle-Sil</h2>
    <!--Section description-->
    <p class="section-description">Eklemek istediğiniz kitap bilgilerini giriniz.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-8 col-xl-9">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Kitap Adı</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="surname" name="surname" class="form-control">
                            <label for="email" class="">Yazar Adı</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="phone" name="phone" class="form-control">
                            <label for="name" class="">Basımevi</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" id="adres" name="adres" class="form-control">
                            <label for="email" class="">Basım Yılı</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->


                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="center-on-small-only">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Kitap Ekle</a>
            </div>
            <p></p>
                      <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                               <label for="exampleFormControlSelect1">Silmek istediğiniz kitabı seçin.</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>kitap1</option>
                                <option>kitap2</option>
                                <option>kitap3</option>
                                <option>kitap4</option>
                                <option>kitap5</option>
                                </select>
                <p></p>
                            <div class="center-on-small-only">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Kitap Sil</a>
            </div>
                        </div>
                    </div>       
                </div>
            <div class="status"></div>
        </div>
    
    </div>
      
<?php
include 'includes/footer.php';
?>