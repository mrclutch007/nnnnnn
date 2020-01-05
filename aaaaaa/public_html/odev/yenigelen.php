<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <title>Yeni gelen yayimlar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>


<?php require_once "lib/db.php"; ?>

<?php
/** ekitap verilerini çekme Bölümü */
$ekitap = $db->query("SELECT * FROM ekitap ORDER BY eid DESC LIMIT 3;",PDO::FETCH_OBJ)->fetchAll();

?>

<?php
include 'include/header.php';
?>

<div class="container">
    <h2 class="text-center">Son eklenen e-kitaplar</h2>
    <hr>
    <div class="row">
        <?php foreach ($ekitap as $product) { ?>
            <div class="col"><div class="card" style="width: 15rem;">
                    <img src="images/<?php echo $product->eresim; ?>" class="card-img-top" alt="<?php echo $product->ekitap_adi; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->ekitap_adi; ?></h5>
                        <p class="card-text"><?php echo $product->eyazar_adi; ?></p>
                        <a href="<?php echo $product->ekitap_link; ?>" class="btn btn-primary"><i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        <?php } ?>
        
        
        <?php
/** kitap verilerini çekme Bölümü 2 */
$kitap = $db->query("SELECT * FROM kitap ORDER BY id DESC LIMIT 3;",PDO::FETCH_OBJ)->fetchAll();

?>
        
        <div class="container">
            <h2 class="text-center">Son eklenen kitaplar</h2>
    <hr>
            <div class="row">
                <?php foreach ($kitap as $product) { ?>
        <div class="col"><div class="card" style="width: 15rem;">
                <img src="images/<?php echo $product->resim; ?>" class="card-img-top" alt="<?php echo $product->kitap_adi; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->kitap_adi; ?></h5>
                    <p class="card-text"><?php echo $product->yazar_adi; ?></p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-thumbs-up"></i></a>
                    <a href="#" class="btn btn-primary"><i class="fas fa-thumbs-down"></i></a>
                    <button id="<?php echo $product->id; ?>" class="btn btn-primary addToCartBtn" role="button">
                        <span class="glyphicon glyphicon-shopping-cart"></span> Ödünç Al
                    </button>
                </div>
            </div>
        </div>
        <?php } ?>
             
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