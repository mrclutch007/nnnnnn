<?php
require_once "lib/db.php" ?>
<?php if (@$_SESSION['oturum'])
    header('Location:anasayfa.php'); ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giris Yap</title>
</head>
<body>
<?php
if($_POST) {
    $uye_kadi = trim($_POST['uye_kadi']);
    $uye_sifre = trim($_POST['uye_sifre']);
        if (!$uye_kadi || !$uye_sifre) {
            echo 'Lütfen istenilen bilgileri girin';
        }
        else {
            $query = $db->prepare("SELECT * FROM uyeler WHERE uye_kadi=? && uye_sifre =?");
            $query->bindParam(1,$uye_kadi);
            $query->bindParam(2,$uye_sifre);
            $query->execute();
            if ($query->rowCount() > 0){
                $uye = $query->fetch(PDO::FETCH_OBJ);
                $_SESSION['oturum'] = true;
                $_SESSION['uye_kadi'] = $uye->uye_kadi;
                $_SESSION['uye_id'] = $uye->uye_id;
                header('Location:anasayfa.php');
            }
            else {
                echo 'Girdiginiz Bilgiler Yanlış';
            }
        }


}
?>
<form action="" method="POST">
    <label>Kullanici Adi : <input type="text" name="uye_kadi"></label>
    <label>Sifre : <input type="password" name="uye_sifre"></label>
    <input type="submit" value="Giris Yap">
</form>

</body>
</html>
