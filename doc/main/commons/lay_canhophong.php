<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $idphong = $_POST['idphong'];
    $phong = laycanhophong($idphong);
    echo json_encode($phong);

?>