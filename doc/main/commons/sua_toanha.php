<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $id = $_POST['id'];
    $tentoanha = $_POST['tentoanha'];
    $diachi = $_POST['diachi'];
    $trangthai = $_POST['trangthai'];
    $so_tang = $_POST['so_tang'];

    $response = array();
    $result = SuaToaNha($tentoanha, $diachi, $trangthai, $so_tang, $id);
    if ($result == true) {
        $response['success'] = true;
        $response['id'] = $id;
        $response['ten_toanha'] = $tentoanha;
        $response['so_tang'] = $so_tang;
        $response['diachi'] = $$diachi;
        $response['trangthai'] = ($trangthai == 1) ? 'Hoạt động' : 'Không hoạt động';
        $response['iDtrangthai'] = $trangthai;
        $response['message'] = 'Cập nhật thành công';
    } else if($result == 2){
        $response['success'] = false;
        $response['message'] = 'Tên tòa nhà đã tồn tại';
    } else{
        $response['success'] = false;
        $response['message'] = 'Cập nhật không thành công';
    }
    
    
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
?>