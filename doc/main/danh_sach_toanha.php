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
                                        <input id="tentoanha" type="text" placeholder="CH-01" class="form-control" name="tentoanha" required>
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
                              <div class="col-md-4 wrapper">
                                  <div class="select-btn">
                                      <span>Tỉnh thành</span>
                                      <i class="fas fa-angle-down"></i>
                                  </div>
                                  <div class="search-option">
                                    <div class="search">
                                      <input type="text" placeholder="Search" id="Province1Search">
                                    </div>
                                    <ul class="options" id="Province1">
                                    </ul>
                                  </div>
                              </div>
                              <div class="col-md-4 wrapper">
                                   <div class="select-btn">
                                      <span>Quận huyện</span>
                                      <i class="fas fa-angle-down"></i>
                                  </div>
                                  <div class="search-option">
                                    <div class="search">
                                      <input type="text" placeholder="Search" id="District1Search">
                                    </div>
                                    <ul class="options" id="District1">
                                    </ul>
                                  </div>
                              </div>
                              <div class="col-md-4 wrapper">
                                   <div class="select-btn">
                                      <span>Phường xã</span>
                                      <i class="fas fa-angle-down"></i>
                                  </div>
                                  <div class="search-option">
                                    <div class="search">
                                      <input type="text" placeholder="Search" id="Ward1Search">
                                    </div>
                                    <ul class="options" id="Ward1">
                                    </ul>
                                  </div>
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
                                        <input id="diachichitiet" type="text" placeholder="91 Nguyễn Chí Thanh" class="form-control" name="diachichitiet" required>
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
                                        <input id="sotang" type="text" placeholder="10" class="form-control" name="sotang" required>
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
                                      <input type="checkbox" name="trangthai" class="checkbox-switch" value="" id="trangthai">
                                      <label class="custom-control-label" for="__BVID__1004"> Hoạt động </label>
                                    </div>
                                  </div>
                                </fieldset>
                              </div>
                            </div>
            
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btnClose" data-dismiss="modal">Hủy</button>
                          <button type="button" class="btn btn-success" id="btnAdd" name="btnAdd">Thêm</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="card-body">
            <div data-v-7f820fac="" class="row search-form">
              <!---->
              <div data-v-7f820fac="" class="col-md-6">
                <div class="selected-status">
                          <select class="w-100" id="status_id" data-live-search="true">
                              <option value="" selected>Trạng thái hoạt động</option>     
                              <option value="Hoạt động" >Hoạt động</option>     
                              <option value="không hoạt động" >không hoạt động</option>     
                          </select>                
                  </div>   
              </div>
              <div data-v-7f820fac="" class="col-md-6 search-input-building">
                <input data-v-7f820fac="" type="text" placeholder="Tìm kiếm Tòa nhà..." class="form-control" id="__BVID__395">
              </div>
            </div>
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0" id="">                   
              <thead>
                      <tr>
                        <th width="10"><input type="checkbox" id="all"></th>
                        <th width="110">Mã tòa nhà</th>
                        <th width="150">Tên tòa nhà</th>
                        <th width="100" class="text-center">Số tầng</th>
                        <th width="500">Địa chỉ</th>
                        <th width="110">Hoạt động</th>
                        <th width="120">Tính năng</th>
                      </tr>
                    </thead>
                  <tbody id="tbhtml">
                    <?php 
                      $sql = "SELECT tb_toanha.*, COUNT(tb_canho_phong.id_canho_phong) AS so_luong_phong
                      FROM tb_toanha
                      LEFT JOIN tb_canho_phong ON tb_toanha.id_toanha = tb_canho_phong.id_toanha
                      GROUP BY tb_toanha.id_toanha;";
                        $query = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($query) > 0){
                        while ($row = mysqli_fetch_array($query)) {
                      ?>
                      <tr id="row_<?php echo $row['id_toanha']; ?>">
                        <td width="10"><input type="checkbox" name="check1" value="1"></td>
                        <td class="ma_toanha"><?php echo $row['ma_toanha']; ?></td>
                        <td class="ten_toanha"><?php echo $row['ten_toanha']; ?></td>
                        <td class="text-center so_tang" ><?php echo $row['so_tang']; ?></td>
                        <td class="diachi_chitiet">
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
                        <td class="trangthai_toanha">
                          <?php 
                          if($row['trangthai_toanha'] == 1){
                            echo '<span class="badge bg-success" style="font-size: 13px;"><b class="span_pending">Hoạt động</b></span>';
                          }else if($row['trangthai_toanha'] == 0){
                            echo '<span class="badge bg-danger" style="font-size: 13px;"><b class="span_pending">Không hoạt động</b></span>';
                          }
                          ?>
                        </td>
                        <td class="table-td-center">
                          <button class="btn btn-primary btn-sm trash" type="button" title="Xóa" id="btn-delete" data-id="<?php echo $row['id_toanha']  ?>"><i class="fas fa-trash-alt"></i>
                          </button>
                          <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="btn-edit"
                            data-toggle="modal" data-target="#ModalUP" data-id="<?php echo $row['id_toanha']?>"><i class="fas fa-edit"></i>
                          </button>
                        </td>
                      </tr>

                      <?php 
                      } 
                    }else{
                        echo '<td valign="top" colspan="10" class="dataTables_empty" style="text-align: center;">Không tìm thấy kết quả</td>';
                    }
                      ?>
                  </tbody>
                </table>
              </div>
              <div class="modal fade bd-example-modal-lg" id="modal-default2">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Dự án/Tòa nhà</h4>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="" id="idtoanha">

                              <div class="modal-body">
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
                                                <input id="newtentoanha" type="text" placeholder="CH-01" class="form-control" name="newtentoanha" value="" required>
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
                                                    <select aria-autocomplete="list" aria-labelledby="vs33__combobox" aria-controls="vs33__listbox" autocomplete="off" class="vs__search" id="Province2" name="Province2" data-province="">
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
                                                    <select aria-autocomplete="list" aria-labelledby="vs34__combobox" aria-controls="vs34__listbox" type="search" autocomplete="off" class="vs__search" id="District2" name="District2" data-district="" disabled>
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
                                                    <select aria-autocomplete="list" aria-labelledby="vs35__combobox" aria-controls="vs35__listbox" type="search" autocomplete="off" class="vs__search" id="Ward2" name="Ward2" data-ward="" disabled>
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
                                                <input id="newdiachichitiet" type="text" placeholder="91 Nguyễn Chí Thanh" class="form-control" name="newdiachichitiet" value="" required>
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
                                                <input id="newsotang" type="text" placeholder="10" class="form-control" name="newsotang" value="" required>
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
                                            <input type="checkbox" name="newtrangthai" class="checkbox-switch" value="" id="newtrangthai">                     
                                              <label class="custom-control-label" for="newtrangthai"> Hoạt động </label>
                                            </div>
                                            
                                          </div>
                                        </fieldset>
                                      </div>
                                    </div>
                    
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary btnClose" data-dismiss="modal">Hủy</button>
                                  <button type="button" class="btn btn-primary btnSave" data-dismiss="modal">Lưu</button>
                              </div>
                            </form>
                          </div>
                        </div>
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
            initializeDropdowns("Province1", "District1", "Ward1", "Province1Search", "District1Search", "Ward1Search");
        });
        $('body').on('click', '#btnAdd', function () {  
            var formData = new FormData();
            formData.append('tentoanha', $('#tentoanha').val());
            formData.append('diachi', $('#diachichitiet').val());
            formData.append('trangthai', $('#trangthai').val());
            formData.append('sotang', $('#sotang').val());
            formData.append('tinhthanh', $('#Province1').val());
            formData.append('quanhuyen', $('#District1').val());
            formData.append("phuongxa", $('#Ward1').val());   
            
            $.ajax({
                url: "doc/main/commons/them_toanha.php",
                type: "post",
                dataType: "json",
                processData: false,
                contentType: false,
                data: formData,
                success: function (response) {
                    if (response.success) {  
                        var classStatus;
                        var ClassDanger = "bg-danger"
                        if(response.iDtrangthai == 1){
                          classStatus = "bg-success"
                        }else{
                          classStatus = "bg-danger"
                        }
                        var str = "";
                        str += `<tr id="row_${response.id}">
                        <td width="10"><input type="checkbox" name="check1" value="1"></td>
                        <td class="ma_toanha">${response.matToaNha}</td>
                        <td class="ten_toanha">${response.ten_toanha}</td>
                        <td class="text-center so_tang" >${response.sotang}</td>
                        <td class="diachi_chitiet">${response.diachi}</td>
                        <td class="trangthai_toanha">
                        <span class="badge ${classStatus}" style="font-size: 13px;"><b class="span_pending">${response.trangthai}</b></span>
                        </td>
                        <td class="table-td-center">
                          <button class="btn btn-primary btn-sm trash" type="button" title="Xóa" id="btn-delete" 
                              data-id="${response.id}"><i class="fas fa-trash-alt"></i>
                          </button>
                          <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="btn-edit"
                            data-toggle="modal" data-target="#ModalUP" data-id="${response.id}"><i class="fas fa-edit"></i>
                          </button>
                        </td>
                      </tr>`;                 
                      $('#tbhtml').append(str);
                        swal({
                          title: "Thông báo",
                          text: response.message,
                          icon: "success",
                          close: true,
                          button: "Đóng",
                        });
                        
                        $('#modal-default').modal('hide');    

                        $('#tentoanha').val('');
                        $('#diachichitiet').val('');
                        $('#sotang').val('');
                        $('#trangthai').prop('checked', false);  

                    } else {
                      swal({
                          title: "Lỗi",
                          text: response.message,
                          icon: "error",
                          close: true,
                          button: "Thử lại",
                        });                    }
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                    alert("Ajax request failed!");
                }
            });

        });
        $('body').on('click', '.btnClose', function () {
            $('#modal-default').modal('hide');        
        });
        $('body').on('click', '#btn-edit', function () { 
            var id = $(this).data("id");
            $('#modal-default2').modal('show');
            var ProvinceValue = $('#Province2').data("province");
            var DistrictValue = $('#District2').data("district");
            var WardValue = $('#Ward2').data("ward");
            $.ajax({
                url: "doc/main/commons/lay_toanha.php", 
                type: "post",
                dataType: "html",          
                data: { idtoanha: id },
              }).done(function(toanha){
                var decodedData = JSON.parse(decodeURIComponent(toanha));
                $('#idtoanha').val(id)
                $('#newtentoanha').val(decodedData.ten_toanha)
                $('#newdiachichitiet').val(decodedData.diachi_chitiet)
                $('#newsotang').val(decodedData.so_tang)
                if (decodedData.trangthai_toanha == 1) {
                    $('#newtrangthai').prop('checked', true);
                } else {
                    $('#newtrangthai').prop('checked', false);
                }

                initializeDropdowns("Province2", "District2", "Ward2", decodedData.tinhthanh, decodedData.quanhuyen, decodedData.phuongxa);

            });

        });
        $('body').on('click', '.btnSave', function () {
            var formData = new FormData();

            formData.append('id', $('#idtoanha').val());
            formData.append('tentoanha', $('#newtentoanha').val());
            formData.append('diachi', $('#newdiachichitiet').val());
            formData.append('trangthai', $('#newtrangthai').val());
            formData.append('so_tang', $('#newsotang').val());
            formData.append('tinhthanh', $('#Province2').val());
            formData.append('quanhuyen', $('#District2').val());
            formData.append("phuongxa", $('#Ward2').val());

            $.ajax({
                url: "doc/main/commons/sua_toanha.php",
                type: "post",
                dataType: "json",
                processData: false,
                contentType: false,
                data: formData,
                success: function (response) {
                    if (response.success) {              
                        var row = $('#row_' + response.id);
                        row.find('.ten_toanha').text(response.ten_toanha);
                        row.find('.so_tang').text(response.so_tang);
                        row.find('.diachi_chitiet').text(response.diachi);
                        row.find('.trangthai_toanha span').html(response.trangthai);

                        if(response.iDtrangthai == 1){
                          row.find('.trangthai_toanha span').removeClass('badge bg-danger')
                          row.find('.trangthai_toanha span').addClass('badge bg-success')

                        }else if((response.iDtrangthai == 0)){
                          row.find('.trangthai_toanha span').removeClass('badge bg-success')
                          row.find('.trangthai_toanha span').addClass('badge bg-danger')
                        }
                        swal({
                          title: "Thông báo",
                          text: response.message,
                          icon: "success",
                          close: true,
                          button: "Đóng",
                        });
                        
                        $('#modal-default2').modal('hide');


                        
                    } else {
                      swal({
                          title: "Lỗi",
                          text: response.message,
                          icon: "error",
                          close: true,
                          button: "Thử lại",
                        });                    }
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                    alert("Ajax request failed!");
                }
            });
        });
        $('body').on('click', '.btnClose', function () {
            $('#modal-default2').modal('hide');
        });
        $('body').on('click', '#btn-delete', function () {
            let text = "Bạn có chắc muốn xóa.";
            var $idtoanha = $(this).data("id");
            if (confirm(text) == true) {
              $.ajax({
                url: "doc/main/commons/xoa_toanha.php", 
                type: "post",
                dataType: "json",          
                data: { idtoanha: $idtoanha },
                success: function (response) {
                    if (response.success) {              
                        var row = $('#row_' + response.id);
                        row.remove();
                        swal({
                          title: "Thông báo",
                          text: response.message,
                          icon: "success",
                          close: true,
                          button: "Đóng",
                        });
                        
                    } else {
                      swal({
                          title: "Lỗi",
                          text: response.message,
                          icon: "error",
                          close: true,
                          button: "Thử lại",
                        });                    }
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                    alert("Ajax request failed!");
                }
              })
            } 
        });
        $('.checkbox-switch').change(function () {
                                        if ($(this).is(':checked')) {
                                            $('.checkbox-switch').val("1");
                                        } else {
                                            $('.checkbox-switch').val("0");
                                        }                                       
                                    });
    });
</script>
