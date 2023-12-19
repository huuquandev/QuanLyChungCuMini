<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $idtang = $_POST['idtang'];
    $Rooms = layphongbytang($idtang);
    echo json_encode($Rooms);

?>