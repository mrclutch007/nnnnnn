<?php require_once "lib/db.php"; ?>

<?php
include 'includes/header.php';
?> 
    <div class="container">
	<div class="row">
		<h2>Kitap bağışlayarak bize destek ol.</h2>
        <div class="col-md-8">
        <form method="POST" action="bagisekle.php">
            <div class="form-group">
                <label for="ad">Adınız :</label>
                <input type="text" class="form-control" id="ad" placeholder="Adınız" required="" name="bagis_ad">
            </div>
            <div class="form-group">
                <label for="ad">Soyadınız :</label>
                <input type="text" class="form-control" id="soyad" placeholder="Soyadınız" required="" name="bagis_soyad">
            </div>
            <div class="form-group">
                <label for="ad">Telefon Numaranız :</label>
                <input type="text" class="form-control" id="tel" placeholder="Telefon Numaranız" required name="bagis_tel">
            </div>
            <div class="form-group">
                <label for="ad">Adresiniz :</label>
                <input type="text" class="form-control" id="adres" placeholder="Adresiniz" required="" name="bagis_adres">
            </div>
            <div class="form-group">
                <label for="ad">Bağışlamak İstediğiniz Kitap :</label>
                <input type="text" class="form-control" id="kitap" placeholder="Kitap Adı" required="" name="bagis_kitap">
            </div>
            <div class="form-group">
                <label for="ad">Mesajınız :</label>
                <input type="text" class="form-control" id="mesaj" placeholder="Mesajınız" required="" name="bagis_mesaj">
            </div>
                    <input type="submit" value="Bağış Yap" onClick='alert("Bağış talebiniz ulaşmıştır.Tesekkür Ederiz")'>
        </form>
</div>

        <div class="col-md-4 col-xl-3">
            <ul class="contact-icons">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p>Bilgi Merkezi 32260 Doğu Yerleşkesi Isparta / Türkiye</p>
                </li>

                <li><i class="fa fa-phone fa-2x"></i>
                    <p>+90 322 322 32 32 - 32000</p>
                </li>

                <li><i class="fa fa-envelope fa-2x"></i>
                    <p>kutuphane@sdu.edu.tr</p>
                </li>
            </ul>
        </div>
    </div>
    </div>

<?php
include 'includes/footer.php';
?>