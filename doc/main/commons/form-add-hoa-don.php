<?php 
    include_once '../../../function.php';
    $dataDV = GetListDichVu();
	$dataHopDong = GetListHopDong();
	$errors = [];
	
?>
    <main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item">Danh sách hóa đơn</li>
          <li class="breadcrumb-item"><a href="#">Thêm hóa đơn</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Tạo mới hóa đơn</h3>
            <div class="tile-body">
			<form action="" method="post" class="row">
			<div class="form-group col-md-4">
				  <label class="control-label">Dịch vụ</label>
				  <select class="form-control" id="dichvu" name="dichvu" required>
					<?php 
						foreach($dataDV as $value){
					?>
					<option value="<?php echo $value['id']; ?>"><?php echo $value['TenDV']; ?></option>
					<?php 
						}
					?>
				  </select>
				</div>
                <div class="form-group  col-md-4">
                  <label class="control-label">Hợp đồng</label>
				  <select class="form-control" id="hopdong" name="hopdong" required>
					<?php 
						foreach($dataHopDong as $value){
					?>
					<option value="<?php echo $value['id']; ?>">Hợp đồng: <?php echo $value['id']; ?> - Mã phòng: <?php echo$value['id_phong']; ?> - Tên phòng: <?php echo $value['tenphong']; ?></option>
					<?php 
						}
					?>
				  </select>
                </div>               
				<div class="form-group col-md-4">
                  <label for="exampleSelect1" class="control-label">Loại</label>
					<input class="form-control" type="number" id="loai" name="loai" required>
                </div>
				<div class="form-group col-md-4">
                  <label for="exampleSelect1" class="control-label">Ngày hết hạn</label>
					<input class="form-control" type="datetime-local" id="ngayhethan" name="ngayhethan" required>
                </div>
				<div class="form-group col-md-4">
                  <label for="exampleSelect1" class="control-label">Giá</label>
					<input class="form-control" type="number" id="gia" name="gia" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="exampleSelect1" class="control-label">Tình trạng</label>
                  <select class="form-control" id="tinhtrang" name="tinhtrang" required >
                    <option value="Chưa thanh toán">Chưa thanh toán</option>
                    <option value="Đã thanh toán">Đã thanh toán</option>
                  </select>
                </div>                
          </div>
		  
			  <input class="btn btn-save" type="submit" id="btnSave" name="btnSave" value="Lưu lại">
			  <a class="btn btn-cancel" href="form-add-hoa-don.php">Hủy bỏ</a>
			</form>
		  <?php 
			if(isset($_POST['btnSave'])){
				// Lấy giá trị từ trường "Dịch vụ" và loại bỏ khoảng trắng
				$dichVu = trim($_POST["dichvu"]);
				if (empty($dichVu)) {
					$errors[] = "Vui lòng chọn một dịch vụ";
				}
				// Lấy giá trị từ trường "Hợp đồng" và loại bỏ khoảng trắng
				$hopDong = trim($_POST["hopdong"]);
				if (empty($hopDong)) {
					$errors[] = "Vui lòng chọn một hợp đồng";
				}
				// Lấy giá trị từ trường "Loại" và loại bỏ khoảng trắng
				$loai = trim($_POST["loai"]);
				if (empty($loai)) {
					$errors[] = "Vui lòng nhập loại";
				}
				// Lấy giá trị từ trường "Ngày hết hạn" và loại bỏ khoảng trắng
				$ngayHetHan = trim($_POST["ngayhethan"]);
				if (empty($ngayHetHan)) {
					$errors[] = "Vui lòng nhập ngày hết hạn";
				}
				// Lấy giá trị từ trường "Giá" và loại bỏ khoảng trắng
				$gia = trim($_POST["gia"]);
				if (empty($gia)) {
					$errors[] = "Vui lòng nhập giá";
				}
				// Lấy giá trị từ trường "Tình trạng" và loại bỏ khoảng trắng
				$tinhTrang = trim($_POST["tinhtrang"]);
				if (empty($tinhTrang)) {
					$errors[] = "Vui lòng chọn tình trạng";
				}
				// Kiểm tra nếu có lỗi, hiển thị thông báo lỗi
				if (empty($errors)) {
					if(CreateHoaDon($dichVu, $hopDong, $loai, $ngayHetHan, $gia, $tinhTrang)){
						echo "<script>alert('ok!');</script>";
					}
					else{
						echo "<script>alert('not ok!');</script>";
					}
				}
			}
			if (!empty($errors)) {
				foreach ($errors as $error) {
					echo "<p>$error</p>";
				}
				echo "<script>alert('Thông báo222!');</script>";
			}
		  ?>
        </div>
    </main>