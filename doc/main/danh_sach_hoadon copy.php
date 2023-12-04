<?php 
	include "function.php";
	$data = GetListHoaDon();
	$hoadon = $data;
	
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
          <li class="breadcrumb-item active"><a href="#"><b>Danh sách hóa đơn</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
                <div class="col-sm-2">
  
                  <a class="btn btn-add btn-sm" href="doc/form-add-hoa-don.php" title="Thêm"><i class="fas fa-plus"></i>
                    Tạo mới hóa đơn</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i
                      class="fas fa-file-upload"></i> Tải từ file</a>
                </div>
  
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                      class="fas fa-print"></i> In dữ liệu</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i
                      class="fas fa-copy"></i> Sao chép</a>
                </div>
  
                <div class="col-sm-2">
                  <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                      class="fas fa-file-pdf"></i> Xuất PDF</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                      class="fas fa-trash-alt"></i> Xóa tất cả </a>
                </div>
				<div class="col-sm-3 text-right">
					<form action="" method="post">
						<div class="input-group">
							<input type="search" class="form-control form-control-sm" id="searchInput" name="searchInput" placeholder="Tìm kiếm...">
							<div class="input-group-append">
								<input type="submit" class="btn btn-outline-secondary" id="btnSearch" name="btnSearch" value="Tìm kiếm">
							</div>
						</div>
					</form>
				</div></div>
              <table class="table table-hover table-bordered" id="">
                <thead>
                  <tr>
                    <th width="10"><input type="checkbox" id="all"></th>
                    <th>ID hóa đơn</th>
                    <th>Số phòng</th>
                    <th>Tên dịch vụ</th>
                    <th>Giá</th>
                    <th>Hết hạn</th>
                    <th>Ngày thanh toán</th>
					<th>Tình trạng</th>
					<th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
				<?php 
					foreach ($hoadon as $value){
				?>
				<tr>
                    <td width="10"><input type="checkbox" name="check1" value="<?php echo $value['id']; ?>"></td>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['id_phong']; ?></td>
                    <td><?php echo $value['tenDV']; ?></td>
                    <td><?php echo $value['gia']; ?></td>
                    <td><?php echo $value['ngay_het_han']; ?></td>
					<td><?php echo $value['ngay_thanh_toan']; ?></td>
                    <td><span class="badge bg-success"><?php echo $value['tinhtrang']; ?></</span></td>
                    <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button>
                      <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button></td>
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