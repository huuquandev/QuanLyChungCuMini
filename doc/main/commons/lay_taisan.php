<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $id_taisan = $_POST['id_taisan'];
    $taisan = laytaisan($id_taisan);
    echo json_encode($taisan);

?>