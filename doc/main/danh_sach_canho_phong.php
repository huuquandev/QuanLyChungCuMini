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
                                              <select aria-autocomplete="list" aria-labelledby="vs18__combobox" aria-controls="vs18__listbox" type="search" autocomplete="off" class="vs__search" id="floor_id" disabled>
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
            <div data-v-6ea5fee4="" class="row">
              <div data-v-6ea5fee4="" class="col">
                <div data-v-6ea5fee4="">
                  <fieldset class="form-group" id="__BVID__428">
                    <!---->
                    <div>
                      <div dir="ltr" class="v-select vs--single vs--searchable" id="apartment">
                        <div id="vs3__combobox" role="combobox" aria-expanded="false" aria-owns="vs3__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                          <div class="vs__selected-options">
                            <select aria-autocomplete="list" aria-labelledby="vs17__combobox" aria-controls="vs17__listbox" type="search" autocomplete="off" class="vs__search" id="building_id_search">
                                              <option value="" hidden="">Tòa nhà</option>     
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
                        <ul id="vs3__listbox" role="listbox" style="display: none; visibility: hidden;"></ul>
                      </div>
                      <small class="text-danger"></small>
                      <!---->
                      <!---->
                      <!---->
                    </div>
                  </fieldset>
                  <!---->
                </div>
              </div>
              <div data-v-6ea5fee4="" class="col">
                <div data-v-6ea5fee4="">
                  <fieldset class="form-group" id="__BVID__434">
                    <!---->
                    <div>
                      <div dir="ltr" class="v-select vs--single vs--searchable" id="floor">
                        <div id="vs4__combobox" role="combobox" aria-expanded="false" aria-owns="vs4__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                        <div class="vs__selected-options">     
                                <select aria-autocomplete="list" aria-labelledby="vs18__combobox" aria-controls="vs18__listbox" type="search" autocomplete="off" class="vs__search" id="floor_id_search">
                                              <option value="" hidden="">Tầng</option>     
                                              <?php
                                                $sqlfloor = "SELECT MIN(id_tang) AS id_tang, ten_tang
                                                FROM tb_tang
                                                GROUP BY ten_tang
                                                ORDER BY ten_tang ASC;                                                
                                                ";
                                                $queryfloor = mysqli_query($conn, $sqlfloor);
                                                if(mysqli_num_rows($queryfloor) > 0){
                                                  while ($rowfloor = mysqli_fetch_array($queryfloor)) {
                                               ?>
                                                  <option value="<?php echo $rowfloor['id_tang'] ?>">Tầng <?php echo $rowfloor['ten_tang'] ?></option>     
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
                        <ul id="vs4__listbox" role="listbox" style="display: none; visibility: hidden;"></ul>
                      </div>
                      <small class="text-danger"></small>
                      <!---->
                      <!---->
                      <!---->
                    </div>
                  </fieldset>
                  <!---->
                </div>
              </div>
              <div data-v-6ea5fee4="" class="col">
                <fieldset data-v-6ea5fee4="" class="form-group" id="__BVID__440">
                  <!---->
                  <div>
                    <div dir="ltr" class="v-select vs--single vs--searchable" id="active">
                      <div id="vs5__combobox" role="combobox" aria-expanded="false" aria-owns="vs5__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                        <div class="vs__selected-options">
                          <select aria-autocomplete="list" aria-labelledby="vs18__combobox" aria-controls="vs18__listbox" type="search" autocomplete="off" class="vs__search" id="floor_id_search">
                              <option value="" hidden="">Trạng thái thuê</option>          
                              <option value="">Đang trống</option>                                               
                              <option value="">Đang cọc</option>                                               
                              <option value="">Đang ở</option>                                               
                              <option value="">Sắp chuyển đi</option>                                                                                 
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
                      <ul id="vs5__listbox" role="listbox" style="display: none; visibility: hidden;"></ul>
                    </div>
                    <!---->
                    <!---->
                    <!---->
                  </div>
                </fieldset>
              </div>
              <div data-v-6ea5fee4="" class="col">
                <fieldset data-v-6ea5fee4="" class="form-group" id="__BVID__446">
                  <!---->
                  <div>
                    <div dir="ltr" class="v-select vs--single vs--searchable" id="active">
                      <div id="vs6__combobox" role="combobox" aria-expanded="false" aria-owns="vs6__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                        <div class="vs__selected-options">
                          <select aria-autocomplete="list" aria-labelledby="vs18__combobox" aria-controls="vs18__listbox" type="search" autocomplete="off" class="vs__search" id="floor_id_search">
                              <option value="" hidden="">Trạng thái hoạt động</option>          
                              <option value="">Hoạt động</option>                                               
                              <option value="">Không hoạt động</option>                                               
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
                      <ul id="vs6__listbox" role="listbox" style="display: none; visibility: hidden;"></ul>
                    </div>
                    <!---->
                    <!---->
                    <!---->
                  </div>
                </fieldset>
              </div>
              <div data-v-6ea5fee4="" class="col .search-input-building">
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
                        <th width="100" class="text-right">Giá thuê</th>
                        <th width="100" class="text-right">Đặt cọc</th>
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
                  <td>
                    <?php echo $row['ten_canho_phong']; ?>
                    <span class="text-muted">
                      <br><?php echo $row['ten_toanha']; ?> </span>
                    <span class="text-muted">
                    <br><?php echo $row['ten_tang']; ?> </span>
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
            initializeDropdowns("building_id","floor_id");
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
  });
  function initializeDropdowns(buildingId, floorId) {
    var building = document.getElementById(buildingId);
    var floor = document.getElementById(floorId);

    building.onchange = function () {
        var selectedBuildingId = building.value;

        if (selectedBuildingId !== '') {
            $.ajax({
                url: "doc/main/commons/lay_tang_by_toanha.php",
                type: "post",
                dataType: "json", 
                data: { idtoanha: selectedBuildingId },
            }).done(function(floors){
              console.log(floors);
                floor.innerHTML = '';
                for (var i = 0; i < floors.length; i++) {
                    var option = document.createElement('option');
                    option.value = floors[i].id_tang; 
                    option.textContent = "Tầng " + floors[i].ten_tang; 
                    floor.appendChild(option);
                }

                floor.disabled = false;
            });
        } else {
            floor.disabled = true;
            floor.innerHTML = '';
        }
    };
}
</script> 