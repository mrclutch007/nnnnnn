 
<!doctype html>
<html lang="tr">

    <?php include 'include/header.php'; ?>

    <body>

        <?php include 'include/navigasyon.php'; ?>

        <div class="anailetisim container-fluid">
            <div class="container">

                <?php if(isset($_GET['success'])) { ?>
                    <span class="success-msg">Form başarıyla gonderildi.</span>
                <?php } ?>

                <?php if(isset($_GET['error'])) { ?>
                    <span class="error-msg">Bir hata olustu. Lutfen tekrar deneyin.</span>
                <?php } ?>

                <div class="row">
                    <div class="col-md-6">
                        <div class="iletisimform">
                            <div class="mbottom">
                                <h2>   İletişim Bilgilerinizi Bırakın  </h2>
                                <p>   Soru, görüş ve önerileriniz için bilgilerinizi bırakın biz sizi arayalım. </p>
                            </div>
                            <form role="form" action="functions/iletisim.php" method="post">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-lg" placeholder="Adınız" required="" name="isim" id="isim" value="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control input-lg" placeholder="Soyadınız" required="" name="soyisim" id="soyisim" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="email" name="email" placeholder="E-Posta Adresiniz" required="" class="form-control input-lg" id="email" value="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="tel" name="tel" placeholder="Telefon" required="" class="form-control input-lg" id="tel" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="mesaj" class="form-control" rows="8" cols="80" placeholder="Mesajınız"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-gonder2 btn-lg" name="gonder">FORMU GÖNDER</button>

                            </form>
                        </div>
                    </div>
                    <div class="col-md-1 text-center aralik1 hidden-xs">
                        <img class="img-responsive" src="http://erkankaratas.com.tr/wp-content/themes/drerkan/resimler/aralik1.png" alt="">
                    </div>
                    <div class="col-md-5 iletisimbilgi">
                        <h2>   İletişim Bilgilerimiz   </h2>
                        <table class="mtop">
                            <tbody><tr>
                                    <td><strong>    Adres:      </strong></td>
                                    <td>Bilgi Merkezi 32260 Doğu Yerleşkesi Isparta / Türkiye
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>   Telefon:    </strong></td>
                                    <td>+90 322 322 32 32 - 32000</td>
                                </tr>
                                <tr>
                                    <td><strong>Fax: </strong></td>
                                    <td>+90 322 322 32 32</td>
                                </tr>
                                <tr>
                                    <td><strong>E-Mail: </strong></td>
                                    <td>kutuphane@sdu.edu.tr</td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d799145.858158566!2d37.63311325804977!3d38.51847076974884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x407636bd3c77fee3%3A0xb4f07b511f605ac1!2sMalatya!5e0!3m2!1str!2str!4v1480479127130" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
        </div>


        <?php include 'include/footer.php';?>

    </body>
</html>
