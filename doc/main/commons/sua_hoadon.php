<?php 
    include_once 'function.php';
	$id = trim($_GET['id']);
	$id = cleanInput($id);
    $rawDataHoaDon = GetDataToUpdateHoaDon($id);
	$dataHoaDon = $rawDataHoaDon[0];
	$errors = [];
	$dataDV = GetListDichVu();
	$dataHD = GetListHopDong();
?>
    <main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item">Danh sách hóa đơn</li>
          <li class="breadcrumb-item"><a href="#">Sửa hóa đơn</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
				<h3 class="tile-title">Sửa hóa đơn</h3>
				<div class="tile-body">
					<form action="" method="post">
						<div class="row">
							<div class="form-group col-md-4">
								<label for="exampleSelect1" class="control-label">Dịch vụ</label>
								<select class="form-control" id="dv" name="dv" required >
									<?php foreach ($dataDV as $value){ ?>
									<option value="<?php echo $value['id_dichvu']; ?>"><?php echo $value['id_dichvu'] . " - " . $value['ten_dichvu']; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group col-md-4">
								<label for="exampleSelect1" class="control-label">Hợp đồng</label>
								<select class="form-control" id="hd" name="hd" required >
									<?php foreach ($dataHD as $value){ ?>
									<option value="<?php echo $value['id']; ?>"><?php echo $value['id'] . " - " . $value['tenphong'] . " - " . $value['maphong']; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group col-md-4">
							<label for="exampleSelect1" class="control-label">Ngày hết hạn</label>
								<input class="form-control" type="datetime-local" id="ngayhethan" name="ngayhethan" required value="<?php echo date('Y-m-d\TH:i', strtotime($dataHoaDon['ngayhethan']));?>">
							</div>
							<div class="form-group col-md-4">
							<label for="exampleSelect1" class="control-label">Ngày tạo</label>
								<input class="form-control" type="datetime-local" id="ngaytao" name="ngaytao" required value="<?php echo date('Y-m-d\TH:i', strtotime($dataHoaDon['ngaytao']));?>">
							</div>
							<div class="form-group col-md-4">
							<label for="exampleSelect1" class="control-label">Ngày thanh toán</label>
								<input class="form-control" type="datetime-local" id="ngaythanhtoan" name="ngaythanhtoan" required value="<?php if(!empty($dataHoaDon['ngaythanhtoan'])){echo date('Y-m-d\TH:i', strtotime($dataHoaDon['ngaythanhtoan']));}?>">
							</div>
							<div class="form-group col-md-4">
							<label for="exampleSelect1" class="control-label">Giá</label>
								<input class="form-control" type="number" id="gia" name="gia" required value="<?php echo $dataHoaDon['gia'];?>">
							</div>
							<div class="form-group col-md-4">
							<label for="exampleSelect1" class="control-label">Tình trạng</label>
							  <select class="form-control" id="tinhtrang" name="tinhtrang" required >
								<option value="Chưa thanh toán" <?php if($dataHoaDon['tinhtrang'] == 'Chưa thanh toán') echo 'selected'; ?>>Chưa thanh toán</option>
								<option value="Đã thanh toán" <?php if($dataHoaDon['tinhtrang'] == 'Đã thanh toán') echo 'selected'; ?>>Đã thanh toán</option>
							</select>
							</div>                
						</div>
						<input class="btn btn-save" type="submit" id="btnSave" name="btnSave" value="Lưu lại">
						<a class="btn btn-cancel" href="form-add-hoa-don.php">Hủy bỏ</a>
					</form>
					<?php 
					if(isset($_POST['btnSave'])){
						$errors = array(); // Khai báo mảng lưu trữ lỗi

						// Kiểm tra và xử lý dữ liệu
						$dichVu = trim($_POST["dv"]);
						if (empty($dichVu)) {
							$errors[] = "Vui lòng chọn một dịch vụ";
						}

						$hopDong = trim($_POST["hd"]);
						if (empty($hopDong)) {
							$errors[] = "Vui lòng chọn một hợp đồng";
						}

						// $loai = trim($_POST["loai"]);
						// if (empty($loai)) {
						// 	$errors[] = "Vui lòng nhập loại";
						// }

						$ngayHetHan = trim($_POST["ngayhethan"]);
						if (empty($ngayHetHan)) {
							$errors[] = "Vui lòng nhập ngày hết hạn";
						}
						
						$ngayTao = trim($_POST["ngaytao"]);
						if (empty($ngayTao)) {
							$errors[] = "Vui lòng nhập ngày tạo";
						}
						
						$ngayThanhToan = trim($_POST["ngaythanhtoan"]);
						if (empty($ngayThanhToan)) {
							$errors[] = "Vui lòng nhập ngày thanh toán";
						}



						$gia = trim($_POST["gia"]);
						if (empty($gia)) {
							$errors[] = "Vui lòng nhập giá";
						}

						$tinhTrang = trim($_POST["tinhtrang"]);
						if (empty($tinhTrang)) {
							$errors[] = "Vui lòng chọn tình trạng";
						}

						// Nếu không có lỗi, thực hiện lưu dữ liệu
						if (empty($errors)) {
							// Gọi hàm UpdateHoaDon với các tham số tương ứng
							if(UpdateHoaDon($id, $dichVu, $hopDong, $ngayHetHan, $ngayTao, $ngayThanhToan, $gia, $tinhTrang)){
								echo "<script>alert('Lưu dữ liệu thành công!'); window.location = window.location.href;</script>";
							} else {
								echo "<script>alert('Lưu dữ liệu thất bại!'); window.location = window.location.href;</script>";
							}
						} else {
							// Nếu có lỗi, hiển thị thông báo lỗi
							foreach ($errors as $error) {
								echo "<p>$error</p>";
							}
							echo "<script>alert('Vui lòng kiểm tra lại thông tin!');</script>";
						}
					}
					?>
				</div>
		  </div>
        </div>
	  </div>
    </main>