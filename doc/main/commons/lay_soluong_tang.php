<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $tang = lay_soluong_tang();
    echo json_encode($tang);

?>