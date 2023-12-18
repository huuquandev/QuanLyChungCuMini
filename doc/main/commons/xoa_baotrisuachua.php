<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';

    $id_baotrisuachua = $_POST['id_baotrisuachua'];

    $response = array();

    if(XoaBaotri_Suachua($id_baotrisuachua)){
        $response['success'] = true;
        $response['id'] = $id_baotrisuachua;
        $response['message'] = 'Xóa thành công';
    }else{
        $response['success'] = false;
        $response['message'] = 'Xóa không thành công';    
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
?>
