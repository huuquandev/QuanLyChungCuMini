<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';

    $id_dan_cu = $_POST['idtoanha'];
    // echo $idtoanha;

    if(xoa_dan_cu($id_dan_cu)){
        echo "Xóa thành công";
    }else{
        echo "Xóa thát bại";
    }

?>
