<?php
try {
    $db =new PDO("mysql:hostname=localhost;dbname=kutuphane1;charset:utf8","kutuphane","kutuphane");
}
catch (PDOException $e){
    echo $e->getMessage();
}


?>