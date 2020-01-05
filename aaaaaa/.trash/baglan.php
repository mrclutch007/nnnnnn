<?php

$server     ="localhost";
$dbname     ="kutuphane1";
$kullanici  ="root";
$sifre      ="";

try{
	$conn = new PDO("mysql:host=$server;dbname=$dbname",$kullanici,$sifre);
	$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//echo"veribaglantisi basariyla kuruldu";
}
catch(PDOException $e){
	echo "Hata Olustu:".$e->getMessage();    
}