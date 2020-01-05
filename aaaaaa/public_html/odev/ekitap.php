<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <title>E-Kitap Listesi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>


<?php require_once "lib/db.php"; ?>

<?php
/** Verileri çekme Bölümü */
$ekitap = $db->query("SELECT * from ekitap",PDO::FETCH_OBJ)->fetchAll();
?>

<?php
include 'include/header.php';
?>

<div class="container">
    <h2 class="text-center">E-Kitap Listesi</h2>
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
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

<?php
include 'include/footer.php';
?>
</html>