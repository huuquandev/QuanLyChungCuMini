<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $nguoidung = lay_all_nguoi_dung();
    echo json_encode($nguoidung);

?>