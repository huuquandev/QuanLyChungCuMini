<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>
          Sửa dân cư
          <?php
          $sql="SELECT `ho_ten` from `tb_dancu` where `cccd`='".$_GET['id']."'";
          $query = mysqli_query($conn, $sql);
              // Lấy kết quả
              $row = mysqli_fetch_assoc($query);
              $ho_ten = $row['ho_ten'];

              // Hiển thị tên
              echo  $ho_ten."- "." với id dân cư:".$_GET['id'];
          ?>
        </b></a></li>
      </ul>
      <div id="clock"></div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
          <form action="#" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                          <input type="hidden" id="txtOrderId" value="0" />
            
                          <div class="row">
                              <div class="col-12">
                              <?php
                                $sql="SELECT * from `tb_dancu` where `cccd`='".$_GET['id']."'";
                                $query = mysqli_query($conn, $sql);
                                    // Lấy kết quả
                                    $row = mysqli_fetch_assoc($query);
                                    $ho_ten = $row['ho_ten'];
                                    $cccd = $row['cccd'];
                                    $so_dien_thoai=$row['so_dien_thoai'];
                                    $gioi_tinh=$row['gioi_tinh'];
                                    $hinh_anh=$row['hinh_anh'];
                                    $dia_chi=$row['dia_chi'];
                                    $ngay_sinh=$row['ngay_sinh'];
                                    $ngay_chuyen_doi = date("Y-m-d", strtotime($ngay_sinh));
                                    $id_chu_ho=$row['id_chu_ho'];
                                    $quanhe=$row['quan_he'];

                                    // Hiển thị tên
                                    
                                ?>
                                <span>
                                  <fieldset class="form-group" id="__BVID__977">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__977__BV_label_"> Tên dân cư <span class="text-danger"></span>
                                    </legend>
                                    <div>
                                      <div role="group" class="input-group">
                                        <!---->
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 448 512"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                                          </div>
                                        </div>
                                        <input id="name" type="text" class="form-control" name="tendancu" value="<?php echo $ho_ten;?>" required>
                                        <!---->
                                      </div>
                                      <br>
                                      <small class="text-danger"></small>
                                      <div role="group" class="input-group">
                                        <!---->
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 96l576 0c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96zm0 32V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128H0zM64 405.3c0-29.5 23.9-53.3 53.3-53.3H234.7c29.5 0 53.3 23.9 53.3 53.3c0 5.9-4.8 10.7-10.7 10.7H74.7c-5.9 0-10.7-4.8-10.7-10.7zM176 192a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm176 16c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16z"/></svg>

                                          </div>
                                        </div>
                                        <input id="cccd" type="text" class="form-control" name="cccd" value="<?php echo $cccd;?>" required>
                                        <!---->
                                      </div>
                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>
                                  </fieldset>
                                </span>
                              </div>
                              <div class="col-md-8">
                                <span>
                                  <fieldset class="form-group" id="__BVID__981">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__981__BV_label_"> Chủ hộ<span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable" id="province">
                                        <div id="vs33__combobox" role="combobox" aria-expanded="false" aria-owns="vs33__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                        <div class="vs__selected-options">
                                          
                                          <select name="name_dan_cu" id="name_dan_cu"aria-autocomplete="list" aria-labelledby="vs33__combobox" aria-controls="vs33__listbox" autocomplete="off" class="vs__search"  
                                          onchange="updateInputValue()">

                                                <?php
                                                
                                                $sql="SELECT d.`cccd`,d.`id_dancu`,d.`ho_ten`,c.`ten_canho_phong`,c.`id_canho_phong`,t.`ten_toanha`
                                                FROM `tb_canho_phong` AS c
                                                INNER JOIN `tb_toanha` AS t ON t.`id_toanha` = c.`id_toanha`
                                                INNER JOIN `tb_hopdong` AS h ON c.`id_canho_phong` = h.`id_canho_phong`
                                                INNER JOIN `tb_hopdong_chuho` AS ch ON ch.`id_hopdong` = h.`id`
                                                INNER JOIN `tb_dancu` AS d ON ch.`id_chuho` = d.`id_dancu` ";
                                                $query=mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($query) > 0){
                                                  while ($row1 = mysqli_fetch_array($query)) {
                                                  if($row1['id_dancu'] ==$id_chu_ho){
                                                    echo '<option value="'.$row['id_dancu'].'" >Tên: '.$row['ho_ten'].'-Cccd: '.$row['cccd']. '-Tòa: '.$row['ten_toanha'].'-Phòng: '.$row['ten_canho_phong'].'</option>';
                                                  }
                                                  else{

                                                    echo '<option value="'.$row1['id_dancu'].'" >Tên: '.$row1['ho_ten'].'-Cccd: '.$row1['cccd']. '-Tòa: '.$row1['ten_toanha'].'-Phòng: '.$row1['ten_canho_phong'].'</option>';
                                                  }}
                                                  }
                                                ?>                                   
                                            </select>
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
                                  <fieldset class="form-group" id="__BVID__981">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__981__BV_label_">Quan hệ  <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable" id="province">
                                        <div id="vs33__combobox" role="combobox" aria-expanded="false" aria-owns="vs33__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                            <?php
                                            $quanHe = $row['quan_he'];

                                            // Mảng xác định thứ tự ưu tiên
                                            $thuTuUuTien = array(
                                                'Vợ', 'Con Trai', 'Con Gái', 'Ba vợ', 'Mẹ vợ',
                                                'Ba chồng', 'Mẹ chồng', 'Chị gái', 'Anh trai', 'Em trai',
                                                'Bạn bè', 'Khác'
                                            );

                                            echo '<select name="quanhe"id="quanhe"aria-autocomplete="list" aria-labelledby="vs33__combobox" aria-controls="vs33__listbox" autocomplete="off" class="vs__search"  >';
                                            foreach ($thuTuUuTien as $quanHeOption) {
                                                echo '<option value="' . $quanHeOption . '"';

                                                // Nếu giá trị của $row['quan_he'] trùng với option, thêm thuộc tính selected
                                                if ($quanHe == $quanHeOption) {
                                                    echo ' selected';
                                                }

                                                echo '>' . $quanHeOption . '</option>';
                                            }
                                            echo '</select>';
                                            ?>

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
                              <!---->
                              <div class="col-md-4">
                                <span>
                                  <fieldset class="form-group" id="__BVID__981">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__981__BV_label_"> Giớii tính <span class="text-danger">  </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable" id="province">
                                        <div id="vs33__combobox" role="combobox" aria-expanded="false" aria-owns="vs33__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                            <select name="gioitinh" id="gioitinh"aria-autocomplete="list" aria-labelledby="vs33__combobox" aria-controls="vs33__listbox" autocomplete="off" class="vs__search"  >
                                            <option value="" selected disabled>Giới tính</option>
                                            <option value="nam" 
                                            <?php echo ($gioi_tinh == '1') ? 'selected' : ''; ?> 
                                            >Nam</option>
                                            <option value="nu" <?php echo ($gioi_tinh == '0') ? 'selected' : ''; ?>>Nữ</option>
                                            <option value="khac" <?php echo ($gioi_tinh == '2') ? 'selected' : ''; ?>>Khác</option>
                                            </select>
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
                                  <fieldset class="form-group" id="__BVID__988">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__988__BV_label_"> Số điện thoại <span class="text-danger">  </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="district">
                                        <div id="vs34__combobox" role="combobox" aria-expanded="false" aria-owns="vs34__listbox" aria-label="Search for option" class="" height="70%">
                                          <div class="vs__selected-options">
                                          <input id="sdt" type="number"  min="0" value="<?php echo $so_dien_thoai;?>" class="form-control" name="sdt" required>
                                          </div>

                                        </div>
                                        <ul id="vs34__listbox" role="listbox" style="display: none; visibility: hidden;"></ul>
                                      </div>
                                      <small class="text-danger"></small>
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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__995__BV_label_"> Ngày sinh <span class="text-danger">  </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="ward">
                                        <div id="vs35__combobox" role="combobox" aria-expanded="false" aria-owns="vs35__listbox" aria-label="Search for option" class="">
                                          <div class="vs__selected-options">
                                          <input id="ngaysinh" type="date" class="form-control" name="ngaysinh" value="<?php echo $ngay_chuyen_doi;?>" required>
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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__1001__BV_label_"> Địa chỉ chi tiết <span class="text-danger"></span>
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
                                        <input id="addressDetail" type="text" value="<?php echo $dia_chi;?>" class="form-control" name="addressDetail" required>
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
                                  <fieldset class="form-group" id="__BVID__977">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__977__BV_label_"> Ảnh đại điện<span class="text-danger"></span>
                                    </legend>
                                    <div>
                                      <div role="group" class="input-group">
                                        <!---->
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                          <svg fill="#000000" width="14" height="14" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M59,3V6H45v6H31v8H17v8H5V59H3v2H61V3Zm0,55H7V30H19V22H33V14H47V8H59Z"/>
                                            <polygon points="12 6 12 20 14 20 14 6 19.87 10.4 21.07 8.8 13 2.75 4.93 8.8 6.13 10.4 12 6"/>
                                            </svg>
                                          </div>
                                        </div>
                                        <img src="./<?php echo $hinh_anh;?>" alt=""style="width: 100px;height: 100px; border-radius: 10px;">
                                        <input id="file_img" type="file" placeholder="10" class="form-control" name="file_img" style="margin: auto 0;" >
                                        
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
                      <a class="btn btn-secondary btnClose" href="home.php?title=quanlydancu"
                         data-target="#ModalUP">Hủy</a>
                          <button type="submit" class="btn btn-success" id="btn-Add" name="btnEdit">Sửa</button>
                      </div>
                    </form>
          </div></div></div></div>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/he/1.2.0/he.min.js"></script>
<script>
  document.getElementById("cccd").addEventListener("input", function() {
  var inputValue = this.value.trim();
  var minLength = 9;
  var maxLength = 15;

  if (inputValue.length < minLength) {
    this.setCustomValidity("Độ dài phải ít nhất " + minLength + " ký tự");
  } else if (inputValue.length > maxLength) {
    this.setCustomValidity("Độ dài không được vượt quá " + maxLength + " ký tự");
  } else {
    this.setCustomValidity("");
  }
});
document.getElementById("sdt").addEventListener("input", function() {
  var inputValue = this.value.trim();
  var minLength = 9;
  var maxLength = 15;

  if (inputValue.length < minLength) {
    this.setCustomValidity("Độ dài phải ít nhất " + minLength + " ký tự");
  } else if (inputValue.length > maxLength) {
    this.setCustomValidity("Độ dài không được vượt quá " + maxLength + " ký tự");
  } else {
    this.setCustomValidity("");
  }
});
</script>
<?php 

  if(isset($_POST['btnEdit'])){
    $file_path='';

    // Kiểm tra xem có tệp tin nào được tải lên không
    if (isset($_FILES['file_img']) && $_FILES['file_img']['error'] !== UPLOAD_ERR_NO_FILE) {
        $file_img = $_FILES['file_img'];
        $file_extension = pathinfo($file_img['name'], PATHINFO_EXTENSION);
    
        // Kiểm tra xem phần mở rộng của tệp tin có được chấp nhận không
        $allowed_extensions = ['png', 'jpg', 'git'];
        if (in_array(strtolower($file_extension), $allowed_extensions)) {
            // Đường dẫn tuyệt đối đến thư mục hiện tại
            $current_directory = dirname(__FILE__);

            // Đường dẫn tuyệt đối đến thư mục lưu trữ tệp tin
            $upload_directory = $current_directory . '/../../../images/anh/';
            
            $sql_upload_directory = '../../../images/anh/';
    
            // Tạo tên tệp tin duy nhất để tránh việc ghi đè lên các tệp tin hiện tại
            $unique_filename = uniqid() . '_' . $sdt . '.' . $file_extension;
    
            // Đường dẫn tuyệt đối đến tệp tin trên server
            $absolute_file_path = $upload_directory . $unique_filename;
    
            // Di chuyển tệp tin đã tải lên vào thư mục đích với tên tệp tin duy nhất
            if (move_uploaded_file($file_img['tmp_name'], $absolute_file_path)) {
                // $file_path chứa đường dẫn tương đối đến tệp tin trong ứng dụng
                $file_path = 'images/anh/' . $unique_filename;
                
                // $sql_file_path chứa đường dẫn tuyệt đối đến tệp tin trong cơ sở dữ liệu
                $sql_file_path = $sql_upload_directory . $unique_filename;
    
                // ... Các hành động khác bạn muốn thực hiện sau khi tệp tin đã được tải lên thành công
                echo 'Tệp tin đã được tải lên thành công!';
                echo 'Đường dẫn tệp tin trong ứng dụng: ' . $file_path;
                echo 'Đường dẫn tệp tin trong cơ sở dữ liệu: ' . $sql_file_path;
            } else {
                // Xử lý lỗi khi di chuyển tệp tin lên
                echo 'Lỗi khi di chuyển tệp lên.';
            }
        } else {
            // Xử lý lỗi khi phần mở rộng của tệp tin không được chấp nhận
            echo 'Chỉ chấp nhận tệp ảnh (png, jpg, git).';
        }
    
    
  }
  $tendancu=$_POST['tendancu'];
  $gioitinh=$_POST['gioitinh'];
  $sdt=$_POST['sdt'];
  $cccd=$_POST['cccd'];
  $ngaysinh=$_POST['ngaysinh'];
  $addressDetail=$_POST['addressDetail'];
  $quanhe=$_POST['quanhe'];
  $id_chu_ho=$_POST['name_dan_cu'];
  // echo updateSql(1,12,13);
  if(trim($_POST['tendancu'])!=""){
    $content=updateSql('ho_ten',$tendancu,$_GET['id']);

  }
  if(trim($_POST['gioitinh'])!=""){
    $gioi_tinh=$_POST['gioitinh'];
  if($gioitinh=='nam'){
      $gioitinh=1;
  }
  elseif($gioitinh=='nu'){
      $gioitinh=0;
  }
  else{
      $gioitinh=2;
  }
      $content=updateSql('gioi_tinh',$gioitinh,$_GET['id']);
  }
  if(trim($_POST['sdt'])!=""){
    $content=updateSql('so_dien_thoai',$sdt,$_GET['id']);
  }

  if(trim($_POST['cccd'])!=""){
    $content=updateSql('cccd',$cccd,$_GET['id']);
  }
  if(trim($_POST['ngaysinh'])!=""){
    $content=updateSql('ngay_sinh',$ngaysinh,$_GET['id']);
  }
  if(trim($_POST['addressDetail'])!=""){
    $content=updateSql('dia_chi',$addressDetail,$_GET['id']);
  }
  if(trim($_POST['quanhe'])!=""){
    $content=updateSql('quan_he',$quanhe,$_GET['id']);
  }
  if(trim($_POST['name_dan_cu'])!=""){
    $content=updateSql('id_chu_ho',$id_chu_ho,$_GET['id']);
  }
  if($file_path!=""){
    $content=updateSql('hinh_anh',$file_path,$_GET['id']);
  }
  if($content==""){
    if(trim($_POST['cccd'])!=""){
      $content=updateSql('cccd',$cccd,$_GET['id']);
    }
    $id=($_POST['cccd']==$_GET['id'])?$_POST['cccd']:$_POST['cccd'];
    echo '<script>';
    echo 'alert("Lưu thành công");';
    echo 'window.location.href = "home.php?title=quanlydancu&id='.$id.'";';
    echo '</script>';
  }
  else{
    echo '<script>';
    echo 'alert("' . $content . '");';
    echo 'window.location.href = "home.php?title=quanlydancu&id='.$_GET['id'].'";';
    echo '</script>';
  }
  }

  function  updateSql($name,$value1,$id){
    global $conn;
    $value="";
    $sql="UPDATE `tb_dancu` SET `$name`='".$value1."' WHERE `cccd`=$id";
    if(mysqli_query($conn, $sql)) {
      $value="";
  } else {
      // Xử lý khi truy vấn thất bại
      $value= "Lỗi truy vấn: " . mysqli_error($conn);
  }
  return $value;
  }
?>

 