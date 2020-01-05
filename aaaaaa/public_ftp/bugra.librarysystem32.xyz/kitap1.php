<?php
// veritabanina baglaniyoruz
include('include/baglan.php');
?>
<?php
// veritabanindan tum kitaplari aliyoruz ve ekleme tarihine gore siraliyoruz. En son eklenenler en ustte gorunucek
$stmt = $conn->query("SELECT * FROM kitap WHERE id=".$_GET['id']." LIMIT 1");
$stmt->execute();
$kitap = $stmt->fetch();
?>

<!doctype html>
<html lang="tr">
<?php include 'include/header.php'; ?>

    <body>

<?php include 'include/navigasyon.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="images/<?php echo $kitap['resim']; ?>">
                </div>
                <div class="col-md-5 ">
                    <h2><?php echo $kitap['kitap_adi']; ?></h2>
                    <table class="mtop">
                        <tbody>
                            <tr>
                                <td><strong>    Yazar:      </strong></td>
                                <td><?php echo $kitap['yazar_adi']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>   Basımevi:    </strong></td>
                                <td><?php echo $kitap['basimevi']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Basım yılı: </strong></td>
                                <td><?php echo $kitap['basim_yili']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Bilgi: </strong></td>
                                <td><?php echo $kitap['bilgi']; ?></td>
                            </tr>

                        </tbody>
                    </table>
                    <a href="#" class="btn btn-primary"><i class="fas fa-thumbs-up"></i></a>
                    <a href="#" class="btn btn-primary"><i class="fas fa-thumbs-down"></i></a>
                    <a href="#" class="btn btn-primary">Ödünç Al</a>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"><strong>Yorum Yap</strong></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <button type="button" class="btn btn-primary">Yorum Yap</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


<?php include 'include/footer.php'; ?>

    </body>
</html>

