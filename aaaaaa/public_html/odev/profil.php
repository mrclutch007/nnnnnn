<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <title>Kitap Listesi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>


<?php require_once "lib/db.php"; ?>

<?php
include 'include/header.php';
?>
<?php
$query = $db->prepare('SELECT * FROM uyeler WHERE uye_id =?');
$query->execute([$_SESSION['uye_id']]);
$uye = $query->fetch(PDO::FETCH_OBJ);
$id=$uye->uye_id;
if ($_POST) {
    $uye_kadi = $_POST['uye_kadi'];
    $uye_sifre = $_POST['uye_sifre'];
    $uye_tekrar = $_POST['uye_tekrar'];
    $uye_mevcut = $_POST['uye_mevcut'];
    $uye_ad = $_POST['uye_ad'];
    $uye_soyad = $_POST['uye_soyad'];
    $uye_email = $_POST['uye_email'];
    $uye_tel = $_POST['uye_tel'];
    $uye_adres = $_POST['uye_adres'];

    if (!($uye_sifre && ($uye_mevcut == $uye->uye_sifre) && ($uye_sifre == $uye_tekrar))) {
        $uye_sifre = $uye->uye_sifre;
    }
    $update = $db->prepare('UPDATE uyeler SET
    uye_kadi = ?,
    uye_sifre = ?,
    uye_ad = ?,
    uye_soyad = ?,
    uye_email = ?,
    uye_tel = ?,
    uye_adres = ? WHERE uye_id=?');
    $update->execute([$uye_kadi,$uye_sifre,$uye_ad,$uye_soyad,$uye_email,$uye_tel,$uye_adres,$id]);
    if ($update) {
        echo "Ayarlar başarıyla güncellenmiştir";
    }
    else {
        echo "Ayarlar güncellenemedi";
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <form action="" method="POST">
                <label>Kullanıcı Adı: <br><input type="text" name="uye_kadi" value="<?=$uye->uye_kadi?>"></label><br>
                <label>Yeni Şifre: <br><input type="password" name="uye_sifre"></label><br>
                <label>Şifre Tekrar: <br><input type="password" name="uye_tekrar"></label><br>
                <label>Mevcut Şifre: <br><input type="password" name="uye_mevcut""></label><br>
                <label>Ad: <br><input type="text" name="uye_ad" value="<?=$uye->uye_ad?>"></label><br>
        </div>
        <div class="col-sm">
            <label>Soyad: <br><input type="text" name="uye_soyad" value="<?=$uye->uye_soyad?>"></label><br>
            <label>E-Mail: <br><input type="email" name="uye_email" value="<?=$uye->uye_email?>"></label><br>
            <label>Telefon Numarası: <br><input type="text" name="uye_tel" value="<?=$uye->uye_tel?>"></label><br>
            <label>Adres: <br><input type="text" name="uye_adres" value="<?=$uye->uye_adres?>"></label><br>
            <br><input class="btn btn-success" type="submit" value="Ayarlari Kaydet">
            <a href="cikis.php">Çıkış Yap</a>
            </form>
        </div>
    </div>
</div>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

<?php
include 'include/footer.php';
?>
</html>