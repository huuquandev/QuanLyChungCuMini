<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $nhanvienbaotri = lay_all_nhanvienbaotri();
    echo json_encode($nhanvienbaotri);

?>