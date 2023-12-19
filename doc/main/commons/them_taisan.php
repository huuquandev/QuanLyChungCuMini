<?php
include_once '../../../function.php';
include_once '../../../components/connect.php';

$ten_taisan = $_POST['ten_taisan'];
$id_toanha = $_POST['id_toanha'];
$id_phong = $_POST['id_phong'];
$id_kho = $_POST['id_kho'];
$thuong_hieu = $_POST['thuong_hieu'];
$mau_sac = $_POST['mau_sac'];
$mo_ta = $_POST['mo_ta'];
$nam_sanxuat = $_POST['nam_sanxuat'];
$xuat_xu = $_POST['xuat_xu'];
$gia_tri = $_POST['gia_tri'];
$so_luong = $_POST['so_luong'];
$tinh_trang = $_POST['tinh_trang'];
$han_baohanh = $_POST['han_baohanh'];
$ten_phong = $_POST['ten_phong'];
$ten_toanha = $_POST['ten_toanha'];
$ten_kho = $_POST['ten_kho'];
$images = isset($_FILES['image']) ? $_FILES['image'] : null;

$response = array();
$random = generateRandomCode();
$ma_Taisan = "TS".$random;

while (!isMaCanHo_PhongUnique($conn, $ma_Taisan)) {
    $ma_Taisan = generateRandomCode();
}
$newTaisanId = Them_TaiSan($ten_taisan, $ma_Taisan, $thuong_hieu, $mau_sac, $nam_sanxuat, $xuat_xu, $gia_tri, $so_luong, $thoihanbaohanh, $images, $id_kho, $id_toanha, $id_phong);

if ($newTaisanId) {
    $response['success'] = true;
    $response['id'] = $newBaotriSuachuaId;
    $response['ma_Taisan'] = $ma_Taisan;
    $response['ten_phong'] = $ten_phong;
    $response['ten_toanha'] = $ten_toanha;
    $response['ten_taisan'] = $ten_taisan;
    $response['ten_kho'] = $ten_kho;
    $response['tinh_trang'] = $tinh_trang;
    $response['gia_tri'] = $gia_tri;

    $response['message'] = 'Thêm thành công';
}else {
    $response['success'] = false;
    $response['message'] = 'Thêm không thành công';
}

header('Content-Type: application/json');
echo json_encode($response);
exit();
?>
