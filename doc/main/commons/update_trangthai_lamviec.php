<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $id_baotrisuachua = $_POST['id_baotrisuachua'];
    $id_trangthai = $_POST['id_trangthai'];
    $id_user = isset($_POST['id_user']) ? $_POST['id_user'] : null;
    $id_nguoiduyet = isset($_POST['id_nguoiduyet']) ? $_POST['id_nguoiduyet'] : null;
    $id_nguoihoanthanh = isset($_POST['id_nguoihoanthanh']) ? $_POST['id_nguoihoanthanh'] : null;

    $mota = isset($_POST['mota_hoanthanh']) ? $_POST['mota_hoanthanh'] : null;
    $ngay_hoanthanh = isset($_POST['ngay_hoanthanh']) ? $_POST['ngay_hoanthanh'] : null;
    $images = isset($_FILES['image']) ? $_FILES['image'] : null;
    $mota_lydokhongdat = isset($_POST['mota_khongdat']) ? $_POST['mota_khongdat'] : null;
    $response = array();
    $hasImages = false; 

    if ($images) {
        $allowedFormats = array(IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF); 
        foreach ($images['tmp_name'] as $tmp_name) {
            if (in_array(exif_imagetype($tmp_name), $allowedFormats)) {
                $hasImages = true;
                $result = Update_trangthai_congviec($id_baotrisuachua, $id_trangthai, $id_user, $mota, $ngay_hoanthanh, $images, $mota_lydokhongdat, $id_nguoiduyet, $id_nguoihoanthanh);
                if ($result == true) {
                    $response['success'] = true;
                    $response['id'] = $id_baotrisuachua;
                    $response['trangthai'] = $id_trangthai == 1 ? 'Đang làm' : ($id_trangthai == 2 ? 'Chờ duyệt' : ($id_trangthai == 3 ? 'Đã duyệt' : "Không đạt"));
                    $response['id_trangthai'] = $id_trangthai;;
                }else {
                    $response['success'] = false;
                }
            } else {
                $response['success'] = false;
                $response['message'] = 'Một hoặc nhiều file không phải là hình ảnh hợp lệ';
                break; 
            }
        }
    }else{
        $result = Update_trangthai_congviec($id_baotrisuachua, $id_trangthai, $id_user, $mota, $ngay_hoanthanh, null, $mota_lydokhongdat, $id_nguoiduyet, $id_nguoihoanthanh);

        if ($result == true) {
            $response['success'] = true;
            $response['id'] = $id_baotrisuachua;
            $response['trangthai'] = $id_trangthai == 1 ? 'Đang làm' : ($id_trangthai == 2 ? 'Chờ duyệt' : ($id_trangthai == 3 ? 'Đã duyệt' : "Không đạt"));
            $response['id_trangthai'] = $id_trangthai;;
        }else {
            $response['success'] = false;
        }
    } 
    
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
?>