<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $iddancu = $_POST['iddancu'];
    $dancu = laydancu($iddancu);
    echo json_encode($dancu);

?>