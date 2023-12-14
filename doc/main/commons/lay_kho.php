<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $kho = lay_all_kho();
    echo json_encode($kho);

?>