<?php 
    include_once 'function.php';
	$data = [];
	$hoadon = $data;
	$phong = "";
	$amount = 0;
	if(isset($_POST['btnSearch'])){
		$keyword = trim($_POST['searchInput']);
		if(empty($keyword)){
			header("Refresh:0");
		}
		else{
			$data = GetListHoaDonByIDPhong($keyword);
			$hoadon = $data;
		}
	}
	foreach ($hoadon as $value){
		$phong = $value['id_phong'];
		$amount += (int)$value['gia'];
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
                
				<div class="col-sm-4 text-right">
					<form action="" method="post">
						<div class="input-group">
							<input type="search" class="form-control form-control-sm" id="searchInput" name="searchInput" placeholder="Tìm kiếm hóa đơn theo ID tên, mã phòng">
							<div class="input-group-append">
								<input type="submit" class="btn btn-outline-secondary" id="btnSearch" name="btnSearch" value="Tìm kiếm">								
							</div>
						</div>
					</form>
					<form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="xulythanhtoanmomo.php?id_phong=<?php echo $phong; ?>&amount=<?php echo $amount; ?>">
						<div class="input-group">
								<?php if(!empty($data)){ ?>
								<input type="submit" class="form-control form-control-sm btn-success" id="btnThanhToanAll" name="btnThanhToanAll" value="Thanh toán tất cả bằng QR.">
								<?php } ?>
								
							</div>
						</div>
					</form>
					<form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="xulythanhtoanmomoatm.php?id_phong=<?php echo $phong; ?>&amount=<?php echo $amount; ?>">
						<div class="input-group">
								<?php if(!empty($data)){ ?>
								<input type="submit" class="form-control form-control-sm btn-success" id="btnThanhToanAllAtm" name="btnThanhToanAllAtm" value="Thanh toán tất cả bằng ATM.">
								<?php } ?>
								
							</div>
						</div>
					</form>
				</div></div>
              <table class="table table-hover table-bordered" id="">
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