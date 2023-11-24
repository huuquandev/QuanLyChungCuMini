<?php 

   include_once './function.php';

  $sqlcount = "SELECT COUNT(*) FROM tb_canho_phong WHERE tb_canho_phong.trangthai_canho_phong = 1;";
  $sqlcountON = "SELECT COUNT(*) FROM tb_canho_phong WHERE tb_canho_phong.trangthai_canho_phong = 2;";
  $sqlcountOFF = "SELECT COUNT(*) FROM tb_canho_phong WHERE tb_canho_phong.trangthai_canho_phong  = 0;";
  $querycount = mysqli_query($conn, $sqlcount);
  $querycountON = mysqli_query($conn, $sqlcountON);
  $querycountOFF = mysqli_query($conn, $sqlcountOFF);
  $count = mysqli_fetch_array($querycount);
  $countON = mysqli_fetch_array($querycountON);
  $countOFF = mysqli_fetch_array($querycountOFF);
  $countRoom = mysqli_fetch_array($querycountOFF);
  if(isset($_POST['btnSave'])){
      $tentoanha = $_POST['tentoanha'];
      $trangthai = $_POST['trangthai'];
  }
?>
<main class="app-content">

<div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách căn hộ/phòng</a></li>
      </ul>
      <div id="clock"></div>
    </div>

<div data-v-6ea5fee4="" class="row match-height">
  <div data-v-6ea5fee4="" class="col-md-4 col-lg-4 col-6">
    <div data-v-6ea5fee4="" class="card">
      <!---->
      <!---->
      <div class="card-body d-flex justify-content-between align-items-center">
        <!---->
        <!---->
        <div class="truncate">
          <h2 class="mb-25 font-weight-bolder text-secondary"> <?php echo $count['COUNT(*)'] ?> </h2>
          <span class="text-secondary">Đang thuê</span>
        </div>
        <span class="b-avatar badge-light-secondary rounded-circle" style="width: 45px; height: 45px;">
          <span class="b-avatar-custom">
            <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
              <rect x="3" y="3" width="7" height="7"></rect>
              <rect x="14" y="3" width="7" height="7"></rect>
              <rect x="14" y="14" width="7" height="7"></rect>
              <rect x="3" y="14" width="7" height="7"></rect>
            </svg>
          </span>
          <!---->
        </span>
      </div>
      <!---->
      <!---->
    </div>
  </div>
  <div data-v-6ea5fee4="" class="col-md-4 col-lg-4 col-6">
    <div data-v-6ea5fee4="" class="card">
      <!---->
      <!---->
      <div class="card-body d-flex justify-content-between align-items-center">
        <!---->
        <!---->
        <div class="truncate">
          <h2 class="mb-25 font-weight-bolder text-secondary"> <?php echo $countON['COUNT(*)'] ?> </h2>
          <span class="text-secondary">Đang cọc</span>
        </div>
        <span class="b-avatar badge-light-secondary rounded-circle" style="width: 45px; height: 45px;">
          <span class="b-avatar-custom">
            <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
              <rect x="3" y="3" width="7" height="7"></rect>
              <rect x="14" y="3" width="7" height="7"></rect>
              <rect x="14" y="14" width="7" height="7"></rect>
              <rect x="3" y="14" width="7" height="7"></rect>
            </svg>
          </span>
          <!---->
        </span>
      </div>
      <!---->
      <!---->
    </div>
  </div>
  <div data-v-6ea5fee4="" class="col-md-4 col-lg-4 col-6">
    <div data-v-6ea5fee4="" class="card">
      <!---->
      <!---->
      <div class="card-body d-flex justify-content-between align-items-center">
        <!---->
        <!---->
        <div class="truncate">
          <h2 class="mb-25 font-weight-bolder text-secondary"> <?php echo $countOFF['COUNT(*)'] ?> </h2>
          <span class="text-secondary">Đang trống</span>
        </div>
        <span class="b-avatar badge-light-secondary rounded-circle" style="width: 45px; height: 45px;">
          <span class="b-avatar-custom">
            <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
              <rect x="3" y="3" width="7" height="7"></rect>
              <rect x="14" y="3" width="7" height="7"></rect>
              <rect x="14" y="14" width="7" height="7"></rect>
              <rect x="3" y="14" width="7" height="7"></rect>
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
                  Thêm căn hộ/phòng</a>
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
                                      <div class="wrapper toannhaOption">
                                        <div class="select-btn">
                                          <span>Chọn tòa nhà</span>
                                          <input type="hidden" id="toannhaInput">
                                          <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="search-option">
                                          <div class="search">
                                            <input type="text" placeholder="Search" id="toannhaSearch">
                                          </div>
                                          <ul class="options" id="toannha">                              
                                          </ul>
                                        </div>
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
                                      <div class="wrapper tangoption">
                                        <div class="select-btn">
                                          <span>Chọn tầng</span>
                                          <input type="hidden" id="tangInput">
                                          <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="search-option">
                                          <div class="search">
                                            <input type="text" placeholder="Search" id="tangSearch">
                                          </div>
                                          <ul class="options" id="tang">                                
                                          </ul>
                                        </div>
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
            <div data-v-6ea5fee4="" class="row">
              <div data-v-6ea5fee4="" class="col">
                <div data-v-6ea5fee4="">
                  <fieldset class="form-group" id="__BVID__428">
                    <!---->
                    <div class="table_search">
                      <div class="wrapper toannhaOptionselect">
                                        <div class="select-btn">
                                          <span>Tòa nhà</span>
                                          <input type="hidden" id="toannhaInputSearch">
                                          <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="search-option">
                                          <div class="search">
                                            <input type="text" placeholder="Search" id="toannhaSearch2">
                                          </div>
                                          <ul class="options" id="toannhaOptionSearch">                              
                                          </ul>
                                        </div>
                         </div>
                    </div>
                  </fieldset>
                  <!---->
                </div>
              </div>
              <div data-v-6ea5fee4="" class="col">
                <div data-v-6ea5fee4="">
                  <fieldset class="form-group" id="__BVID__434">
                    <!---->
                    <div class="table_search">
                    <div class="wrapper tangOptionselect">
                                        <div class="select-btn">
                                          <span>Tầng</span>
                                          <input type="hidden" id="tangInputSearch">
                                          <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="search-option">
                                          <div class="search">
                                            <input type="text" placeholder="Search" id="tangSearch2">
                                          </div>
                                          <ul class="options" id="tangOptionSearch">                                
                                          </ul>
                                        </div>
                                      </div>
                    </div>
                  </fieldset>
                  <!---->
                </div>
              </div>
              <div data-v-6ea5fee4="" class="col">
                <fieldset data-v-6ea5fee4="" class="form-group" id="__BVID__440">
                  <!---->
                  <div class="table_search">
                  <div class="wrapper statusthueoption">
                                        <div class="select-btn">
                                          <span>Trạng thái thuê</span>
                                          <input type="hidden" id="statusthueInput">
                                          <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="search-option">
                                          <div class="search">
                                            <input type="text" placeholder="Search" id="statusthueSearch">
                                          </div>
                                          <ul class="options" id="statusthue">                                
                                          </ul>
                                        </div>
                          </div>
                  </div>
                </fieldset>
              </div>
              <div data-v-6ea5fee4="" class="col">
                <fieldset data-v-6ea5fee4="" class="form-group" id="__BVID__446">
                  <!---->
                  <div class="table_search">
                  <div class="wrapper statushoatdongoption">
                                        <div class="select-btn">
                                          <span>Trạng thái hoạt động</span>
                                          <input type="hidden" id="statushoatdongInput">
                                          <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="search-option">
                                          <div class="search">
                                            <input type="text" placeholder="Search" id="statushoatdongSearch">
                                          </div>
                                          <ul class="options" id="statushoatdong">                                
                                          </ul>
                                        </div>
                          </div>
                  </div>
                </fieldset>
              </div>
              <div data-v-6ea5fee4="" class="col search-input-apartment">
                <input data-v-6ea5fee4="" type="text" placeholder="Tìm kiếm..." class="form-control">
              </div>
            </div>
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="">
              <thead>
                      <tr>
                        <th width="10"><input type="checkbox" id="all"></th>
                        <th width="150">Mã căn hộ/phòng</th>
                        <th width="150">Tên căn hộ/phòng</th>
                        <th width="130" class="text-right">Giá thuê</th>
                        <th width="130" class="text-right">Đặt cọc</th>
                        <th width="100" class="text-right">Diện tích</th>
                        <th width="100">Trạng thái</th>
                        <th width="100">Hoạt động</th>
                        <th width="100">Tính năng</th>
                      </tr>
              </thead>
              <tbody>
              <?php 
                    $sql = "SELECT tb_canho_phong.*, tb_toanha.ten_toanha , tb_tang.ten_tang
                    FROM `tb_canho_phong`
                    JOIN tb_toanha ON tb_canho_phong.id_toanha = tb_toanha.id_toanha
                    JOIN tb_tang ON tb_canho_phong.id_tang = tb_tang.id_tang";
                      $query = mysqli_query($conn, $sql);
                      if(mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_array($query)) {
                    ?>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td><?php echo $row['ma_canho_phong']; ?></td>
                  <td class="ten_can_phong">
                    <?php echo $row['ten_canho_phong']; ?>
                    <br>
                    <span class="text-muted ten_toanha"><?php echo $row['ten_toanha']; ?></span>
                    <br>
                    <span class="text-muted tang">Tầng <?php echo $row['ten_tang']; ?> </span>
                  </td>
                  <td class="text-right"><?php echo convertToVietnameseCurrency($row['tienthue_canho_phong']); ?> đ</td>
                  <td class="text-right"><?php echo convertToVietnameseCurrency($row['tiencoc_canho_phong']); ?> đ</td>
                  <td class="text-right"><?php echo convertToVietnameseCurrency($row['dientich_canho_phong']); ?> m²</td>
                  <td>
                      <?php 
                          if($row['trangthai_canho_phong'] == 1){
                            echo '<span class="badge bg-success" style="font-size: 13px;"><b class="span_pending">Đang thuê</b></span>';
                          }else if($row['trangthai_canho_phong'] == 0){
                            echo '<span class="badge bg-danger" style="font-size: 13px;"><b class="span_pending">Đang trống</b></span>';
                          }
                        ?>                  
                  </td>
                  <td>
                      <?php 
                        if($row['tinhtrang_canho_phong'] == 1){
                          echo '<span class="badge bg-success" style="font-size: 13px;"><b class="span_pending">Hoạt động</b></span>';
                        }else if($row['tinhtrang_canho_phong'] == 0){
                          echo '<span class="badge bg-danger" style="font-size: 13px;"><b class="span_pending">Không hoạt động</b></span>';
                        }
                        else if($row['tinhtrang_canho_phong'] == 2){
                          echo '<span class="badge bg-warning" style="font-size: 13px;"><b class="span_pending">Đang sửa chữa</b></span>';
                        }
                      ?>                  
                  </td>               
                  <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                      onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                    </button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="btn-edit"
                      data-toggle="modal" data-target="#ModalUP" data-id="<?= $row['id_canho_phong'] ?>"><i class="fas fa-edit"></i>
                    </button>
                  </td>             
                </tr>
                <div class="modal fade bd-example-modal-lg" id="modal-default_<?= $row['id_canho_phong'] ?>">
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
                                                  $sqlselecttoanha = "SELECT * FROM tb_toanha";
                                                  $queryselecttoanha = mysqli_query($conn, $sqlselecttoanha);
                                                  if(mysqli_num_rows($queryselecttoanha) > 0){
                                                    while ($rowselecttoanha = mysqli_fetch_array($queryselecttoanha)) {
                                                ?>
                                                    <option value="<?php echo $rowselecttoanha['id_toanha'] ?>"><?php echo $rowselecttoanha['ten_toanha'] ?></option>     
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
                                              <select aria-autocomplete="list" aria-labelledby="vs18__combobox" aria-controls="vs18__listbox" type="search" autocomplete="off" class="vs__search" id="floorid" disabled>
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
                                        <input id="name" type="text" placeholder="P.101" class="form-control" name="tenphong" value="<?= $row['ten_canho_phong'] ?>"> 
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
                                      <input type="text" value="<?= convertToVietnameseCurrency($row['tienthue_canho_phong']); ?>" id="" placeholder="5,000,000" class="form-control" name="tienthue">
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
                                      <input type="text" value="<?= convertToVietnameseCurrency($row['tiencoc_canho_phong']); ?>" id="" placeholder="5,000,000" class="form-control" name="tiencoc">
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
                                      <input type="text" value="<?= convertToVietnameseCurrency($row['dientich_canho_phong']); ?>" id="" placeholder="30" class="form-control" name="dientich">
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
                                    <input type="text" value="<?= $row['so_nguoi_o'] ?>" id="" placeholder="30" class="form-control" name="soluongkhacho">
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
                                  <?php
                                    if($row['trangthai_canho_phong'] == 1){
                                      echo '<input type="checkbox" name="newtrangthai" class="checkbox-switch" value="" id="__BVID__1004" checked>';
                                    }else if($row['trangthai_canho_phong'] == 0){
                                      echo '<input type="checkbox" name="newtrangthai" class="checkbox-switch" value="" id="__BVID__1004">';
                                    }
                                     ?>                                       
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
                        <button type="button" class="btn btn-secondary btnClose" data-dismiss="modal" data-id="<?php echo $row['id_canho_phong']  ?>">Hủy</button>
                        <button type="button" class="btn btn-primary" id="btnSave">Lưu</button>
                    </div>
                    </div>
                  </div>
                </div>       
                <?php 
                    } 
                  }else{
                    echo '<td valign="top" colspan="10" class="dataTables_empty" style="text-align: center;">Không tìm thấy kết quả</td>';
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
            initializeDropdownsToanha(".toannhaOption","toannhaInput", "toannhaSearch", "toannha", ".tangoption","tangInput", "tangSearch", "tang");
        });
        $('body').on('click', '#btnClose', function () {
            $('#modal-default').modal('hide');
        });
        $('body').on('click', '#btn-edit', function () { 
            var id = $(this).data("id");
            $('#modal-default_' + id).modal('show');
        });
        $('body').on('click', '.btnClose', function () {
            var id = $(this).data("id");
            $('#modal-default_' + id).modal('hide');
        });
        const toannhaSelect = $('.toannhaOptionselect');  
        const toannhaSelectBtn = $('.toannhaOptionselect .select-btn');
        toannhaSelectBtn.on('click', function () {
          $.ajax({
                      url: "doc/main/commons/lay_all_toanha.php",
                      type: "post",
                      dataType: "json", 
                  }).done(function(toanha){
                    let arrayName = [];
                    arrayName.push("Tất cả");
                    for (const b of toanha) {
                      arrayName.push(b.ten_toanha);
                      }
                      addcounty(arrayName, 'toannhaOptionSearch', 'toannhaSearch2', 'toannhaInputSearch', '.toannhaOptionselect');
                      toannhaSelect.toggleClass('active');
                      let Search = $('#toannhaSearch2');

                      Search.on('keyup', () => {
                          let toanha = $('#toannhaOptionSearch');
                          let searchedVal = Search.val().toLowerCase(); 
                          
                          let filteredResults = arrayName.filter(data => {
                              return data.toLowerCase().includes(searchedVal);
                          });
                          let arr = filteredResults.map(data => `<li onclick="updateName(this, 'toannhaSearch2', '${arrayName}', 'toannhaOptionSearch', 'toannhaInputSearch', '.toannhaOptionselect')">${data}</li>`).join("");

                          toanha.html(arr ? arr : `<p class="text-center">Không có dữ liệu</p>`); 
                      });       
                  });

        });
        const tangSelect = $('.tangOptionselect');         
        const tangSelectBtn = $('.tangOptionselect .select-btn');
        tangSelectBtn.on('click', function () {
          $.ajax({
                      url: "doc/main/commons/lay_soluong_tang.php",
                      type: "post",
                      dataType: "json", 
                  }).done(function(tang){
                    let arrayName = [];
                    arrayName.push("Tất cả");
                    for (const b of tang) {
                      arrayName.push("Tầng " + b.ten_tang);
                      }
                      addcounty(arrayName, 'tangOptionSearch', 'tangSearch2', 'tangInputSearch', '.tangoptionselect');
                      tangSelect.toggleClass('active');
                      let Search = $('#tangSearch2');

                      Search.on('keyup', () => {
                          let tang = $('#tangOptionSearch');
                          let searchedVal = Search.val().toLowerCase(); 
                          
                          let filteredResults = arrayName.filter(data => {
                              return data.toLowerCase().includes(searchedVal);
                          });
                          let arr = filteredResults.map(data => `<li onclick="updateName(this, 'tangSearch2', '${arrayName}', 'tangOptionSearch', 'tangInputSearch', '.tangoptionselect')">${data}</li>`).join("");

                          tang.html(arr ? arr : `<p class="text-center">Không có dữ liệu</p>`); 
                      });       
                  });

        });
        const statusthueSelect = $('.statusthueoption');         
        const statusthueSelectBtn = $('.statusthueoption .select-btn');
        statusthueSelectBtn.on('click', function () {
          let arrayName = ["Tất cả", "Đang trống", "Đang ở", "Sắp chuyển đi"];
                      addcounty(arrayName, 'statusthue', 'statusthueSearch', 'statusthueInput', '.statusthueoption');
                      statusthueSelect.toggleClass('active');
                      let Search = $('#statusthueSearch');

                      Search.on('keyup', () => {
                          let statusthue = $('#statusthue');
                          let searchedVal = Search.val().toLowerCase(); 
                          
                          let filteredResults = arrayName.filter(data => {
                              return data.toLowerCase().includes(searchedVal);
                          });
                          let arr = filteredResults.map(data => `<li onclick="updateName(this, 'statusthueSearch', '${arrayName}', 'statusthue', 'statusthueInput', '.statusthueoption')">${data}</li>`).join("");

                          statusthue.html(arr ? arr : `<p class="text-center">Không có dữ liệu</p>`); 
                      }); 
        });
        const statushoatdongSelect = $('.statushoatdongoption');         
        const statushoatdongSelectBtn = $('.statushoatdongoption .select-btn');
        statushoatdongSelectBtn.on('click', function () {
          let arrayName = ["Tất cả", "Hoạt động", "Không hoạt động"];
                      addcounty(arrayName, 'statushoatdong', 'statushoatdongSearch', 'statushoatdongInput', '.statushoatdongoption');
                      statushoatdongSelect.toggleClass('active');
                      let Search = $('#statushoatdongSearch');

                      Search.on('keyup', () => {
                          let statushoatdong = $('#statushoatdong');
                          let searchedVal = Search.val().toLowerCase(); 
                          
                          let filteredResults = arrayName.filter(data => {
                              return data.toLowerCase().includes(searchedVal);
                          });
                          let arr = filteredResults.map(data => `<li onclick="updateName(this, 'statushoatdongSearch', '${arrayName}', 'statushoatdong', 'statushoatdongInput', '.statushoatdongoption')">${data}</li>`).join("");

                          statushoatdong.html(arr ? arr : `<p class="text-center">Không có dữ liệu</p>`); 
                      }); 
        });
        $(document).on('click', function (event) {
            const isClicktoanha = toannhaSelect.is(event.target) || toannhaSelect.has(event.target).length > 0 ;
            const isClicktang = tangSelect.is(event.target) || tangSelect.has(event.target).length > 0 ;
            const isClickStatusthue = statusthueSelect.is(event.target) || statusthueSelect.has(event.target).length > 0 ;
            const isClickStatushoatdong = statushoatdongSelect.is(event.target) || statushoatdongSelect.has(event.target).length > 0 ;

            if (!isClicktoanha) {
                toannhaSelect.removeClass('active');
            }if (!isClicktang) {
                tangSelect.removeClass('active');
            }if (!isClickStatusthue) {
                statusthueSelect.removeClass('active');
            }if (!isClickStatushoatdong) {
                statushoatdongSelect.removeClass('active');
            }
        });
        const searchapartment = document.querySelector(".search-input-apartment input");
        const tb_toanha_selectedtoanha = document.querySelector(".toannhaOptionselect .select-btn input");
        const tb_toanha_selectedtang = document.querySelector(".tangOptionselect .select-btn input");
        const tb_toanha_selectedStatusthue = document.querySelector(".statusthueoption .select-btn input");
        const tb_toanha_selectedStatushoatdong = document.querySelector(".statushoatdongoption .select-btn input");
        searchapartment.addEventListener('input', searchTable_tb_can_phong);
        tb_toanha_selectedtoanha.addEventListener('change', searchTable_tb_can_phong);
        tb_toanha_selectedtang.addEventListener('change', searchTable_tb_can_phong);

  });


</script> 
