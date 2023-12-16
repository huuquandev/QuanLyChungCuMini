<?php 
	include_once 'function.php';
        $data = GetListHoaDon();
	$hoadon = array();
	if(empty($hoadon)){
		$hoadon = $data;
	}
	
	//print_r($khoanthuphi);
	$dataDoanhThu = [];
	$flagSearch = false;
	if(isset($_POST['btnSearch'])){
		$flagSearch = true;
		$keyword = trim($_POST['searchInput']);
		$keyword = cleanInput($keyword);
		if(empty($keyword)){
			header("Refresh:0");
		}
		else{
			$data = GetListHoaDonByIdHoaDonHoacIDPhong($keyword);
			$hoadon = $data;
		}
	}
	if(isset($_POST['btnLoc'])){
		$filter = $_POST['selectFilter'];
		if($filter == "all"){
			$data = GetListHoaDon();
			$hoadon = $data;
		}
		else if($filter == "tt"){
			/*
			$filteredHoadon = array();
			foreach ($hoadon as $value){
				if($value['tinhtrang']=="Đã thanh toán"){
					$filteredHoadon[] = $value;
					print_r($value);
				}		
			}
			$hoadon = $filteredHoadon;
			*/
		}
		else if($filter == "ctt"){
			
		}
	}
	
	// if(isset($_POST['btnLocData'])){
	// 	$filterDV = $_POST['selectDV'];
	// 	$filterT = $_POST['selectT'];
	// 	if($filterT=="thang"){
	// 		$dataDoanhThu = TinhToanDoanhThuTheoThang($filterDV);
	// 	}else if($filterT=="quy"){
	// 		$dataDoanhThu = TinhToanDoanhThuTheoQuy($filterDV);
	// 	}
	// }
	$dataDV = GetListDichVu();
	
	require "doc/Classes/PHPExcel.php";
	
	if(isset($_POST['xuatExcel'])){
		echo "<script>alert('Xuất file Excel thành công.')</script>";
		//Khởi tạo đối tượng
		$excel = new PHPExcel();
		//Chọn trang cần ghi (là số từ 0->n)
		$excel->setActiveSheetIndex(0);
		//Tạo tiêu đề cho trang. (có thể không cần)
		$excel->getActiveSheet()->setTitle('demo ghi dữ liệu');
		// Dat kich thuoc cho cac cot
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
		//$excel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(50);
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(50);
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(50);
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(50);
		
		$excel->getActiveSheet()->getStyle('A1:J1')->getFont()->setBold(true);
		$excel->getActiveSheet()->setCellValue('A1', 'IdHD');
		//$excel->getActiveSheet()->setCellValue('B1', 'Loại');
		$excel->getActiveSheet()->setCellValue('C1', 'Tên dịch vụ');
		$excel->getActiveSheet()->setCellValue('D1', 'Tên phòng');
		$excel->getActiveSheet()->setCellValue('E1', 'Mã phòng');
		$excel->getActiveSheet()->setCellValue('F1', 'Ngày tạo');
		$excel->getActiveSheet()->setCellValue('G1', 'Ngày hết hạn');
		$excel->getActiveSheet()->setCellValue('H1', 'Ngày thanh toán');
		$excel->getActiveSheet()->setCellValue('I1', 'Giá');
		$excel->getActiveSheet()->setCellValue('J1', 'Tình trạng');
		
		$numRow = 2;
		foreach ($hoadon as $row) {
			$excel->getActiveSheet()->setCellValue('A' . $numRow, $row['id_hoadon']);
			//$excel->getActiveSheet()->setCellValue('B' . $numRow, $row['loai']);
			$excel->getActiveSheet()->setCellValue('C' . $numRow, $row['tendv']);
			$excel->getActiveSheet()->setCellValue('D' . $numRow, $row['tenphong']);
			$excel->getActiveSheet()->setCellValue('E' . $numRow, $row['maphong']);
			$excel->getActiveSheet()->setCellValue('F' . $numRow, $row['ngaytao']);
			$excel->getActiveSheet()->setCellValue('G' . $numRow, $row['ngayhethan']);
			$excel->getActiveSheet()->setCellValue('H' . $numRow, $row['ngaythanhtoan']);
			$excel->getActiveSheet()->setCellValue('I' . $numRow, $row['gia']);
			$excel->getActiveSheet()->setCellValue('J' . $numRow, $row['tinhtrang']);
			$numRow++;
		}
		PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('data.xlsx');
		//header('Content-type: application/vnd.ms-excel');
		//header('Content-Disposition: attachment; filename="data.xls"');
		//PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('php://output');
	}
	if(isset($_POST['xacnhan'])){
		$target_dir = "doc/Classes/PHPExcel/Reader/";
		$target_file = $target_dir . basename($_FILES["nhapExcel"]["name"]);
		move_uploaded_file($_FILES["nhapExcel"]["tmp_name"], $target_file);
		$file = basename($_FILES["nhapExcel"]["tmp_name"]);
		$file = $target_file;
		$objFile = PHPExcel_IOFactory::identify($file);
		$objData = PHPExcel_IOFactory::createReader($objFile);
		//Chỉ đọc dữ liệu
		$objData->setReadDataOnly(true);

		// Load dữ liệu sang dạng đối tượng
		$objPHPExcel = $objData->load($file);

		//Lấy ra số trang sử dụng phương thức getSheetCount();
		// Lấy Ra tên trang sử dụng getSheetNames();

		//Chọn trang cần truy xuất
		$sheet = $objPHPExcel->setActiveSheetIndex(0);

		//Lấy ra số dòng cuối cùng
		$Totalrow = $sheet->getHighestRow();
		//Lấy ra tên cột cuối cùng
		$LastColumn = $sheet->getHighestColumn();

		//Chuyển đổi tên cột đó về vị trí thứ, VD: C là 3,D là 4
		$TotalCol = PHPExcel_Cell::columnIndexFromString($LastColumn);

		//Tạo mảng chứa dữ liệu
		$data = [];

		//Tiến hành lặp qua từng ô dữ liệu
		//----Lặp dòng, Vì dòng đầu là tiêu đề cột nên chúng ta sẽ lặp giá trị từ dòng 2
		for ($i = 2; $i <= $Totalrow; $i++) {
			//----Lặp cột
			for ($j = 0; $j < $TotalCol; $j++) {
				// Tiến hành lấy giá trị của từng ô đổ vào mảng
				$data[$i - 2][$j] = $sheet->getCellByColumnAndRow($j, $i)->getValue();;
			}
		}
		//Hiển thị mảng dữ liệu
//		echo '<pre>';
//		var_dump($data);
	}
	if(isset($_POST['thongbao'])){
		$dataEmail = GetEmailForSent();
		foreach ($dataEmail as $email){
			SentEmailDoiNo($email['email']);
		}
		echo "<script>alert('Đã gửi hết các email.') </script>";
	}
?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var searchInput = document.getElementById("searchInput");
    var searchBtn = document.getElementById("searchBtn");

    searchInput.addEventListener("keydown", function(event) {
        if (event.keyCode === 13) { // Kiểm tra nếu phím Enter được bấm
            event.preventDefault(); // Ngăn chặn hành vi mặc định của Enter (gửi form)
            searchBtn.click(); // Simulate việc bấm nút tìm kiếm
        }
    });
});

function boloc() {
    var selectedValue = document.getElementById("selectFilter").value;
    var table = document.getElementById("sampleTable");
    var tr = table.getElementsByTagName("tr");
    for (var i = 0; i < tr.length; i++) {
        var td = tr[i].getElementsByTagName("td")[9];
        if (td) {
            var txtValue = td.textContent || td.innerText;
            if (selectedValue === "all") {
                tr[i].style.display = "";
            } else if (selectedValue === "tt" && td.innerText === "Đã thanh toán") {
                tr[i].style.display = "";
            } 
			else if (selectedValue === "ctt" && td.innerText === "Chưa thanh toán") {
                tr[i].style.display = "";
            } 
			else {
                tr[i].style.display = "none";
            }
        }       
    }
}
</script>
<main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
                <div class="col-sm-2">
  
                  <a class="btn btn-add btn-sm" href="../../home.php?title=addhoadon" title="Thêm"><i class="fas fa-plus"></i>
                    Tạo mới hóa đơn</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-excel btn-sm" href="../../home.php?title=xulythanhtoan" title="In"><i class="fas fa-file-excel"></i>Thanh toán hóa đơn</a>
                </div>
				<div class="col-sm-2">
				<form method="POST">
					<input id="xuatExcel" name="xuatExcel" class="btn btn-delete btn-sm nhap-tu-file" type="submit" value="Xuất Excel">
				</form>
                </div>
				<div class="col-sm-2">
				<form method="POST">
					<input id="xuatExcel" name="xuatExcel" class="btn btn-delete btn-sm nhap-tu-file" type="submit" value="Xuất Excel">
				</form>
                </div>
				<div class="col-sm-2">
                  <form method="POST" >
					<input id="thongbao" name="thongbao" class="btn btn-delete btn-sm nhap-tu-file" type="submit" value="Giục đóng tiền">
				</form>
                </div>
				<div class="col-sm-4 text-right">
					<form action="" method="post">
						<div class="input-group">
							<input type="search" class="form-control form-control-sm" id="searchInput" name="searchInput" placeholder="Tìm kiếm...">
							<div class="input-group-append">
								<input type="submit" class="btn btn-outline-secondary" id="btnSearch" name="btnSearch" value="Tìm kiếm">
							</div>
							<select id="selectFilter" name="selectFilter" onchange="boloc()">
								<option value="all">Xem tất cả</option>
								<option value="tt">Đã thanh toán</option>
								<option value="ctt">Chưa thanh toán</option>
							</select>
							<input type="submit" class="btn btn-outline-secondary" id="btnLoc" name="btnLoc" value="Lọc">
						</div>
					</form>
				</div></div>
              </div>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th width="10"><input type="checkbox" id="all"></th>
                    <th>Id hóa đơn</th>
					<th>Tên dịch vụ</th>
					<th>Tên phòng</th>
					<th>Mã phòng</th>
                    <th>Ngày tạo</th>
                    <th>Ngày hết hạn</th>
                    <th>Ngày thanh toán</th>
                    <th>Giá</th>
                    <th>Tình trạng</th>
					<th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
				<?php 
					foreach ($hoadon as $value){
				?>
				<tr>
                    <td width="10"><input type="checkbox" name="check1" value="<?php echo $value['id_hoadon']; ?>"></td>
                    <td><?php echo $value['id_hoadon']; ?></td>
                    <td><?php echo $value['tendv']; ?></td>
					<td><?php echo $value['tenphong']; ?></td>
					<td><?php echo $value['maphong']; ?></td>
                    <td><?php echo $value['ngaytao']; ?></td>
					<td><?php echo $value['ngayhethan']; ?></td>
                    <td><?php echo $value['ngaythanhtoan']; ?></td>
					<td><?php echo $value['gia']; ?></td>
					<td><?php echo $value['tinhtrang']; ?></td>
                    <td width="50">
						<a class="btn btn-primary btn-sm trash" title="Xóa" href="../../../home.php?title=xoahoadon&id=<?php echo $value['id_hoadon']; ?>"><i class="fas fa-trash-alt"></i> </a>
						<a class="btn btn-primary btn-sm edit" title="Sửa" href="../../../home.php?title=suahoadon&id=<?php echo $value['id_hoadon']; ?>"><i class="fa fa-edit"></i></a>

					 </td>
                 </tr>
                <?php 
					}
				?>
                </tbody>
              </table>
			  <div id="editForm" style="display: none;">
					<!-- Các trường thông tin trong form sửa -->
					<input type="text" id="maphongInput">
					<!-- Các trường thông tin khác -->
					<!-- Nút lưu để lưu thông tin đã sửa -->
					<button onclick="saveChanges()">Lưu</button>
				</div>
            </div>
          </div>
        </div>
      </div>
	  <script>
			function openEditForm(maphong) {
				// Hiển thị form sửa và điền thông tin cần sửa vào form
				document.getElementById('maphongInput').value = maphong;
				document.getElementById('editForm').style.display = 'block';
			}

			function saveChanges() {
				// Xử lý lưu thông tin đã sửa và ẩn form sau khi lưu
				// ...
				document.getElementById('editForm').style.display = 'none';
			}
		</script>
    </main
	