<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $idphong = $_POST['idphong'];
    $taisan = laytaisanchuaco($idphong);
    header('Content-Type: application/json');
    echo json_encode($taisan);
    exit();
?>