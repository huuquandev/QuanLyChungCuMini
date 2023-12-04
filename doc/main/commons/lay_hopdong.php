<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $id_hopdong = $_POST['id_hopdong'];
    $toanha = layhopdong($idtoanha);
    echo json_encode($toanha);

?>