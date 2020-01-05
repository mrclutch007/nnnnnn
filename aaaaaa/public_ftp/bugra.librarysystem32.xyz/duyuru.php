<?php
// veritabanina baglaniyoruz
include('include/baglan.php'); ?>
<?php
// veritabanindan tum duyurulari aliyoruz ve tarihe gore siraliyoruz. En son eklenenler en ustte gorunucek
$stmt = $conn->query("SELECT * FROM duyuru ORDER BY tarih DESC");
?>

<!doctype html>
<html lang="tr">
  <?php include 'include/header.php';?>

  <body>

      <?php include 'include/navigasyon.php';?>

      <div class="anailetisim container-fluid">
        <div class="container">

            <div class="row">
                <h2>Duyurular</h2>
            </div>
            
            <?php
                // veritabanindan gelen duyurulari goruntuluyoruz
                while ($row = $stmt->fetch()) { ?>

                <div class="row">
                    <h5>[<?php echo date('d.m.Y', strtotime($row['tarih']));  ?>] - <?php echo $row['baslik']; ?></h5>
                    <p><?php echo $row['mesaj']; ?></p>

                    <hr/>
                </div>
            <?php } ?>

        </div>
      </div>

    <?php include 'include/footer.php';?>

  </body>
</html>
 
