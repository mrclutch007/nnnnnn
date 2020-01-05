<?php

require_once 'lib/db.php';
if(@$_SESSION['oturum']){
    include 'profil.php';
} else {
    include 'giris.php';
}