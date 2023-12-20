<?php
include_once '../../../function.php';
include_once '../../../components/connect.php';

$tieu_de = $_POST['tieu_de'];
$id_toanha = $_POST['id_toanha'];
$id_phong = $_POST['id_phong'];
$id_user = $_POST['id_user'];
$id_nguoitao = $_POST['id_nguoitao'];
$mo_ta = $_POST['mo_ta'];
$loai_congviec = $_POST['loai_congviec'];
$uu_tien = $_POST['uu_tien'];
$han_hoanthanh = $_POST['han_hoanthanh'];
$ten_toanha = $_POST['ten_toanha'];
$ten_phong = $_POST['ten_phong'];
$ten_user = isset($_POST['ten_user']) ? $_POST['ten_user'] : null;
$images = isset($_FILES['image']) ? $_FILES['image'] : null;
$success = true;
$message = 'Thêm thành công';

$hasImages = false; 

$response = array();

if ($images) {
    $allowedFormats = array(IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF); 
    foreach ($images['tmp_name'] as $tmp_name) {
        if (in_array(exif_imagetype($tmp_name), $allowedFormats)) {
            $hasImages = true;
            $random = generateRandomCode();
            $maBaotri_Suachua = "BT".$random;

            while (!isMaCanHo_PhongUnique($conn, $maBaotri_Suachua)) {
                $maBaotri_Suachua = generateRandomCode();
            }
            $newBaotriSuachuaId = ThemBaotri_Suachua($tieu_de, $maBaotri_Suachua, $id_toanha, $id_phong, $id_user, $mo_ta, $loai_congviec, $uu_tien, $han_hoanthanh, $images, $id_nguoitao);

            if ($newBaotriSuachuaId) {
                $response['success'] = true;
                $response['id'] = $newBaotriSuachuaId;
                $response['maBaotri_Suachua'] = $maBaotri_Suachua;
                $response['ten_phong'] = $ten_phong;
                $response['ten_toanha'] = $ten_toanha;
                $response['ten_user'] = $ten_user;
                $response['mo_ta'] = $mo_ta;
                $response['tieu_de'] = $tieu_de;
                $response['loai_congviec'] = $loai_congviec;
                $response['uu_tien'] = $uu_tien == 1 ? 'Thấp' : ($uu_tien == 2 ? 'Bình thường' : "Gấp");
                $response['iD_uu_tien'] = $uu_tien;
                $response['han_hoanthanh'] = $han_hoanthanh;
                $response['message'] = 'Thêm thành công';
            }else {
                $response['success'] = false;
                $response['message'] = 'Thêm không thành công';
            }
        } else {
            $response['success'] = false;
            $response['message'] = 'Một hoặc nhiều file không phải là hình ảnh hợp lệ';
            break; 
        }
    }
}else{
    $random = generateRandomCode();
    $maBaotri_Suachua = "BT".$random;

    while (!isMaCanHo_PhongUnique($conn, $maBaotri_Suachua)) {
        $maBaotri_Suachua = generateRandomCode();
    }
    $newBaotriSuachuaId = ThemBaotri_Suachua($tieu_de, $maBaotri_Suachua, $id_toanha, $id_phong, $id_user, $mo_ta, $loai_congviec, $uu_tien, $han_hoanthanh, null, $id_nguoitao);

    if ($newBaotriSuachuaId) {
        $response['success'] = true;
        $response['id'] = $newBaotriSuachuaId;
        $response['maBaotri_Suachua'] = $maBaotri_Suachua;
        $response['ten_phong'] = $ten_phong;
        $response['ten_toanha'] = $ten_toanha;
        $response['ten_user'] = $ten_user;
        $response['mo_ta'] = $mo_ta;
        $response['tieu_de'] = $tieu_de;
        $response['loai_congviec'] = $loai_congviec;
        $response['uu_tien'] = $uu_tien == 1 ? 'Thấp' : ($uu_tien == 2 ? 'Bình thường' : "Gấp");
        $response['iD_uu_tien'] = $uu_tien;
        $response['han_hoanthanh'] = $han_hoanthanh;
        $response['message'] = 'Thêm thành công';
    }else {
        $response['success'] = false;
        $response['message'] = 'Thêm không thành công';
    }
}



header('Content-Type: application/json');
echo json_encode($response);
exit();
?>
