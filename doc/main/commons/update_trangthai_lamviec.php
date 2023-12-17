<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $id_baotrisuachua = $_POST['id_baotrisuachua'];
    $id_trangthai = $_POST['id_trangthai'];


    $response = array();
    $result = Update_trangthai_congviec($id_baotrisuachua, $id_trangthai);

    if ($result == true) {
        $response['success'] = true;
        $response['id'] = $id_baotrisuachua;
        $response['trangthai'] = $id_trangthai == 1 ? 'Đang làm' : ($id_trangthai == 2 ? 'Chờ duyệt' : ($id_trangthai == 3 ? 'Đã duyệt' : "Không đạt"));
        $response['id_trangthai'] = $id_trangthai;;
    }else {
        $response['success'] = false;
    }
    
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
?>