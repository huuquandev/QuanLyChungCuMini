<?php
include_once '../../../function.php';
include_once '../../../components/connect.php';

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

$images = isset($_FILES['image']) ? $_FILES['image'] : null;
$success = true;
$message = 'Thêm thành công';

$response = array();
$response['Data'] = array(); 

if ($images) {
    $hasImages = false;
    $arr = ["gif", "jpg", "png", "jpeg"];
    foreach ($images['name'] as $tmp_name) {
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
        $random = generateRandomCode();
        $ma_Taisan = "TS".$random;

        while (!isMaCanHo_PhongUnique($conn, $ma_Taisan)) {
            $ma_Taisan = generateRandomCode();
        }

        $newTaisanId = Them_TaiSan($ten_taisan, $ma_Taisan, $thuong_hieu, $mau_sac, $nam_sanxuat, $xuat_xu, $gia_tri, $han_baohanh, $images, $ghi_chu, $tinh_trang, $so_luong);

        $object = array(); 

        if ($newTaisanId) {
            $object['id'] = $newTaisanId;
            $object['ma_Taisan'] = $ma_Taisan;
            $object['ten_taisan'] = $ten_taisan;
            $object['ghi_chu'] = $ghi_chu;
            $object['so_luong'] = $so_luong;
            $object['tinh_trang'] = $tinh_trang;
            $object['gia_tri'] = $gia_tri;
            $response['Data'][] = $object;
        } else {
            $success = false;
            $message = 'Thêm không thành công';
        }
    }
} else{
    $random = generateRandomCode();
        $ma_Taisan = "TS".$random;

        while (!isMaCanHo_PhongUnique($conn, $ma_Taisan)) {
            $ma_Taisan = generateRandomCode();
        }

        $newTaisanId = Them_TaiSan($ten_taisan, $ma_Taisan, $thuong_hieu, $mau_sac, $nam_sanxuat, $xuat_xu, $gia_tri, $han_baohanh, null, $ghi_chu, $tinh_trang, $so_luong);

        $object = array(); 

        if ($newTaisanId) {
            $object['id'] = $newTaisanId;
            $object['ma_Taisan'] = $ma_Taisan;
            $object['ten_taisan'] = $ten_taisan;
            $object['ghi_chu'] = $ghi_chu;
            $object['so_luong'] = $so_luong;
            $object['tinh_trang'] = $tinh_trang;
            $object['gia_tri'] = $gia_tri;
            $response['Data'][] = $object;
        } else {
            $success = false;
            $message = 'Thêm không thành công';
        }
}

$response['success'] = $success;
$response['message'] = $message;

header('Content-Type: application/json');
echo json_encode($response);
exit();
?>
