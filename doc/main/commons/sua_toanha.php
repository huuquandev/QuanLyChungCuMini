<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $id = $_POST['id'];
    $tentoanha = $_POST['tentoanha'];
    $diachi = $_POST['diachi'];
    $trangthai = $_POST['trangthai'];
    $so_tang = $_POST['so_tang'];
    $tinhthanh = $_POST['tinhthanh'];
    $quanhuyen = $_POST['quanhuyen'];
    $phuongxa = $_POST['phuongxa'];

    $response = array();
    $result = SuaToaNha($tentoanha, $diachi, $trangthai, $so_tang, $tinhthanh, $quanhuyen, $phuongxa, $id);
    if ($result && $result != 2) {
        $response['success'] = true;
        $response['id'] = $id;
        $response['ten_toanha'] = $tentoanha;
        $response['so_tang'] = $so_tang;
        $showaddress = array();
                          if (!empty($diachi)) {
                                  $showaddress[] = $diachi;
                              }
                              if (!empty($tinhthanh)) {
                                  $showaddress[] = $tinhthanh;
                              }
                              if (!empty($quanhuyen)) {
                                  $showaddress[] = $quanhuyen;
                              }
                              if (!empty($phuongxa)) {
                                  $showaddress[] = $phuongxa;
                              }
                              $show_address = implode(', ', $showaddress); 

        $response['diachi'] = $showaddress;
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