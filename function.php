<?php 
    //Quân làm
    //Check session
    function checkLogin(){
        if(!isset($_SESSION['id_taikhoan'])){
            header("location: login.php");
            return false;
        }
        return true;
    }
    function login($username, $password){
        GLOBAL $conn;
        $filter_username = mysqli_real_escape_string($conn, $username);
        $filter_password = mysqli_real_escape_string($conn, $password);
        if($filter_username == "" || $filter_password == ""){
            echo '<script>
                    swal({ title: "", text: "Bạn vui lòng đầy đủ thông tin đăng nhập...", icon: "error", close: true, button: "Thử lại",});
                    </script>';
            return false;           
        }
        $sql = "SELECT * FROM tb_taikhoan WHERE tai_khoan = '$filter_username' AND mat_khau = '$filter_password'";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            $_SESSION['CountLogin'] = 1;

            $row = mysqli_fetch_assoc($query);
            $_SESSION['id_taikhoan'] = $row['id_taikhoan'];
            $_SESSION['tai_khoan'] = $row['tai_khoan'];
            $_SESSION['ten_hien_thi'] = $row['ten_hien_thi'];
            $_SESSION['mat_khau'] = $row['mat_khau'];
            $_SESSION['vai_tro'] = $row['vai_tro'];
            $_SESSION['gioi_tinh'] = $row['gioi_tinh'];
            $_SESSION['so_dien_thoai'] = $row['so_dien_thoai'];
            $_SESSION['dangnhaplancuoi'] = $row['dangnhaplancuoi'];

            $_SESSION['hinh_anh'] = $row['hinh_anh'];
            $sql_save = "UPDATE tb_taikhoan SET tb_taikhoan.dangnhaplancuoi = NOW() WHERE tb_taikhoan.id_taikhoan = ".$row['id_taikhoan']." ";
            $query_save = mysqli_query($conn, $sql_save);

            return true;
        }else{
            echo    ' <script> 
                    swal({ title: "", text: "Sai thông tin đăng nhập hãy kiểm tra lại...", icon: "error", close: true, button: "Thử lại", });                    
                    </script>';
            return false;

        }       
        
    }
    function convertToVietnameseCurrency($amount) {
        $currencySymbol = "₫"; // Ký hiệu tiền tệ Việt Nam
        $formattedAmount = number_format($amount, 0, ',', ',');
        return $formattedAmount;
    }

    function generateRandomCode() {
        $matToaNha = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
        return $matToaNha;
    }
    
    function isMatToaNhaUnique($conn, $matToaNha) {
        $sql = "SELECT COUNT(*) as count FROM tb_toanha WHERE ma_toanha = '$matToaNha'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['count'] == 0;
    }

    function isMaCanHo_PhongUnique($conn, $macanho_phong) {
        $sql = "SELECT COUNT(*) as count FROM tb_canho_phong WHERE ma_canho_phong = '$macanho_phong'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['count'] == 0;
    }
    
    function ThemToaNha($tentoanha, $diachi, $trangthai, $so_tang, $matToaNha) {
        GLOBAL $conn;
        $filter_tentoanha = mysqli_real_escape_string($conn, $tentoanha);
        $filter_diachi = mysqli_real_escape_string($conn, $diachi);
        $filter_trangthai = mysqli_real_escape_string($conn, $trangthai);
        $filter_so_tang = mysqli_real_escape_string($conn, $so_tang);
        $sql = "SELECT * FROM tb_toanha WHERE tb_toanha.ten_toanha = '".$filter_tentoanha."'";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) > 0) {     
            return 2;
        } else {
            $sql = "INSERT INTO tb_toanha (ten_toanha, ma_toanha, so_tang, trangthai_toanha, diachi_chitiet) 
            VALUES ('$filter_tentoanha', '$matToaNha', '$filter_so_tang', '$filter_trangthai', '$filter_diachi')";
            $query = mysqli_query($conn, $sql);
            if($query){
                // Lấy giá trị ID của tòa nhà vừa thêm
                $lastInsertedId = mysqli_insert_id($conn);
                return $lastInsertedId;
            }else{
                return false;
            }
        }
    }
    function SuaToaNha($tentoanha, $diachi, $trangthai, $so_tang, $id_toanha){
        GLOBAL $conn;
        $filter_tentoanha = mysqli_real_escape_string($conn, $tentoanha);
        $filter_diachi = mysqli_real_escape_string($conn, $diachi);
        $filter_trangthai = mysqli_real_escape_string($conn, $trangthai);
        $filter_so_tang = mysqli_real_escape_string($conn, $so_tang);
        $filter_id_toanha = mysqli_real_escape_string($conn, $id_toanha);
        $sql = "SELECT * FROM tb_toanha WHERE tb_toanha.ten_toanha = '$filter_tentoanha' AND tb_toanha.id_toanha != '$filter_id_toanha'";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) > 0) {     
            return 2;
        } else {
            $sql = "UPDATE tb_toanha SET ten_toanha='$filter_tentoanha', so_tang='$filter_so_tang', trangthai_toanha='$filter_trangthai', diachi_chitiet='$filter_diachi' WHERE id_toanha='$filter_id_toanha'";
            $query = mysqli_query($conn, $sql);
            if($query){
                return true;
            }else{
                return false;
            }
        }
    }
    function XoaToaNha($id_toanha){
        GLOBAL $conn;

        $sql = "DELETE FROM tb_toanha WHERE tb_toanha.id_toanha = $id_toanha";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    function ThemCanho_Phong($ten_canho_phong, $ma_canho_phong, $id_toanha, $so_nguoi_o, $tienthue, $tiencoc, $dientich, $trangthai, $id_tang, $taisan) {
        GLOBAL $conn;
        $filter_ten_canho_phong = mysqli_real_escape_string($conn, $ten_canho_phong);
        $filter_ma_canho_phong = mysqli_real_escape_string($conn, $ma_canho_phong);
        $filter_toanha = mysqli_real_escape_string($conn, $id_toanha);
        $filter_tang = mysqli_real_escape_string($conn, $id_tang);
        $filter_so_nguoi_o = mysqli_real_escape_string($conn, $so_nguoi_o);
        $filter_tienthue = mysqli_real_escape_string($conn, $tienthue);
        $filter_tiencoc = mysqli_real_escape_string($conn, $tiencoc);
        $filter_dientich = mysqli_real_escape_string($conn, $dientich);
        $filter_trangthai = mysqli_real_escape_string($conn, $trangthai);
        $sql = "SELECT * FROM tb_canho_phong WHERE tb_canho_phong.ten_canho_phong = '$filter_ten_canho_phong'";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) > 0) {     
            return 2;
        } else {
            $sql = "INSERT INTO tb_canho_phong (ten_canho_phong, ma_canho_phong, id_toanha, so_nguoi_o, tienthue_canho_phong,
            tiencoc_canho_phong,dientich_canho_phong, trangthai_canho_phong, tinhtrang_canho_phong, id_tang) 
                    VALUES ('$filter_ten_canho_phong', '$filter_ma_canho_phong', '$filter_toanha', '$filter_so_nguoi_o', '$filter_tienthue',
                     '$filter_tiencoc', '$filter_dientich', 0, $filter_trangthai, '$filter_tang')";
        
            $query = mysqli_query($conn, $sql);
            if ($query) {
                $lastInsertedId = mysqli_insert_id($conn);         
                if (!empty($taisan)) {
                    foreach ($taisan as $key => $id_taisan) {
                        $insertImageQuery = "INSERT INTO tb_taisan_canhophong (id_taisan, id_canho_phong)
                                                VALUES ('$id_taisan', '$lastInsertedId')";
                        mysqli_query($conn, $insertImageQuery);
                    }
                }
                return $lastInsertedId;
            } else {
                return false;
            }
        }

    }
    function SuaCanho_Phong($ten_canho_phong, $id_toanha, $so_nguoi_o, $tienthue, $tiencoc, $dientich, $trangthai, $id_tang, $id_canhophong, $taisanOld, $newTaiSan){
        GLOBAL $conn;
        $filter_ten_canho_phong = mysqli_real_escape_string($conn, $ten_canho_phong);
        $filter_toanha = mysqli_real_escape_string($conn, $id_toanha);
        $filter_tang = mysqli_real_escape_string($conn, $id_tang);
        $filter_so_nguoi_o = mysqli_real_escape_string($conn, $so_nguoi_o);
        $filter_tienthue = mysqli_real_escape_string($conn, $tienthue);
        $filter_tiencoc = mysqli_real_escape_string($conn, $tiencoc);
        $filter_dientich = mysqli_real_escape_string($conn, $dientich);
        $filter_trangthai = mysqli_real_escape_string($conn, $trangthai);
        $filter_id_canhophong = mysqli_real_escape_string($conn, $id_canhophong);

        $sql_check = "SELECT * FROM tb_canho_phong WHERE tb_canho_phong.ten_canho_phong = '$filter_ten_canho_phong' AND tb_canho_phong.id_canho_phong != '$filter_id_canhophong'";
        $query_check = mysqli_query($conn, $sql_check);
        if (mysqli_num_rows($query_check) > 0) {     
            return 2;
        } else {
            $sql_Update = "UPDATE tb_canho_phong SET ten_canho_phong='$filter_ten_canho_phong', id_toanha='$filter_toanha', so_nguoi_o='$filter_so_nguoi_o', tienthue_canho_phong='$filter_tienthue', 
            tiencoc_canho_phong='$filter_tiencoc', dientich_canho_phong='$filter_dientich',tinhtrang_canho_phong='$filter_trangthai',id_tang='$filter_tang' WHERE id_canho_phong='$filter_id_canhophong'";
                $query_Update = mysqli_query($conn, $sql_Update);
                if ($query_Update) {
                    // Lấy danh sách tài sản hiện tại từ cơ sở dữ liệu
                    $currentTaiSanCu = "SELECT id_taisan FROM tb_taisan_canhophong WHERE tb_taisan_canhophong.id_canho_phong='$filter_id_canhophong'";
                    $result = mysqli_query($conn, $currentTaiSanCu);
                    $existingTaiSanCu = [];
                    while ($row = mysqli_fetch_assoc($result)) {
                        $existingTaiSanCu[] = $row['id_taisan'];
                    }
                    if(!empty($taisanOld)){
                        $TaiSanCuToRemove = array_diff($existingTaiSanCu, $taisanOld);
                        foreach ($TaiSanCuToRemove as $taisan) {
                        $filteredTaiSan = mysqli_real_escape_string($conn, $taisan);
                        // Xóa Tai sản cơ sở dữ liệu
                        $deleteTaiSanSQL = "DELETE FROM tb_taisan_canhophong WHERE id_canho_phong='$filter_id_canhophong' AND id_taisan='$filteredTaiSan'";
                        mysqli_query($conn, $deleteTaiSanSQL);
                        }
                    }else{
                        $deleteTaiSanSQL = "DELETE FROM tb_taisan_canhophong WHERE id_canho_phong='$filter_id_canhophong'";
                        mysqli_query($conn, $deleteTaiSanSQL);
                    }
                    if (!empty($newTaiSan)) {
                        foreach ($newTaiSan as $key => $id_taisan) {
                            $insertTaiSanQuery = "INSERT INTO tb_taisan_canhophong (id_taisan, id_canho_phong)
                                                    VALUES ('$id_taisan', '$filter_id_canhophong')";
                            mysqli_query($conn, $insertTaiSanQuery);
                        }
                    }
                    return 1;
                } 
            return 0;
        }
    }
    function XoaCanho_Phong($id_canho_phong){
        GLOBAL $conn;

        $sql = "DELETE FROM tb_canho_phong WHERE tb_canho_phong.id_canho_phong = $id_canho_phong";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            $sql = "DELETE FROM tb_taisan_canhophong WHERE tb_taisan_canhophong.id_canho_phong = $id_canho_phong";
            $query = mysqli_query($conn, $sql);
            return true;
        } else {
            return false;
        }
    }
    function ThemBaotri_Suachua($tieu_de, $maBaotri_Suachua, $id_toanha, $id_phong, $id_user, $mo_ta, $loai_congviec, $uu_tien, $han_hoanthanh, $Images, $id_nguoitao) {
        GLOBAL $conn;
        $filter_tieude = mysqli_real_escape_string($conn, $tieu_de);
        $filter_mabaotrisuachua = mysqli_real_escape_string($conn, $maBaotri_Suachua);
        $filter_toanha = mysqli_real_escape_string($conn, $id_toanha);
        $filter_phong = mysqli_real_escape_string($conn, $id_phong);
        $filter_user = mysqli_real_escape_string($conn, $id_user);
        $filter_mota = mysqli_real_escape_string($conn, $mo_ta);
        $filter_loaicongviec = mysqli_real_escape_string($conn, $loai_congviec);
        $filter_uutien = mysqli_real_escape_string($conn, $uu_tien);
        $filter_hanhoanthanh = mysqli_real_escape_string($conn, $han_hoanthanh);
        $filter_id_nguoitao = mysqli_real_escape_string($conn, $id_nguoitao);

        $sql = "INSERT INTO tb_baotri_suachua (id_toanha, id_phong, ma_baotri_suachua, tieude_baotri_suachua, mota_baotri_suachua,
            loai_cong_viec, mucdo_uutien, ngay_batdau, ngay_ketthuc, id_taikhoan, trang_thai, id_nguoitao) 
                    VALUES ('$filter_toanha', '$filter_phong', '$filter_mabaotrisuachua', '$filter_tieude', '$filter_mota',
                     '$filter_loaicongviec', '$filter_uutien', NOW(), '$filter_hanhoanthanh', '$filter_user', 0,)";
        
            $query = mysqli_query($conn, $sql);
            if ($query) {
                $lastInsertedId = mysqli_insert_id($conn);         
                // Kiểm tra nếu có hình mới để thêm vào bảng tb_hinhanh
                if (!empty($Images)) {
                    $upload_directory = '../../../images/images_baotrisuachua/';
                
                    foreach ($Images['tmp_name'] as $key => $tmp_name) {
                        $image_name = $Images['name'][$key];
                        $file_extension = pathinfo($image_name, PATHINFO_EXTENSION); // Lấy phần mở rộng của file
                
                        $unique_image_name = uniqid('img_') . '.' . $file_extension; // Thêm một đoạn duy nhất vào tên file ảnh
                        $target_file = $upload_directory . basename($unique_image_name);
                
                        if (move_uploaded_file($tmp_name, $target_file)) {
                            $url_hinhanh = mysqli_real_escape_string($conn, $target_file);
                            $type_hinhanh = 'Bảo trì sửa chữa';
                
                            $insertImageQuery = "INSERT INTO tb_hinhanh (id_loaihinhanh, type_hinhanh, url_hinhanh)
                                                VALUES ('$lastInsertedId', '$type_hinhanh', '$unique_image_name')";
                
                            mysqli_query($conn, $insertImageQuery);
                        }
                    }
                }
                
                return $lastInsertedId;
            } else {
                return false;
            }

    }
    function SuaBaotri_Suachua($tieu_de, $id_toanha, $id_phong, $id_user, $mo_ta, $loai_congviec, $uu_tien, $han_hoanthanh, $imageOld, $newImages, $id_baotrisuachua){
        GLOBAL $conn;
        $filter_tieude = mysqli_real_escape_string($conn, $tieu_de);
        $filter_toanha = mysqli_real_escape_string($conn, $id_toanha);
        $filter_phong = mysqli_real_escape_string($conn, $id_phong);
        $filter_user = mysqli_real_escape_string($conn, $id_user);
        $filter_mota = mysqli_real_escape_string($conn, $mo_ta);
        $filter_loaicongviec = mysqli_real_escape_string($conn, $loai_congviec);
        $filter_uutien = mysqli_real_escape_string($conn, $uu_tien);
        $filter_hanhoanthanh = mysqli_real_escape_string($conn, $han_hoanthanh);
        $filter_id_baotrisuachua = mysqli_real_escape_string($conn, $id_baotrisuachua);

        $sql = "UPDATE tb_baotri_suachua SET tieude_baotri_suachua='$filter_tieude', id_toanha='$filter_toanha', id_phong='$filter_phong', mota_baotri_suachua='$filter_mota', 
                loai_cong_viec='$filter_loaicongviec', mucdo_uutien='$filter_uutien', ngay_ketthuc='$filter_hanhoanthanh', id_taikhoan='$filter_user' WHERE id_baotri_suachua='$filter_id_baotrisuachua'";
        $query = mysqli_query($conn, $sql);
        if ($query) {
           // Lấy danh sách ảnh hiện tại từ cơ sở dữ liệu
            $currentImagesSQL = "SELECT url_hinhanh FROM tb_hinhanh WHERE id_loaihinhanh='$filter_id_baotrisuachua' AND type_hinhanh='Bảo trì sửa chữa'";
            $result = mysqli_query($conn, $currentImagesSQL);
            $existingImages = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $existingImages[] = $row['url_hinhanh'];
            }

            // Loại bỏ các ảnh đã được xóa từ danh sách ảnh cũ trong cơ sở dữ liệu và thư mục
            $imagesToRemove = array_diff($existingImages, $imageOld);
            foreach ($imagesToRemove as $image) {
                $filteredImage = mysqli_real_escape_string($conn, $image);

                // Xóa ảnh từ cơ sở dữ liệu
                $deleteImageSQL = "DELETE FROM tb_hinhanh WHERE id_loaihinhanh='$filter_id_baotrisuachua' AND url_hinhanh='$filteredImage' AND type_hinhanh='Bảo trì sửa chữa'";
                mysqli_query($conn, $deleteImageSQL);

                // Xóa ảnh từ thư mục
                $imagePath = "../../../images/images_baotrisuachua/" . $filteredImage; 
                if (file_exists($imagePath)) {
                    unlink($imagePath); 
                }
            }

            if (!empty($newImages)) {
                $upload_directory = '../../../images/images_baotrisuachua/';
            
                foreach ($newImages['tmp_name'] as $key => $tmp_name) {
                    $image_name = $newImages['name'][$key];
                    $file_extension = pathinfo($image_name, PATHINFO_EXTENSION); // Lấy phần mở rộng của file
            
                    $unique_image_name = uniqid('img_') . '.' . $file_extension; // Thêm một đoạn duy nhất vào tên file ảnh
                    $target_file = $upload_directory . basename($unique_image_name);
            
                    if (move_uploaded_file($tmp_name, $target_file)) {
                        $url_hinhanh = mysqli_real_escape_string($conn, $target_file);
                        $type_hinhanh = 'Bảo trì sửa chữa';
            
                        $insertImageQuery = "INSERT INTO tb_hinhanh (id_loaihinhanh, type_hinhanh, url_hinhanh)
                                            VALUES ('$filter_id_baotrisuachua', '$type_hinhanh', '$unique_image_name')";
            
                        mysqli_query($conn, $insertImageQuery);
                    }
                }
            }
            return true;
        } else {
            return false;
        }
    }
    function Update_trangthai_congviec($id_baotrisuachua, $id_trangthai, $id_user, $mota, $ngay_hoanthanh, $Images, $mota_lydokhongdat, $id_nguoiduyet, $id_nguoihoanthanh){
        GLOBAL $conn;
        $filter_id_trangthai = mysqli_real_escape_string($conn, $id_trangthai);
        $filter_id_baotrisuachua = mysqli_real_escape_string($conn, $id_baotrisuachua);
        if($filter_id_trangthai == 1){
            $filter_id_user = mysqli_real_escape_string($conn, $id_user);
            $sql = "UPDATE tb_baotri_suachua SET trang_thai='$filter_id_trangthai', id_taikhoan='$filter_id_user', ngay_lam=NOW() WHERE id_baotri_suachua='$filter_id_baotrisuachua'";
        }
        if($filter_id_trangthai == 2){
            $filter_mota = mysqli_real_escape_string($conn, $mota);
            $filter_ngay_hoanthanh = mysqli_real_escape_string($conn, $ngay_hoanthanh);
            $filter_id_nguoihoanthanh = mysqli_real_escape_string($conn, $id_nguoihoanthanh);
            $sql = "UPDATE tb_baotri_suachua SET trang_thai='$filter_id_trangthai', mota_hoanhthanh='$filter_mota', ngay_hoanthanh='$filter_ngay_hoanthanh', id_nguoihoanthanh='$filter_id_nguoihoanthanh' WHERE id_baotri_suachua='$filter_id_baotrisuachua'";
            if (!empty($Images)) {
                $upload_directory = '../../../images/images_baotrisuachua/';
                foreach ($Images['tmp_name'] as $key => $tmp_name) {
                    $image_name = $Images['name'][$key];
                    $file_extension = pathinfo($image_name, PATHINFO_EXTENSION); // Lấy phần mở rộng của file
            
                    $unique_image_name = uniqid('img_') . '.' . $file_extension; // Thêm một đoạn duy nhất vào tên file ảnh
                    $target_file = $upload_directory . basename($unique_image_name);
            
                    if (move_uploaded_file($tmp_name, $target_file)) {
                        $url_hinhanh = mysqli_real_escape_string($conn, $target_file);
                        $type_hinhanh = 'Bảo trì sửa chữa hoàn thành';
        
                        $insertImageQuery = "INSERT INTO tb_hinhanh (id_loaihinhanh, type_hinhanh, url_hinhanh)
                                            VALUES ('$filter_id_trangthai', '$type_hinhanh', '$unique_image_name')";
            
                        mysqli_query($conn, $insertImageQuery);
                    }
                }
            }
        }
        if($filter_id_trangthai == 3){
            $filter_id_nguoiduyet = mysqli_real_escape_string($conn, $id_nguoiduyet);
            $sql = "UPDATE tb_baotri_suachua SET trang_thai='$filter_id_trangthai', ngay_duyet=NOW(), id_nguoiduyet='$filter_id_nguoiduyet' WHERE id_baotri_suachua='$filter_id_baotrisuachua'";
        }
        if($filter_id_trangthai == 4){
            $filter_mota_lydokhongdat = mysqli_real_escape_string($conn, $mota_lydokhongdat);
            $filter_id_nguoiduyet = mysqli_real_escape_string($conn, $id_nguoiduyet);
            $sql = "UPDATE tb_baotri_suachua SET trang_thai='$filter_id_trangthai', mota_lydokhongdat='$filter_mota_lydokhongdat', ngay_duyet=NOW(), id_nguoiduyet='$filter_id_nguoiduyet' WHERE id_baotri_suachua='$filter_id_baotrisuachua'";
        }
        $query = mysqli_query($conn, $sql);
        if ($query) {        
            
            return true;
        } else {
            return false;
        }
    }
    function XoaBaotri_Suachua($id_baotrisuachua){
        GLOBAL $conn;
        $filter_id_baotrisuachua = mysqli_real_escape_string($conn, $id_baotrisuachua);

        $sql = "DELETE FROM tb_baotri_suachua WHERE tb_baotri_suachua.id_baotri_suachua= $filter_id_baotrisuachua";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            // Lấy danh sách ảnh hiện tại từ cơ sở dữ liệu
            $currentImagesSQL = "SELECT url_hinhanh FROM tb_hinhanh WHERE id_loaihinhanh='$filter_id_baotrisuachua' AND (type_hinhanh='Bảo trì sửa chữa' OR type_hinhanh='Bảo trì sửa chữa hoàn thành')";
            $result = mysqli_query($conn, $currentImagesSQL);
            $existingImages = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $existingImages[] = $row['url_hinhanh'];
            }

            foreach ($existingImages as $image) {
                $filteredImage = mysqli_real_escape_string($conn, $image);
                // Xóa ảnh từ cơ sở dữ liệu
                $deleteImageSQL = "DELETE FROM tb_hinhanh WHERE id_loaihinhanh='$filter_id_baotrisuachua' AND url_hinhanh='$filteredImage' AND (type_hinhanh='Bảo trì sửa chữa' OR type_hinhanh='Bảo trì sửa chữa hoàn thành')";
                mysqli_query($conn, $deleteImageSQL);

                // Xóa ảnh từ thư mục
                $imagePath = "../../../images/images_baotrisuachua/" . $filteredImage; 
                if (file_exists($imagePath)) {
                    unlink($imagePath); 
                }
            }
            return true;
        } else {
            return false;
        }
    }
    function Them_TaiSan($ten_taisan, $ma_Taisan, $thuong_hieu, $mau_sac, $nam_sanxuat, $xuat_xu, $gia_tri, $thoihanbaohanh, $Images, $ghi_chu, $tinh_trang, $so_luong) {
        GLOBAL $conn;
        $filter_ten_taisan = mysqli_real_escape_string($conn, $ten_taisan);
        $filter_ma_Taisan = mysqli_real_escape_string($conn, $ma_Taisan);
        $filter_thuong_hieu = mysqli_real_escape_string($conn, $thuong_hieu);
        $filter_mau_sac = mysqli_real_escape_string($conn, $mau_sac);
        $filter_nam_sanxuat = mysqli_real_escape_string($conn, $nam_sanxuat);
        $filter_xuat_xu = mysqli_real_escape_string($conn, $xuat_xu);
        $filter_gia_tri = mysqli_real_escape_string($conn, $gia_tri);
        $filter_thoihanbaohanh = mysqli_real_escape_string($conn, $thoihanbaohanh);
        $filter_ghi_chu = mysqli_real_escape_string($conn, $ghi_chu);
        $filter_tinh_trang = mysqli_real_escape_string($conn, $tinh_trang);

        $sql = "INSERT INTO tb_taisan (ten_taisan, ma_taisan, thuong_hieu, mau_sac, nam_sanxuat,
            	xuat_xu, gia_tri, tinh_trang, thoihanbaohanh, ghi_chu, so_luong) 
                    VALUES ('$filter_ten_taisan', '$filter_ma_Taisan', '$filter_thuong_hieu', '$filter_mau_sac', '$filter_nam_sanxuat',
                     '$filter_xuat_xu', '$filter_gia_tri', '$filter_tinh_trang', '$filter_thoihanbaohanh', '$filter_ghi_chu', '$so_luong')";
        
            $query = mysqli_query($conn, $sql);
            if ($query) {
                $lastInsertedId = mysqli_insert_id($conn);         
                // Kiểm tra nếu có hình mới để thêm vào bảng tb_hinhanh
                if (!empty($Images)) {
                    $upload_directory = '../../../images/images_taisan/';
                
                    foreach ($Images['tmp_name'] as $key => $tmp_name) {
                        $image_name = $Images['name'][$key];
                        $file_extension = pathinfo($image_name, PATHINFO_EXTENSION); // Lấy phần mở rộng của file
                
                        $unique_image_name = uniqid('img_') . '.' . $file_extension; // Thêm một đoạn duy nhất vào tên file ảnh
                        $target_file = $upload_directory . basename($unique_image_name);
                
                        if (move_uploaded_file($tmp_name, $target_file)) {
                            $type_hinhanh = 'Tài sản';
                
                            $insertImageQuery = "INSERT INTO tb_hinhanh (id_loaihinhanh, type_hinhanh, url_hinhanh)
                                                VALUES ('$lastInsertedId', '$type_hinhanh', '$unique_image_name')";
                
                            mysqli_query($conn, $insertImageQuery);
                        }
                    }
                }
                
                return $lastInsertedId;
            } else {
                return false;
            }

    }
    function Sua_Taisan($ten_taisan, $thuong_hieu, $mau_sac, $nam_sanxuat, $xuat_xu, $gia_tri, $han_baohanh, $imageOld, $ghi_chu, $tinh_trang, $newImages, $id_taisan, $so_luong){
        GLOBAL $conn;
        $filter_ten_taisan = mysqli_real_escape_string($conn, $ten_taisan);
        $filter_thuong_hieu = mysqli_real_escape_string($conn, $thuong_hieu);
        $filter_mau_sac = mysqli_real_escape_string($conn, $mau_sac);
        $filter_nam_sanxuat = mysqli_real_escape_string($conn, $nam_sanxuat);
        $filter_xuat_xu = mysqli_real_escape_string($conn, $xuat_xu);
        $filter_gia_tri = mysqli_real_escape_string($conn, $gia_tri);
        $filter_thoihanbaohanh = mysqli_real_escape_string($conn, $han_baohanh);
        $filter_ghi_chu = mysqli_real_escape_string($conn, $ghi_chu);
        $filter_tinh_trang = mysqli_real_escape_string($conn, $tinh_trang);
        $filter_id_taisan = mysqli_real_escape_string($conn, $id_taisan);
        $filter_so_luong = mysqli_real_escape_string($conn, $so_luong);

        $sql = "UPDATE tb_taisan SET ten_taisan='$filter_ten_taisan', thuong_hieu='$filter_thuong_hieu', mau_sac='$filter_mau_sac', 
                	nam_sanxuat='$filter_nam_sanxuat', xuat_xu='$filter_xuat_xu', gia_tri='$filter_gia_tri', tinh_trang='$filter_tinh_trang', 
                    thoihanbaohanh='$filter_thoihanbaohanh', ghi_chu='$filter_ghi_chu', so_luong='$filter_so_luong' WHERE id_taisan='$filter_id_taisan'";
        $query = mysqli_query($conn, $sql);
             // Lấy danh sách ảnh hiện tại từ cơ sở dữ liệu
             $currentImagesSQL = "SELECT url_hinhanh FROM tb_hinhanh WHERE id_loaihinhanh='$filter_id_taisan' AND type_hinhanh='Tài sản'";
             $result = mysqli_query($conn, $currentImagesSQL);
             $existingImages = [];
             while ($row = mysqli_fetch_assoc($result)) {
                 $existingImages[] = $row['url_hinhanh'];
             }
 
             // Loại bỏ các ảnh đã được xóa từ danh sách ảnh cũ trong cơ sở dữ liệu và thư mục
             if($imageOld != null){
                $imagesToRemove = array_diff($existingImages, $imageOld);
                foreach ($imagesToRemove as $image) {
                    $filteredImage = mysqli_real_escape_string($conn, $image);
    
                    // Xóa ảnh từ cơ sở dữ liệu
                    $deleteImageSQL = "DELETE FROM tb_hinhanh WHERE id_loaihinhanh='$filter_id_taisan' AND url_hinhanh='$filteredImage' AND type_hinhanh='Tài sản'";
                    mysqli_query($conn, $deleteImageSQL);
    
                    // Xóa ảnh từ thư mục
                    $imagePath = "../../../images/images_taisan/" . $filteredImage; 
                    if (file_exists($imagePath)) {
                        unlink($imagePath); 
                    }
                }
             }
 
             if (!empty($newImages)) {
                 $upload_directory = '../../../images/images_taisan/';
             
                 foreach ($newImages['tmp_name'] as $key => $tmp_name) {
                     $image_name = $newImages['name'][$key];
                     $file_extension = pathinfo($image_name, PATHINFO_EXTENSION); // Lấy phần mở rộng của file
             
                     $unique_image_name = uniqid('img_') . '.' . $file_extension; // Thêm một đoạn duy nhất vào tên file ảnh
                     $target_file = $upload_directory . basename($unique_image_name);
             
                     if (move_uploaded_file($tmp_name, $target_file)) {
                         $url_hinhanh = mysqli_real_escape_string($conn, $target_file);
                         $type_hinhanh = 'Tài sản';
             
                         $insertImageQuery = "INSERT INTO tb_hinhanh (id_loaihinhanh, type_hinhanh, url_hinhanh)
                                             VALUES ('$filter_id_taisan', '$type_hinhanh', '$unique_image_name')";
             
                         mysqli_query($conn, $insertImageQuery);
                     }
                 }
             }
        if ($query) {    
            return true;
        } else {
            return false;
        }
    }
    function Xoa_TaiSan($id_taisan){
        GLOBAL $conn;
        $filter_id_taisan = mysqli_real_escape_string($conn, $id_taisan);

        $sql = "DELETE FROM tb_taisan WHERE tb_taisan.id_taisan = $filter_id_taisan";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            // Lấy danh sách ảnh hiện tại từ cơ sở dữ liệu
            $currentImagesSQL = "SELECT url_hinhanh FROM tb_hinhanh WHERE id_loaihinhanh='$filter_id_taisan' AND type_hinhanh='Tài sản' ";
            $result = mysqli_query($conn, $currentImagesSQL);
            $existingImages = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $existingImages[] = $row['url_hinhanh'];
            }

            foreach ($existingImages as $image) {
                $filteredImage = mysqli_real_escape_string($conn, $image);
                // Xóa ảnh từ cơ sở dữ liệu
                $deleteImageSQL = "DELETE FROM tb_hinhanh WHERE id_loaihinhanh='$filter_id_taisan' AND url_hinhanh='$filteredImage' AND type_hinhanh='Tài sản'";
                mysqli_query($conn, $deleteImageSQL);

                // Xóa ảnh từ thư mục
                $imagePath = "../../../images/images_taisan/" . $filteredImage; 
                if (file_exists($imagePath)) {
                    unlink($imagePath); 
                }
            }
            return true;
        } else {
            return false;
        }
    }
    function laytangbytoanha($id_toanha) {
        GLOBAL $conn;
    
        $sql = "SELECT * FROM tb_tang WHERE tb_tang.id_toanha = $id_toanha ORDER BY ten_tang ASC";
    
        $query = mysqli_query($conn, $sql);
        $floors = array();
    
        while ($row = mysqli_fetch_array($query)) {
            $floors[] = $row;
        }
    
        return $floors;
    }
    function layphongbytoanha($id_toanha) {
        GLOBAL $conn;
    
        $sql = "SELECT * FROM tb_canho_phong WHERE tb_canho_phong.id_toanha = $id_toanha";
    
        $query = mysqli_query($conn, $sql);
        $rooms = array();
    
        while ($row = mysqli_fetch_array($query)) {
            $rooms[] = $row;
        }
    
        return $rooms;
    }
    function layphongbytang($id_tang) {
        GLOBAL $conn;
    
        $sql = "SELECT * FROM tb_canho_phong WHERE tb_canho_phong.id_tang = $id_tang";
    
        $query = mysqli_query($conn, $sql);
        $rooms = array();
    
        while ($row = mysqli_fetch_array($query)) {
            $rooms[] = $row;
        }
    
        return $rooms;
    }
    function laytoanha($id_toanha){
        GLOBAL $conn;
    
        $sql = "SELECT * FROM tb_toanha WHERE tb_toanha.id_toanha = $id_toanha";
    
        $query = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($query);

        return $row;
        
    }
    function lay_all_toanha(){
        GLOBAL $conn;
    
        $sql = "SELECT * FROM tb_toanha";

        $query = mysqli_query($conn, $sql);

        $toanha = array();
    
        while ($row = mysqli_fetch_array($query)) {
            $toanha[] = $row;
        }
    
        return $toanha;
        
    }
    function lay_all_kho(){
        GLOBAL $conn;
    
        $sql = "SELECT * FROM tb_kho";

        $query = mysqli_query($conn, $sql);

        $kho = array();
    
        while ($row = mysqli_fetch_array($query)) {
            $kho[] = $row;
        }
    
        return $kho;
        
    }
    function lay_all_nhanvienbaotri(){
        GLOBAL $conn;
    
        $sql = "SELECT * FROM tb_taikhoan WHERE tb_taikhoan.vai_tro = 2";

        $query = mysqli_query($conn, $sql);

        $nguoidung = array();
    
        while ($row = mysqli_fetch_array($query)) {
            $nguoidung[] = $row;
        }
    
        return $nguoidung;
        
    }
    function lay_soluong_tang(){
        GLOBAL $conn;

        $sqlfloor = "SELECT MIN(id_tang) AS id_tang, ten_tang
        FROM tb_tang
        GROUP BY ten_tang
        ORDER BY ten_tang ASC";
        $queryfloor = mysqli_query($conn, $sqlfloor);

        $tang = array();
        while ($rowfloor = mysqli_fetch_array($queryfloor)) {
            $tang[] = $rowfloor;
        }
        return $tang;

    }
    
    function laycanhophong($id_canhophong){
        GLOBAL $conn;
    
        $sql = "SELECT tb_canho_phong.*, tb_toanha.ten_toanha, tb_tang.ten_tang 
                FROM tb_canho_phong 
                JOIN tb_toanha ON tb_canho_phong.id_toanha = tb_toanha.id_toanha
                JOIN tb_tang ON tb_canho_phong.id_tang = tb_tang.id_tang
                WHERE tb_canho_phong.id_canho_phong = $id_canhophong";
    
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);

        $sql_taisan = "SELECT tb_taisan_canhophong.*, tb_taisan.* 
        FROM tb_taisan_canhophong 
        JOIN tb_taisan ON tb_taisan.id_taisan = tb_taisan_canhophong.id_taisan
        WHERE tb_taisan_canhophong.id_canho_phong = $id_canhophong";
        $query_taisan = mysqli_query($conn, $sql_taisan);
        $taisan_list = array(); 
        while ($image_row = mysqli_fetch_assoc($query_taisan)) {
            $taisan = array(); 
            $taisan['id_taisan'] = $image_row['id_taisan'];
            $taisan['ten_taisan'] = $image_row['ten_taisan'];
            $taisan['tinh_trang'] = $image_row['tinh_trang'];
            $taisan['gia_tri'] = $image_row['gia_tri'];
            $taisan_list[] = $taisan;
        }
        $row['taisan'] = $taisan_list;
        return $row;
    }
    function laybaotrisuachua($id_baotri_suachua) {
        GLOBAL $conn;
    
        // Lấy thông tin bảo trì sửa chữa
        $sql = "SELECT 
        bt.*, 
        tn.ten_toanha, 
        cp.ten_canho_phong, 
        tk_nv.ten_hien_thi AS ten_nguoi_nhan_viec,
        tk_nt.ten_hien_thi AS ten_nguoi_tao_viec,
        tk_nht.ten_hien_thi AS ten_nguoi_hoan_thanh_viec,
        tk_nd.ten_hien_thi AS ten_nguoi_duyet_viec
        FROM 
            tb_baotri_suachua bt
        JOIN 
            tb_toanha tn ON bt.id_toanha = tn.id_toanha
        JOIN 
            tb_canho_phong cp ON bt.id_phong = cp.id_canho_phong
        LEFT JOIN 
            tb_taikhoan tk_nv ON bt.id_taikhoan = tk_nv.id_taikhoan
        LEFT JOIN 
            tb_taikhoan tk_nt ON bt.id_nguoitao = tk_nt.id_taikhoan
        LEFT JOIN 
            tb_taikhoan tk_nht ON bt.id_nguoihoanthanh = tk_nht.id_taikhoan
        LEFT JOIN 
            tb_taikhoan tk_nd ON bt.id_nguoiduyet = tk_nd.id_taikhoan
        WHERE 
            bt.id_baotri_suachua = '$id_baotri_suachua'
        ";
    
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
    
        // Lấy danh sách hình ảnh
        $sqlimage1 = "SELECT tb_hinhanh.url_hinhanh
                     FROM tb_hinhanh 
                     WHERE tb_hinhanh.id_loaihinhanh = $id_baotri_suachua AND tb_hinhanh.type_hinhanh = 'Bảo trì sửa chữa'";
        $queryimage1 = mysqli_query($conn, $sqlimage1);
    
        $images1 = array();
        while ($image_row = mysqli_fetch_assoc($queryimage1)) {
            $images1[] = $image_row['url_hinhanh'];
        }
     // Lấy danh sách hình ảnh
        $sqlimage2 = "SELECT tb_hinhanh.url_hinhanh
                    FROM tb_hinhanh 
                    WHERE tb_hinhanh.id_loaihinhanh = $id_baotri_suachua AND tb_hinhanh.type_hinhanh = 'Bảo trì sửa chữa hoàn thành'";
        $queryimage2 = mysqli_query($conn, $sqlimage2);

        $images2 = array();
        while ($image_row = mysqli_fetch_assoc($queryimage2)) {
        $images2[] = $image_row['url_hinhanh'];
        }
            // Thêm mảng hình ảnh vào mảng kết quả trả về
            $row['images1'] = $images1;
            $row['images2'] = $images2;

            return $row;
    }
    function laytaisan($id_taisan) {    
        GLOBAL $conn;
    
        $sql = "SELECT tb_taisan.* FROM tb_taisan WHERE tb_taisan.id_taisan = $id_taisan";
    
        $query = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($query); 
        // Lấy danh sách hình ảnh
        $sqlimage1 = "SELECT tb_hinhanh.url_hinhanh
                     FROM tb_hinhanh 
                     WHERE tb_hinhanh.id_loaihinhanh = $id_taisan AND tb_hinhanh.type_hinhanh = 'Tài sản'";
        $queryimage1 = mysqli_query($conn, $sqlimage1);
    
        $images1 = array();
        while ($image_row = mysqli_fetch_assoc($queryimage1)) {
            $images1[] = $image_row['url_hinhanh'];
        }
        // Thêm mảng hình ảnh vào mảng kết quả trả về
        $row['images1'] = $images1;

        return $row;
    }
    function laytaisanchuaco($idphong) {    
        global $conn;
    
        $sql = "SELECT tb_taisan.*, tb_taisan.id_taisan AS id
        FROM tb_taisan
        LEFT JOIN tb_taisan_canhophong ON tb_taisan.id_taisan = tb_taisan_canhophong.id_taisan
        AND tb_taisan_canhophong.id_canho_phong = $idphong
        WHERE tb_taisan_canhophong.id_taisan IS NULL";
    
        $query = mysqli_query($conn, $sql);
    
        $result = array(); 
    
        while ($row = mysqli_fetch_array($query)) {
            $result[] = $row; 
        }
    
        return $result; 
    }
    // Quang làm
    function GetListHoaDon(){
		GLOBAL $conn;
		$sql = "select hoadon.id as id_hoadon, hoadon.ngay_tao as ngaytao, hoadon.ngay_het_han as ngayhethan, hoadon.ngay_thanh_toan as ngaythanhtoan, hoadon.gia as gia, hoadon.tinhtrang as tinhtrang, dichvu.ten_dichvu as tendv, phong.ten_canho_phong as tenphong, phong.ma_canho_phong as maphong
		from tb_hoadon as hoadon, tb_hopdong as hopdong, tb_dichvu as dichvu, tb_canho_phong as phong
		where hoadon.id_DV = dichvu.id_dichvu
		and hoadon.id_hopdong = hopdong.id
		and hopdong.id_canho_phong = phong.id_canho_phong";
        $query = mysqli_query($conn, $sql);
		$data = array();
        if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}

	function GetListDichVu(){
		GLOBAL $conn;
		    // Kiểm tra xem kết nối đã được thiết lập chưa
		if ($conn === null) {
			// Thực hiện kết nối đến cơ sở dữ liệu
			$conn = mysqli_connect("localhost", "root", "", "quanlychungcumini");
			
			// Kiểm tra kết nối
			if (!$conn) {
				die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
			}
		}
		$sql = "select * from tb_dichvu";
        $query = mysqli_query($conn, $sql);
		$data = array();
        if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}
	
	function GetListHopDong(){
		GLOBAL $conn;
				    // Kiểm tra xem kết nối đã được thiết lập chưa
		if ($conn === null) {
			// Thực hiện kết nối đến cơ sở dữ liệu
			$conn = mysqli_connect("localhost", "root", "", "quanlychungcumini");
			
			// Kiểm tra kết nối
			if (!$conn) {
				die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
			}
		}
		$sql = "SELECT tb_hopdong.id as id, tb_canho_phong.ten_canho_phong as tenphong, tb_canho_phong.ma_canho_phong as maphong 
			FROM tb_hopdong, tb_canho_phong
			WHERE tb_hopdong.id_canho_phong = tb_canho_phong.id_canho_phong";
        $query = mysqli_query($conn, $sql);
		$data = array();
        if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}
	function CreateHoaDon($dichVu, $hopDong, $ngayHetHan, $gia, $tinhTrang) {
		// Kết nối tới cơ sở dữ liệu
		GLOBAL $conn;    
		// Chuẩn bị câu truy vấn INSERT
		$sql = "insert into tb_hoadon (id_DV, id_hopdong,  ngay_het_han, gia, tinhtrang, ngay_tao) VALUES ('$dichVu', '$hopDong', '$ngayHetHan', '$gia', '$tinhTrang', now())";
		// Thực thi câu truy vấn
		if (mysqli_query($conn, $sql)) {
			return true;
		}
		return false;
	}	
	function GetNumberPhoneByIDHopDong($id_hopdong){
		GLOBAL $conn;
		$sql = "select cd.sdt as sdt from tb_hopdong as hd, tb_cudan as cd where cd.id_phong = hd.id_phong and hd.id = '$id_hopdong'";
		$query = mysqli_query($conn, $sql);
		$data = array();
        if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}
	
	function SendSMSToAlert($sdt, $msg){
		// Authorisation details.
		$username = "hnueschoolapp@gmail.com";
		$hash = "5327581e10e5388bfd6caff5761a286632be1b18af0533df7d5511a338ef1dc0";

		// Config variables. Consult http://api.txtlocal.com/docs for more info.
		$test = "0";

		// Data for text message. This is the text message data.
		$sender = "API Test"; // This is who the message appears to be from.
		$numbers = $sdt; // A single number or a comma-seperated list of numbers
		$message = $msg;
		// 612 chars or less
		// A single number or a comma-seperated list of numbers
		$message = urlencode($message);
		$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
		$ch = curl_init('https://api.txtlocal.com/send/?');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch); // This is the result from the API
		curl_close($ch);
		echo $result;
	}
	
	function CreateMoMoPayment($parterCode,
		$orderId,
		$amount,
		$orderInfo,
		$orderType,
		$transId,
		$payType){
		GLOBAL $conn;    
				if ($conn === null) {
			// Thực hiện kết nối đến cơ sở dữ liệu
			$conn = mysqli_connect("localhost", "root", "", "quanlychungcumini");
			
			// Kiểm tra kết nối
			if (!$conn) {
				die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
			}
		}
		$sql = "insert into payment (partner_code, order_id, amount, order_info, order_type, trans_id, pay_type) values('$parterCode',
		'$orderId',
		'$amount',
		'$orderInfo',
		'$orderType',
		'$transId',
		'$payType')";
		if (mysqli_query($conn, $sql)) {
			return true;
		}
		return false;
	}
	
	function GetListKhoanThuPhi(){
		GLOBAL $conn;
		$sql = "select khoanthuphi.id as id, khoanthuphi.id_dichvu as id_dichvu, dichvu.TenDV as tendv,phong.ten_canho_phong as tenphong, phong.ma_canho_phong as maphong,khoanthuphi.heso as heso, khoanthuphi.tongtien as tongtien, khoanthuphi.id_canho_phong as id_canho_phong 
		from tb_khoanthuphi as khoanthuphi, tb_canho_phong as phong, tb_dichvu as dichvu
		where khoanthuphi.id_dichvu = dichvu.id
		and khoanthuphi.id_canho_phong = phong.id_canho_phong
		";
        $query = mysqli_query($conn, $sql);
		$data = array();
        if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}
    
	function UpdateKhoanThuPhi($id, $heso, $tongtien, $id_canho_phong, $id_dichvu) {
		GLOBAL $conn;
		
		// Khởi tạo chuỗi truy vấn
		$sql = "UPDATE tb_khoanthuphi SET";
		
		// Kiểm tra và nối chuỗi cho các giá trị không rỗng
		if (!empty($heso)) {
			$sql .= " heso = '$heso',";
		}
		if (!empty($tongtien)) {
			$sql .= " tongtien = '$tongtien',";
		}
		if (!empty($id_canho_phong)) {
			$sql .= " id_canho_phong = '$id_canho_phong',";
		}
		if (!empty($id_dichvu)) {
			$sql .= " id_dichvu = '$id_dichvu',";
		}
		
		// Xóa dấu phẩy cuối cùng nếu có
		$sql = rtrim($sql, ",");
		
		// Hoàn thành câu truy vấn
		$sql .= " WHERE id = '$id'";
		
		// Thực hiện cập nhật dữ liệu
		$query = mysqli_query($conn, $sql);
		
		if ($query) {
			return true;
		}
		
		return false;
	}
	function DeleteKhoanThuPhi($id){
		GLOBAL $conn;
		$sql = "DELETE from tb_khoanthuphi where id= '$id'";
		$query = mysqli_query($conn, $sql);
		if ($query) {
			return true;
		}
		
		return false;
	}
	function CreateKhoanThuPhi($heso, $tongtien, $id_canho_phong, $id_dichvu) {
		GLOBAL $conn;
		// Kiểm tra xem các giá trị đầu vào có hợp lệ không
		if (empty($heso) || empty($tongtien) || empty($id_canho_phong) || empty($id_dichvu)) {
			return false;
		}
		// Thực hiện thêm mới dữ liệu vào bảng "tb_khoanthuphi"
		$sql = "INSERT INTO tb_khoanthuphi (heso, tongtien, id_canho_phong, id_dichvu) VALUES ('$heso', '$tongtien', '$id_canho_phong', '$id_dichvu')";
		$query = mysqli_query($conn, $sql);
		if ($query) {
			return true;
		}
		return false;
	}
    
    function GetListHoaDonDaThanhToan(){
		GLOBAL $conn;
		$sql = "select hoadon.id as id_hoadon, hoadon.loai as loai, hoadon.ngay_tao as ngaytao, hoadon.ngay_het_han as ngayhethan, hoadon.ngay_thanh_toan as ngaythanhtoan, hoadon.gia as gia, hoadon.tinhtrang as tinhtrang, dichvu.TenDV as tendv, phong.ten_canho_phong as tenphong, phong.ma_canho_phong as maphong
		from tb_hoadon as hoadon, tb_hopdong as hopdong, tb_dichvu as dichvu, tb_canho_phong as phong
		where hoadon.id_DV = dichvu.id
		and hoadon.id_hopdong = hopdong.id
		and hopdong.id_canho_phong = phong.id_canho_phong
				and hoadon.tinhtrang='Đã thanh toán'";
        $query = mysqli_query($conn, $sql);
		$data = array();
        if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}
	function GetListHoaDonChuaThanhToan(){
		GLOBAL $conn;
		$sql = "select hoadon.id as id_hoadon, hoadon.loai as loai, hoadon.ngay_tao as ngaytao, hoadon.ngay_het_han as ngayhethan, hoadon.ngay_thanh_toan as ngaythanhtoan, hoadon.gia as gia, hoadon.tinhtrang as tinhtrang, dichvu.TenDV as tendv, phong.ten_canho_phong as tenphong, phong.ma_canho_phong as maphong
		from tb_hoadon as hoadon, tb_hopdong as hopdong, tb_dichvu as dichvu, tb_canho_phong as phong
		where hoadon.id_DV = dichvu.id
		and hoadon.id_hopdong = hopdong.id
		and hopdong.id_canho_phong = phong.id_canho_phong
		and hoadon.tinhtrang = 'Chưa thanh toán'";
        $query = mysqli_query($conn, $sql);
		$data = array();
        if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}

	function GetListHoaDonByIdHoaDonHoacIDPhong($keyword){
		GLOBAL $conn;
		$sql = "SELECT hoadon.id AS id_hoadon, hoadon.ngay_tao AS ngaytao, hoadon.ngay_het_han AS ngayhethan, hoadon.ngay_thanh_toan AS ngaythanhtoan, hoadon.gia AS gia, hoadon.tinhtrang AS tinhtrang, dichvu.ten_dichvu AS tendv, phong.ten_canho_phong AS tenphong, phong.ma_canho_phong AS maphong
        FROM tb_hoadon AS hoadon
        INNER JOIN tb_hopdong AS hopdong ON hoadon.id_hopdong = hopdong.id
        INNER JOIN tb_dichvu AS dichvu ON hoadon.id_DV = dichvu.id_dichvu
        INNER JOIN tb_canho_phong AS phong ON hopdong.id_canho_phong = phong.id_canho_phong
        WHERE phong.ten_canho_phong LIKE '%$keyword%' OR phong.ma_canho_phong LIKE '%$keyword%'";

        $query = mysqli_query($conn, $sql);
		$data = array();
        if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}
	function GetListHoaDonByIDPhong($keyword){
		GLOBAL $conn;
		if ($conn === null) {
			// Thực hiện kết nối đến cơ sở dữ liệu
			$conn = mysqli_connect("localhost", "root", "", "quanlychungcumini");
			
			// Kiểm tra kết nối
			if (!$conn) {
				die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
			}
		}
		$sql = "select hoadon.id as id_hoadon,  hoadon.ngay_tao as ngaytao, hoadon.ngay_het_han as ngayhethan, hoadon.ngay_thanh_toan as ngaythanhtoan, hoadon.gia as gia, hoadon.tinhtrang as tinhtrang, dichvu.ten_dichvu as tendv, phong.ten_canho_phong as tenphong, phong.ma_canho_phong as maphong, phong.id_canho_phong as id_phong
		from tb_hoadon as hoadon, tb_hopdong as hopdong, tb_dichvu as dichvu, tb_canho_phong as phong
		where hoadon.id_DV = dichvu.id_dichvu
		and hoadon.id_hopdong = hopdong.id
		and hopdong.id_canho_phong = phong.id_canho_phong
		and hoadon.tinhtrang = 'Chưa thanh toán'
		and (phong.id_canho_phong = '$keyword' or phong.ma_canho_phong like '%$keyword%' or phong.ten_canho_phong like '%$keyword%')" ;
        $query = mysqli_query($conn, $sql);
		$data = array();
        if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}
	function UpdateThanhToanHoaDon($id){
				GLOBAL $conn;
		if ($conn === null) {
			// Thực hiện kết nối đến cơ sở dữ liệu
			$conn = mysqli_connect("localhost", "root", "", "quanlychungcumini");
			
			// Kiểm tra kết nối
			if (!$conn) {
				die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
			}
		}
		$sql = "update tb_hoadon set tb_hoadon.tinhtrang = 'Đã thanh toán', tb_hoadon.ngay_thanh_toan = NOW() where tb_hoadon.id_hopdong = (select tb_hopdong.id from tb_hopdong where tb_hopdong.id_phong = '$id')";
        $query = mysqli_query($conn, $sql);
		if($query){
			return true;
		}
		return false;
	}
	function UpdateHoaDon($id, $id_DV, $id_hopdong, $ngay_het_han, $ngay_tao, $ngay_thanh_toan, $gia, $tinhtrang){
		GLOBAL $conn;
		
		// Validate các trường thông tin
		if(empty($id) || empty($id_DV) || empty($id_hopdong) || empty($ngay_het_han) || empty($ngay_tao) || empty($gia) || empty($ngay_thanh_toan) || empty($tinhtrang)){
			return false; // Trả về false nếu có trường thông tin trống
		}
		
		// Thực hiện cập nhật vào cơ sở dữ liệu
		$sql = "UPDATE tb_hoadon SET id_DV = '$id_DV', id_hopdong = '$id_hopdong', ngay_het_han = '$ngay_het_han', ngay_tao = '$ngay_tao', gia = '$gia', tinhtrang = '$tinhtrang', ngay_thanh_toan = '$ngay_thanh_toan' WHERE id = $id";
		$query = mysqli_query($conn, $sql);
		if($query){
			return true; // Trả về true nếu cập nhật thành công
		} else {
			return false; // Trả về false nếu cập nhật thất bại
		}
	}

	function DeleteHoaDon($id){
		GLOBAL $conn;
		if ($conn === null) {
			// Thực hiện kết nối đến cơ sở dữ liệu
			$conn = mysqli_connect("localhost", "root", "", "quanlychungcumini");
			
			// Kiểm tra kết nối
			if (!$conn) {
				die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
			}
		}
		// Validate các trường thông tin
		if(empty($id)){
			return false; // Trả về false nếu có trường thông tin trống
		}
		
		// Thực hiện cập nhật vào cơ sở dữ liệu
		$sql = "delete from tb_hoadon where id='$id'";
		$query = mysqli_query($conn, $sql);
		if($query){
			return true; // Trả về true nếu cập nhật thành công
		} else {
			return false; // Trả về false nếu cập nhật thất bại
		}
	}
	
	function GetDataToUpdateHoaDon($id){
		GLOBAL $conn;
		if ($conn === null) {
			// Thực hiện kết nối đến cơ sở dữ liệu
			$conn = mysqli_connect("localhost", "root", "", "quanlychungcumini");
			
			// Kiểm tra kết nối
			if (!$conn) {
				die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
			}
		}
		$sql = "select hoadon.id as id_hoadon, hoadon.ngay_tao as ngaytao, hoadon.ngay_het_han as ngayhethan, hoadon.ngay_thanh_toan as ngaythanhtoan, hoadon.gia as gia, hoadon.tinhtrang as tinhtrang, dichvu.ten_dichvu as tendv, phong.ten_canho_phong as tenphong, phong.ma_canho_phong as maphong, phong.id_canho_phong as id_phong, dichvu.id_dichvu as id_dichvu, hopdong.id as id_hopdong
		from tb_hoadon as hoadon, tb_hopdong as hopdong, tb_dichvu as dichvu, tb_canho_phong as phong
		where hoadon.id_DV = dichvu.id_dichvu
		and hoadon.id_hopdong = hopdong.id
		and hopdong.id_canho_phong = phong.id_canho_phong
		and hoadon.id= '$id'" ;
        $query = mysqli_query($conn, $sql);
		$data = array();
        if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}
	
	    function GetEmailForSent(){
		GLOBAL $conn;
		if ($conn === null) {
			// Thực hiện kết nối đến cơ sở dữ liệu
			$conn = mysqli_connect("localhost", "root", "", "quanlychungcumini");
			
			// Kiểm tra kết nối
			if (!$conn) {
				die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
			}
		}
		$sql = "SELECT DISTINCT dancu.email as email
			FROM tb_hoadon as hoadon, tb_hopdong as hopdong, tb_dancu as dancu
			WHERE hoadon.id_hopdong = hopdong.id
			AND hopdong.id_dancu = dancu.id_dancu
			AND hoadon.tinhtrang = 'Chưa thanh toán'" ;
		$query = mysqli_query($conn, $sql);
		$data = array();
        if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}
	
	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';	
	require 'phpmailer/src/SMTP.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	function SentEmailDoiNo($emailTo){
		$mail = new PHPMailer(true);
		
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'hnueschoolapp@gmail.com';
		$mail->Password = 'omxvkhrwlbyyselg';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;
		
		$mail->setFrom('hnueschoolapp@gmail.com');
		$mail->addAddress($emailTo);
		$mail->Subject = "Email thong bao hoa don.";
		$mail->Body = "Bạn có hóa đơn chưa thanh toán.
				Vui lòng gặp ban quản lý để thanh toán hóa đơn.";
		$mail->send();
	}
	
	function cleanInput($input) {
		GLOBAL $conn;
		if ($conn === null) {
			// Thực hiện kết nối đến cơ sở dữ liệu
			$conn = mysqli_connect("localhost", "root", "", "quanlychungcumini");
			
			// Kiểm tra kết nối
			if (!$conn) {
				die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
			}
		}
    // Loại bỏ các ký tự không an toàn
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    
    // Loại bỏ các ký tự đặc biệt trong SQL
    $input = stripslashes($input);
    $input = mysqli_real_escape_string($conn, $input); // Thay 'connection' bằng biến kết nối CSDL của bạn
    
    // Kiểm tra và loại bỏ các ký tự đặc biệt trong XSS
    $input = strip_tags($input);
    
    return $input;
}

function xoa_dan_cu($id_dan_cu) {
    global $conn;

    // Kiểm tra danh sách các dân cư thuộc cùng một chủ hộ
    $sql1="SELECT `id_dancu`,`id_chu_ho` FROM tb_dancu AS d
    WHERE   d.`id_chu_ho`=$id_dan_cu";
    $query = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($query)>=1){

        while ($row = mysqli_fetch_assoc($query)){
         $xoa1=$row['id_dancu'];
            $sql3= "DELETE FROM `tb_dancu`  WHERE  `id_chu_ho`='$xoa1' ";
            $query3 = mysqli_query($conn, $sql3);
            if ($query3) {
             
            } else {
                return false;
            }
                // echo $xoa1;
        }
        $sql3="SELECT `id` FROM tb_hopdong AS d
        INNER JOIN `tb_hopdong_chuho` as ch ON ch.id_hopdong=d.id
        INNER JOIN `tb_dancu` as da ON da.id_dancu=ch.id_chuho
        where da.id_dancu=$id_dan_cu";
                    $query2 = mysqli_query($conn, $sql3);
                    if ($query2) {
                        while ($row = mysqli_fetch_array($query2)){
                            $sql = "DELETE FROM `tb_hopdong` WHERE  `id`='" .$row['id']."';";
                            $sql1 = "DELETE FROM `tb_hopdong_chuho` WHERE  `id_hopdong`='" .$row['id']."' LIMIT 1;";
                            $query1 = mysqli_query($conn, $sql1);
                            if ($query1) {
                                $query = mysqli_query($conn, $sql);
                                if ($query) {
                                    $sql3= "DELETE FROM `tb_dancu` WHERE  `id_dancu`='$id_dan_cu'";
                                    $query3 = mysqli_query($conn, $sql3);
                                    if ($query3) {
                    
                                    } else {
                                        return false;
                                    }
                                } else {
                                    return false;
                                }
                            } else {
                                return false;
                            }

                        }
                    }
                    else {
                        return false;
                    }
        
    }
    else {
        // Nếu không có dân cư thuộc chủ hộ, xóa chủ hộ
        $sql = "DELETE FROM `tb_dancu`  WHERE  `id_dancu`=$id_dan_cu";
        $query = mysqli_query($conn, $sql);

        if (!$query) {
            return false;
        }
    }

    return true;
}

function xoa_HopDong($hopdong){
 GLOBAL $conn;

 $sql = "DELETE FROM `tb_hopdong` WHERE  `id`=$hopdong;";
 $sql1 = "DELETE FROM `tb_hopdong_chuho` WHERE  `id_hopdong`=$hopdong LIMIT 1;";
 $sql2="SELECT `id_dancu`, `id_chu_ho` FROM tb_dancu AS d
 INNER JOIN `tb_hopdong_chuho` as ch ON ch.id_chuho=d.id_chu_ho
 INNER JOIN `tb_hopdong` as h ON h.id=ch.id_hopdong
 WHERE h.id=$hopdong";
 $query2 = mysqli_query($conn, $sql2);
 if ($query2) {
     while ($row = mysqli_fetch_array($query2)){
         $sql3= "DELETE FROM `tb_dancu` WHERE  `id_dancu`='".$row['id_dancu']."'";
         $query3 = mysqli_query($conn, $sql3);
         if ($query3) {

         } else {
             return false;
         }
     }
 } else {
     return false;
 }
 $query1 = mysqli_query($conn, $sql1);
 if ($query1) {
     $query = mysqli_query($conn, $sql);
     if ($query) {
         return true;
     } else {
         return false;
     }
 } else {
     return false;
 }


}
function layhopdong($id_hopdong){
 GLOBAL $conn;

 $sql = "SELECT * FROM tb_hopdong WHERE id = $id_hopdong";

 $query = mysqli_query($conn, $sql);

 $row = mysqli_fetch_array($query);

 return $row;
 
}
function them_dan_cu($tendancu, $gioitinh,$quanhe,
$name_dan_cu, $sdt, $ngaysinh, $addressDetail,$cccd,$file_img, $email,$k){ 
 $content ="";
 $file_path = '';

 GLOBAL $conn;
 print_r($file_img);
 // Check if the phone number already exists in the database

     // Phone number does not exist, proceed with other checks and database insertion
     if (isset($file_img) && $file_img['error'] !== UPLOAD_ERR_NO_FILE) {
         // File upload logic here...
         
         $file_extension = pathinfo($file_img['name'], PATHINFO_EXTENSION);
     
         // Check if the file extension is allowed
         $allowed_extensions = ['png', 'jpg', 'git', 'PNG', 'JPG', 'GIT'];
         if (in_array(strtolower($file_extension), $allowed_extensions)) {
 // ... your code ...

 // Get the absolute path of the current script's directory

 // Specify the relative path to the desired upload directory

             $upload_dir='images/anh/';
             $sql_upload_dir="";
             if($k==0){
                 $sql_upload_dir ='../../../images/anh/';
             }
             elseif($k==1){
                 $sql_upload_dir ='./images/anh/';
             }
             echo $sql_upload_dir;
             // Use absolute path
             // Update the upload directory as needed
     
             // Generate a unique filename to avoid overwriting existing files
             $unique_filename = uniqid() . '_' . $sdt . '.' . $file_extension;
             echo $unique_filename;
             // Move the uploaded file to the destination directory with the unique filename
             if (move_uploaded_file($file_img['tmp_name'], $sql_upload_dir . $unique_filename)) {
                 $file_path = $upload_dir . $unique_filename;

             } else {
                 $content .= 'Lỗi khi di chuyển tệp lên.';
                 echo '<script>alert("'.$content.'"); history.back();</script>';
             }
         } else {
             $content .= '<br>Chỉ chấp nhận tệp ảnh (png, jpg, git).';
             echo '<script>alert("'.$content.'"); history.back();</script>';
         }
     }

     // Now you can include $file_path in your database query or handle it as needed
     if($gioitinh=='nam'){
         $gioitinh=1;
     }
     elseif($gioitinh=='nu'){
         $gioitinh=0;
     }
     else{
         $gioitinh=2;
     }
     if($content==""){

         $sql="INSERT INTO `tb_dancu` (`ho_ten`, `so_dien_thoai`, `cccd`, `email`, `gioi_tinh`, `dia_chi`, `ngay_sinh`, `hinh_anh`, `id_chu_ho`, `quan_he`) VALUES ('$tendancu', '$sdt', '$cccd', '$email', '$gioitinh', '$addressDetail', '$ngaysinh', '$file_path','$name_dan_cu','$quanhe');";
         echo $sql;
         
     $result = mysqli_query($conn, $sql);

     if ($result) {
         $content .= 'Thêm thành công';
         // header("Location: "); // Redirect to another page after successful insert
         // return $content;
     } else {
         $content .= 'Thêm thất bại: ' . mysqli_error($conn);
     }
     }
     

     echo $content;
     if($k==0){
         echo '<script>alert("'.$content.'"); window.location = "../../../home.php?title=quanlydancu#";</script>';
         echo  $content;
     }
}

function ThemHopDong($id_dan_cu, $name, $name_can_ho, $ngaybatdau, $ngayketthuc, $tongthang, $filehopdong,$giam_gia) {
 global $conn;
 $content = "";
 $file_path = "";

 // Kiểm tra xem có tệp tin được tải lên không
 if (isset($filehopdong) && $filehopdong['error'] !== UPLOAD_ERR_NO_FILE) {
     $file_hop_dong = $filehopdong;
     $file_extension = pathinfo($file_hop_dong['name'], PATHINFO_EXTENSION);

     // Kiểm tra định dạng của tệp tin
     $allowed_extensions = ['pdf', 'PDF'];
     if (in_array(strtolower($file_extension), $allowed_extensions)) {
         $upload_dir = 'file/hop_dong/';
         $sql_upload_dir = 'file/hop_dong/';
         
         // Tạo tên tệp tin duy nhất để tránh việc ghi đè các tệp tin hiện tại
         $unique_filename = uniqid() . '_' . $name . '_' . $id_dan_cu . '.' . $file_extension;

         // Di chuyển tệp tin đã tải lên đến thư mục đích với tên tệp duy nhất
         if (move_uploaded_file($file_hop_dong['tmp_name'], $sql_upload_dir . $unique_filename)) {
             $file_path = $upload_dir . $unique_filename;
         } else {
             $content .= 'Lỗi khi di chuyển tệp lên.';
             echo '<script>alert("'.$content.'"); history.back();</script>';
         }
     } else {
         $content .= '<br>Chỉ chấp nhận tệp file (pdf).';
         echo '<script>alert("'.$content.'"); history.back();</script>';
     }
 }

 // Kiểm tra xem có lỗi nào không
 if ($content == "") {
     $filter_name_can_ho = mysqli_real_escape_string($conn, $name_can_ho);
     $filter_ngaybatdau = mysqli_real_escape_string($conn, $ngaybatdau);
     $filter_ngayketthuc = mysqli_real_escape_string($conn, $ngayketthuc);
     $filter_tongthang = mysqli_real_escape_string($conn, $tongthang);
     $filter_hop_dong = mysqli_real_escape_string($conn, $file_path);
     $filter_giam_gia = mysqli_real_escape_string($conn, $giam_gia);


     // Truy vấn để lấy giá thuê của căn hộ
     $sql1 = "SELECT `tienthue_canho_phong` FROM `tb_canho_phong` WHERE `id_canho_phong` = $filter_name_can_ho";
     $query1 = mysqli_query($conn, $sql1);
     $row = mysqli_fetch_assoc($query1);
     $gia = $row['tienthue_canho_phong'];
     $filter_giam_gia=$filter_giam_gia!=null ? $filter_giam_gia :0;
     // Tính tổng tiền
     $tong = $filter_tongthang * $gia * ((100 - $filter_giam_gia) / 100);


     // Tạo câu lệnh SQL để thêm hợp đồng
     $sql = "INSERT INTO `tb_hopdong` (`id`, `id_canho_phong`, `ngay_batdau`, `ngay_ketthuc`, `thoi_han_hop_dong`, `gia`, `tong`, `filehopdong`,`giam_gia`) 
             VALUES (NULL, '$filter_name_can_ho', '$filter_ngaybatdau', '$filter_ngayketthuc', '$filter_tongthang', '$gia', '$tong', '$filter_hop_dong','$filter_giam_gia')";
     
     // Thực hiện truy vấn
     $query = mysqli_query($conn, $sql);

     // Kiểm tra kết quả và hiển thị thông báo
     if ($query) {
         $sql4= "SELECT `id` FROM `tb_hopdong` WHERE `filehopdong` = '$filter_hop_dong';";
         echo $sql4;
     $query4 = mysqli_query($conn, $sql4);
         if(mysqli_num_rows($query4) ==1){
             $row = mysqli_fetch_assoc($query4);
     
             $id_file = $row['id'];
             $sql5="INSERT INTO `tb_hopdong_chuho` (`id_hopdong`, `id_chuho`) VALUES ('$id_file','$id_dan_cu');";
             $query5 = mysqli_query($conn, $sql5);
             if ($query5) {
                 echo '<script>alert("Thêm thành công"); window.location.href = "home.php?title=hopdong";</script>';
             } else {
                 echo '<script>alert("Thêm thất bại");</script>';
             }
             
         }

     } else {
         echo '<script>alert("Thêm thất bại");</script>';
     }
 } else {
     echo $content;
 }
}
function  Hop_dong_chu_ho($id_dan_cu,$filehopdong){
 global $conn;

 

}
