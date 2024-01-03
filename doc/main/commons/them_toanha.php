<?php
include_once '../../../function.php';
include_once '../../../components/connect.php';

$tentoanha = $_POST['tentoanha'];
$dia_chi = $_POST['diachi'];
$trangthai = $_POST['trangthai'];
$sotang = $_POST['sotang'];

$response = array();

$random = generateRandomCode();
$maToaNha = "CH".$random;

while (!isMaCanHo_PhongUnique($conn, $maToaNha)) {
    $matToaNha = generateRandomCode();
}

$newToaNhaId = ThemToaNha($tentoanha, $dia_chi, $trangthai, $sotang, $maToaNha);

if ($newToaNhaId && $newToaNhaId != 2) {
    $response['success'] = true;
    $response['id'] = $newToaNhaId;
    $response['matToaNha'] = $maToaNha;
    $response['ten_toanha'] = $tentoanha;
    $response['sotang'] = $sotang;
    $response['diachi'] = $dia_chi;
    $response['trangthai'] = ($trangthai == 1) ? 'Hoạt động' : 'Không hoạt động';
    $response['iDtrangthai'] = $trangthai;
    $response['message'] = 'Thêm thành công';
} else if($newToaNhaId == 2){
    $response['success'] = false;
    $response['message'] = 'Tên tòa nhà đã tồn tại';
}else{
    $response['success'] = false;
    $response['message'] = 'Thêm không thành công';
}

header('Content-Type: application/json');
echo json_encode($response);
exit();
?>
