<?php
    include_once '../../../function.php';
    include_once '../../../components/connect.php';
    $toanha = lay_all_toanha();
    echo json_encode($toanha);

?>