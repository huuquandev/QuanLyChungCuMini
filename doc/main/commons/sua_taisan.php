<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $id_taisan = $_POST['id_taisan'];
    $ten_taisan = $_POST['ten_taisan'];
    $thuong_hieu = $_POST['thuong_hieu'];
    $mau_sac = $_POST['mau_sac'];
    $nam_sanxuat = $_POST['nam_sanxuat'];
    $xuat_xu = $_POST['xuat_xu'];
    $gia_tri = $_POST['gia_tri'];
    $so_luong = $_POST['so_luong'];
    $tinh_trang = $_POST['tinh_trang'];
    $han_baohanh = $_POST['han_baohanh'];
    $ghi_chu = $_POST['ghi_chu'];
    $so_luong = $_POST['so_luong'];

    $hasImages = false; 
    $imageOld = isset($_FILES['imageOld']) ? $_FILES['imageOld'] : null;
    $newImages = isset($_FILES['newImage']) ? $_FILES['newImage'] : null;

    $response = array();
    
    if ($newImages) {
        $arr = ["gif", "jpg", "png", "jpeg"];
        foreach ($newImages['name'] as $tmp_name) {
            $image = mysqli_real_escape_string($conn, $tmp_name);
            $ext = pathinfo($image, PATHINFO_EXTENSION);
            if (!in_array($ext, $arr)) {
                $hasImages = true;
                $response['success'] = false;
                $response['message'] = 'Một hoặc nhiều file không phải là hình ảnh hợp lệ';
                break; 
            }
        }
        if(!$hasImages){
            $result = Sua_Taisan($ten_taisan, $thuong_hieu, $mau_sac, $nam_sanxuat, $xuat_xu, $gia_tri, $han_baohanh, $imageOld, $ghi_chu, $tinh_trang, $newImages, $id_taisan, $so_luong);

                if ($result == true) {
                    $response['success'] = true;
                    $response['id'] = $id_taisan;
                    $response['ten_taisan'] = $ten_taisan;
                    $response['ghi_chu'] = $ghi_chu;
                    $response['so_luong'] = $so_luong;
                    $response['tinh_trang'] = $tinh_trang;
                    $response['gia_tri'] = $gia_tri;
                    $response['message'] = 'Cập nhật thành công';
                }else {
                    $response['success'] = false;
                    $response['message'] = 'Cập nhật không thành công';
                }
        }
    } 
    if (!$hasImages) {
        $result = Sua_Taisan($ten_taisan, $thuong_hieu, $mau_sac, $nam_sanxuat, $xuat_xu, $gia_tri, $han_baohanh, $imageOld, $ghi_chu, $tinh_trang, null, $id_taisan, $so_luong);
                if ($result == true) {
                    $response['success'] = true;
                    $response['id'] = $id_taisan;
                    $response['ten_taisan'] = $ten_taisan;
                    $response['ghi_chu'] = $ghi_chu;
                    $response['so_luong'] = $so_luong;
                    $response['tinh_trang'] = $tinh_trang;
                    $response['gia_tri'] = $gia_tri;
                    $response['message'] = 'Cập nhật thành công';
                }else {
                    $response['success'] = false;
                    $response['message'] = 'Cập nhật không thành công';
                }
    }
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
?>