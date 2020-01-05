<?php require_once "lib/db.php"; ?>

<?php
/** Verileri çekme Bölümü */
$kitap = $db->query("SELECT * from kitap",PDO::FETCH_OBJ)->fetchAll();
?>

<?php
if(isset($_POST['ara']) && $_POST['arama'] != '')
{
   $arananKelime = $_POST['arama'];
   // veritabanindan arama yapiliyo
   $kitap = $db->query("SELECT * FROM kitap WHERE kitap_adi LIKE '%".$arananKelime."%' or yazar_adi LIKE '%".$arananKelime."%' ORDER BY tarih DESC",PDO::FETCH_OBJ)->fetchAll();
}
else {
    /** Verileri çekme Bölümü */
    $kitap = $db->query("SELECT * from kitap ORDER BY tarih DESC",PDO::FETCH_OBJ)->fetchAll();
}
?>

<?php
include 'include/header.php';
?>

<div class="container">
    
    <?php if(isset($_POST['ara']) && $_POST['arama'] != '') { ?>
        <div class="row"><span class="error-msg">Aranan kelime: <?php echo $_POST['arama']; ?> </span></div>
    <?php } ?>
          
    <h2 class="text-center">Kitap Listesi</h2>
    <hr>
    <div class="row">
        <?php foreach ($kitap as $product) { ?>
        <div class="col"><div class="card" style="width: 15rem;">
                <a href="kitap1.php?id=<?php echo $product->id; ?>" title="<?php echo $product->kitap_adi; ?>" ><img src="images/<?php echo $product->resim; ?>" class="card-img-top" alt="<?php echo $product->kitap_adi; ?>"></a>
                <div class="card-body">
                    <h5 class="card-title"><a href="kitap1.php?id=<?php echo $product->id; ?>" title="<?php echo $product->kitap_adi; ?>" ><?php echo $product->kitap_adi; ?></a></h5>
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

   
<?php
include 'include/footer.php';
?>

