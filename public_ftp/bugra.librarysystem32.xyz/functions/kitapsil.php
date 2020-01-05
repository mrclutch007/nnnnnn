<?php

include('../include/baglan.php');

if(isset($_POST['gonder']))
{

    $id = $_POST['kitap'];

    $sql = "DELETE FROM kitap WHERE id = ?";
    $query = $conn->prepare($sql);

    $response = $query->execute(array($id));

    if($response) {
        header('Location: ../kitapekle.php?silindi=true');
        exit();
    }

}

?>