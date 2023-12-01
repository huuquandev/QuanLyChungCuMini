<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';

    $idPhong = $_POST['idPhong'];

    $response = array();

    if(XoaCanho_Phong($idPhong)){
        $response['success'] = true;
        $response['id'] = $idPhong;
        $response['message'] = 'Xóa thành công';
    }else{
        $response['success'] = false;
        $response['message'] = 'Xóa không thành công';    
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
?>
