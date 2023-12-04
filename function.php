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
        $sql = "SELECT * FROM tb_toanha WHERE tb_toanha.ten_toanha = '".$filter_tentoanha."'";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) > 0) {     
            return 2;
        } else {
            $sql = "INSERT INTO tb_toanha (ten_toanha, ma_toanha, so_tang, trangthai_toanha, diachi_chitiet, tinhthanh, quanhuyen, phuongxa) 
            VALUES ('$filter_tentoanha', '$matToaNha', '$filter_so_tang', '$filter_trangthai', '$filter_diachi', '$filter_tinhanh', '$filter_quanhuyen', '$filter_phuongxa')";
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
        $sql = "SELECT * FROM tb_toanha WHERE tb_toanha.ten_toanha = '$filter_tentoanha' AND tb_toanha.id_toanha != '$filter_id_toanha'";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) > 0) {     
            return 2;
        } else {
            $sql = "UPDATE tb_toanha SET ten_toanha='$filter_tentoanha', so_tang='$filter_so_tang', trangthai_toanha='$filter_trangthai', diachi_chitiet='$filter_diachi', 
            tinhthanh='$filter_tinhanh', quanhuyen='$filter_quanhuyen', phuongxa='$filter_phuongxa' WHERE id_toanha='$filter_id_toanha'";
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
    function ThemCanho_Phong($ten_canho_phong, $ma_canho_phong, $id_toanha, $so_nguoi_o, $tienthue, $tiencoc, $dientich, $trangthai, $id_tang) {
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
                return $lastInsertedId;
            } else {
                return false;
            }
        }

    }
    function SuaCanho_Phong($ten_canho_phong, $id_toanha, $so_nguoi_o, $tienthue, $tiencoc, $dientich, $trangthai, $id_tang, $id_canhophong){
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

        $sql = "SELECT * FROM tb_canho_phong WHERE tb_canho_phong.ten_canho_phong = '$filter_ten_canho_phong' AND tb_canho_phong.ten_canho_phong != '$filter_id_canhophong'";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) > 0) {     
            return 2;
        } else {
            $sql = "UPDATE tb_canho_phong SET ten_canho_phong='$filter_ten_canho_phong', id_toanha='$filter_toanha', so_nguoi_o='$filter_so_nguoi_o', tienthue_canho_phong='$filter_tienthue', 
            tiencoc_canho_phong='$filter_tiencoc', dientich_canho_phong='$filter_dientich',tinhtrang_canho_phong='$filter_trangthai',id_tang='$filter_tang' WHERE id_canho_phong='$filter_id_canhophong'";
                $query = mysqli_query($conn, $sql);
                if ($query) {
                    return true;
                } else {
                    return false;
                }
        }
    }
    function XoaCanho_Phong($id_canho_phong){
        GLOBAL $conn;

        $sql = "DELETE FROM tb_canho_phong WHERE tb_canho_phong.id_canho_phong = $id_canho_phong";

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

        return $row;
    }

    // Quang làm
    	function GetListHoaDon(){
		GLOBAL $conn;
		$sql = "select hoadon.id as id, phong.id_phong as id_phong, dichvu.tenDV as tenDV, hoadon.gia as gia, hoadon.ngay_het_han as ngay_het_han, hoadon.ngay_thanh_toan as ngay_thanh_toan, hoadon.tinhtrang as tinhtrang
				from tb_hoadon as hoadon, tb_hopdong as hopdong, tb_phong as phong, tb_dichvu as dichvu
				where hoadon.id_DV = dichvu.id
				and hoadon.id_hopdong = hopdong.id
				and hopdong.id_phong = phong.id_phong";
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
		$sql = "select hoadon.id, phong.id_phong, dichvu.tenDV, hoadon.gia, hoadon.ngay_het_han, hoadon.ngay_thanh_toan, hoadon.tinhtrang
				from tb_hoadon as hoadon, tb_hopdong as hopdong, tb_phong as phong, tb_dichvu as dichvu
				where hoadon.id_DV = dichvu.id
				and hoadon.id_hopdong = hopdong.id
				and hopdong.id_phong = phong.id_phong
				and (hoadon.id = '$keyword' or phong.id_phong = '$keyword')";
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
		$sql = "select hoadon.id, phong.id_phong, dichvu.tenDV, hoadon.gia, hoadon.ngay_het_han, hoadon.ngay_thanh_toan, hoadon.tinhtrang
				from tb_hoadon as hoadon, tb_hopdong as hopdong, tb_phong as phong, tb_dichvu as dichvu
				where hoadon.id_DV = dichvu.id
				and hoadon.id_hopdong = hopdong.id
				and hopdong.id_phong = phong.id_phong
				and phong.id_phong = '$keyword'";
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
		$sql = "SELECT tb_hopdong.id as id, tb_phong.ten_phong as tenphong, tb_phong.id_phong as id_phong FROM tb_hopdong, tb_phong WHERE tb_hopdong.id_phong = tb_phong.id_phong";
        $query = mysqli_query($conn, $sql);
		$data = array();
        if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}	
	function CreateHoaDon($dichVu, $hopDong, $loai, $ngayHetHan, $gia, $tinhTrang) {
		// Kết nối tới cơ sở dữ liệu
		GLOBAL $conn;    
		// Chuẩn bị câu truy vấn INSERT
		$sql = "insert into tb_hoadon (id_DV, id_hopdong, loai, ngay_het_han, gia, tinhtrang, ngay_tao) VALUES ('$dichVu', '$hopDong', '$loai', '$ngayHetHan', '$gia', '$tinhTrang', now())";
		// Thực thi câu truy vấn
		if (mysqli_query($conn, $sql)) {
			return true;
		}
		return false;
	}	
	function CreateMoMoPayment($parterCode,
		$orderId,
		$amount,
		$orderInfo,
		$orderType,
		$transId,
		$payType){
		GLOBAL $conn;    
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

    function xoa_dan_cu($id_dan_cu){
        GLOBAL $conn;

        $sql = "DELETE FROM `tb_dancu` WHERE  `cccd`=$id_dan_cu;";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    function xoa_HopDong($hopdong){
        GLOBAL $conn;

        $sql = "DELETE FROM `tb_hopdong` WHERE  `id`=$hopdong;";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            return true;
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
    function them_dan_cu($tendancu, $gioitinh, $sdt, $ngaysinh, $addressDetail,$cccd){ 
        $content ="";
        $file_path = '';
        GLOBAL $conn;

        // Check if the phone number already exists in the database
        $checkPhoneNumberQuery = "SELECT COUNT(*) AS count FROM tb_dancu WHERE so_dien_thoai = '$sdt'";
        $checkPhoneNumberResult = mysqli_query($conn, $checkPhoneNumberQuery);
        $phoneNumberCount = mysqli_fetch_assoc($checkPhoneNumberResult)['count'];
        $checkcccd="SELECT COUNT(*) AS count FROM tb_dancu WHERE `cccd`='$cccd'";
        $checkcccd=mysqli_query($conn,$checkcccd);
        $checkcccdCount = mysqli_fetch_assoc($checkcccd)['count'];
        if($checkcccdCount>0){
            $content .='<br>Căn cước công dân/hộ chiếu đã tồn tại trong hệ thống.';
        }
        elseif ($phoneNumberCount > 0) {
            // Phone number already exists, print a message and stop further processing
            $content .='<br>Số điện thoại đã tồn tại trong hệ thống.';
        } else {
            // Phone number does not exist, proceed with other checks and database insertion
            if (isset($_FILES['file_img']) && $_FILES['file_img']['error'] !== UPLOAD_ERR_NO_FILE) {
                // File upload logic here...
                $file_img = $_FILES['file_img'];
                $file_extension = pathinfo($file_img['name'], PATHINFO_EXTENSION);
            
                // Check if the file extension is allowed
                $allowed_extensions = ['png', 'jpg', 'git', 'PNG', 'JPG', 'GIT'];
                if (in_array(strtolower($file_extension), $allowed_extensions)) {
        // ... your code ...

        // Get the absolute path of the current script's directory

        // Specify the relative path to the desired upload directory

                    $upload_dir='images/anh/';
                    $sql_upload_dir ='../../../images/anh/';
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
                    }
                } else {
                    $content .= '<br>Chỉ chấp nhận tệp ảnh (png, jpg, git).';
                }
            }
            else {

                $content.='<br> chưa có ảnh'; // Set an empty string or a default value
            }

            // Now you can include $file_path in your database query or handle it as needed
            if($content==""){
                $sql="INSERT INTO `tb_dancu` (`cccd`, `ten_hien_thi`, `so_dien_thoai`, `gioi_tinh`, `hinh_anh`, `dia_chi`, `ngay_sinh`) VALUES ('$cccd', '$tendancu', '$sdt', '$gioitinh', '$file_path', '$addressDetail', '$ngaysinh');";

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
            echo '<script>alert("'.$content.'"); window.location = "../../../home.php?title=quanlydancu#";</script>';
            return $content;
    }
    }
    function ThemHopDong($name_dan_cu, $name_can_ho, $ngaybatdau, $ngayketthuc, $tongthang,$filehopdong) {
        GLOBAL $conn;
        $content="";
        $file_path ="";
        if (isset($filehopdong) && $filehopdong['error'] !== UPLOAD_ERR_NO_FILE) {
            // File upload logic here...
            $file_hop_dong = $filehopdong;
            $file_extension = pathinfo($file_hop_dong['name'], PATHINFO_EXTENSION);
        
            // Check if the file extension is allowed
            $allowed_extensions = ['pdf','PDF'];
            if (in_array(strtolower($file_extension), $allowed_extensions)) {
    // ... your code ...
    
    // Get the absolute path of the current script's directory
    
    // Specify the relative path to the desired upload directory
                 echo $file_hop_dong['name'];
                $upload_dir='file/hop_dong/';
                $sql_upload_dir ='file/hop_dong/';
                // Use absolute path
                 // Update the upload directory as needed
        
                // Generate a unique filename to avoid overwriting existing files
                $unique_filename = uniqid() . '_' . $name_dan_cu. '.' . $file_extension;
                // Move the uploaded file to the destination directory with the unique filename
                if (move_uploaded_file($file_hop_dong['tmp_name'], $sql_upload_dir . $unique_filename)) {
                    $file_path = $upload_dir . $unique_filename;
                } else {
                    $content .= 'Lỗi khi di chuyển tệp lên.';
                }
            } else {
                $content .= '<br>Chỉ chấp nhận tệp file (pdf).';
            }
        }
        if($content==""){
            $filter_name_dan_cu = mysqli_real_escape_string($conn,$name_dan_cu);
            $filter_name_can_ho = mysqli_real_escape_string($conn,$name_can_ho);
            $filter_ngaybatdau = mysqli_real_escape_string($conn,$ngaybatdau);
            $filter_ngayketthuc = mysqli_real_escape_string($conn,$ngayketthuc);
            $filter_tongthang = mysqli_real_escape_string($conn,$tongthang);
            $filter_tongthang = mysqli_real_escape_string($conn,$tongthang);
            $filter_hop_dong=mysqli_real_escape_string($conn,$file_path);
            $sql1="SELECT `tienthue_canho_phong` from `tb_canho_phong` where `id_canho_phong`=$filter_name_can_ho";
            $query1 = mysqli_query($conn, $sql1);
            // Lấy kết quả
            $row = mysqli_fetch_assoc($query1);
            $tong=$filter_tongthang*$row['tienthue_canho_phong'];
            $sql = "INSERT INTO `tb_hopdong` (`bat_dau`, `ket_thuc`, `id_dan_cu`, `id_can_ho_phong`, `tong`, `file_hop_dong`) VALUES ('$filter_ngaybatdau', '$filter_ngayketthuc', '$filter_name_dan_cu', '$filter_name_can_ho', '$tong','$filter_hop_dong');";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo '<script>alert("Thêm thành công"); window.location.href = "home.php?title=hopdong";</script>';
            } else {
                echo '<script>alert("Thêm thất bại");</script>';
            }
        }
    }
    
    
    
