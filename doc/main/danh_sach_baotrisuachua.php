<?php 

   include_once './function.php';

  $sqlcount0 = "SELECT COUNT(*) FROM baotri_suachua WHERE baotri_suachua.trang_thai = 0;";
  $sqlcount1 = "SELECT COUNT(*) FROM baotri_suachua WHERE baotri_suachua.trang_thai = 1;";
  $sqlcount2 = "SELECT COUNT(*) FROM baotri_suachua WHERE baotri_suachua.trang_thai = 2;";
  $sqlcount3 = "SELECT COUNT(*) FROM baotri_suachua WHERE baotri_suachua.trang_thai = 3;";
  $sqlcount4 = "SELECT COUNT(*) FROM baotri_suachua WHERE baotri_suachua.trang_thai = 4;";
  $sqlcount5 = "SELECT COUNT(*) FROM baotri_suachua WHERE baotri_suachua.trang_thai = 5;";

  $querycount0 = mysqli_query($conn, $sqlcount0);
  $querycount1 = mysqli_query($conn, $sqlcount1);
  $querycount2 = mysqli_query($conn, $sqlcount2);
  $querycount3 = mysqli_query($conn, $sqlcount3);
  $querycount4 = mysqli_query($conn, $sqlcount4);
  $querycount5 = mysqli_query($conn, $sqlcount5);

  $count0 = mysqli_fetch_array($querycount0);
  $count1 = mysqli_fetch_array($querycount1);
  $count2 = mysqli_fetch_array($querycount2);
  $count3 = mysqli_fetch_array($querycount3);
  $count4 = mysqli_fetch_array($querycount4);
  $count5 = mysqli_fetch_array($querycount5);


?>
<main class="app-content">

<div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách bảo trì/sửa chữa</a></li>
      </ul>
      <div id="clock"></div>
    </div>

    <div data-v-40d95e6b="" class="row match-height">
  <div data-v-40d95e6b="" class="col">
    <div data-v-40d95e6b="" class="card">
      <!---->
      <!---->
      <div class="card-body d-flex justify-content-between align-items-center">
        <!---->
        <!---->
        <div class="truncate">
          <h2 class="mb-25 font-weight-bolder text-secondary"> <?php echo $count4['COUNT(*)']?> </h2>
          <span class="text-secondary">Chưa làm</span>
        </div>
        <span class="b-avatar badge-light-secondary rounded-circle" style="width: 45px; height: 45px;">
          <span class="b-avatar-custom">
            <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
            </svg>
          </span>
          <!---->
        </span>
      </div>
      <!---->
      <!---->
    </div>
  </div>
  <div data-v-40d95e6b="" class="col">
    <div data-v-40d95e6b="" class="card">
      <!---->
      <!---->
      <div class="card-body d-flex justify-content-between align-items-center">
        <!---->
        <!---->
        <div class="truncate">
          <h2 class="mb-25 font-weight-bolder text-warning"> <?php echo $count3['COUNT(*)'] ?> </h2>
          <span class="text-warning">Đang làm</span>
        </div>
        <span class="b-avatar badge-light-warning rounded-circle" style="width: 45px; height: 45px;">
          <span class="b-avatar-custom">
            <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
            </svg>
          </span>
          <!---->
        </span>
      </div>
      <!---->
      <!---->
    </div>
  </div>
  <div data-v-40d95e6b="" class="col">
    <div data-v-40d95e6b="" class="card">
      <!---->
      <!---->
      <div class="card-body d-flex justify-content-between align-items-center">
        <!---->
        <!---->
        <div class="truncate">
          <h2 class="mb-25 font-weight-bolder text-success"> <?php echo $count2['COUNT(*)']?> </h2>
          <span class="text-success">Chờ duyệt</span>
        </div>
        <span class="b-avatar badge-light-success rounded-circle" style="width: 45px; height: 45px;">
          <span class="b-avatar-custom">
            <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
            </svg>
          </span>
          <!---->
        </span>
      </div>
      <!---->
      <!---->
    </div>
  </div>
  <div data-v-40d95e6b="" class="col">
    <div data-v-40d95e6b="" class="card">
      <!---->
      <!---->
      <div class="card-body d-flex justify-content-between align-items-center">
        <!---->
        <!---->
        <div class="truncate">
          <h2 class="mb-25 font-weight-bolder text-primary"> <?php echo $count1['COUNT(*)']?>  </h2>
          <span class="text-primary">Đã duyệt</span>
        </div>
        <span class="b-avatar badge-light-primary rounded-circle" style="width: 45px; height: 45px;">
          <span class="b-avatar-custom">
            <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
            </svg>
          </span>
          <!---->
        </span>
      </div>
      <!---->
      <!---->
    </div>
  </div>
  <div data-v-40d95e6b="" class="col">
    <div data-v-40d95e6b="" class="card">
      <!---->
      <!---->
      <div class="card-body d-flex justify-content-between align-items-center">
        <!---->
        <!---->
        <div class="truncate">
          <h2 class="mb-25 font-weight-bolder text-info"> <?php echo $count0['COUNT(*)']?>  </h2>
          <span class="text-info">Không đạt</span>
        </div>
        <span class="b-avatar badge-light-info rounded-circle" style="width: 45px; height: 45px;">
          <span class="b-avatar-custom">
            <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
            </svg>
          </span>
          <!---->
        </span>
      </div>
      <!---->
      <!---->
    </div>
  </div>
  <div data-v-40d95e6b="" class="col">
    <div data-v-40d95e6b="" class="card">
      <!---->
      <!---->
      <div class="card-body d-flex justify-content-between align-items-center">
        <!---->
        <!---->
        <div class="truncate">
          <h2 class="mb-25 font-weight-bolder text-danger"> <?php echo $count0['COUNT(*)']?>  </h2>
          <span class="text-danger">Quá hạn</span>
        </div>
        <span class="b-avatar badge-light-danger rounded-circle" style="width: 45px; height: 45px;">
          <span class="b-avatar-custom">
            <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
            </svg>
          </span>
          <!---->
        </span>
      </div>
      <!---->
      <!---->
    </div>
  </div>
</div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">

            <div class="row element-button">
              <div class="col-sm-2">

              <a class="btn btn-add btn-sm" href="#" title="Thêm"><i class="fas fa-plus"></i>
                  Thêm bảo trì/sửa chữa</a>
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
                        <h4 class="modal-title">Căn hộ/phòng</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="txtOrderId" value="0" />
                        <form class="">
                            <div class="row">
                              <div class="col-md-4">
                                <span>
                                  <div>
                                    <fieldset class="form-group" id="__BVID__605">
                                      <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__605__BV_label_"> Tòa nhà <span class="text-danger"> (*) </span>
                                      </legend>
                                      <div>
                                        <div dir="ltr" class="v-select vs--single vs--searchable" id="apartment">
                                          <div id="vs17__combobox" role="combobox" aria-expanded="false" aria-owns="vs17__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                            <div class="vs__selected-options">
                                             
                                              <select aria-autocomplete="list" aria-labelledby="vs17__combobox" aria-controls="vs17__listbox" type="search" autocomplete="off" class="vs__search" id="building_id">
                                              <option value="" hidden="">Chọn tòa nhà</option>     
                                              <?php
                                                $sql = "SELECT * FROM tb_toanha";
                                                $query = mysqli_query($conn, $sql);
                                                if(mysqli_num_rows($query) > 0){
                                                  while ($row = mysqli_fetch_array($query)) {
                                               ?>
                                                  <option value="<?php echo $row['id_toanha'] ?>"><?php echo $row['ten_toanha'] ?></option>     
                                                  <?php
                                                  }
                                                }
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
                                          <ul id="vs17__listbox" role="listbox" style="display: none; visibility: hidden;"></ul>
                                        </div>
                                        <small class="text-danger"></small>
                                        <!---->
                                        <!---->
                                        <!---->
                                      </div>
                                    </fieldset>
                                    <!---->
                                  </div>
                                </span>
                              </div>
                              <div class="col-md-4">
                                <span>
                                  <div>
                                    <fieldset class="form-group" id="__BVID__614">
                                      <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__614__BV_label_"> Tầng <span class="text-danger"> (*) </span>
                                      </legend>
                                      <div>
                                        <div dir="ltr" class="v-select vs--single vs--searchable" id="floor">
                                          <div id="vs18__combobox" role="combobox" aria-expanded="false" aria-owns="vs18__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                            <div class="vs__selected-options">
                                              <?php

                                               ?>  
                                              <select aria-autocomplete="list" aria-labelledby="vs18__combobox" aria-controls="vs18__listbox" type="search" autocomplete="off" class="vs__search" id="room_id" disabled>
                                                <option value="" hidden="">Chọn tầng</option>     

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
                                          <ul id="vs18__listbox" role="listbox" style="display: none; visibility: hidden;"></ul>
                                        </div>
                                        <small class="text-danger"></small>
                                        <!---->
                                        <!---->
                                        <!---->
                                      </div>
                                    </fieldset>
                                    <!---->
                                  </div>
                                </span>
                              </div>
                              <div class="col-md-4">
                                <span>
                                  <fieldset class="form-group" id="__BVID__622">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__622__BV_label_"> Tên phòng <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div role="group" class="input-group">
                                        <!---->
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                              <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg>
                                          </div>
                                        </div>
                                        <input id="name" type="text" placeholder="P.101" class="form-control" name="tenphong">
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
                            <div class="row">
                              <div class="col-md-4">
                                <span>
                                  <fieldset class="form-group is-valid" value="0" id="__BVID__626">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__626__BV_label_"> Tiền thuê <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <input type="text" value="0" id="" placeholder="5,000,000" class="form-control" name="tienthue">
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
                                  <fieldset class="form-group is-valid" value="0" id="__BVID__630">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__630__BV_label_"> Tiền cọc <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <input type="text" value="0" id="" placeholder="5,000,000" class="form-control" name="tiencoc">
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
                                  <fieldset class="form-group is-valid" value="0" id="__BVID__634">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__634__BV_label_"> Diện tích
                                      <!---->
                                    </legend>
                                    <div>
                                      <input type="text" value="0" id="" placeholder="30" class="form-control" name="dientich">
                                      <small class="text-danger"></small>
                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>
                                  </fieldset>
                                </span>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <fieldset class="form-group" value="0" id="__BVID__637">
                                  <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__637__BV_label_"> Số khách tối đa <span class="text-danger"> (*) </span>
                                  </legend>
                                  <div>
                                    <input type="text" value="0" id="" placeholder="30" class="form-control" name="soluongkhacho">
                                    <small class="text-danger"></small>
                                    <!---->
                                    <!---->
                                    <!---->
                                  </div>
                                </fieldset>
                              </div>
                            </div>
                            <div class="row">
                            <div class="mt-2 col-12">
                              <fieldset class="form-group" id="__BVID__1003">
                                <!---->
                                <div>
                                  <div class="custom-control custom-control-inline custom-switch">
                                    <input type="checkbox" name="check-button" class="checkbox-switch" value="true" id="__BVID__1004">
                                    <label class="custom-control-label" for="__BVID__1004"> Hoạt động </label>
                                  </div>
                                </div>
                              </fieldset>
                            </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="btnClose" data-dismiss="modal">Hủy</button>
                        <button type="button" class="btn btn-primary" id="btnSave">Lưu</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable">
              <thead>
                      <tr>
                        <th width="10"><input type="checkbox" id="all"></th>
                        <th width="150">Mã Bảo trì/sửa chữa</th>
                        <th width="100">Công việc</th>
                        <th width="100">Tòa nhà</th>
                        <th width="100">Phòng</th>
                        <th width="100">Loại công việc</th>
                        <th width="110">Người thực hiện</th>
                        <th width="110">Hạn hoàn thành</th>
                        <th width="100">Trạng thái</th>
                        <th width="100">Tính năng</th>
                      </tr>
              </thead>
              <tbody>
              <?php 
                    $sql = "SELECT baotri_suachua.*, tb_toanha.ten_toanha, tb_taikhoan.ten_hien_thi, tb_canho_phong.ten_canho_phong 
                    FROM baotri_suachua
                    JOIN tb_toanha ON tb_toanha.id_toanha = baotri_suachua.id_toanha 
                    JOIN tb_taikhoan ON tb_taikhoan.id_taikhoan = baotri_suachua.id_nguoi_thuc_hien
                    JOIN tb_canho_phong ON tb_canho_phong.id_canho_phong = baotri_suachua.id_phong";
                      $query = mysqli_query($conn, $sql);
                      if(mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_array($query)) {
                    ?>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td><?php echo $row['ma_baotri_suachua']; ?></td>
                  <td><?php echo $row['noidung_baotri_suachua']; ?></td>
                  <td><?php echo $row['ten_toanha']; ?></td>
                  <td><?php echo $row['ten_canho_phong']; ?></td>                 
                  <td><?php echo $row['loai_cong_viec']; ?></td>       
                  <td><?php echo $row['ten_hien_thi']; ?></td>               
                  <td><?php echo $row['ngay_ketthuc']; ?></td>         
                  <td>
                  <?php 
                          if($row['trang_thai'] == 1){
                            echo '<span class="badge bg-success" style="font-size: 13px;"><b class="span_pending">Đã duyệt</b></span>';
                          }else if($row['trang_thai'] == 0){
                            echo '<span class="badge bg-danger" style="font-size: 13px;"><b class="span_pending">Không đạt</b></span>';
                          }else if($row['trang_thai'] == 2){
                            echo '<span class="badge bg-danger" style="font-size: 13px;"><b class="span_pending">Chờ duyệt</b></span>';
                          }else if($row['trang_thai'] == 3){
                            echo '<span class="badge bg-danger" style="font-size: 13px;"><b class="span_pending">Đang làm</b></span>';
                          }else if($row['trang_thai'] == 4){
                            echo '<span class="badge bg-danger" style="font-size: 13px;"><b class="span_pending">Chưa làm</b></span>';
                          }else if($row['trang_thai'] == 5){
                            echo '<span class="badge bg-danger" style="font-size: 13px;"><b class="span_pending">Quá hạn</b></span>';
                          }
                        ?>   
                </td>               
      
                  <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                      onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                    </button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"
                      data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                    </button>
                  </td>
                </tr>
                <?php 
                    } 
                  }else{
                    echo '<tr class="odd"><td valign="top" colspan="10" class="dataTables_empty">Không tìm thấy kết quả</td></tr>';
                  }
                    ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</main>
<script>
  $(document).ready(function () {
        $('body').on('click', '.btn-add', function () { 
            $('#modal-default').modal('show');
            // initializeDropdowns("building_id","room_id");
        });
        $('body').on('click', '#btnClose', function () {
            $('#modal-default').modal('hide');
        });
    });
    function initializeDropdowns(buildingId, roomId) {
        // Lấy tham chiếu đến các phần tử select từ id
        var building = document.getElementById(buildingId);
        var room = document.getElementById(roomId);
        console.log(building);
        building.onchange = function () {
          room.disabled = false;          
        };
    }
</script>