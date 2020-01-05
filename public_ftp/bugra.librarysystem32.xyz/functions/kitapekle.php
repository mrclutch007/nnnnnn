<?php

include('../include/baglan.php');

if(isset($_POST['gonder']))
{

    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["resim"]["name"]);
    $uploadOk = 1;
    $error = '';
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["resim"]["tmp_name"]);
    if($check === false) {
        //"Dosya bir resim değil.";
        $error = 1;
        $uploadOk = 0;
    }

    // dosya buyuklugu
    if ($_FILES["resim"]["size"] > 500000) {
        //"Üzgünüz, dosyanız çok büyük.";
        $error = 2;
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        //"Üzgünüz, sadece JPG, JPEG, PNG & GIF dosyasi yukleyebilirsiniz.";
        $error = 3;
        $uploadOk = 0;
    }

    if (!move_uploaded_file($_FILES["resim"]["tmp_name"], $target_file)) {
        //"Maalesef, dosyanız yüklenirken bir hata oluştu.";
        $error = 4;
        $uploadOk = 0;
    }

    if(!$uploadOk) {
        header('Location: ../kitapekle.php?error='.$error);
        exit();
    }

	// getting Post values
	$kitapAdi=$_POST['kitap_adi'];
	$yazarAdi=$_POST['yazar_adi'];
	$basimevi=$_POST['basimevi'];
	$basimYili=$_POST['basim_yili'];
	$bilgi=$_POST['bilgi'];
	$tarih = date('Y-m-d H:i:s');

	// Insert quaery
	$sql="INSERT INTO  kitap (kitap_adi,yazar_adi,basimevi,basim_yili,bilgi,resim,tarih) VALUES(:kitap_adi,:yazar_adi,:basimevi,:basim_yili,:bilgi,:resim,:tarih)";
	$query = $conn->prepare($sql);
	// Bind parameters
	$query->bindParam(':kitap_adi',$kitapAdi,PDO::PARAM_STR);
	$query->bindParam(':yazar_adi',$yazarAdi,PDO::PARAM_STR);
	$query->bindParam(':basimevi',$basimevi,PDO::PARAM_STR);
	$query->bindParam(':basim_yili',$basimYili,PDO::PARAM_STR);
	$query->bindParam(':bilgi',$bilgi,PDO::PARAM_STR);
        $query->bindParam(':resim',$_FILES["resim"]["name"],PDO::PARAM_STR);
	$query->bindParam(':tarih',$tarih,PDO::PARAM_STR);

	$query->execute();

        $lastInsertId = $conn->lastInsertId();
	if($lastInsertId)
	{
            header('Location: ../kitapekle.php?success=true');
            exit();
        }
        
}

?>