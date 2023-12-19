<?php
include_once '../../../function.php';
include_once '../../../components/connect.php';

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

$images = isset($_FILES['image']) ? $_FILES['image'] : null;

$success = true;
$message = 'Thêm thành công';

$response = array();
$response['Data'] = array(); 
for ($i = 0; $i < $so_luong; $i++) {
    $random = generateRandomCode();
    $ma_Taisan = "TS".$random;

    while (!isMaCanHo_PhongUnique($conn, $ma_Taisan)) {
        $ma_Taisan = generateRandomCode();
    }
    $newTaisanId = Them_TaiSan($ten_taisan, $ma_Taisan, $thuong_hieu, $mau_sac, $nam_sanxuat, $xuat_xu, $gia_tri, $han_baohanh, $images, $id_kho, $id_toanha, $id_tang, $id_phong, $vi_tri, $ghi_chu, $tinh_trang);

    $object = array(); 

    if ($newTaisanId) {
        $object['id'] = $newTaisanId;
        $object['ma_Taisan'] = $ma_Taisan;
        $object['ten_phong'] = $ten_phong;
        $object['ten_toanha'] = $ten_toanha;
        $object['ten_taisan'] = $ten_taisan;
        $object['ten_tang'] = $ten_tang;
        $object['ten_kho'] = $ten_kho;
        $object['tinh_trang'] = $tinh_trang;
        $object['gia_tri'] = $gia_tri;
        $response['Data'][] = $object;
    } else {
        $success = false;
        $message = 'Thêm không thành công';
        break; 
    }
}
$response['success'] = $success;
$response['message'] = $message;

header('Content-Type: application/json');
echo json_encode($response);
exit();
?>
