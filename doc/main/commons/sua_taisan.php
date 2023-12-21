<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $id_taisan = $_POST['id_taisan'];
    $ten_taisan = $_POST['ten_taisan'];
    $id_toanha = $_POST['id_toanha'];
    $id_phong = $_POST['id_phong'];
    $id_tang = $_POST['id_tang'];
    $id_kho = $_POST['id_kho'];
    $thuong_hieu = $_POST['thuong_hieu'];
    $mau_sac = $_POST['mau_sac'];
    $nam_sanxuat = $_POST['nam_sanxuat'];
    $xuat_xu = $_POST['xuat_xu'];
    $gia_tri = $_POST['gia_tri'];
    $so_luong = $_POST['so_luong'];
    $tinh_trang = $_POST['tinh_trang'];
    $han_baohanh = $_POST['han_baohanh'];
    $ten_phong = $_POST['ten_phong'];
    $ten_toanha = $_POST['ten_toanha'];
    $ten_kho = $_POST['ten_kho'];
    $ten_tang = $_POST['ten_tang'];
    $vi_tri = $_POST['vi_tri'];
    $ghi_chu = $_POST['ghi_chu'];

    $hasImages = false; 
    $imageOld = $_POST['imageOld']; 
    $newImages = isset($_FILES['newImage']) ? $_FILES['newImage'] : null;

    $response = array();
    
    if ($newImages) {
        $allowedFormats = array(IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF); 
        foreach ($newImages['tmp_name'] as $tmp_name) {
            if (in_array(exif_imagetype($tmp_name), $allowedFormats)) {
                $hasImages = true;
                $result = Sua_Taisan($ten_taisan, $thuong_hieu, $mau_sac, $nam_sanxuat, $xuat_xu, $gia_tri, $han_baohanh, $imageOld, $id_kho, $id_toanha, $id_tang, $id_phong, $vi_tri, $ghi_chu, $tinh_trang, $newImages, $id_taisan);

                if ($result == true) {
                    $response['success'] = true;
                    $response['id'] = $id_taisan;
                    $response['ten_phong'] = $ten_phong;
                    $response['ten_toanha'] = $ten_toanha;
                    $response['ten_taisan'] = $ten_taisan;
                    $response['ten_tang'] = $ten_tang;
                    $response['ten_kho'] = $ten_kho;
                    $response['tinh_trang'] = $tinh_trang;
                    $response['gia_tri'] = $gia_tri;
                    $response['message'] = 'Cập nhật thành công';
                }else {
                    $response['success'] = false;
                    $response['message'] = 'Cập nhật không thành công';
                }
            } else {
                $success = false;
                $message = 'Một hoặc nhiều file không phải là hình ảnh hợp lệ';
                break; 
            }
        }
    } 
    if (!$hasImages) {
        $result = Sua_Taisan($ten_taisan, $thuong_hieu, $mau_sac, $nam_sanxuat, $xuat_xu, $gia_tri, $han_baohanh, $imageOld, $id_kho, $id_toanha, $id_tang, $id_phong, $vi_tri, $ghi_chu, $tinh_trang, null, $id_taisan);
                if ($result == true) {
                    $response['success'] = true;
                    $response['id'] = $id_taisan;
                    $response['ten_phong'] = $ten_phong;
                    $response['ten_toanha'] = $ten_toanha;
                    $response['ten_taisan'] = $ten_taisan;
                    $response['ten_tang'] = $ten_tang;
                    $response['ten_kho'] = $ten_kho;
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