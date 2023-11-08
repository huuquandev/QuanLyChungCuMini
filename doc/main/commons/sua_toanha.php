<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $idtoanha = $_POST['idtoanha'];
    $tentoanha = $_POST['tentoanha'];
    $diachi = $_POST['diachi'];
    $trangthai = $_POST['trangthai'];
    $so_tang = $_POST['so_tang'];
    $tinhanh = $_POST['tinhanh'];
    $quanhuyen = $_POST['quanhuyen'];
    $phuongxa = $_POST['phuongxa'];
    if(SuaToaNha($tentoanha, $diachi, $trangthai, $so_tang, $tinhanh, $quanhuyen, $phuongxa, $id_toanha)){
        echo "Sửa thành công";
    }else{
        echo "Sửa thát bại";
    }
?>