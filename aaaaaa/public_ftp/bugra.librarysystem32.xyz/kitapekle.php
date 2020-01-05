<?php
// veritabanina baglaniyoruz
include('include/baglan.php');
?>
<?php
// veritabanindan tum duyurulari aliyoruz ve tarihe gore siraliyoruz. En son eklenenler en ustte gorunucek
$stmt = $conn->query("SELECT * FROM kitap ORDER BY kitap_adi ASC");
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

        <?php include 'include/navigasyon.php'; ?>

        <div class="container-fluid">
            <div class="container">

                <div class="row">
                    <?php if(isset($error) && $error != '') { ?>
                        <span class="error-msg"><?php echo $error; ?></span>
                    <?php } ?>

                    <?php if(isset($_GET['success'])) { ?>
                        <span class="success-msg">Kitap başarıyla yüklendi.</span>
                    <?php } ?>

                    <?php if(isset($_GET['silindi'])) { ?>
                        <span class="success-msg">Kitap başarıyla silindi.</span>
                    <?php } ?>

                    <!--Section heading-->
                    <h2 class="section-heading h1 pt-4">Kitap Ekle-Sil</h2>
                    <!--Section description-->
                    <p class="section-description">Eklemek istediğiniz kitap bilgilerini giriniz.</p>
                </div>

                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12">
                        <form id="kitap-ekle-form" name="kitap-ekle-form" action="functions/kitapekle.php" method="POST" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <label for="name" class="">Kitap Adı</label>
                                        <input type="text" id="name" name="kitap_adi" required="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <label for="email" class="">Yazar Adı</label>
                                        <input type="text" id="surname" name="yazar_adi" required="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <label for="name" class="">Basımevi</label>
                                        <input type="text" id="phone" name="basimevi" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <label for="email" class="">Basım Yılı</label>
                                        <input type="text" id="adres" name="basim_yili" class="form-control">
                                    </div>
                                </div>                               
                            </div>

                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-12">
                                    <label for="email" class="">Bilgi</label>
                                    <textarea name="bilgi" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-12">
                                    <label for="email" class="">Resim</label>
                                    <input type="file" name="resim" id="resim">
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary" name="gonder">Kitap Ekle</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                               

                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-12">
                        <form id="kitap-sil-form" name="kitap-sil-form" action="functions/kitapsil.php" method="POST">
                            <div class="md-form">
                                <label for="exampleFormControlSelect1">Silmek istediğiniz kitabı seçin.</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="kitap">
                                    <?php  while ($row = $stmt->fetch()) { ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['kitap_adi']; ?></option>
                                    <?php } ?>
                                </select>
                                
                                <div class="center-on-small-only" style="margin-top: 20px;">
                                    <button type="submit" class="btn btn-primary" name="gonder">Kitap Sil</button>
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

