<?php
// veritabanina baglaniyoruz
include('include/baglan.php');
?>
<?php
// veritabanindan tum duyurulari aliyoruz ve tarihe gore siraliyoruz. En son eklenenler en ustte gorunucek
$stmt = $conn->query("SELECT * FROM kullanici ORDER BY kul_adi ASC");
?>

<?php
if(isset($_GET['error'])) {
    switch ($_GET['error']) {
        case 1:
            $error = 'Dosya bir resim değil.';
            break;
        case 2:
            $error = 'Üzgünüz, dosyanız çok büyük.';
            break;
        case 3:
            $error = 'Üzgünüz, sadece JPG, JPEG, PNG & GIF dosyasi yukleyebilirsiniz.';
            break;
        case 4:
            $error = 'Maalesef, dosyanız yüklenirken bir hata oluştu.';
            break;

        default:
            $error = '';
    }
}
?>

<!doctype html>
<html lang="tr">
<?php include 'include/header.php'; ?>

<body>

<div class="container-fluid">
    <div class="container">

        <div class="row">
            <?php if(isset($error) && $error != '') { ?>
                <span class="error-msg"><?php echo $error; ?></span>
            <?php } ?>

            <?php if(isset($_GET['success'])) { ?>
                <span class="success-msg">Kullanıcı başarıyla eklendi.</span>
            <?php } ?>

            <?php if(isset($_GET['silindi'])) { ?>
                <span class="success-msg">Kullanıcı başarıyla silindi.</span>
            <?php } ?>

            <!--Section heading-->
            <h2 class="section-heading h1 pt-4">Kullanıcı Ekle-Sil</h2>
            <!--Section description-->
            <p class="section-description">Eklemek istediğiniz kullanıcı bilgilerini giriniz.</p>
        </div>

        <div class="row">
            <!--Grid column-->
            <div class="col-md-12">
                <form id="kullanici-ekle-form" name="kullanici-ekle-form" action="functions/kullanicieklee.php" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                                <label for="name" class="">Kullanıcı Adı</label>
                                <input type="text" id="name" name="kul_adi" required="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <label for="email" class="">Kullanıcı Şifre</label>
                                <input type="text" id="surname" name="kul_sifre" required="" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-6">
                            <div class="md-form">
                                <label for="name" class="">Ad</label>
                                <input type="text" id="phone" name="kul_ad" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <label for="email" class="">Soyad</label>
                                <input type="text" id="adres" name="kul_soyad" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-12">
                            <label for="email" class="">E-Mail</label>
                            <textarea name="kul_email" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-12">
                            <label for="email" class="">Resim</label>
                            <input type="file" name="kul_resim" id="resim">
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary" name="kgonder">Kullanıcı Ekle</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>


        <div class="row" style="margin-top: 30px;">
            <div class="col-md-12">
                <form id="kitap-sil-form" name="kitap-sil-form" action="functions/kullanicisil.php" method="POST">
                    <div class="md-form">
                        <label for="exampleFormControlSelect1">Silmek istediğiniz kullanıcıyı seçin.</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="kullanici">
                            <?php  while ($row = $stmt->fetch()) { ?>
                                <option value="<?php echo $row['kul_id']; ?>"><?php echo $row['kul_adi']; ?></option>
                            <?php } ?>
                        </select>

                        <div class="center-on-small-only" style="margin-top: 20px;">
                            <button type="submit" class="btn btn-primary" name="kgonder">Kullanıcı Sil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<?php include 'include/footer.php'; ?>

</body>
</html>

