<?php 
    include_once 'function.php';
    $data = GetListHoaDon();
	$hoadon = $data;
	//print_r($khoanthuphi);
	$dataDoanhThu = [];
	if(isset($_POST['btnSearch'])){
		$keyword = trim($_POST['searchInput']);
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
		}else if($filter == "tt"){
			$data = GetListHoaDonDaThanhToan();
			$hoadon = $data;
		}else if($filter == "ctt"){
			$data = GetListHoaDonChuaThanhToan();
			$hoadon = $data;
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
                  <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i
                      class="fas fa-file-upload"></i>Nhập Excel</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-excel btn-sm" href="doc/main/thanhtoanhoadon.php" title="In"><i class="fas fa-file-excel"></i>Thanh toán hóa đơn</a>
                </div>
								<div class="col-sm-4 text-right">
					<form action="" method="post">
						<div class="input-group">
							<input type="search" class="form-control form-control-sm" id="searchInput" name="searchInput" placeholder="Tìm kiếm...">
							<div class="input-group-append">
								<input type="submit" class="btn btn-outline-secondary" id="btnSearch" name="btnSearch" value="Tìm kiếm">
							</div>
							<select id="selectFilter" name="selectFilter">
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
					<th>Loại </th>
                    <th>Ngày tạo</th>
                    <th>Ngày hết hạn</th>
                    <th>Ngày thanh toán</th>
                    <th>Giá</th>
                    <th>Tình trạng</th>
					<th>Tên dịch vụ</th>
					<th>Tên phòng</th>
					<th>Mã phòng</th>
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
                    <td><?php echo $value['loai']; ?></td>
                    <td><?php echo $value['ngaytao']; ?></td>
					<td><?php echo $value['ngayhethan']; ?></td>
                    <td><?php echo $value['ngaythanhtoan']; ?></td>
					<td><?php echo $value['gia']; ?></td>
					<td><?php echo $value['tinhtrang']; ?></td>
                    <td><?php echo $value['tendv']; ?></td>
					<td><?php echo $value['tenphong']; ?></td>
                    <td><?php echo $value['maphong']; ?></td>
                    <td width="50">
						<button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button>
                      <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button>
					 </td>
                 </tr>
                <?php 
					}
				?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>