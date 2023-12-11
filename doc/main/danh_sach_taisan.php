<?php 
   include_once './function.php';

   $sqlcount = "SELECT * FROM tb_taisan;";
   $sqlcountToanha= "SELECT tb_toanha.id_toanha, COUNT(tb_taisan.id_taisan) AS taisan_toanha
   FROM tb_toanha
   INNER JOIN tb_taisan ON tb_toanha.id_toanha = tb_taisan.id_toanha
   GROUP BY tb_toanha.id_toanha;";
   $sqlcountKho = "SELECT tb_kho.id_kho, COUNT(tb_taisan.id_taisan) AS taisan_kho
   FROM tb_kho
   INNER JOIN tb_taisan ON tb_kho.id_kho = tb_taisan.id_kho
   GROUP BY tb_kho.id_kho;";
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
          <h2 class="mb-25 font-weight-bolder text-secondary"> <?php echo $countcountKho['taisan_kho'] ?> </h2>
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
          <h2 class="mb-25 font-weight-bolder text-secondary"> <?php echo $countcountToanha['taisan_toanha'] ?> </h2>
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
              <div class="col-sm-2">

                <a class="btn btn-add btn-sm" href="#" title="Thêm"><i class="fas fa-plus"></i>
                  Thêm tài sản</a>
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
                                <form class="" id="formaddtaisan">
                                <div class="row">
                                    <div class="col-md-4">
                                    <span>
                                        <fieldset class="form-group" id="__BVID__656">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__656__BV_label_"> Tên <span class="text-danger"> (*) </span>
                                        </legend>
                                        <div>
                                            <input id="name" placeholder="Tủ lạnh" type="text" class="form-control">
                                            <div class="invalid-feedback"></div>
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
                                        <input id="brand" placeholder="Panasonic" type="text" class="form-control">
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
                                        <input id="color" placeholder="Đen" type="text" class="form-control">
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
                                        <input id="model" placeholder="2019" type="text" class="form-control">
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
                                        <input id="madeIn" placeholder="Việt nam" type="text" class="form-control">
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
                                        <input type="text" placeholder="9,000,000" value="" id="" class="form-control">
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
                                            <input type="text" placeholder="13" id="" class="form-control">
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
                                        <input id="status" placeholder="Mới" type="text" class="form-control">
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
                                        <input type="text" placeholder="11/12/2025" data-input="true" id="" class="form-control flatpickr-input">
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
                                            <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__605__BV_label_"> Tòa nhà <span class="text-danger"> (*) </span>
                                            </legend>
                                            <div class="wrapper toannhaOption">
                                                <div class="select-btn">
                                                <span>Chọn nhà cung cấp</span>
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
                                            <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__605__BV_label_"> Tòa nhà <span class="text-danger"> (*) </span>
                                            </legend>
                                            <div class="wrapper toannhaOption">
                                                <div class="select-btn">
                                                <span>Loại tài sản</span>
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
                                            <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__605__BV_label_"> Tòa nhà <span class="text-danger"> (*) </span>
                                            </legend>
                                            <div class="wrapper toannhaOption">
                                                <div class="select-btn">
                                                <span>Chọn kho</span>
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
                                            <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__605__BV_label_"> Tòa nhà <span class="text-danger"> (*) </span>
                                            </legend>
                                            <div class="wrapper toannhaOption">
                                                <div class="select-btn">
                                                <span>Chọn Tòa nhà</span>
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
                                            <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__605__BV_label_"> Tầng <span class="text-danger"> (*) </span>
                                            </legend>
                                            <div class="wrapper toannhaOption">
                                                <div class="select-btn">
                                                <span>Chọn Tầng</span>
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
                                            <small class="text-danger"></small>

                                            </fieldset>
                                        <!---->
                                        </div>
                                    </span>
                                    </div>
                                    <div class="col-md-4">
                                    <fieldset class="form-group" id="__BVID__726">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__726__BV_label_">Vị trí</legend>
                                        <div>
                                        <input id="location" type="text" placeholder="Phòng khách" class="form-control">
                                        <!---->
                                        <!---->
                                        <!---->
                                        </div>
                                    </fieldset>
                                    </div>
                                </div>
                                <div class="row"></div>
                                <fieldset class="form-group" id="__BVID__728">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__728__BV_label_">Ghi chú</legend>
                                    <div>
                                    <textarea id="note" placeholder="Ghi chú" rows="3" wrap="soft" class="form-control"></textarea>
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
                                <button type="button" class="btn btn-secondary" id="btnClose" data-dismiss="modal">Hủy</button>
                                <button type="button" class="btn btn-primary" id="btnSave">Lưu</button>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            <div data-v-0fee43d8="" class="row">
              <div data-v-0fee43d8="" class="col-md-4">
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
              <div data-v-0fee43d8="" class="col-md-4">
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
              <div data-v-0fee43d8="" class="col-md-4">
                <div data-v-0fee43d8="">
                  <fieldset class="form-group" id="__BVID__428">
                    <!---->
                    <div class="table_search">
                      <div class="wrapper toannhaOptionselect">
                                        <div class="select-btn">
                                          <span>Loại tài sản</span>
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
            </div>
            <div data-v-0fee43d8="" class="row">
              <div data-v-0fee43d8="" class="col-md-4">
                <div data-v-0fee43d8="">
                <fieldset class="form-group" id="__BVID__428">
                    <!---->
                    <div class="table_search">
                      <div class="wrapper toannhaOptionselect">
                                        <div class="select-btn">
                                          <span>Nhà cung cấp</span>
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
              <div data-v-0fee43d8="" class="col-md-4">
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
              <div data-v-0fee43d8="" class="col-md-4">
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
                  <th width="100">Tính năng</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                      $sql = "SELECT tb_taisan.*, tb_toanha.ten_toanha, tb_kho.ten_kho, tb_canho_phong.ten_canho_phong
                      FROM tb_taisan
                      LEFT JOIN tb_toanha ON tb_toanha.id_toanha = tb_taisan.id_toanha
                      LEFT JOIN tb_kho ON tb_kho.id_kho = tb_taisan.id_kho
                      LEFT JOIN tb_canho_phong ON tb_canho_phong.id_canho_phong = tb_taisan.id_canho_phong;";
                      $query = mysqli_query($conn, $sql);
                      if(mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_array($query)) {
                    ?>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td><?php echo $row['ma_taisan']; ?></td>
                  <td><?php echo $row['ten_taisan']; ?></td>
                  <td><?php if($row['ten_kho'] != null){echo $row['ten_kho']; }?></td>
                  <td><?php if($row['ten_toanha'] != null){echo $row['ten_toanha']; }?></td>
                  <td><?php echo $row['tinh_trang']; ?></td>
                  <td><?php echo convertToVietnameseCurrency($row['gia_tri']);?>đ</td>
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
              showImages();
            }

     $('body').on('click', '.btn-add', function () {       
          let form = $('#formaddtaisan')
          form.trigger('reset');
          let files = []; 
          showImages(files);
          $('#modal-default').modal('show');
      });
</script>