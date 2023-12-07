<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>
          Sửa dân cư
          <?php
          $sql="SELECT h.*,t.ho_ten,ph.ten_canho_phong from `tb_hopdong` AS h 
          INNER JOIN `tb_canho_phong` AS ph 
          INNER JOIN `tb_dancu` AS t 
          on h.`id_dancu`=t.`id_dancu` AND h.id_canho_phong=ph.id_canho_phong
          where h.id=".$_GET['id']."";
          $query = mysqli_query($conn, $sql);
              // Lấy kết quả
              $row = mysqli_fetch_assoc($query);
              $ho_ten = $row['ho_ten'];

              // Hiển thị tên
              echo  $ho_ten."- "." với id hợp đồng:".$_GET['id'];
          ?>
        </b></a></li>
      </ul>
      <div id="clock"></div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
          <?php
                                $sql0="SELECT * FROM `tb_hopdong` where id=".$_GET['id'].";";
                                $query0 = mysqli_query($conn, $sql0);
                                    // Lấy kết quả
                                    $row = mysqli_fetch_assoc($query0);
                                    $id=$row['id'];
                                    $bat_dau = $row['ngay_batdau'];
                                    $ket_thuc=$row['ngay_ketthuc'];
                                    $id_dan_cu=$row['id_dancu'];
                                    $id_can_ho_phong=$row['id_canho_phong'];
                                    $tong=$row['tong'];
                                    $doi_bat_dau = date("Y-m-d", strtotime($bat_dau));
                                    $doi_ket_thuc=date("Y-m-d", strtotime($ket_thuc));

                                    // Hiển thị tên
                                    
          ?>
          <form action="#" method="POST" enctype="multipart/form-data">
                      <div class="modal-body">
                          <input type="hidden" id="txtOrderId" value="0" />
            
                          <div class="row">
                              <div class="col-12">
                              <span>
                                  <fieldset class="form-group" id="__BVID__981">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__981__BV_label_"> Tên căn hộ <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable" id="province">
                                        <div id="vs33__combobox" role="combobox" aria-expanded="false" aria-owns="vs33__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                          <select name="name_can_ho" id="name_can_ho"aria-autocomplete="list" aria-labelledby="vs33__combobox" aria-controls="vs33__listbox" autocomplete="off" class="vs__search"  >
                                                <?php 
                                                $sql1="SELECT c.`ten_canho_phong`,c.`id_canho_phong`,t.`ten_toanha`,h.`id` 
                                                FROM `tb_canho_phong` AS c INNER JOIN `tb_toanha` 
                                                AS t INNER JOIN `tb_hopdong` AS h ON t.`id_toanha` = c.`id_toanha`
                                                AND c.`id_canho_phong`=h.`id_canho_phong` WHERE h.`id`=$id";
                                                $query1=mysqli_query($conn,$sql1);
                                                $row1 = mysqli_fetch_assoc($query1);
                                                echo '<option value="'.$row1['id_canho_phong'].'" >'.$row1['ten_toanha'].' - Căn hộ: '.$row1['ten_canho_phong'].' </option>';
                                                $sql="SELECT DISTINCT c.ten_canho_phong, c.id_canho_phong, t.ten_toanha
                                                FROM tb_canho_phong AS c
                                                INNER JOIN tb_toanha AS t ON t.id_toanha = c.id_toanha
                                                INNER JOIN tb_hopdong AS h ON c.id_canho_phong = h.id_canho_phong
                                                WHERE h.id_canho_phong != $id_can_ho_phong;";
                                                $query=mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($query) > 0){
                                                  while ($row = mysqli_fetch_array($query)) {
                                                  echo '<option value="'.$row['id_canho_phong'].'" >'.$row['ten_toanha'].' - Căn hộ: '.$row['ten_canho_phong'].' </option>';
                                                }}
                                                ?>                                   
                                            </select>
                                          </div>
                                          <div class="vs__actions">
                                            <button type="button" title="Clear Selected" aria-label="Clear Selected" class="vs__clear" style="display: none;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                              </svg>
                                            </button>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down open-indicator vs__open-indicator" role="presentation">
                                              <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                            <div class="vs__spinner" style="display: none;">Loading...</div>
                                          </div>
                                        </div>
                                      </div>
                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>
                                  </fieldset>
                                </span>
                              </div>
                              <div class="mt-2 col-12">
                                <h5>Thông tin hợp đồng</h5>
                              </div>
                              <!---->
                              <div class="col-md-4">
                                <span>
                                  <fieldset class="form-group" id="__BVID__981">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__981__BV_label_"> Người thuê <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable" id="province">
                                        <div id="vs33__combobox" role="combobox" aria-expanded="false" aria-owns="vs33__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                          <select name="name_dan_cu" id="gioitinh"aria-autocomplete="list" aria-labelledby="vs33__combobox" aria-controls="vs33__listbox" autocomplete="off" class="vs__search"  >
                                          <?php
                                            $sql2 = "SELECT `id_dancu`,`cccd`, `ho_ten` FROM `tb_dancu` WHERE `id_dancu` = " . $id_dan_cu;
                                            $query2 = mysqli_query($conn, $sql2);
                                            $row2 = mysqli_fetch_assoc($query2);
                                            echo '<option value="' . $row2['cccd'] . '">' . $row2['ho_ten'] . '-' . $row2['cccd'] . '</option>';

                                            
                                            ?>
                                
                                            </select>
                                          </div>
                                          <div class="vs__actions">
                                            <button type="button" title="Clear Selected" aria-label="Clear Selected" class="vs__clear" style="display: none;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                              </svg>
                                            </button>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down open-indicator vs__open-indicator" role="presentation">
                                              <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                            <div class="vs__spinner" style="display: none;">Loading...</div>
                                          </div>
                                        </div>
                                      </div>
                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>
                                  </fieldset>
                                </span>
                              </div>
                              <div class="col-md-4">
                                <span>
                                  <fieldset class="form-group" id="__BVID__995">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__995__BV_label_"> Ngày bắt đầu <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="ward">
                                        <div id="vs35__combobox" role="combobox" aria-expanded="false" aria-owns="vs35__listbox" aria-label="Search for option" class="">
                                          <div class="vs__selected-options">
                                          <input id="ngaybatdau" type="date" class="form-control" value="<?php echo $doi_bat_dau;?>" name="ngaybatdau" required>

                                          </div>
                                        </div>
                                        <ul id="vs35__listbox" role="listbox" style="display: none; visibility: hidden;"></ul>
                                      </div>
                                      <small class="text-danger"></small>
                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>
                                  </fieldset>
                                </span>
                              </div>                              <div class="col-md-4">
                                <span>
                                  <fieldset class="form-group" id="__BVID__995">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__995__BV_label_"> Ngày kết thức <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="ward">
                                        <div id="vs35__combobox" role="combobox" aria-expanded="false" aria-owns="vs35__listbox" aria-label="Search for option" class="">
                                          <div class="vs__selected-options">
                                          <input id="ngayketthuc" type="date" class="form-control" value="<?php echo $doi_ket_thuc;?>" name="ngayketthuc" required>

                                          </div>
                                        </div>
                                        <ul id="vs35__listbox" role="listbox" style="display: none; visibility: hidden;"></ul>
                                      </div>
                                      <small class="text-danger"></small>
                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>
                                  </fieldset>
                                </span>
                              </div>
                              <div class="col-12">
                                <span>
                                  <fieldset class="form-group" id="__BVID__1001">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__1001__BV_label_">Tổng số tháng <span class="text-danger">(*)</span>
                                    </legend>
                                    <div>
                                      <div role="group" class="input-group">
                                        <!---->
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                              <circle cx="12" cy="10" r="3"></circle>
                                            </svg>
                                          </div>
                                        </div>
                                        <input id="tongthang" type="number" placeholder="số tháng" class="form-control" name="tongthang" required>
                                        <!---->
                                      </div>
                                      <small class="text-danger"></small>
                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>
                                  </fieldset>
                                </span>
                              </div>
                              <div class="col-12">
                                <span>
                                  <fieldset class="form-group" id="__BVID__1001">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__1001__BV_label_">File cứng hợp đồng 
                                    </legend>
                                    <div>
                                      <div role="group" class="input-group">
                                        <!---->
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                              <circle cx="12" cy="10" r="3"></circle>
                                            </svg>
                                          </div>
                                        </div>
                                        <input id="filehopdong" type="file" class="form-control" name="filehopdong" >

                                        <!---->
                                      </div>
                                      <small class="text-danger"></small>
                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>
                                  </fieldset>
                                </span>
                              </div>
                            </div>
            
                      </div>
                      <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary btnClose" data-dismiss="modal">Hủy</button>
                                  <input type="submit" value="Lưu"class="btn btn-primary" id="btn-save" name="btnsave">
                      </div>
                    </form>
          </div></div></div></div>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/he/1.2.0/he.min.js"></script>
<script>
    function tinhTongThang(startId, totalMonthsId, endId) {
        var ngayBatDau = new Date(document.getElementById(startId).value);
        var ngayKetThuc = new Date(document.getElementById(endId).value);
        var tongThang = (ngayKetThuc.getFullYear() - ngayBatDau.getFullYear()) * 12 + ngayKetThuc.getMonth() - ngayBatDau.getMonth();
        document.getElementById(totalMonthsId).value = tongThang;
    }

    function capNhatNgay() {
        var ngayBatDau = new Date(document.getElementById("ngaybatdau").value);
        var tongThang = parseInt(document.getElementById("tongthang").value);

        if (!isNaN(tongThang) && tongThang >= 0) {
            var ngayKetThuc = new Date(ngayBatDau.getFullYear(), ngayBatDau.getMonth() + tongThang, ngayBatDau.getDate());
            document.getElementById("ngayketthuc").value = ngayKetThuc.toISOString().split('T')[0];
        }
    }

    // Gọi hàm khi có sự thay đổi trong ô input date và ô input text
    document.getElementById("ngaybatdau").addEventListener("input", function () {
        tinhTongThang("ngaybatdau", "tongthang", "ngayketthuc");
    });
    document.getElementById("ngayketthuc").addEventListener("input", function () {
        tinhTongThang("ngaybatdau", "tongthang", "ngayketthuc");
    });
    document.getElementById("tongthang").addEventListener("input", capNhatNgay);

    // Call the function on page load
    window.addEventListener('load', function () {
        tinhTongThang("ngaybatdau", "tongthang", "ngayketthuc");
    });
</script>


<?php
if (isset($_POST['btnsave'])) {
  $name_can_ho = $_POST['name_can_ho'];
  $ngaybatdau = $_POST['ngaybatdau'];
  $ngayketthuc = $_POST['ngayketthuc'];
  $tongthang = $_POST['tongthang'];
  echo "$name_can_ho <br>";
  echo $_GET['id'];
}

if (isset($_POST['btnsave'])) {

    $name_can_ho = $_POST['name_can_ho'];
    $ngaybatdau = $_POST['ngaybatdau'];
    $ngayketthuc = $_POST['ngayketthuc'];
    $tongthang = $_POST['tongthang'];
    $filehopdong=$_FILES['filehopdong'];
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
    // Retrieve the tienthue_canho_phong value for the selected canho
    $sql4 = "SELECT  `tienthue_canho_phong` FROM `tb_canho_phong` WHERE `id_canho_phong` = $name_can_ho";
    echo $sql4;
    $query4 = mysqli_query($conn, $sql4);
        $row4 = mysqli_fetch_assoc($query4);
        $tienthue_canho_phong = $row4['tienthue_canho_phong'];
        
        // Calculate the total based on tongthang and tienthue_canho_phong
        $tong = $tongthang * $tienthue_canho_phong;

        // Update the database
        $content = updateSql('id_canho_phong', $name_can_ho, $_GET['id']);
        $content .= updateSql('ngay_batdau', $ngaybatdau, $_GET['id']);
        $content .= updateSql('ngay_ketthuc', $ngayketthuc, $_GET['id']);
        $content .= updateSql('tong', $tong, $_GET['id']);
        $content .= updateSql('gia', $tienthue_canho_phong, $_GET['id']);
        $content .= updateSql('thoi_han_hop_dong', $tongthang, $_GET['id']);
        if($file_path !=""){
          $content .= updateSql('file_hop_dong', $file_path , $_GET['id']);
        }


        if ($content === "") {
            echo '<script>';
            echo 'alert("Lưu thành công");';
            echo 'window.location.href = "home.php?title=hopdong&id=' . $_GET['id'] . '";';
            echo '</script>';
        } else {
            echo '<script>';
            echo 'alert("' . $content . '");';
            echo 'window.location.href = "home.php?title=hopdong&id=' . $_GET['id'] . '";';
            echo '</script>';
        }
}

function updateSql($name, $value1, $id) {
    global $conn;
    $value = "";
    $sql = "UPDATE `tb_hopdong` SET `$name`='" . $value1 . "' WHERE `id`=$id";

    if (mysqli_query($conn, $sql)) {
        $value = "";
    } else {
        // Xử lý khi truy vấn thất bại
        $value = "Lỗi truy vấn: " . mysqli_error($conn);
    }

    return $value;
}
?>


 