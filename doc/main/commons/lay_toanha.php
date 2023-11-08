<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $idtoanha = $_POST['idtoanha'];
    $toanha = laytoanha($idtoanha);
    echo json_encode($toanha);

?>