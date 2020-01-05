<?php

$server     ="localhost";
$dbname     ="kutuphane1";
$kullanici  ="kutuphane";
$sifre      ="kutuphane";

try{
	$conn = new PDO("mysql:host=$server;dbname=$dbname",$kullanici,$sifre);
	$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//echo"veribaglantisi basariyla kuruldu";
}
catch(PDOException $e){
	echo "Hata Olustu:".$e->getMessage();    
}