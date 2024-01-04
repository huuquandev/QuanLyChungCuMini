<?php 

   include_once './function.php';


  if(isset($_POST['btnAdd'])){
      $tendancu = $_POST['tendancu'];
      $gioitinh = $_POST['gioitinh'];
      $cccd=$_POST['cccd'];
      $sdt = $_POST['sdt'];
      $ngaysinh = date('Y-m-d', strtotime($_POST['ngaysinh']));
      $addressDetail = $_POST['addressDetail'];
      $file_img=$_FILES['file_img'];
      $email=$_POST['email'];     
       $id_dan_cu=0;
       $sql4= "SELECT `cccd` FROM `tb_dancu` WHERE `cccd` = '$cccd';";

   $query4 = mysqli_query($conn, $sql4);
       if(mysqli_num_rows($query4) ==0){
        if(them_dan_cu($tendancu,
      $gioitinh,
      'chủ hộ',
      '0',
      $sdt,
      $ngaysinh,
      $addressDetail,
      $cccd,$file_img, $email,1))
      {
        $id_dan_cu=1;
      }
       }
       else{
        echo '<script>alert("CCCD đã tồn tại");</script>';

       }
      
      $name_can_ho=$_POST['name_can_ho'];
        $ngaybatdau=$_POST['ngaybatdau'];
        $ngayketthuc=$_POST['ngayketthuc'];
        $tongthang=$_POST['tongthang'];
        $giam_gia=$_POST['giam_gia'];
        $filehopdong=$_FILES['filehopdong'];
        $sql3='SELECT id_dancu,ho_ten FROM `tb_dancu` WHERE `cccd`="'.$cccd.'"';
        echo $sql3;
        $query3=mysqli_query($conn,$sql3);
   
        if(mysqli_num_rows($query3) ==1){
          while ($row = mysqli_fetch_array($query3)) {
            $id_dan_cu=$row['id_dancu'];
            $name=$row['ho_ten'];
            echo  'huy'.$id_dan_cu;
          if($id_dan_cu!=0){
            echo $id_dan_cu."//".
            $name_can_ho."//".
            $ngaybatdau."//".
            $ngayketthuc."//".
            $tongthang."//";
            echo ThemHopDong($id_dan_cu,$name, $name_can_ho, $ngaybatdau, $ngayketthuc, $tongthang,$filehopdong,$giam_gia);

          }
          else{
            echo "Error";
          }
          }
        }
        
      // else{
      //     echo "Sửa thát bại";
      // }


  }  
?>
<style>
        .highlight-orange {
            background-color: orange;
        }

        .highlight-red {
            background-color: red;
        }</style>
<main class="app-content">
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="card-body">

<div class="modal-body">
    <h5>Tìm kiểm các hợp đồng </h5>
    <div class="row">
        <div class="col-md-5">
            <span>
                <fieldset class="form-group">
                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0"> Ngày bắt đầu</legend>
                    <div>
                        <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="ward">
                            <div id="vs35__combobox" role="combobox" aria-expanded="false" aria-owns="vs35__listbox" aria-label="Search for option" class="">
                              <input id="Tngaybatdau" type="date" class="form-control" name="Tngaybatdau">
                            </div>
                            <ul id="vs35__listbox" role="listbox" style="display: none; visibility: hidden;"></ul>
                        </div>
                        <small class="text-danger"></small>
                    </div>
                </fieldset>
            </span>
        </div>
        <div class="col-md-6">
            <span>
                <fieldset class="form-group">
                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0">Ngày kết thúc</legend>
                    <div>
                        <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="ward">
                            <div id="vs35__combobox" role="combobox" aria-expanded="false" aria-owns="vs35__listbox" aria-label="Search for option" class="">
                            <input id="Tngayketthuc" type="date" class="form-control" name="Tngayketthuc">

                            </div>
                            <ul id="vs35__listbox" role="listbox" style="display: none; visibility: hidden;"></ul>
                        </div>
                        <small class="text-danger"></small>
                    </div>
                </fieldset>
            </span>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary btnSearch" data-dismiss="modal">Tìm</button>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var btnSearch = document.querySelector(".btnSearch");

        btnSearch.addEventListener("click", function () {
            var startDateFilter = document.getElementById("Tngaybatdau").value;
            var endDateFilter = document.getElementById("Tngayketthuc").value;

            // You can use startDateFilter and endDateFilter for your date filtering logic
            console.log("Start Date:", startDateFilter);
            console.log("End Date:", endDateFilter);

            // Implement your logic to filter contracts based on dates
            // Example: You might want to trigger an AJAX request here to fetch filtered data
        });
    });
</script>

            <div class="card_body">
            <div class="row element-button">
              <div class="col-sm-2">

                <a class="btn btn-add btn-sm" href="#" title="Thêm"><i class="fas fa-plus"></i>
                  Thêm hợp đồng</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i
                    class="fas fa-file-upload"></i> Nhập dữ liệu</a>
              </div>

              <div class="col-sm-2">
                <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất dữ liệu</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                    class="fas fa-trash-alt"></i> Xóa tất cả </a>
              </div>

              <div class="modal fade bd-example-modal-lg" id="modal-default">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hợp đồng</h4>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                          <input type="hidden" id="txtOrderId" value="0" />
            
                          <div class="row">
                          <div class="col-12">
                                <span>
                                  <fieldset class="form-group" id="__BVID__977">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__977__BV_label_"> Tên dân cư <span class="text-danger">(*)</span>
                                    </legend>
                                    <div>
                                      <div role="group" class="input-group">
                                        <!---->
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 448 512"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                                          </div>
                                        </div>
                                        <input id="name" type="text" placeholder="Nguyễn Văn A" class="form-control" name="tendancu" required>
                                        
                                        <!---->
                                      </div>
                                      <br>
                                      <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__977__BV_label_">Cccd/Hộ chiếu <span class="text-danger">(*)</span>
                                    </legend>
                                      <div role="group" class="input-group">
                                        <!---->
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 96l576 0c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96zm0 32V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128H0zM64 405.3c0-29.5 23.9-53.3 53.3-53.3H234.7c29.5 0 53.3 23.9 53.3 53.3c0 5.9-4.8 10.7-10.7 10.7H74.7c-5.9 0-10.7-4.8-10.7-10.7zM176 192a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm176 16c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16z"/></svg>
                                          </div>
                                        </div>
                                        <input id="cccd" type="text" placeholder="Cccd/hộ chiếu" class="form-control" name="cccd" required>
                                        <!---->
                                      </div>
                                      <small class="text-danger"></small>
                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>

                              </div>
                              <div class="mt-2 col-12">
                                <h5>Thông tin cá nhân</h5>
                              </div>
                              <!---->
                              <div class="col-md-4">
                                <span>
                                  <fieldset class="form-group" id="__BVID__981">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__981__BV_label_"> Giới tính <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable" id="province">
                                        <div id="vs33__combobox" role="combobox" aria-expanded="false" aria-owns="vs33__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                            <select name="gioitinh" id="gioitinh"aria-autocomplete="list" aria-labelledby="vs33__combobox" aria-controls="vs33__listbox" autocomplete="off" class="vs__search"  >
                                              <option value="">Giới tính</option>
                                              <option value="nam">Nam</option>
                                              <option value="nu">Nữ</option>
                                              <option value="khac">Khác</option>
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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__988__BV_label_"> Số điện thoại <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="district">
                                        <div id="vs34__combobox" role="combobox" aria-expanded="false" aria-owns="vs34__listbox" aria-label="Search for option" class="" height="70%">
                                        <input id="sdt" type="text" placeholder="0912345678" class="form-control" name="sdt" required>


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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__995__BV_label_"> Ngày sinh <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="ward">
                                        <div id="vs35__combobox" role="combobox" aria-expanded="false" aria-owns="vs35__listbox" aria-label="Search for option" class="">
                                        <input id="ngaysinh" type="date" class="form-control" name="ngaysinh" required>

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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__1001__BV_label_"> Email <span class="text-danger">(*)</span>
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
                                        <input id="email" type="text" placeholder="hoten@gmail.com" class="form-control" name="email" required>
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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__1001__BV_label_"> Địa chỉ chi tiết <span class="text-danger">(*)</span>
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
                                        <input id="addressDetail" type="text" placeholder="91 Nguyễn Chí Thanh" class="form-control" name="addressDetail" required>
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
                                        <input id="file_img" type="file" placeholder="10" class="form-control" name="file_img" >
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
                              <div class="mt-2 col-12">
                                <h5>Thông tin hợp đồng</h5>
                              </div>
                              <div class="col-12">
                              <span>
                                  <fieldset class="form-group" id="__BVID__981">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__981__BV_label_"> Tên căn hộ <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable" id="province">
                                        <div id="vs33__combobox" role="combobox" aria-expanded="false" aria-owns="vs33__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                          <select name="name_can_ho" id="gioitinh"aria-autocomplete="list" aria-labelledby="vs33__combobox" aria-controls="vs33__listbox" autocomplete="off" class="vs__search"  required>
                                                <option value="" hidden="">Chọn căn hộ</option>
                                                <?php
                                                $sql="SELECT c.`ten_canho_phong`, c.`id_canho_phong`, t.`ten_toanha`
                                                FROM `tb_canho_phong` AS c
                                                INNER JOIN `tb_toanha` AS t ON t.`id_toanha` = c.`id_toanha`
                                                LEFT JOIN `tb_hopdong` AS h ON h.id_canho_phong = c.id_canho_phong
                                                WHERE h.id_canho_phong IS NULL;";
                                                $query=mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($query) > 0){
                                                  while ($row = mysqli_fetch_array($query)) {
                                                  echo '<option value="'.$row['id_canho_phong'].'" >'.$row['ten_toanha'].' - căn hộ: '.$row['ten_canho_phong'].' </option>';
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

                              <!---->
                              
                              <div class="col-md-6">
                                <span>
                                  <fieldset class="form-group" id="__BVID__995">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__995__BV_label_"> Ngày bắt đầu <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="ward">
                                        <div id="vs35__combobox" role="combobox" aria-expanded="false" aria-owns="vs35__listbox" aria-label="Search for option" class="">
                                        <input id="ngaybatdau" type="date" class="form-control" name="ngaybatdau" required>

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
                              <div class="col-md-6">
                                <span>
                                  <fieldset class="form-group" id="__BVID__995">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__995__BV_label_"> Ngày kết thức <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="ward">
                                        <div id="vs35__combobox" role="combobox" aria-expanded="false" aria-owns="vs35__listbox" aria-label="Search for option" class="">
                                        <input id="ngayketthuc" type="date" class="form-control" name="ngayketthuc" required>

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
                              <div class="col-6">
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
                                        <input id="tongthang" type="number" placeholder="số tháng" value="0" class="form-control" name="tongthang"   required>
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
                              <div class="col-6">
                                <span>
                                  <fieldset class="form-group" id="__BVID__1001">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__1001__BV_label_">Giảm giá
                                    </legend>
                                    <div>
                                      <div role="group" class="input-group">
                                        <!---->
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                          <svg xmlns="http://www.w3.org/2000/svg" height="14px" width="14px" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M374.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-320 320c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l320-320zM128 128A64 64 0 1 0 0 128a64 64 0 1 0 128 0zM384 384a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z"/></svg>
                                              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                              <circle cx="12" cy="10" r="3"></circle>
                                            </svg>
                                          </div>
                                        </div>
                                        <input id="giam_gia" type="number" placeholder="Nhập phần trăm giảm  "  class="form-control" name="giam_gia" >
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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__1001__BV_label_">File cứng hợp đồng <span class="text-danger">(*)</span>
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
                                        <input id="filehopdong" type="file" class="form-control" name="filehopdong" required>
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
                          <button type="submit" class="btn btn-success" id="btnAdd" name="btnAdd">Thêm</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
            </div>
            <div class="col-4" style="margin-left: 67%;">
                                <span>
                                  <fieldset class="form-group" id="__BVID__1001">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__1001__BV_label_"> Tìm Kiếm
                                    </legend>
                                    <div>
                                      <div role="group" class="input-group">
                                        <!---->
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                          <svg xmlns="http://www.w3.org/2000/svg" height="14px" width="14px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                                          </div>
                                        </div>
                                        <input id="searchInput1" type="text" placeholder="Nhập thông tin muốn tìm" class="form-control" name="search" >
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
            <div class="card-body">
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0" id="sampleTable1">                    
              <thead>
                      <tr>
                        <th width="10"><input type="checkbox" id="all"></th>
                        <th width="20">ID</th>
                        <th width="150">Tên người</th>
                        <th width="80" class="text-center">Tên căn phòng</th>
                        <th width="100">Thời gian bắt đầu</th>
                        <th width="100">Thời gian kết thúc</th>
                        <th width="50">Già phòng/tháng</th>
                        <th width="100">Tổng tiền</th>
                        <th width='100'>Hợp đồng</th>
                        <th width="100">Tính năng</th>
                      </tr>
                    </thead>
                  <tbody>
                  <?php 
                    $sql2 = "SELECT h.*,t.`ho_ten`,ph.`ten_canho_phong` from `tb_hopdong` AS h 
                    INNER JOIN `tb_canho_phong` AS ph 
                    INNER JOIN `tb_dancu` AS t 
                    INNER JOIN `tb_hopdong_chuho` AS ch
                    on ch.`id_chuho`=t.`id_dancu`AND h.`id`=ch.`id_hopdong` 
						         AND h.`id_canho_phong`=ph.`id_canho_phong` ORDER BY `ngay_ketthuc` ASC LIMIT 1000";
                      $query2 = mysqli_query($conn, $sql2);
                      // echo $sql2;
                      if(mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_array($query2)) {
                    ?>
                    <tr>
                      <td width="10"><input type="checkbox" name="check1" value="1"></td>
                      <td><?php echo $row['id']; ?></td>
                      <td class="search_td"><?php echo $row['ho_ten']; ?></td>
                      <td class="text-center"><?php echo $row['ten_canho_phong']; ?></td>
                      <td class="start-date"><?php $batdau=date("d/m/Y", strtotime($row['ngay_batdau']));
                      echo $batdau;?></td>
                      <td class="end-date"><?php $ketthuc=date("d/m/Y", strtotime($row['ngay_ketthuc']));
                      echo $ketthuc;?></td>
                      <td><?php echo $row['gia'];?> VND</td>
                      <td><?php echo $row['tong'];?> VND</td>
                      <td><a class="btn" href="<?php echo $row['filehopdong'];?>"
                         data-target="#ModalUP">
                         <?php 
                        // Assuming $row['file_hop_dong'] contains the file path
                        $file_path = $row['filehopdong'];

                        $pattern = "/file\/hop_dong\/(.*?)\.pdf/";
                        preg_match($pattern, $file_path, $matches);

                        if (isset($matches[1])) {
                            $result = $matches[1];
                            echo '<font style="
                            color: aqua;">'.$result.'</font>';
                        } else {
                            echo "Pattern not found.";
                        }

                      
                        ?>
                      </a></td>
                      <td class="table-td-center">
                        <button class="btn btn-primary btn-sm trash" type="button" title="Xóa" id="btn-delete" data-id="<?php echo $row['id']  ?>"><i class="fas fa-trash-alt"></i>
                        </button>
                        
                        <a class="btn btn-primary " href="home.php?title=hopdong&id=<?php echo $row['id']?>"
                         data-target="#ModalUP"><i class="fas fa-edit"></i>
                      </a>
                      </td>
                    </tr>
                        
                    <?php 
                    
                    } 
                  }else{
                    echo '<tr class="odd"><td valign="top" colspan="7" class="dataTables_empty">Không tìm thấy kết quả</td></tr>';
                  }
                  
                    ?>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/he/1.2.0/he.min.js"></script>
<script>
document.getElementById("cccd").addEventListener("input", function() {
  var inputValue = this.value.trim();
  var minLength = 10;
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
  var maxLength = 10;

  if (inputValue.length < minLength) {
    this.setCustomValidity("Độ dài phải ít nhất " + minLength + " ký tự");
  } else if (inputValue.length > maxLength) {
    this.setCustomValidity("Độ dài không được vượt quá " + maxLength + " ký tự");
  } else {
    this.setCustomValidity("");
  }
});
document.getElementById("filehopdong").addEventListener("input", function() {
    var allowedExtensions = ['pdf', 'PDF'];
    var fileName = this.value.trim();

    // Lấy phần mở rộng của tên tệp tin
    var fileExtension = fileName.split('.').pop().toLowerCase();

    // Kiểm tra xem phần mở rộng có trong danh sách không
    if (!allowedExtensions.includes(fileExtension)) {
        this.setCustomValidity("Chỉ chấp nhận tệp tin có định dạng pdf.");
    } else {
        this.setCustomValidity("");
    }
});
document.getElementById("file_img").addEventListener("input", function() {
    var allowedExtensions = ['png', 'jpg', 'git', 'PNG', 'JPG', 'GIT'];
    var fileName = this.value.trim();

    // Lấy phần mở rộng của tên tệp tin
    var fileExtension = fileName.split('.').pop().toLowerCase();

    // Kiểm tra xem phần mở rộng có trong danh sách không
    if (!allowedExtensions.includes(fileExtension)) {
        this.setCustomValidity("Chỉ chấp nhận tệp tin có định dạng pdf.");
    } else {
        this.setCustomValidity("");
    }
});

document.getElementById("sdt").addEventListener("input", function() {
  var inputValue = this.value.trim();
  var minLength = 9;
  var maxLength = 10;

  if (inputValue.length < minLength) {
    this.setCustomValidity("Độ dài phải ít nhất " + minLength + " ký tự");
  } else if (inputValue.length > maxLength) {
    this.setCustomValidity("Độ dài không được vượt quá " + maxLength + " ký tự");
  } else {
    this.setCustomValidity("");
  }
});
</script>
<script>
    function tinhTongThang() {
        var ngayBatDau = new Date(document.getElementById("ngaybatdau").value);
        var tongThang = parseInt(document.getElementById("tongthang").value);

        if (!isNaN(tongThang) && tongThang >= 0) {
            var ngayKetThuc = new Date(ngayBatDau.getFullYear(), ngayBatDau.getMonth() + tongThang, ngayBatDau.getDate());
            document.getElementById("ngayketthuc").value = ngayKetThuc.toISOString().split('T')[0];
        }
    }

    function tinhTongThang1() {
        var ngayKetThuc = new Date(document.getElementById("ngayketthuc").value);
        var tongThang = parseInt(document.getElementById("tongthang").value);

        if (!isNaN(tongThang) && tongThang >= 0) {
            var ngayKetThucMoi = new Date(ngayKetThuc.getFullYear(), ngayKetThuc.getMonth() - tongThang, ngayKetThuc.getDate());
            document.getElementById("ngaybatdau").value = ngayKetThucMoi.toISOString().split('T')[0];
        }
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
    document.getElementById("ngaybatdau").addEventListener("input", tinhTongThang);
    document.getElementById("ngayketthuc").addEventListener("input", tinhTongThang1);
    document.getElementById("tongthang").addEventListener("input", capNhatNgay);
</script>



<script>
    $(document).ready(function () {
        $('body').on('click', '.btn-add', function () {          
            $('#modal-default').modal('show');
            // initializeDropdowns("Province1", "District1", "Ward1");
        });
        $('body').on('click', '.btnClose', function () {
            $('#modal-default').modal('hide');
        });
        $('body').on('click', '#btn-save', function () {          
           var formData = new FormData();

            formData.append('name_dan_cu', $('#name_dan_cu').val());
            formData.append('name_can_ho', $('#name_can_ho').val());
            formData.append('ngaybatdau', $('#ngaybatdau').val());
            formData.append('ngayketthuc', $('#ngayketthuc').val());
            formData.append('tongthang', $('#tongthang').val());
            formData.append('filehopdong', $('#filehopdong').val());

            // for (var pair of formData.entries()) {
            //     console.log(pair[0] + ': ' + pair[1]);
            // }
            $.ajax({
                url: "doc/main/commons/sua_toanha.php", 
                type: "post",
                dataType: "html",        
                processData: false, 
                contentType: false, 
                data: formData,
            }).done(function(ketqua){
                alert(ketqua);
            })
        });
        $('body').on('click', '.btnClose', function () {
            var id = $(this).data("id");
            $('#modal-default2').modal('hide');
        });
        $('body').on('click', '#btn-delete', function () {
            let text = "Bạn có chắc muốn xóa.";
            var $idhopdong = $(this).data("id");
            if (confirm(text) == true) {
              $.ajax({
                url: "doc/main/commons/xoa_hop_dong.php", 
                type: "post",
                dataType: "html",          
                data: { idhopdong: $idhopdong },
              }).done(function(ketqua){
                alert(ketqua);
                window.location.href = "home.php?title=hopdong";
              })
            } 
        });


    });
    function selectValue(selectElement, value) {
        selectElement.value = value;
    }

</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var btnSearch = document.querySelector(".btnSearch");

    btnSearch.addEventListener("click", function () {
      var startDateFilter = document.getElementById("Tngaybatdau").value;
      var endDateFilter = document.getElementById("Tngayketthuc").value;

      // Loop through the rows in the table
      var tableRows = document.querySelectorAll("table[id='sampleTable1'] tbody tr");
      for (var i = 0; i < tableRows.length; i++) {
        var startDateCell = tableRows[i].querySelector(".start-date");
        var endDateCell = tableRows[i].querySelector(".end-date");

        // Format contract dates as "dd/mm/YYYY"
        var startDate = formatDate(startDateCell.textContent.trim());
        var endDate = formatDate(endDateCell.textContent.trim());

        // Check if the contract dates are within the specified range
        var showRow = true;
        if (startDateFilter && startDate < startDateFilter) {
          showRow = false;
        }
        if (endDateFilter && endDate > endDateFilter) {
          showRow = false;
        }

        // Update the display property based on the filter
        tableRows[i].style.display = showRow ? "" : "none";
      }
    });

    // Function to format dates as "DD/MM/YYYY"
    function formatDate(dateString) {
      var parts = dateString.split("/");
      return parts[2] + "-" + parts[1] + "-" + parts[0];
    }
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var searchInput = document.getElementById("searchInput1");
    var tbody = document.querySelector("table[id='sampleTable1'] tbody");
    var noResultsMessage = document.getElementById("noResultsMessage");

    searchInput.addEventListener("input", function () {
        var searchValue = searchInput.value.toLowerCase();

        var rows = tbody.getElementsByTagName("tr");
        var found = false;

        for (var i = 0; i < rows.length; i++) {
            var cccdCell = rows[i].querySelector("td.search_td:nth-child(3)");

            if (cccdCell ) {
                var cccd = cccdCell.innerText.toLowerCase();


                if (cccd.indexOf(searchValue) !== -1) {
                    rows[i].style.display = "";
                    found = true;
                } else {
                    rows[i].style.display = "none";
                }
            }
        }

    });
});

</script>
<script>
        // Lấy ngày hiện tại
        var ngayHienTai = new Date();

        // Lấy tất cả các phần tử có class "end-date"
        var cacPhanTuEndDate = document.querySelectorAll('.end-date');

        // Duyệt qua từng phần tử và kiểm tra ngày kết thúc
        cacPhanTuEndDate.forEach(function(phanTu) {
            var ngayKetThucText = phanTu.textContent;
            var ngayKetThuc = new Date(ngayKetThucText.split('/').reverse().join('/'));

            // Tạo một ngày mới, thêm 1 tháng vào ngày hiện tại
            var ngayHienTaiThemMotThang = new Date(ngayHienTai);
            ngayHienTaiThemMotThang.setMonth(ngayHienTai.getMonth() + 1);

            // Kiểm tra và đặt màu sắc cho từng phần tử
            if (ngayHienTaiThemMotThang <= ngayKetThuc) {
              phanTu.classList.add('highlight-green');
            } else if (ngayHienTai <= ngayKetThuc) {
              phanTu.classList.add('highlight-orange');
            } else {
                phanTu.classList.add('highlight-red');
            }
        });
    </script>
