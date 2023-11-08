<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $idtoanha = $_POST['idtoanha'];
    $floors = laytangbytoanha($idtoanha);
    echo json_encode($floors);

?>