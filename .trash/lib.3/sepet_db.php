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

    if (array_key_exists($product_item->kitap_id, $kitaplar)){
        $kitaplar[$product_item->kitap_id]->count++;
    } else {
        $kitaplar[$product_item->kitap_id] = $product_item;
    }

    $toplam_adet = 0 ;

    foreach ($kitaplar as $product){
        $toplam_adet += $product->count;
    }


    $_SESSION["shoppingCart"]["kitaplar"] = $kitaplar;
    $_SESSION["shoppingCart"]["summary"] = $toplam_adet;

    return $toplam_adet;
}
function removeFromCart($kitap_id){
    if (isset($_SESSION["shoppingCart"])){
        $shoppingCart = $_SESSION["shoppingCart"];
        $kitaplar = $shoppingCart["kitaplar"];
        if (array_key_exists($kitap_id,$kitaplar)) {
            unset($kitaplar[$kitap_id]);
        }
    }
    $toplam_adet = 0 ;

    foreach ($kitaplar as $product){
        $toplam_adet += $product->count;
    }

    $summary[$toplam_adet] = $toplam_adet;

    $_SESSION["shoppingCart"]["kitaplar"] = $kitaplar;
    $_SESSION["shoppingCart"]["summary"] = $summary;

    return true;

}
function incCount($kitap_id){
    if (isset($_SESSION["shoppingCart"])){
        $shoppingCart = $_SESSION["shoppingCart"];
        $kitaplar = $shoppingCart["kitaplar"];

        if (array_key_exists($kitap_id, $kitaplar)){
            $kitaplar[$kitap_id]->count++;
        }

        $toplam_adet = 0 ;

        foreach ($kitaplar as $product){
            $toplam_adet += $product->count;
        }

        $summary[$toplam_adet] = $toplam_adet;

        $_SESSION["shoppingCart"]["kitaplar"] = $kitaplar;
        $_SESSION["shoppingCart"]["summary"] = $summary;

        return true;

    }

}
function decCount($kitap_id){
    if (isset($_SESSION["shoppingCart"])){
        $shoppingCart = $_SESSION["shoppingCart"];
        $kitaplar = $shoppingCart["kitaplar"];

        if (array_key_exists($kitap_id, $kitaplar)){
            $kitaplar[$kitap_id]->count--;
        }

        $toplam_adet = 0 ;

        foreach ($kitaplar as $product){
            $toplam_adet += $product->count;
        }

        $summary[$toplam_adet] = $toplam_adet;

        $_SESSION["shoppingCart"]["kitaplar"] = $kitaplar;
        $_SESSION["shoppingCart"]["summary"] = $summary;

        return true;

    }

}
if(isset($_POST["p"])){
    $islem = $_POST["p"];
    echo $islem;

    if ($islem == "addToCart"){
        $kitap_id=$_POST["kitap_id"];
        $product = $db->query("SELECT * FROM kitaplar WHERE kitap_id={$kitap_id}",PDO::FETCH_OBJ)->fetch();
        $product->count = 1;
        echo addToCart($product);
    }
    else if ($islem == "removeFromCart"){
        $kitap_id = $_POST['kitap_id'];
        echo removeFromCart($kitap_id);
    }
}
if(isset($_GET["p"])){
    $islem = $_GET["p"];
    echo $islem;

    if ($islem == "incCount"){
        $kitap_id=$_GET["kitap_id"];
        if(incCount($kitap_id)){
            header("Location:../sepet.php");
        }
    }
    else if ($islem == "decCount"){
        $kitap_id = $_GET['kitap_id'];
        if(decCount($kitap_id)){
            header("Location:../sepet.php");
        }
    }
}



