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
          <li class="breadcrumb-item active"><a href="../danh_sach_hoadon.php"><b>Danh sách hóa đơn</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
                <div class="col-sm-12 d-flex  text-right">
					<form action="" method="post" class="mr-2">
						<div class="input-group">
							<input type="search" class="form-control form-control-sm" id="searchInput" name="searchInput" placeholder="Tìm kiếm hóa đơn theo ID tên, mã phòng">
							<div class="input-group-append">
								<input type="submit" class="btn btn-outline-secondary" id="btnSearch" name="btnSearch" value="Tìm kiếm">								
							</div>
						</div>
					</form>
					<form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="xulythanhtoanmomo.php?id_phong=<?php echo $phong; ?>&amount=<?php echo $amount; ?>" class="mr-2">
						<div class="input-group">
							<?php if(!empty($data)){ ?>
							<input type="submit" class="form-control form-control-sm btn-success" id="btnThanhToanAll" name="btnThanhToanAll" value="Thanh toán tất cả bằng QR.">
							<?php } ?>
						</div>
					</form>
					<form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="xulythanhtoanmomoatm.php?id_phong=<?php echo $phong; ?>&amount=<?php echo $amount; ?>">
						<div class="input-group">
							<?php if(!empty($data)){ ?>
							<input type="submit" class="form-control form-control-sm btn-success" id="btnThanhToanAllAtm" name="btnThanhToanAllAtm" value="Thanh toán tất cả bằng ATM.">
							<?php } ?>
						</div>
					</form>
				</div>
              <table class="table table-hover table-bordered" id="">
                <thead>
                  <tr>
                    <th width="10"><input type="checkbox" id="all"></th>
                    <th>Id hóa đơn</th>
                    <th>Ngày tạo</th>
                    <th>Ngày hết hạn</th>
                    <th>Ngày thanh toán</th>
                    <th>Giá</th>
                    <th>Tình trạng</th>
					<th>Tên dịch vụ</th>
					<th>Tên phòng</th>
					<th>Mã phòng</th>
                  </tr>
                </thead>
                <tbody>
				<?php 
					foreach ($hoadon as $value){
				?>
				<tr>
                    <td width="10"><input type="checkbox" name="check1" value="<?php echo $value['id_hoadon']; ?>"></td>
                    <td><?php echo $value['id_hoadon']; ?></td>
                    <td><?php echo $value['ngaytao']; ?></td>
					<td><?php echo $value['ngayhethan']; ?></td>
                    <td><?php echo $value['ngaythanhtoan']; ?></td>
					<td><?php echo $value['gia']; ?></td>
					<td><?php echo $value['tinhtrang']; ?></td>
                    <td><?php echo $value['tendv']; ?></td>
					<td><?php echo $value['tenphong']; ?></td>
                    <td><?php echo $value['maphong']; ?></td>
                    <td><span class="badge bg-success"><?php echo $value['tinhtrang']; ?></</span></td>
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