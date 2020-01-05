<?php
try {
    $db =new PDO("mysql:hostname=localhost;dbname=LibrarySystem;charset:utf8","root","");
}
catch (PDOException $e){
    echo $e->getMessage();
}


?>