<?php 
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
            $_SESSION['quyen_han'] = $row['quyen_han'];
            $_SESSION['gioi_tinh'] = $row['gioi_tinh'];
            $_SESSION['so_dien_thoai'] = $row['so_dien_thoai'];
            $_SESSION['hinh_anh'] = $row['hinh_anh'];
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
        $formattedAmount = number_format($amount, 0, ',', '.');
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
    
    function ThemToaNha($tentoanha, $diachi, $trangthai, $so_tang, $tinhanh, $quanhuyen, $phuongxa, $matToaNha) {
        GLOBAL $conn;
        $filter_tentoanha = mysqli_real_escape_string($conn, $tentoanha);
        $filter_diachi = mysqli_real_escape_string($conn, $diachi);
        $filter_trangthai = mysqli_real_escape_string($conn, $trangthai);
        $filter_so_tang = mysqli_real_escape_string($conn, $so_tang);
        $filter_tinhanh = mysqli_real_escape_string($conn, $tinhanh);
        $filter_quanhuyen = mysqli_real_escape_string($conn, $quanhuyen);
        $filter_phuongxa = mysqli_real_escape_string($conn, $phuongxa);
    
        $sql = "INSERT INTO tb_toanha (ten_toanha, ma_toanha, so_tang, trangthai_toanha, diachi_chitiet, tinhthanh, quanhuyen, phuongxa) 
                VALUES ('$filter_tentoanha', '$matToaNha', '$filter_so_tang', '$filter_trangthai', '$filter_diachi', '$filter_tinhanh', '$filter_quanhuyen', '$filter_phuongxa')";
    
        $query = mysqli_query($conn, $sql);
        if ($query) {
            // Lấy giá trị ID của tòa nhà vừa thêm
            $lastInsertedId = mysqli_insert_id($conn);
            return $lastInsertedId;
        } else {
            return false;
        }
    }
    
    function ThemCanho_Phong($ten_canho_phong, $ma_canho_phong, $tang, $so_nguoi_o, $tienthue, $tiencoc, $dientich, $trangthai, $tinhtrang) {
        GLOBAL $conn;
        $filter_ten_canho_phong = mysqli_real_escape_string($conn, $ten_canho_phong);
        $filter_ma_canho_phong = mysqli_real_escape_string($conn, $ma_canho_phong);
        $filter_tang = mysqli_real_escape_string($conn, $tang);
        $filter_so_nguoi_o = mysqli_real_escape_string($conn, $so_nguoi_o);
        $filter_tienthue = mysqli_real_escape_string($conn, $tienthue);
        $filter_tiencoc = mysqli_real_escape_string($conn, $tiencoc);
        $filter_dientich = mysqli_real_escape_string($conn, $dientich);
        $filter_trangthai = mysqli_real_escape_string($conn, $trangthai);
        $filter_tinhtrang = mysqli_real_escape_string($conn, $tinhtrang);

        $random = generateRandomCode();
        $maCanho = "P".$random;
    
        while (!isMatToaNhaUnique($conn, $maCanho)) {
            $matToaNha = generateRandomCode();
        }
    
        $sql = "INSERT INTO tb_canho_phong (ten_canho_phong, ma_canho_phong, tang, so_nguoi_o, tienthue_canho_phong,
         tiencoc_canho_phong, trangthai_canho_phong, tinhtrang_canho_phong) 
                VALUES ('$filter_ten_canho_phong', '$filter_ma_canho_phong', '$filter_tang', '$filter_so_nguoi_o', '$filter_tienthue',
                 '$filter_tiencoc', '$filter_tienthue', '$filter_dientich', '$filter_trangthai', '$filter_tinhtrang')";
    
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo '<script>alert("Thêm thành công"); window.location.href = "home.php?title=canho_phong";</script>';
        } else {
            echo '<script>alert("Thêm thất bại"); window.location.href = "home.php?title=canho_phong";</script>';
        }
    }
    function SuaToaNha($tentoanha, $diachi, $trangthai, $so_tang, $tinhanh, $quanhuyen, $phuongxa, $id_toanha){
        GLOBAL $conn;
        $filter_tentoanha = mysqli_real_escape_string($conn, $tentoanha);
        $filter_diachi = mysqli_real_escape_string($conn, $diachi);
        $filter_trangthai = mysqli_real_escape_string($conn, $trangthai);
        $filter_so_tang = mysqli_real_escape_string($conn, $so_tang);
        $filter_tinhanh = mysqli_real_escape_string($conn, $tinhanh);
        $filter_quanhuyen = mysqli_real_escape_string($conn, $quanhuyen);
        $filter_phuongxa = mysqli_real_escape_string($conn, $phuongxa);
        $filter_id_toanha = mysqli_real_escape_string($conn, $id_toanha);

        $sql = "UPDATE tb_toanha SET ten_toanha='$filter_tentoanha', so_tang='$filter_so_tang', trangthai_toanha='$filter_trangthai', diachi_chitiet='$filter_diachi', 
                tinhthanh='$filter_tinhanh', quanhuyen='$filter_quanhuyen', phuongxa='$filter_phuongxa' WHERE id_toanha='$filter_id_toanha'";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            return true;
        } else {
            return false;
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
    
    function laytoanha($id_toanha){
        GLOBAL $conn;
    
        $sql = "SELECT * FROM tb_toanha WHERE tb_toanha.id_toanha = $id_toanha";
    
        $query = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($query);

        return $row;
        
    }
    

    
    
    
