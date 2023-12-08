<?php
include_once '../../../components/connect.php';
include_once '../../../function.php';

$tendancu = $_POST['tendancu'];
$gioitinh = $_POST['gioitinh'];
$cccd=$_POST['cccd'];
$sdt = $_POST['sdt'];
$ngaysinh = date('Y-m-d', strtotime($_POST['ngaysinh']));
$addressDetail = $_POST['addressDetail'];
$file_img=$_FILES['file_img'];
$email=$_FILES['email'];

// print_r($fileimg);
if(them_dan_cu($tendancu,
$gioitinh,
$sdt,
$ngaysinh,
$addressDetail,
$cccd,$file_img, $email)){
    echo "Sửa thành công";
}else{
    echo "Sửa thát bại";
}
?>
