<?php

include('../include/baglan.php');

if(isset($_POST['gonder']))
{
	// getting Post values
	$isim=$_POST['isim'];
	$soyisim=$_POST['soyisim'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$mesaj=$_POST['mesaj'];
	$uip = $_SERVER ['REMOTE_ADDR'];
	$tarih = date('Y-m-d H:i:s');

	// Insert quaery
	$sql="INSERT INTO  iletisim(isim,soyisim,email,tel,mesaj,user_ip, tarih) VALUES(:isim,:soyisim,:email,:tel,:mesaj,:uip, :tarih)";
	$query = $conn->prepare($sql);
	// Bind parameters
	$query->bindParam(':isim',$isim,PDO::PARAM_STR);
	$query->bindParam(':soyisim',$soyisim,PDO::PARAM_STR);
	$query->bindParam(':email',$email,PDO::PARAM_STR);
	$query->bindParam(':tel',$tel,PDO::PARAM_STR);
	$query->bindParam(':mesaj',$mesaj,PDO::PARAM_STR);
	$query->bindParam(':uip',$uip,PDO::PARAM_STR);
	$query->bindParam(':tarih',$tarih,PDO::PARAM_STR);

	$query->execute();
	$lastInsertId = $conn->lastInsertId();
	if($lastInsertId)
	{
		//mail function for sending mail
		$to = 'bugraozturk98@hotmail.com';
		$headers = "MIME-Version: 1.0"."\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";

		$ms ="<html></body><div>
		<div><b>İsim:</b> $isim,</div>
		<div><b>Soyisim:</b> $soyisim,</div>
		<div><b>Email:</b> $email,</div>
		<div><b>Tel:</b> $tel,</div>";
		$ms.="<div style='padding-top:8px;'><b>Mesaj : </b>$mesaj</div><div></div></body></html>";
		
		mail($to,'İletisim',$ms,$headers);

                header('Location: ../iletisim.php?success=true');
                exit();
	}
	else
	{
		header('Location: ../iletisim.php?error=true');
                exit();
	}
}

?>