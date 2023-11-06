<?php 

   include_once './function.php';

  $sqlcount = "SELECT COUNT(*) FROM tb_toanha;";
  $sqlcountON = "SELECT COUNT(*) FROM tb_toanha WHERE tb_toanha.trangthai_toanha = 1;";
  $sqlcountOFF = "SELECT COUNT(*) FROM tb_toanha WHERE tb_toanha.trangthai_toanha = 0;";
  $querycount = mysqli_query($conn, $sqlcount);
  $querycountON = mysqli_query($conn, $sqlcountON);
  $querycountOFF = mysqli_query($conn, $sqlcountOFF);
  $count = mysqli_fetch_array($querycount);
  $countON = mysqli_fetch_array($querycountON);
  $countOFF = mysqli_fetch_array($querycountOFF);
  $countRoom = mysqli_fetch_array($querycountOFF);
  if(isset($_POST['btnAdd'])){
      $tentoanha = $_POST['tentoanha'];
      $trangthai = $_POST['trangthai'];
      $sotang = $_POST['sotang'];      
      $dia_chi = $_POST['addressDetail'];
      $tinhthanh = $_POST['Province1'];
      $quanhuyen = $_POST['District1'];
      $phuongxa = $_POST['Ward1'];
      ThemToaNha($tentoanha, $dia_chi, $trangthai, $sotang, $tinhthanh, $quanhuyen, $phuongxa);
  }

?>
<main class="app-content">

<div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách tòa nhà</a></li>
      </ul>
      <div id="clock"></div>
    </div>

<div data-v-3893a66a="" class="row match-height">
      <div data-v-3893a66a="" class="col-sm-4 col-12">
        <div data-v-3893a66a="" class="card">
          <!---->
          <!---->
          <div class="card-body d-flex justify-content-between align-items-center">
            <!---->
            <!---->
            <div class="truncate">
              <h2 class="mb-25 font-weight-bolder text-secondary"> <?php echo $count['COUNT(*)'] ?> </h2>
              <span class="text-secondary">Tòa nhà</span>
            </div>
            <span class="b-avatar badge-light-secondary rounded-circle" style="width: 45px; height: 45px;">
              <span class="b-avatar-custom">
                <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
              </span>
              <!---->
            </span>
          </div>
          <!---->
          <!---->
        </div>
      </div>
      <div data-v-3893a66a="" class="col-sm-4 col-12">
        <div data-v-3893a66a="" class="card">
          <!---->
          <!---->
          <div class="card-body d-flex justify-content-between align-items-center">
            <!---->
            <!---->
            <div class="truncate">
              <h2 class="mb-25 font-weight-bolder text-secondary"> <?php echo $countON['COUNT(*)'] ?> </h2>
              <span class="text-secondary">Hoạt động</span>
            </div>
            <span class="b-avatar badge-light-secondary rounded-circle" style="width: 45px; height: 45px;">
              <span class="b-avatar-custom">
                <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
              </span>
              <!---->
            </span>
          </div>
          <!---->
          <!---->
        </div>
      </div>
      <div data-v-3893a66a="" class="col-sm-4 col-12">
        <div data-v-3893a66a="" class="card">
          <!---->
          <!---->
          <div class="card-body d-flex justify-content-between align-items-center">
            <!---->
            <!---->
            <div class="truncate">
              <h2 class="mb-25 font-weight-bolder text-secondary"> <?php echo $countOFF['COUNT(*)'] ?> </h2>
              <span class="text-secondary">Không hoạt động</span>
            </div>
            <span class="b-avatar badge-light-secondary rounded-circle" style="width: 45px; height: 45px;">
              <span class="b-avatar-custom">
                <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
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
                  Thêm tòa nhà</a>
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
                        <h4 class="modal-title">Dự án/Tòa nhà</h4>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                          <input type="hidden" id="txtOrderId" value="0" />
            
                          <div class="row">
                              <div class="col-12">
                                <span>
                                  <fieldset class="form-group" id="__BVID__977">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__977__BV_label_"> Tên tòa nhà <span class="text-danger">(*)</span>
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
                                        <input id="name" type="text" placeholder="CH-01" class="form-control" name="tentoanha" required>
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
                                <h5>Thông tin địa chỉ</h5>
                              </div>
                              <!---->
                              <div class="col-md-4">
                                <span>
                                  <fieldset class="form-group" id="__BVID__981">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__981__BV_label_"> Tỉnh/Thành phố <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable" id="province">
                                        <div id="vs33__combobox" role="combobox" aria-expanded="false" aria-owns="vs33__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                            <select aria-autocomplete="list" aria-labelledby="vs33__combobox" aria-controls="vs33__listbox" autocomplete="off" class="vs__search" id="Province1" name="Province1">
                                                <option value="" hidden="">Chọn tỉnh thành</option>                                   
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
                                  <fieldset class="form-group" id="__BVID__988">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__988__BV_label_"> Quận/Huyện <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="district">
                                        <div id="vs34__combobox" role="combobox" aria-expanded="false" aria-owns="vs34__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                            <select aria-autocomplete="list" aria-labelledby="vs34__combobox" aria-controls="vs34__listbox" type="search" autocomplete="off" class="vs__search" id="District1" name="District1" disabled>
                                              <option value="" hidden="">Chọn quận huyện</option>
                                            </select>
                                          </div>
                                          <div class="vs__actions">
                                            <button disabled="disabled" type="button" title="Clear Selected" aria-label="Clear Selected" class="vs__clear" style="display: none;">
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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__995__BV_label_"> Xã/Phường <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="ward">
                                        <div id="vs35__combobox" role="combobox" aria-expanded="false" aria-owns="vs35__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                            <select aria-autocomplete="list" aria-labelledby="vs35__combobox" aria-controls="vs35__listbox" type="search" autocomplete="off" class="vs__search" id="Ward1" name="Ward1" disabled>
                                            <option value="" hidden="">Chọn phường xã</option>
                                            </select>
                                          </div>
                                          <div class="vs__actions">
                                            <button disabled="disabled" type="button" title="Clear Selected" aria-label="Clear Selected" class="vs__clear" style="display: none;">
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
                                        <input id="address" type="text" placeholder="91 Nguyễn Chí Thanh" class="form-control" name="addressDetail" required>
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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__977__BV_label_"> Số tầng <span class="text-danger">(*)</span>
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
                                        <input id="name" type="text" placeholder="10" class="form-control" name="sotang" required>
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
                                <fieldset class="form-group" id="__BVID__1003">
                                  <!---->
                                  <div>
                                    <div class="custom-control custom-control-inline custom-switch">
                                      <input type="checkbox" name="trangthai" class="checkbox-switch" value="" id="__BVID__1004">
                                      <label class="custom-control-label" for="__BVID__1004"> Hoạt động </label>
                                    </div>
                                  </div>
                                </fieldset>
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
            <script>
                                $(document).ready(function () {
                                    $('.checkbox-switch').change(function () {
                                        if ($(this).is(':checked')) {
                                            $('.checkbox-switch').val("1");
                                        } else {
                                            $('.checkbox-switch').val("0");
                                        }                                       
                                    });

                                });
                            </script>
            <div class="card-body">
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0" id="sampleTable">                    
              <thead>
                      <tr>
                        <th width="10"><input type="checkbox" id="all"></th>
                        <th width="100">Mã tòa nhà</th>
                        <th width="150">Tên tòa nhà</th>
                        <th width="80" class="text-center">Số phòng</th>
                        <th width="500">Địa chỉ</th>
                        <th width="100">Hoạt động</th>
                        <th width="100">Tính năng</th>
                      </tr>
                    </thead>
                  <tbody>
                  <?php 
                    $sql = "SELECT tb_toanha.*, COUNT(tb_canho_phong.id_canho_phong) AS so_luong_phong
                    FROM tb_toanha
                    LEFT JOIN tb_canho_phong ON tb_toanha.id_toanha = tb_canho_phong.id_toanha
                    GROUP BY tb_toanha.id_toanha;";
                      $query = mysqli_query($conn, $sql);
                      if(mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                      <td width="10"><input type="checkbox" name="check1" value="1"></td>
                      <td><?php echo $row['ma_toanha']; ?></td>
                      <td><?php echo $row['ten_toanha']; ?></td>
                      <td class="text-center"><?php echo $row['so_tang']; ?></td>
                      <td>
                        <?php 
                              $showaddress = array();

                        if (!empty($row['diachi_chitiet'])) {
                                $showaddress[] = $row['diachi_chitiet'];
                            }
                            if (!empty($row['tinhthanh'])) {
                                $showaddress[] = $row['tinhthanh'];
                            }
                            if (!empty($row['quanhuyen'])) {
                                $showaddress[] = $row['quanhuyen'];
                            }
                            if (!empty($row['phuongxa'])) {
                                $showaddress[] = $row['phuongxa'];
                            }
                            $show_address = implode(', ', $showaddress); 
                            echo $show_address;
                        ?> 
                      </td>
                      <td>
                        <?php 
                        if($row['trangthai_toanha'] == 1){
                          echo '<span class="badge bg-success" style="font-size: 13px;"><b class="span_pending">Hoạt động</b></span>';
                        }else if($row['trangthai_toanha'] == 0){
                          echo '<span class="badge bg-danger" style="font-size: 13px;"><b class="span_pending">Không hoạt động</b></span>';
                        }
                        ?>
                      </td>
                      <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                          onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                        </button>
                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="btn-edit"
                          data-toggle="modal" data-target="#ModalUP" data-id="<?php echo $row['id_toanha']  ?>"><i class="fas fa-edit"></i>
                        </button>
                      </td>
                    </tr>
                    <div class="modal fade bd-example-modal-lg" id="modal-default_<?php echo $row['id_toanha'] ?>">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Dự án/Tòa nhà</h4>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                      <div class="modal-body">

                          <input type="hidden" id="txtId" value="0" name="txtId"/>
                          <?php 
                              $id_toanha = $row['id_toanha'];
                              $sqlUpdate = "SELECT * FROM tb_toanha WHERE tb_toanha.id_toanha = $id_toanha";
                              $queryUpdate = mysqli_query($conn, $sqlUpdate);
                              $rowUpdate = mysqli_fetch_array($queryUpdate);
                            
                          ?>

                          <div class="row">
                              <div class="col-12">
                                <span>
                                  <fieldset class="form-group" id="__BVID__977">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__977__BV_label_"> Tên tòa nhà <span class="text-danger">(*)</span>
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
                                        <input id="name" type="text" placeholder="CH-01" class="form-control" name="tentoanha" value="<?php echo $rowUpdate['ten_toanha'] ?>" require>
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
                                <h5>Thông tin địa chỉ</h5>
                              </div>
                              <!---->
                              <div class="col-md-4">
                                <span>
                                  <fieldset class="form-group" id="__BVID__981">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__981__BV_label_"> Tỉnh/Thành phố <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable" id="province">
                                        <div id="vs33__combobox" role="combobox" aria-expanded="false" aria-owns="vs33__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                            <select aria-autocomplete="list" aria-labelledby="vs33__combobox" aria-controls="vs33__listbox" autocomplete="off" class="vs__search" id="Province2_<?php echo $row['id_toanha'] ?>" name="Province2_<?php echo $row['id_toanha'] ?>" data-province="<?php echo $row['tinhthanh'] ?>">
                                                <option value="" hidden="">Chọn tỉnh thành</option>                                   
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
                                  <fieldset class="form-group" id="__BVID__988">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__988__BV_label_"> Quận/Huyện <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="district">
                                        <div id="vs34__combobox" role="combobox" aria-expanded="false" aria-owns="vs34__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                            <select aria-autocomplete="list" aria-labelledby="vs34__combobox" aria-controls="vs34__listbox" type="search" autocomplete="off" class="vs__search" id="District2_<?php echo $row['id_toanha'] ?>" name="District2_<?php echo $row['id_toanha'] ?>" data-district="<?php echo $row['quanhuyen'] ?>" disabled>
                                              <option value="" hidden="">Chọn quận huyện</option>
                                            </select>
                                          </div>
                                          <div class="vs__actions">
                                            <button disabled="disabled" type="button" title="Clear Selected" aria-label="Clear Selected" class="vs__clear" style="display: none;">
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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__995__BV_label_"> Xã/Phường <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="ward">
                                        <div id="vs35__combobox" role="combobox" aria-expanded="false" aria-owns="vs35__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                            <select aria-autocomplete="list" aria-labelledby="vs35__combobox" aria-controls="vs35__listbox" type="search" autocomplete="off" class="vs__search" id="Ward2_<?php echo $row['id_toanha'] ?>" name="Ward2_<?php echo $row['id_toanha'] ?>" data-ward="<?php echo $row['phuongxa'] ?>" disabled>
                                            <option value="" hidden="">Chọn phường xã</option>
                                            </select>
                                          </div>
                                          <div class="vs__actions">
                                            <button disabled="disabled" type="button" title="Clear Selected" aria-label="Clear Selected" class="vs__clear" style="display: none;">
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
                                        <input id="address" type="text" placeholder="91 Nguyễn Chí Thanh" class="form-control" name="addressDetail" value="<?php echo $rowUpdate['diachi_chitiet'] ?>" require>
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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__977__BV_label_"> Số tầng <span class="text-danger">(*)</span>
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
                                        <input id="name" type="text" placeholder="10" class="form-control" name="sotang" value="<?php echo $rowUpdate['so_tang'] ?>" require>
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
                                <fieldset class="form-group" id="__BVID__1003">
                                  <!---->
                                  <div>                                  
                                     <div class="custom-control custom-control-inline custom-switch">
                                     <?php
                                    if($rowUpdate['trangthai_toanha'] == 1){
                                      echo '<input type="checkbox" name="trangthai" class="checkbox-switch" value="" id="__BVID__1004" checked>';
                                    }else if($rowUpdate['trangthai_toanha'] == 0){
                                      echo '<input type="checkbox" name="trangthai" class="checkbox-switch" value="" id="__BVID__1004">';
                                    }
                                     ?>                       
                                      <label class="custom-control-label" for="__BVID__1004"> Hoạt động </label>
                                    </div>
                                    
                                  </div>
                                </fieldset>
                              </div>
                            </div>
            
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btnClose" data-dismiss="modal" data-id="<?php echo $row['id_toanha']  ?>">Hủy</button>
                          <button type="submit" class="btn btn-primary" id="btnSave" name="btnSave">Lưu</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
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
    $(document).ready(function () {
        $('body').on('click', '.btn-add', function () {          
            $('#modal-default').modal('show');
            initializeDropdowns("Province1", "District1", "Ward1");
        });
        $('body').on('click', '.btnClose', function () {
            $('#modal-default').modal('hide');
        });
        $('body').on('click', '#btn-edit', function () { 
            var id = $(this).data("id");
            $('#modal-default_' + id).modal('show');
            var ProvinceValue = $('#Province2_' + id).data("province");
            var DistrictValue = $('#District2_' + id).data("district");
            var WardValue = $('#Ward2_' + id).data("ward");
            initializeDropdowns("Province2_" + id, "District2_" + id, "Ward2_" + id, ProvinceValue, DistrictValue, WardValue);

        });
        $('body').on('click', '.btnClose', function () {
            var id = $(this).data("id");
            $('#modal-default_' + id).modal('hide');
        });
    });

    function initializeDropdowns(citisId, districtId, wardId, citisIdValue, districtIdValue, wardIdValue) {
        // Lấy tham chiếu đến các phần tử select từ id
        var citis = document.getElementById(citisId);
        var districts = document.getElementById(districtId);
        var wards = document.getElementById(wardId);

        // Tạo đối tượng Parameter chứa thông tin yêu cầu HTTP GET
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };

        // Gửi yêu cầu HTTP GET và nhận dữ liệu từ tệp JSON
        var promise = axios(Parameter);
        promise.then(function (result) {
            renderCity(result.data);
        });

        // Hàm renderCity để tạo các tùy chọn cho select tỉnh/thành phố
        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Id = x.Name);
                if (x.Name == citisIdValue) {
                    citis.value = citisIdValue;
                }
            }
            // Xử lý khi select tỉnh/thành phố thay đổi
            citis.onchange = function () {
                districts.length = 1;
                wards.length = 1;
                // Lọc dữ liệu quận/huyện dựa trên tỉnh/thành phố được chọn
                const result = data.filter(n => n.Id === this.value);

                // Tạo các tùy chọn cho select quận/huyện
                for (const k of result[0].Districts) {
                    districts.options[districts.options.length] = new Option(k.Name, k.Id = k.Name);
                    if (k.Name == districtIdValue) {
                        districts.value = districtIdValue;
                    }
                }

                districts.disabled = false;
                wards.disabled = true;
                wards.innerHTML = '<option value="" hidden>Chọn phường xã</option>';
            };

            // Xử lý khi select quận/huyện thay đổi
            districts.onchange = function () {
                const selectedDistrict = this.value;
                if (selectedDistrict !== '') {
                    wards.length = 1;
                    const dataCity = data.filter(n => n.Id === citis.value);
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === selectedDistrict)[0].Wards;
                    // Tạo các tùy chọn cho select phường/xã
                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Id = w.Name);
                        if (w.Name == wardIdValue) {
                            wards.value = wardIdValue;
                        }
                    }
                    wards.disabled = false;
                } else {
                    wards.disabled = true;
                    wards.innerHTML = '<option value="" hidden>Chọn phường xã</option>';
                }
            };

            // Kiểm tra nếu select tỉnh/thành phố đã có giá trị được chọn sẵn
            if (citis.value !== null && citis.value !== '') {
                districts.disabled = false;
                const changeEvent = new Event('change');
                citis.dispatchEvent(changeEvent);
                const selectedDistrict = districts.value;

                if (selectedDistrict.value !== null && selectedDistrict.value !== '') {
                    wards.disabled = false;
                    // Gọi sự kiện onchange của quận/huyện để kích hoạt xử lý
                    const changeEvent = new Event('change');
                    districts.dispatchEvent(changeEvent);
                }
            }
        }

        // Xử lý sự kiện khi select tỉnh/thành phố thay đổi
        citis.addEventListener('change', function () {
            var selectedProvince = this.value;
            if (selectedProvince !== "") {
                districts.disabled = false;
            } else {
                districts.disabled = true;
                districts.innerHTML = '<option value="" hidden>Chọn quận huyện</option>';
                wards.disabled = true;
                wards.innerHTML = '<option value="" hidden>Chọn phường xã</option>';
            }
        });

        // Xử lý sự kiện khi select quận/huyện thay đổi
        districts.addEventListener('change', function () {
            var selectedDistrict = this.value;
            if (selectedDistrict !== "") {
                wards.disabled = false;
            } else {
                wards.disabled = true;
                wards.innerHTML = '<option value="" hidden>Chọn phường xã</option>>';
            }
        });
    }
    function selectValue(selectElement, value) {
        selectElement.value = value;
    }
</script>
