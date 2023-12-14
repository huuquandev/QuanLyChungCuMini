<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $idtoanha = $_POST['idtoanha'];
    $Rooms = layphongbytoanha($idtoanha);
    echo json_encode($Rooms);

?>