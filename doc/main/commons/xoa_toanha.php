<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';

    $idtoanha = $_POST['idtoanha'];

    $response = array();

    if(XoaToaNha($idtoanha)){
        $response['success'] = true;
        $response['id'] = $idtoanha;
        $response['message'] = 'Xóa thành công';
    }else{
        $response['success'] = false;
        $response['message'] = 'Xóa không thành công';    
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
?>
