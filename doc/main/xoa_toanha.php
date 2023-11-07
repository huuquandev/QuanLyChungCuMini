<?php
    include_once '../../function.php';
    include_once '../../components/connect.php';

    $idtoanha = $_POST['idtoanha'];

    if(XoaToaNha($idtoanha)){
        echo "Xóa thành công";
    }else{
        echo "Xóa thát bại";
    }
?>
