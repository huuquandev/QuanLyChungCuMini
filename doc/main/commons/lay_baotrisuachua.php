<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $id_baotrisuachua = $_POST['id_baotrisuachua'];
    $baotrisuachua = laybaotrisuachua($id_baotrisuachua);
    echo json_encode($baotrisuachua);

?>