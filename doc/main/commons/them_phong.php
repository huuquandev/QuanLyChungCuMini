<?php
include_once '../../../function.php';
include_once '../../../components/connect.php';

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


$response = array();
$random = generateRandomCode();
$maPhong = "P".$random;

while (!isMaCanHo_PhongUnique($conn, $maPhong)) {
    $maPhong = generateRandomCode();
}

$newPhongId = ThemCanho_Phong($ten_phong, $maPhong, $id_toanha, $soluong_nguoio, $tien_thue, $tien_coc, $dien_tich, $trang_thai, $id_tang);

if ($newPhongId && $newPhongId != 2) {
    $response['success'] = true;
    $response['id'] = $newPhongId;
    $response['maPhong'] = $maPhong;
    $response['ten_phong'] = $ten_phong;
    $response['ten_toanha'] = $ten_toanha;
    $response['ten_tang'] = $ten_tang;
    $response['tien_thue'] = $tien_thue;
    $response['tien_coc'] = $tien_coc;
    $response['dien_tich'] = $dien_tich;
    $response['trangthaithue'] = 'Đang trống';
    $response['trangthaihoatdong'] = ($trang_thai == 1) ? 'Hoạt động' : 'Không hoạt động';
    $response['iDtrangthai'] = $trang_thai;
    $response['message'] = 'Thêm thành công';
} else if($newPhongId == 2){
    $response['success'] = false;
    $response['message'] = 'Tên phòng đã tồn tại';
} else {
    $response['success'] = false;
    $response['message'] = 'Thêm không thành công';
}

header('Content-Type: application/json');
echo json_encode($response);
exit();
?>
