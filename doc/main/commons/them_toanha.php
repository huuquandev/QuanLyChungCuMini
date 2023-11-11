<?php
include_once '../../../function.php';
include_once '../../../components/connect.php';

$tentoanha = $_POST['tentoanha'];
$dia_chi = $_POST['diachi'];
$trangthai = $_POST['trangthai'];
$sotang = $_POST['sotang'];
$tinhthanh = $_POST['tinhthanh'];
$quanhuyen = $_POST['quanhuyen'];
$phuongxa = $_POST['phuongxa'];

$response = array();

if ($sotang < 1) {
    $response['success'] = false;
    $response['message'] = 'Số tầng không hợp lệ';
} else {
    $random = generateRandomCode();
    $maToaNha = "CH".$random;

    while (!isMaCanHo_PhongUnique($conn, $maToaNha)) {
        $matToaNha = generateRandomCode();
    }

    $newToaNhaId = ThemToaNha($tentoanha, $dia_chi, $trangthai, $sotang, $tinhthanh, $quanhuyen, $phuongxa, $maToaNha);

    if ($newToaNhaId) {
        $response['success'] = true;
        $response['id'] = $newToaNhaId;
        $response['matToaNha'] = $maToaNha;
        $response['ten_toanha'] = $tentoanha;
        $response['sotang'] = $sotang;

        $showaddress = array();
        if (!empty($dia_chi)) {
            $showaddress[] = $dia_chi;
        }
        if (!empty($tinhthanh)) {
            $showaddress[] = $tinhthanh;
        }
        if (!empty($quanhuyen)) {
            $showaddress[] = $quanhuyen;
        }
        if (!empty($phuongxa)) {
            $showaddress[] = $phuongxa;
        }
        $show_address = implode(', ', $showaddress);

        $response['diachi'] = $show_address;
        $response['trangthai'] = ($trangthai == 1) ? 'Hoạt động' : 'Không hoạt động';
        $response['iDtrangthai'] = $trangthai;
        $response['message'] = 'Thêm thành công';
    } else {
        $response['success'] = false;
        $response['message'] = 'Thêm không thành công';
    }
}

header('Content-Type: application/json');
echo json_encode($response);
exit();
?>
