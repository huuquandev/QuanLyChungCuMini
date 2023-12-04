<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $id_phong = $_POST['id'];
    $ten_phong = $_POST['ten_phong'];
    $id_toanha = $_POST['id_toanha'];
    $id_tang = $_POST['id_tang'];
    $tien_thue = $_POST['tien_thue'];
    $tien_coc = $_POST['tien_coc'];
    $dien_tich = $_POST['dien_tich'];
    $soluong_nguoio = $_POST['soluong_nguoio'];
    $trang_thai = $_POST['trang_thai'];
    $ten_toanha = $_POST['ten_toanha'];
    $ten_tang = $_POST['ten_tang'];
    $trang_thai_thue = $_POST['trang_thai_thue'];
    $response = array();
    $result = SuaCanho_Phong($ten_phong, $id_toanha, $soluong_nguoio, $tien_thue, $tien_coc, $dien_tich, $trang_thai, $id_tang, $id_phong);
    if ($result && $result != 2) {
        $response['success'] = true;
        $response['id'] = $id_phong;
        $response['ten_phong'] = $ten_phong;
        $response['ten_toanha'] = $ten_toanha;
        $response['ten_tang'] = $ten_tang;
        $response['tien_thue'] = $tien_thue;
        $response['tien_coc'] = $tien_coc;
        $response['dien_tich'] = $dien_tich;
        if ($trang_thai_thue == 1) {
            $response['trangthaithue'] = 'Đang thuê';
        } elseif ($trang_thai_thue == 2) {
            $response['trangthaithue'] = 'Sắp chuyển đi';
        } elseif ($trang_thai_thue == 0) {
            $response['trangthaithue'] = 'Đang trống';
        } elseif ($trang_thai_thue == 3) {
            $response['trangthaithue'] = 'Đang cọc';
        } 
        if ($trang_thai == 1) {
            $response['trangthaihoatdong'] = 'Hoạt động';
        } elseif ($trang_thai == 2) {
            $response['trangthaihoatdong'] = 'Đang sửa chữa';
        } elseif ($trang_thai == 0) {
            $response['trangthaihoatdong'] = 'Không hoạt động';
        }   
          
        $response['iDtrangthaithue'] = $trang_thai;
        $response['iDtrangthaihoatdong'] = $trang_thai;
        $response['message'] = 'Cập nhật thành công';
    } else if($result == 2) {
        $response['success'] = false;
        $response['message'] = 'Tên phòng đã tồn tại';
    }else {
        $response['success'] = false;
        $response['message'] = 'Cập nhật không thành công';
    }
    
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
?>