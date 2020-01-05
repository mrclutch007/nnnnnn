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
include 'includes/header.php';
?>

<a href="cikis.php">Çıkış Yap</a>
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
    $uye_resim = $_POST['uye_resim'];
    $uye_id = $_POST['uye_id'];

    if (!($uye_sifre && ($uye_mevcut == $uye->uye_sifre) && ($uye_sifre == $uye_tekrar))) {
        $uye_sifre = $uye->uye_sifre;
    }
    $yol = 'images/'.$uye->uye_kadi.substr($_FILES['uye_resim']['name'],-4,4);
    if (move_uploaded_file($_FILES['uye_resim']['tmp_name'],$yol)) {
        $uye_resim = 'http://localhost/librarysystem/'.$yol;
    }
    if (!$uye_resim) $uye_resim = $uye->uye_resim;
    $update = $db->prepare('UPDATE uyeler SET
    uye_kadi = ?,
    uye_sifre = ?,
    uye_ad = ?,
    uye_soyad = ?,
    uye_email = ?,
    uye_tel = ?,
    uye_adres = ?,
    uye_resim = ? WHERE uye_id= ?');
    $uptade->execute([$uye_kadi,$uye_sifre,$uye_ad,$uye_soyad,$uye_email,$uye_tel,$uye_adres,$uye_resim,$uye_id]);
    if ($update) {
        echo "Ayarlar başarıyla güncellenmiştir";
        header('refresh:1; url=index.php');
    }
    else {
        echo "Ayarlar güncellenemedi";
    }
}
?>
<form action="" method="POST" enctype="multipart/form-data">
    <label>Kullanıcı Adı: <input type="text" name="uye_kadi" value="<?=$uye->uye_kadi?>"></label><br>
    <label>Yeni Şifre: <input type="password" name="uye_sifre"></label><br>
    <label>Şifre Tekrar: <input type="password" name="uye_tekrar"></label><br>
    <label>Mevcut Şifre: <input type="password" name="uye_mevcut""></label><br>
    <label>Ad: <input type="text" name="uye_ad" value="<?=$uye->uye_ad?>"></label><br>
    <label>Soyad: <input type="text" name="uye_soyad" value="<?=$uye->uye_soyad?>"></label><br>
    <label>E-Mail: <input type="email" name="uye_email" value="<?=$uye->uye_email?>"></label><br>
    <label>Telefon Numarası: <input type="text" name="uye_tel" value="<?=$uye->uye_tel?>"></label><br>
    <label>Adres: <input type="text" name="uye_adres" value="<?=$uye->uye_adres?>"></label><br>
    <label>Resim: <input type="file" name="uye_resim"><img src="<?=$uye->uye_resim?>" alt=""></label><br>
    <input type="submit" value="Ayarlari Kaydet">
</form>




<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

<?php
include 'includes/footer.php';
?>
</html>