<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';

    $id_taisan = $_POST['id_taisan'];

    $response = array();

    if(Xoa_TaiSan($id_taisan)){
        $response['success'] = true;
        $response['id'] = $id_taisan;
        $response['message'] = 'Xóa thành công';
    }else{
        $response['success'] = false;
        $response['message'] = 'Xóa không thành công';    
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
?>
