<?php
            if(isset($_GET['title'])){
                $tam = $_GET['title'];
                if($tam == "toanha"){
                    include("main/danh_sach_toanha.php");
                }else if($tam == "quanlydancu"){ 
                    if (isset($_GET['id'])) {
                        include("main/commons/sua_dan_cu.php");
                    } else {
                        include("main/danh_sach_dancu.php");
                    }
                }else if($tam == "quanlydichvu"){
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
                }else if($tam == "thanhtoanhoadon"){
                    include("main/thanhtoanhoadon.php");
                }else if($tam == "xulythanhtoanmomo"){
                    include("main/xulythanhtoanmomo.php");
                }else if($tam == "sodotoanha"){
                    include("main/so_do_toanha.php");
                }else if($tam == "addhoadon"){
                    include("main/commons/form-add-hoa-don.php");
                }else if($tam == "xulythanhtoan"){
                    include("main/thanhtoanhoadon.php");
                }else if($tam == "suahoadon"){
                    include("main/commons/sua_hoadon.php");
                }else if($tam == "xoahoadon"){
                    include("main/commons/xoa_hoa_don.php");
                }else if($tam == "hopdong"){
                    if (isset($_GET['id'])) {
                        include("main/commons/sua_hop_dong.php");
                    } else {
                        include("main/danh_sach_hopdong.php");
                    }
                }else if($tam == "nguoidung"){
                    include("main/danh_sach_tai_khoan.php");
                }else if($tam == "loaitaikhoan"){
                    include("main/danh_sach_loai_tai_khoan.php");
                }
            }else{
                $tam = '';
                include("main/index.php");
            }
            