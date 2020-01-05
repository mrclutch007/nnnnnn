<?php
include "db.php";
session_start();
function addToCart($product_item){
if (isset($_SESSION["shoppingCart"])){
    $shoppingCart = $_SESSION["shoppingCart"];
    $kitaplar = $shoppingCart["kitaplar"];
}   else {

    $kitaplar = array();
}

    if (array_key_exists($product_item->id, $kitaplar)){
        $kitaplar[$product_item->id]->count++;
    } else {
        $kitaplar[$product_item->id] = $product_item;
    }

    $toplam_adet = 0 ;

    foreach ($kitaplar as $product){
        $toplam_adet += $product->count;
    }

    $summary[$toplam_adet] = $toplam_adet;

    $_SESSION["shoppingCart"]["kitaplar"] = $kitaplar;
    $_SESSION["shoppingCart"]["summary"] = $summary;

    return $toplam_adet;
}
function removeFromCart($kitap_id){

}
function incCount($kitap_id){

}
function decCount($kitap_id){

}
if(isset($_POST["p"])){
    $islem = $_POST["p"];
    echo $islem;

    if ($islem == "addToCart"){
        $id=$_POST["kitap_id"];
        $product = $db->query("SELECT * FROM kitaplar WHERE kitap_id={$id}",PDO::FETCH_OBJ)->fetch();
        $product->count = 1;
        echo addToCart($product);
    }
    else if ($islem == "removeFromCart"){

    }
}
?>


