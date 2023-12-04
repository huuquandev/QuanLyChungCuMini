<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';

    $idhopdong = $_POST['idhopdong'];
    // echo $idtoanha;

    if(xoa_HopDong($idhopdong)){
        echo "Xóa thành công";
    }else{
        echo "Xóa thát bại";
    }
?>
