<?php
// veritabanina baglaniyoruz
include('include/baglan.php'); ?>
<?php
if(isset($_POST['ara']) && $_POST['arama'] != '')
{
   $arananKelime = $_POST['arama'];
   // veritabanindan arama yapiliyo
   $stmt = $conn->query("SELECT * FROM kitap WHERE kitap_adi LIKE '%".$arananKelime."%' or yazar_adi LIKE '%".$arananKelime."%' ORDER BY tarih DESC");
}
else {
    // veritabanindan tum kitaplari aliyoruz ve ekleme tarihine gore siraliyoruz. En son eklenenler en ustte gorunucek
    $stmt = $conn->query("SELECT * FROM kitap ORDER BY tarih DESC");
}
?>

<!doctype html>
<html lang="tr">
  <?php include 'include/header.php';?>

  <body>

      <?php include 'include/navigasyon.php';?>

      <div class="container">

          <?php if(isset($_POST['ara']) && $_POST['arama'] != '') { ?>
                <div class="row"><span class="error-msg">Aranan kelime: <?php echo $_POST['arama']; ?> </span></div>
          <?php } ?>

          <div class="row">
               <?php
                // veritabanindan gelen kitaplari goruntuluyoruz
                while ($row = $stmt->fetch()) { ?>
                    <div class="col" style="padding: 10px 0;"><div class="card" style="width: 15rem;">
                        <a href="kitap1.php?id=<?php echo $row['id'] ?>" title="<?php echo $row['kitap_adi']; ?>" ><img src="images/<?php echo $row['resim']; ?>" class="card-img-top" alt="..." /></a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="kitap1.php?id=<?php echo $row['id'] ?>" title="<?php echo $row['kitap_adi']; ?>" ><?php echo $row['kitap_adi']; ?></a></h5>
                            <p class="card-text"><?php echo $row['yazar_adi']; ?></p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-thumbs-up"></i></a>
                            <a href="#" class="btn btn-primary"><i class="fas fa-thumbs-down"></i></a>
                            <a href="#" class="btn btn-primary">Ödünç Al</a>
                        </div>
                    </div></div>
               <?php } ?>
          </div>
      </div>


    <?php include 'include/footer.php';?>

  </body>
</html>
 
