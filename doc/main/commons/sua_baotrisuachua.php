<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $id_baotrisuachua = $_POST['id_baotrisuachua'];
    $tieu_de = $_POST['tieu_de'];
    $id_toanha = $_POST['id_toanha'];
    $id_phong = $_POST['id_phong'];
    $id_user = $_POST['id_user'];
    $mo_ta = $_POST['mo_ta'];
    $loai_congviec = $_POST['loai_congviec'];
    $uu_tien = $_POST['uu_tien'];
    $han_hoanthanh = $_POST['han_hoanthanh'];
    $ten_toanha = $_POST['ten_toanha'];
    $ten_phong = $_POST['ten_phong'];
    $ten_user = $_POST['ten_user'];

    $imageOld = $_POST['imageOld']; // Mảng các tên file ảnh cũ trong cơ sở dữ liệu
    $newImages = isset($_FILES['newImage']) ? $_FILES['newImage'] : null;

    $response = array();
    $result = SuaBaotri_Suachua($tieu_de, $id_toanha, $id_phong, $id_user, $mo_ta, $loai_congviec, $uu_tien, $han_hoanthanh, $imageOld, $newImages, $id_baotrisuachua);

    if ($result == true) {
        $response['success'] = true;
        $response['id'] = $id_baotrisuachua;
        $response['ten_phong'] = $ten_phong;
        $response['ten_toanha'] = $ten_toanha;
        $response['ten_user'] = $ten_user;
        $response['mo_ta'] = $mo_ta;
        $response['tieu_de'] = $tieu_de;
        $response['loai_congviec'] = $loai_congviec;
        $response['uu_tien'] = $uu_tien == 1 ? 'Thấp' : ($uu_tien == 2 ? 'Bình thường' : "Gấp");
        $response['iD_uu_tien'] = $uu_tien;
        $response['han_hoanthanh'] = $han_hoanthanh;
        $response['message'] = 'Cập nhật thành công';
    }else {
        $response['success'] = false;
        $response['message'] = 'Cập nhật không thành công';
    }
    
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
?>