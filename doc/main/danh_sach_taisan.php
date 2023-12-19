<?php 
   include_once './function.php';

   $sqlcount = "SELECT * FROM tb_taisan;";
   $sqlcountToanha= "SELECT * FROM tb_taisan 
   JOIN tb_toanha ON tb_taisan.id_toanha = tb_toanha.id_toanha";
   $sqlcountKho = "SELECT * FROM tb_taisan 
   JOIN tb_kho ON tb_taisan.id_kho = tb_kho.id_kho";
   $sqlcountNot = "SELECT tb_taisan.*
   FROM tb_taisan
   LEFT JOIN tb_kho ON tb_taisan.id_kho = tb_kho.id_kho
   LEFT JOIN tb_toanha ON tb_taisan.id_toanha = tb_toanha.id_toanha
   WHERE tb_kho.id_kho IS NULL AND tb_toanha.id_toanha IS NULL;";

   $querycount = mysqli_query($conn, $sqlcount);
   $sum  = 0;
   while ($row = mysqli_fetch_array($querycount)) {
      $sum += $row['gia_tri'];
   }
   $querycountToanha = mysqli_query($conn, $sqlcountToanha);
   $querycountKho = mysqli_query($conn, $sqlcountKho);
   $querycountNot = mysqli_query($conn, $sqlcountNot);

  $count = mysqli_fetch_array($querycount);
  $countcountToanha = mysqli_fetch_array($querycountToanha);
  $countcountKho = mysqli_fetch_array($querycountKho);
?>

<main class="app-content">
<div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách tài sản</a></li>
      </ul>
      <div id="clock"></div>
    </div>
<div data-v-50e773d1="" class="row match-height">
  <div data-v-50e773d1="" class="col">
    <div data-v-50e773d1="" class="card">
      <!---->
      <!---->
      <div class="card-body d-flex justify-content-between align-items-center">
        <!---->
        <!---->
        <div class="truncate">
          <h2 class="mb-25 font-weight-bolder text-secondary"> <?php echo mysqli_num_rows($querycount)?> </h2>
          <span class="text-secondary">Tất cả</span>
        </div>
        <span class="b-avatar badge-light-secondary rounded-circle" style="width: 45px; height: 45px;">
          <span class="b-avatar-custom">
            <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool">
              <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
              <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
              <path d="M2 2l7.586 7.586"></path>
              <circle cx="11" cy="11" r="2"></circle>
            </svg>
          </span>
          <!---->
        </span>
      </div>
      <!---->
      <!---->
    </div>
  </div>
  <div data-v-50e773d1="" class="col">
    <div data-v-50e773d1="" class="card">
      <!---->
      <!---->
      <div class="card-body d-flex justify-content-between align-items-center">
        <!---->
        <!---->
        <div class="truncate">
          <h2 class="mb-25 font-weight-bolder text-secondary"> <?php echo mysqli_num_rows($querycountKho)?> </h2>
          <span class="text-secondary">Trong kho</span>
        </div>
        <span class="b-avatar badge-light-secondary rounded-circle" style="width: 45px; height: 45px;">
          <span class="b-avatar-custom">
            <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool">
              <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
              <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
              <path d="M2 2l7.586 7.586"></path>
              <circle cx="11" cy="11" r="2"></circle>
            </svg>
          </span>
          <!---->
        </span>
      </div>
      <!---->
      <!---->
    </div>
  </div>
  <div data-v-50e773d1="" class="col">
    <div data-v-50e773d1="" class="card">
      <!---->
      <!---->
      <div class="card-body d-flex justify-content-between align-items-center">
        <!---->
        <!---->
        <div class="truncate">
          <h2 class="mb-25 font-weight-bolder text-secondary"> <?php echo mysqli_num_rows($querycountToanha)?> </h2>
          <span class="text-secondary">Trong tòa nhà</span>
        </div>
        <span class="b-avatar badge-light-secondary rounded-circle" style="width: 45px; height: 45px;">
          <span class="b-avatar-custom">
            <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool">
              <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
              <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
              <path d="M2 2l7.586 7.586"></path>
              <circle cx="11" cy="11" r="2"></circle>
            </svg>
          </span>
          <!---->
        </span>
      </div>
      <!---->
      <!---->
    </div>
  </div>
  <div data-v-50e773d1="" class="col">
    <div data-v-50e773d1="" class="card">
      <!---->
      <!---->
      <div class="card-body d-flex justify-content-between align-items-center">
        <!---->
        <!---->
        <div class="truncate">
          <h2 class="mb-25 font-weight-bolder text-secondary"> <?php echo mysqli_num_rows($querycountNot)?> </h2>
          <span class="text-secondary">Chưa xác định</span>
        </div>
        <span class="b-avatar badge-light-secondary rounded-circle" style="width: 45px; height: 45px;">
          <span class="b-avatar-custom">
            <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool">
              <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
              <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
              <path d="M2 2l7.586 7.586"></path>
              <circle cx="11" cy="11" r="2"></circle>
            </svg>
          </span>
          <!---->
        </span>
      </div>
      <!---->
      <!---->
    </div>
  </div>
  <div data-v-50e773d1="" class="col">
    <div data-v-50e773d1="" class="card">
      <!---->
      <!---->
      <div class="card-body d-flex justify-content-between align-items-center">
        <!---->
        <!---->
        <div class="truncate">
          <h2 class="mb-25 font-weight-bolder text-secondary"> <?php echo convertToVietnameseCurrency($sum);?>đ</h2>
          <span class="text-secondary">Giá trị tài sản</span>
        </div>
        <span class="b-avatar badge-light-secondary rounded-circle" style="width: 45px; height: 45px;">
          <span class="b-avatar-custom">
            <svg xmlns="http://www.w3.org/2000/svg" width="21px" height="21px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool">
              <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
              <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
              <path d="M2 2l7.586 7.586"></path>
              <circle cx="11" cy="11" r="2"></circle>
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
            <h4 data-v-38625d2e="" class="card-title">Tài sản</h4>

            <div class="card_body">
            <div class="col-sm-2">       
                <a class="btn btn-add btn-sm" href="#" title="Thêm"><i class="fas fa-plus"></i></a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i
                      class="fas fa-file-upload"></i></a>
                </div>

                <div class="col-sm-2">
                  <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i></a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                      class="fas fa-trash-alt"></i></a>
                </div>
              <div class="modal fade bd-example-modal-lg" id="modal-default">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Tài sản</h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="txtOrderId" value="0" />
                                <form class="formaddtaisan">
                                <div class="row">
                                    <div class="col-md-4">
                                    <span>
                                        <fieldset class="form-group" id="__BVID__656">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__656__BV_label_"> Tên tài sản <span class="text-danger"> (*) </span>
                                        </legend>
                                        <div>
                                            <input id="tentaisan1" placeholder="Tủ lạnh" type="text" class="form-control" required>
                                            <div class="invalid-feedback"></div>
                                            <small class="text-danger"></small>

                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        </fieldset>
                                    </span>
                                    </div>
                                    <div class="col-md-4">
                                    <fieldset class="form-group" id="__BVID__658">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__658__BV_label_">Thương hiệu</legend>
                                        <div>
                                        <input id="thuonghieu1" placeholder="Panasonic" type="text" class="form-control">
                                        <!---->
                                        <!---->
                                        <!---->
                                        </div>
                                    </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                    <fieldset class="form-group" id="__BVID__660">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__660__BV_label_">Màu sắc</legend>
                                        <div>
                                        <input id="mausac1" placeholder="Đen" type="text" class="form-control">
                                        <!---->
                                        <!---->
                                        <!---->
                                        </div>
                                    </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    <fieldset class="form-group" id="__BVID__662">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__662__BV_label_">Model/Năm sản xuất</legend>
                                        <div>
                                        <input id="namsanxuat1" placeholder="2019" type="text" class="form-control">
                                        <!---->
                                        <!---->
                                        <!---->
                                        </div>
                                    </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                    <fieldset class="form-group" id="__BVID__664">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__664__BV_label_">Xuất xứ</legend>
                                        <div>
                                        <input id="xuatxu1" placeholder="Việt nam" type="text" class="form-control">
                                        <!---->
                                        <!---->
                                        <!---->
                                        </div>
                                    </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                    <fieldset class="form-group" value="0" id="__BVID__667">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__667__BV_label_"> Giá trị
                                        <!---->
                                        </legend>
                                        <div>
                                        <input type="text" placeholder="9,000,000" value="" id="giatri1" class="form-control">
                                        <small class="text-danger"></small>
                                        <!---->
                                        <!---->
                                        <!---->
                                        </div>
                                    </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    <span>
                                        <fieldset class="form-group is-valid" value="0" id="__BVID__671">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__671__BV_label_"> Số lượng <span class="text-danger"> (*) </span>
                                        </legend>
                                        <div>
                                            <input type="text" placeholder="13" id="soluong1" class="form-control" required>
                                            <small class="text-danger"></small>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        </fieldset>
                                    </span>
                                    </div>
                                    <div class="col-md-4">
                                    <fieldset class="form-group" id="__BVID__673">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__673__BV_label_">Tình trạng</legend>
                                        <div>
                                        <input id="tinhtrang1" placeholder="Mới" type="text" class="form-control">
                                        <!---->
                                        <!---->
                                        <!---->
                                        </div>
                                    </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                    <fieldset class="form-group" value="2025-11-07T13:46:29.484Z" id="__BVID__676">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__676__BV_label_"> Thời hạn bảo hành
                                        <!---->
                                        </legend>
                                        <div>
                                        <input type="text" placeholder="2025-11-12" data-input="true" id="date3" class="form-control flatpickr-input">
                                        <small class="text-danger"></small>
                                        <!---->
                                        <!---->
                                        <!---->
                                        </div>
                                    </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                      <span>
                                        <div>
                                        <fieldset class="form-group" id="__BVID__605">
                                            <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__605__BV_label_"> Tòa nhà </span>
                                            </legend>
                                            <div class="wrapper toannhaOption1">
                                                <div class="select-btn">
                                                <span>Chọn tòa nhà</span>
                                                <input type="hidden" id="toannhaInput1">
                                                <i class="fas fa-angle-down"></i>
                                                </div>
                                                <div class="search-option">
                                                <div class="search">
                                                    <input type="text" placeholder="Search" id="toannhaSearch1">
                                                </div>
                                                <ul class="options" id="toannha1">                              
                                                </ul>
                                                </div>
                                            </div>
                                            <small class="text-danger"></small>

                                            </fieldset>
                                        <!---->
                                        </div>
                                      </span>
                                    </div>
                                    <div class="col-md-4">
                                      <span>
                                        <div>
                                        <fieldset class="form-group" id="__BVID__605">
                                            <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__605__BV_label_"> Tầng </span>
                                            </legend>
                                            <div class="wrapper tangOption1">
                                                <div class="select-btn">
                                                <span>Chọn tầng</span>
                                                <input type="hidden" id="tangInput1">
                                                <i class="fas fa-angle-down"></i>
                                                </div>
                                                <div class="search-option">
                                                <div class="search">
                                                    <input type="text" placeholder="Search" id="tangSearch1">
                                                </div>
                                                <ul class="options" id="tang1">                              
                                                </ul>
                                                </div>
                                            </div>
                                            <small class="text-danger"></small>

                                            </fieldset>
                                        <!---->
                                        </div>
                                      </span>
                                    </div>  
                                    <div class="col-md-4">
                                      <span>
                                        <div>
                                        <fieldset class="form-group" id="__BVID__605">
                                            <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__605__BV_label_"> Căn hộ/Phòng </span>
                                            </legend>
                                            <div class="wrapper phongOption1">
                                                <div class="select-btn">
                                                <span>Chọn phòng</span>
                                                <input type="hidden" id="phongInput1">
                                                <i class="fas fa-angle-down"></i>
                                                </div>
                                                <div class="search-option">
                                                <div class="search">
                                                    <input type="text" placeholder="Search" id="phongSearch1">
                                                </div>
                                                <ul class="options" id="phong1">                              
                                                </ul>
                                                </div>
                                            </div>
                                            <small class="text-danger"></small>

                                            </fieldset>
                                        <!---->
                                        </div>
                                      </span>
                                    </div>  
                                    <div class="col-md-4">
                                      <span>
                                        <div>
                                        <fieldset class="form-group" id="__BVID__605">
                                            <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__605__BV_label_"> Kho </span>
                                            </legend>
                                            <div class="wrapper khoOption1">
                                                <div class="select-btn">
                                                <span>Chọn kho</span>
                                                <input type="hidden" id="khoInput1">
                                                <i class="fas fa-angle-down"></i>
                                                </div>
                                                <div class="search-option">
                                                <div class="search">
                                                    <input type="text" placeholder="Search" id="khoSearch1">
                                                </div>
                                                <ul class="options" id="kho1">                              
                                                </ul>
                                                </div>
                                            </div>
                                            <small class="text-danger"></small>

                                            </fieldset>
                                        <!---->
                                          </div>
                                      </span>
                                    </div>                                   
                                    <div class="col-md-12">
                                    <span>
                                        <fieldset class="form-group" id="__BVID__1001">
                                          <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__1001__BV_label_"> Vị trí </span>
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
                                              <input id="vitri1" type="text" placeholder="Phòng khách" class="form-control" name="vitri1">
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
                                <div class="row"></div>
                                <fieldset class="form-group" id="__BVID__728">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__728__BV_label_">Ghi chú</legend>
                                    <div>
                                    <textarea id="ghichu1" placeholder="Ghi chú" rows="3" wrap="soft" class="form-control"></textarea>
                                    <!---->
                                    <!---->
                                    <!---->
                                    </div>
                                </fieldset>
                                <div class="d-flex justify-space-between font-small-4 font-weight-bolder text-uppercase text-primary pb-1"> Hình ảnh tài sản </div>
                                  <div data-v-0f357511="">
                                    <!---->
                                    <div data-v-0f357511="" class="row match-height mt-1">
                                      <div data-v-0f357511="" class="col-md-2 col-4">
                                          <div data-v-0f357511="" class="image-container" style="width: 100%; height: 100%;">
                                            <label data-v-0f357511="" for="file-input" style="width: 100%; height: 100%;">
                                                <div data-v-0f357511="" class="empty-img thumbnail">
                                                  <svg data-v-0f357511="" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" for="file-input" variant="primary" class="feather feather-plus">
                                                      <line data-v-0f357511="" x1="12" y1="5" x2="12" y2="19"></line>
                                                      <line data-v-0f357511="" x1="5" y1="12" x2="19" y2="12"></line>
                                                  </svg>
                                                </div>
                                            </label>
                                            <input data-v-0f357511="" id="file-input" type="file" name="file-input" accept="application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation,application/pdf,image/png,image/jpeg,audio/mpeg,video/mp4,video/mpeg" multiple="multiple" class="d-none">
                                          </div>
                                      </div>
                                      <div class="containerImages match-height mt-1">
                                      </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btnClose" data-dismiss="modal">Hủy</button>
                                <button type="button" class="btn btn-success" id="btnAdd" name="btnAdd" data-name="<?= $_SESSION['id_taikhoan']?>">Thêm</button>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            </div>
            <div data-v-0fee43d8="" class="row">
              <div data-v-0fee43d8="" class="col">
                <div data-v-0fee43d8="">
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
              <div data-v-0fee43d8="" class="col">
                <div data-v-0fee43d8="">
                <fieldset class="form-group" id="__BVID__428">
                    <!---->
                    <div class="table_search">
                      <div class="wrapper toannhaOptionselect">
                                        <div class="select-btn">
                                          <span>Phòng</span>
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
                </div>
              </div>
              <div data-v-0fee43d8="" class="col">
                <div data-v-0fee43d8="">
                <fieldset class="form-group" id="__BVID__428">
                    <!---->
                    <div class="table_search">
                      <div class="wrapper toannhaOptionselect">
                                        <div class="select-btn">
                                          <span>Tầng</span>
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
                </div>
              </div>
              <div data-v-0fee43d8="" class="col">
                <div data-v-0fee43d8="">
                  <fieldset class="form-group" id="__BVID__428">
                    <!---->
                    <div class="table_search">
                      <div class="wrapper toannhaOptionselect">
                                        <div class="select-btn">
                                          <span>Kho</span>
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
              <div data-v-0fee43d8="" class="col">
                <input data-v-0fee43d8="" type="text" placeholder="Tìm kiếm" class="form-control" id="__BVID__377">
              </div>
            </div>
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable">
              <thead>
                <tr>
                  <th width="10"><input type="checkbox" id="all"></th>
                  <th>Mã tài sản</th>
                  <th width="150">Tên tài sản</th>
                  <th width="150">Kho</th>
                  <th width="150">Tòa nhà</th>
                  <th>Tình trạng</th>
                  <th>Giá trị</th>
                  <th width="110">Tính năng</th>
                </tr>
              </thead>
              <tbody id="tbhtml">
                  <?php 
                      $sql = "SELECT tb_taisan.*, tb_toanha.ten_toanha, tb_kho.ten_kho, tb_canho_phong.ten_canho_phong, tb_tang.ten_tang
                      FROM tb_taisan
                      LEFT JOIN tb_toanha ON tb_toanha.id_toanha = tb_taisan.id_toanha
                      LEFT JOIN tb_kho ON tb_kho.id_kho = tb_taisan.id_kho
                      LEFT JOIN tb_canho_phong ON tb_canho_phong.id_canho_phong = tb_taisan.id_canho_phong
                      LEFT JOIN tb_tang ON tb_tang.id_tang = tb_taisan.id_tang;";
                      $query = mysqli_query($conn, $sql);
                      if(mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_array($query)) {
                    ?>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td><?php echo $row['ma_taisan']; ?></td>
                  <td><?php echo $row['ten_taisan']; ?></td>
                  <td><?php if($row['ten_kho'] != null){echo $row['ten_kho']; }?></td>
                  <td>
                    <?php if($row['ten_toanha'] != null){echo $row['ten_toanha'];}?>
                    <br>
                    <span class="text-muted ten_toanha"><?php if($row['ten_canho_phong'] != null){echo $row['ten_canho_phong'];}?></span>
                    <br>
                    <span class="text-muted ten_toanha"><?php if($row['ten_tang'] != null){echo "Tầng ".$row['ten_tang'];}?></span>
                  </td>
                  <td><?php echo $row['tinh_trang']; ?></td>
                  <td><?php echo convertToVietnameseCurrency($row['gia_tri']);?>đ</td>
                  <td class="table-td-center">
                    <button class="btn btn-danger btn-sm" type="button" title="Xóa"
                      onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                    </button>
                    <button class="btn btn-warning btn-sm" type="button" title="Sửa" id="show-emp"
                      data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
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
          <div class="footer-table">
              <div class="items-controller">
                <div data-v-38625d2e="" class="d-flex align-items-center mb-0 mt-1">
                    <span data-v-38625d2e="" class="text-nowrap"> Hiển thị tối đa </span>
                    <select data-v-38625d2e="" class="mx-1 custom-select" id="itemperpage">
                      <option value="5">5</option>
                      <option value="10">10</option>
                      <option value="15">15</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                    </select>
                    <span data-v-38625d2e="" class="text-nowrap alldata"></span>
                  </div>
              </div>
              <div class="bottom-field">
                <ul class="pagination">
                  <li class="prev"><a href="#" id="prev">&#139;</a></li>
                  <!-- <li class="list">1</li>
                  <li class="list">2</li>
                  <li class="list">3</li> -->
                  <li class="next"><a href="#" id="next">&#155;</a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
</main>

<script>
    var totalRows = $('tbody tr').length;

  $('.alldata').text('trên tổng số ' + totalRows + ' kết quả');
            let files = []; 
            let container = document.querySelector('.containerImages');
            let input = document.getElementById('file-input');
            input.addEventListener("change", () => {
              let file = input.files;
              for (let i = 0; i < file.length; i++) {
                files.push(file[i]);
              }
              showImages(files);
              input.value = ''; 

            })
            const showImages = (array) =>{
              let images = '';
              array.forEach((e, i) => {
                images += `<div data-v-0f357511="" class="col-md-2 col-4">
                                  <div data-v-1f5e929c="" data-v-0f357511="" class="d-flex flex-column mb-1">
                                        <div data-v-1f5e929c="" class="position-relative image-container mb-2">
                                          <div data-v-1f5e929c="" class="b-overlay-wrap position-relative d-inline-block">
                                    <img data-v-1f5e929c="" src="${URL.createObjectURL(e)}" alt="Image" class="bg-white thumbnail img-fluid w-100 m1" blank="true" style="width: 100% !important; height: 100% !important; min-width: 80px; min-height: 80px;">        
                                    <div data-v-1f5e929c="" class="control-btns" onclick="delImage(${i})">
                                      <button data-v-1f5e929c="" type="button">
                                        <svg data-v-1f5e929c="" xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                          <line data-v-1f5e929c="" x1="18" y1="6" x2="6" y2="18"></line>
                                          <line data-v-1f5e929c="" x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                      </button>
                                    </div>
                                    <!---->
                                  </div>
                                </div>
                                </div>
                              </div>`
                
              });
              container.innerHTML = images;
            }
            const delImage = (index) =>{
              files.splice(index, 1);
              console.log(files);
              showImages(files);
            }
            function validateInput(input) {
            var smallElement = input.closest('.form-group').find('small.text-danger');
            if (!input.val().trim()) {
                input.addClass('is-invalid');
                smallElement.text('Thông tin bắt buộc').show();
            } else {
                input.removeClass('is-invalid');
                smallElement.text('').hide();
            }
        }
        $('.formaddtaisan input[required]').on('blur', function() {
            validateInput($(this));
        });
     $('body').on('click', '.btn-add', function () {       
          let form = $('.formaddtaisan')
          form.trigger('reset');
          files = []; 
          showImages(files);
          initializeDropdownsToanha_Phong_Taisan(".toannhaOption1","toannhaInput1", "toannhaSearch1", "toannha1",
                                                ".tangOption1","tangInput1", "tangSearch1", "tang1",
                                                ".phongOption1","phongInput1", "phongSearch1", "phong1",
                                                ".khoOption1","khoInput1", "khoSearch1", "kho1");
          $('#modal-default').modal('show');
      });
      $('body').on('click', '#btnAdd', function () { 
          let isValid = true;
          $('.formaddtaisan input[required]').each(function() {
            var smallElement = $(this).closest('.form-group').find('small.text-danger');
                  if (!$(this).val().trim()) {
                          $(this).addClass('is-invalid');
                          smallElement.text('Thông tin bắt buộc').show();
                          isValid = false;
                      } else {
                          $(this).removeClass('is-invalid');
                          smallElement.text('').hide();
                      }
          });
            if(isValid){              
              var formData = new FormData();
              let ten_toanha = "";
              let ten_tang = "";
              let ten_phong =  "";
              let ten_kho = "";
              if($('#toannhaInput1').val() !== ""){
                ten_toanha = document.querySelector(".toannhaOption1 .select-btn span").textContent;
              } if($('#tangInput1').val() !== ""){
                ten_tang = document.querySelector(".tangOption1 .select-btn span").textContent;
              } if($('#phongInput1').val() !== ""){
                ten_phong = document.querySelector(".phongOption1 .select-btn span").textContent;
              } if($('#khoInput1').val() !== ""){
                let ten_kho = document.querySelector(".khoOption1 .select-btn span").textContent;
              }
              formData.append('ten_taisan', $('#tentaisan1').val());
              formData.append('id_toanha', $('#toannhaInput1').val());
              formData.append('id_tang', $('#tangInput1').val());
              formData.append('id_phong', $('#phongInput1').val());
              formData.append('id_kho', $('#khoInput1').val());
              formData.append('thuong_hieu', $('#thuonghieu1').val());
              formData.append('mau_sac', $('#mausac1').val());
              formData.append('nam_sanxuat', $('#namsanxuat1').val());
              formData.append("xuat_xu", $('#xuatxu1').val());   
              formData.append("gia_tri", $('#giatri1').val());   
              formData.append("so_luong", $('#soluong1').val());   
              formData.append("tinh_trang", $('#tinhtrang1').val());   
              formData.append("han_baohanh", $('#date3').val());   
              formData.append("ten_toanha", ten_toanha);   
              formData.append("ten_tang", ten_tang);   
              formData.append("ten_phong", ten_phong);
              formData.append("ten_kho", ten_kho);
              formData.append("vi_tri", $('#vitri1').val());
              formData.append("ghi_chu", $('#ghichu1').val());

              for (let i = 0; i < files.length; i++) {
                  formData.append('image[]', files[i]); 
              }
              for (const pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
              }
              $.ajax({
                  url: "doc/main/commons/them_taisan.php",
                  type: "post",
                  dataType: "json",
                  processData: false,
                  contentType: false,
                  data: formData,
                  success: function (response) {              
                      if (response.success) { 
                        response.Data.forEach(value => {
                        let gia_tri = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(value.gia_tri).replace(/\./g, ",");
                        var str = "";

                        str += `<tr id="row_${value.id}">
                            <td width="10"><input type="checkbox" name="check1" value="1"></td>
                            <td class="ma_taisan">${value.ma_Taisan}</td>
                            <td class="ten_taisan">${value.ten_taisan}</td>
                            <td class="ten_kho">${value.ten_kho}</td>
                            <td class="ten_toanha">
                                ${value.ten_toanha}
                                <br>
                                <span class="text-muted ten_phong">${value.ten_phong}</span>
                                <br>
                                <span class="text-muted ten_tang">${value.ten_tang}</span>
                            </td>
                            <td class="tinh_trang">${value.tinh_trang}</td>
                            <td class="gia_tri">${gia_tri}</td>
                            <td class="table-td-center">
                                <button class="btn btn-danger btn-sm" type="button" title="Xóa" id="btn-delete" 
                                    data-id="${value.id}"><i class="fas fa-trash-alt"></i>
                                </button>
                                <button class="btn btn-warning btn-sm" type="button" title="Sửa" id="btn-edit"
                                    data-toggle="modal" data-target="#ModalUP" data-id="${value.id}"><i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>`;

                        $('#tbhtml').append(str);
                    });

                          swal({
                            title: "Thông báo",
                            text: response.message,
                            icon: "success",
                            close: true,
                            button: "Đóng",
                          });

                          $('#modal-default').modal('hide');    

                      } else {
                        swal({
                            title: "Lỗi",
                            text: response.message,
                            icon: "error",
                            close: true,
                            button: "Thử lại",
                          });   
                      }
                  },
                  error: function (xhr, status, error) {
                      console.error(xhr.responseText);
                      alert("Ajax request failed!");
                  }
              });
            }

    });
</script>