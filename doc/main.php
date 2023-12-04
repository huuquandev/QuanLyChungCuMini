<?php
            if(isset($_GET['title'])){
                $tam = $_GET['title'];

                if($tam == "toanha"){
                    include("main/danh_sach_toanha.php");
                } else if ($tam == "quanlydancu") {
                    // Check if the 'id' parameter is set in the URL
                    if (isset($_GET['id'])) {
                        include("main/commons/sua_dan_cu.php");
                    } else {
                        include("main/danh_sach_dancu.php");
                    }
                } else if($tam == "quanlydichvu"){
                    include("main/danh_sach_dichvu.php");
                }else if($tam == "quanlythuphi"){
                    include("main/danh_sach_hoadon.php");
                }else if($tam == "quanlyanninh_trattu"){
                    include("main/danh_sach_aninh_tratu.php");
                }else if($tam == "canho_phong"){
                    include("main/danh_sach_canho_phong.php");
                }else if($tam == "taisan"){
                    include("main/danh_sach_taisan.php");
                }else if($tam == "baotrisuachua"){
                    include("main/danh_sach_baotrisuachua.php");
                }else if($tam == "baotrisuachua"){
                    include("main/danh_sach_baotrisuachua.php");
                }else if($tam == "hopdong"){
                    if (isset($_GET['id'])) {
                        include("main/commons/sua_hop_dong.php");
                    } else {
                        include("main/danh_sach_hopdong.php");
                    }
                }
            }else{
                $tam = '';
                include("main/index.php");
            }
            