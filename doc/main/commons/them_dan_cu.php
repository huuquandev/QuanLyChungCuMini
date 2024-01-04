<?php
include_once '../../../components/connect.php';
include_once '../../../function.php';

$tendancu = $_POST['tendancu'];
$gioitinh = $_POST['gioitinh'];
$quanhe = $_POST['quanhe'];
$name_dan_cu = $_POST['name_dan_cu'];
$cccd=$_POST['cccd']?$_POST['cccd']:0;
$sdt = $_POST['sdt'];
$ngaysinh = date('Y-m-d', strtotime($_POST['ngaysinh']));
$addressDetail = $_POST['addressDetail'];
$file_img=$_FILES['file_img'];
$email=$_POST['email'];

// print_r($fileimg);

$checkPhoneNumberQuery = "SELECT COUNT(*) AS count FROM tb_dancu WHERE so_dien_thoai = '$sdt'";
$checkPhoneNumberResult = mysqli_query($conn, $checkPhoneNumberQuery);
$phoneNumberCount = mysqli_fetch_assoc($checkPhoneNumberResult)['count'];
$checkcccd="SELECT COUNT(*) AS count FROM tb_dancu WHERE `cccd`='$cccd'";
$checkcccd=mysqli_query($conn,$checkcccd);
$checkcccdCount = mysqli_fetch_assoc($checkcccd)['count'];
if($checkcccdCount>0){
    echo '<script>alert("Căn cước công dân/hộ chiếu đã tồn tại trong hệ thống."); history.back();</script>';
    echo '<br>';
}
elseif ($phoneNumberCount > 0) {
    // Phone number already exists, print a message and stop further processing
    echo '<script>alert("Số điện thoại đã tồn tại trong hệ thống."); history.back();</script>';
    echo '<br>';
} 
elseif(them_dan_cu($tendancu,
$gioitinh,
$quanhe,
$name_dan_cu,
$sdt,
$ngaysinh,
$addressDetail,
$cccd,$file_img, $email,0)){
    echo "Thêm thành công";
}else{
    echo "Thêm thát bại";
}
?>
