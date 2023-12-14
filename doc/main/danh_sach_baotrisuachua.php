<?php 

   include_once './function.php';

  $sqlcount0 = "SELECT COUNT(*) FROM tb_baotri_suachua WHERE tb_baotri_suachua.trang_thai = 0;";
  $sqlcount1 = "SELECT COUNT(*) FROM tb_baotri_suachua WHERE tb_baotri_suachua.trang_thai = 1;";
  $sqlcount2 = "SELECT COUNT(*) FROM tb_baotri_suachua WHERE tb_baotri_suachua.trang_thai = 2;";
  $sqlcount3 = "SELECT COUNT(*) FROM tb_baotri_suachua WHERE tb_baotri_suachua.trang_thai = 3;";
  $sqlcount4 = "SELECT COUNT(*) FROM tb_baotri_suachua WHERE tb_baotri_suachua.trang_thai = 4;";
  $sqlcount5 = "SELECT COUNT(*) FROM tb_baotri_suachua WHERE tb_baotri_suachua.trang_thai = 5;";

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
                                <h4 class="modal-title">Bảo trì/Sửa chữa</h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="txtOrderId" value="0" />
                                <form class="formaddbaotrisuachua">
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div>
                                          <fieldset class="form-group" id="__BVID__747">
                                            <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__747__BV_label_"> Tòa nhà
                                              <!---->
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
                                          </fieldset>
                                          <!---->
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div>
                                          <fieldset class="form-group" id="__BVID__753">
                                            <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__753__BV_label_"> Phòng
                                              <!---->
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
                                          </fieldset>
                                          <!---->
                                        </div>
                                      </div>
                                      <!---->
                                    </div>
                                    <span>
                                      <fieldset class="form-group" id="__BVID__759">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__759__BV_label_">Tiêu đề</legend>
                                        <div>
                                          <input id="task-title" type="text" placeholder="Sửa sự cố internet" class="form-control">
                                          <div class="invalid-feedback"></div>
                                          <!---->
                                          <!---->
                                          <!---->
                                        </div>
                                      </fieldset>
                                    </span>
                                    <span>
                                      <fieldset class="form-group" id="__BVID__762">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__762__BV_label_">Mô tả</legend>
                                        <div>
                                          <textarea rows="3" wrap="soft" class="form-control" id="__BVID__763"></textarea>
                                          <div class="invalid-feedback"></div>
                                          <!---->
                                          <!---->
                                          <!---->
                                        </div>
                                      </fieldset>
                                    </span>
                                    <div class="row">
                                      <div class="col-4">
                                        <div>
                                          <fieldset class="form-group" id="__BVID__765">
                                            <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__765__BV_label_"> Loại công việc
                                              <!---->
                                            </legend>
                                            <div class="wrapper phongOption1">
                                                <div class="select-btn">
                                                <span>Loại công việc</span>
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
                                          </fieldset>
                                          <!---->
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <fieldset class="form-group" value="[object Object]" id="__BVID__773">
                                          <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__773__BV_label_"> Mức độ ưu tiên
                                            <!---->
                                          </legend>
                                          <div class="wrapper phongOption1">
                                                <div class="select-btn">
                                                <span>Mức độ ưu tiên</span>
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
                                        </fieldset>
                                      </div>
                                      <div class="col-4">
                                        <fieldset class="form-group" value="15-12-2023 14:07" id="__BVID__779">
                                          <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__779__BV_label_"> Hạn hoàn thành
                                            <!---->
                                          </legend>
                                          <div>
                                            <input type="text" data-input="true" id="date1" class="form-control flatpickr-input" readonly="readonly" placeholder="2023-11-12">
                                            <small class="text-danger"></small>
                                            <!---->
                                            <!---->
                                            <!---->
                                          </div>
                                        </fieldset>
                                      </div>
                                      <div class="col"></div>
                                    </div>
                                    <div class="row">
                                      <div class="col-12">
                                        <fieldset class="form-group" value="" id="__BVID__782">
                                          <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__782__BV_label_"> Người thực hiện
                                            <!---->
                                          </legend>
                                          <div class="wrapper phongOption1">
                                                <div class="select-btn">
                                                <span>Chọn người thực hiện</span>
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
                                        </fieldset>
                                      </div>
                                    </div>
                                    <div class="row"></div>

                                    <div class="d-flex justify-space-between font-small-4 font-weight-bolder text-uppercase text-primary pb-1"> Đính kèm </div>
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
            <div data-v-38625d2e="" class="row">
              <div data-v-38625d2e="" class="col">
              <fieldset class="form-group" id="__BVID__428">
                                <!---->
                                <div class="table_search">
                                  <div class="wrapper toannhaOptionselect">
                                                    <div class="select-btn">
                                                      <span>Trạng thái</span>
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
              <div data-v-38625d2e="" class="col">
                <div data-v-38625d2e="">
                <fieldset class="form-group" id="__BVID__428">
                                <!---->
                                <div class="table_search">
                                  <div class="wrapper toannhaOptionselect">
                                                    <div class="select-btn">
                                                      <span>Loại công việc</span>
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
                <div data-v-38625d2e="" class="col">
                  <div data-v-38625d2e="">
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
  <div data-v-38625d2e="" class="col">
    <div data-v-38625d2e="">
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
      <!---->
    </div>
  </div>
</div>
<div data-v-38625d2e="" class="row">

  <div data-v-38625d2e="" class="col">
    <fieldset data-v-38625d2e="" class="form-group" id="__BVID__1011">
      <!---->
      <div>
        <input type="text" data-input="true" id="startDate" placeholder="Ngày bắt đầu" class="form-control flatpickr-input">
        <small class="text-danger"></small>
        <!---->
        <!---->
        <!---->
      </div>
    </fieldset>
  </div>
  <div data-v-38625d2e="" class="col">
    <fieldset data-v-38625d2e="" class="form-group" id="__BVID__1014">
      <!---->
      <div>
        <input type="text" data-input="true" id="overdate" placeholder="Ngày kết thúc" class="form-control flatpickr-input">
        <small class="text-danger"></small>
        <!---->
        <!---->
        <!---->
      </div>
    </fieldset>
  </div>
  <div data-v-38625d2e="" class="col">
    <input data-v-38625d2e="" type="text" placeholder="Tìm kiếm" class="form-control" id="__BVID__1016">
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
                    $sql = "SELECT tb_baotri_suachua.*, tb_toanha.ten_toanha, tb_taikhoan.ten_hien_thi, tb_canho_phong.ten_canho_phong 
                    FROM tb_baotri_suachua
                    JOIN tb_toanha ON tb_toanha.id_toanha = tb_baotri_suachua.id_toanha 
                    JOIN tb_taikhoan ON tb_taikhoan.id_taikhoan = tb_baotri_suachua.id_taikhoan
                    JOIN tb_canho_phong ON tb_canho_phong.id_canho_phong = tb_baotri_suachua.id_phong";
                      $query = mysqli_query($conn, $sql);
                      if(mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_array($query)) {
                    ?>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td><?php echo $row['ma_baotri_suachua']; ?></td>
                  <td><?php echo $row['mota_baotri_suachua']; ?></td>
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
              showImages(files);
            }

     $('body').on('click', '.btn-add', function () {       
          let form = $('#formaddbaotrisuachua')
          form.trigger('reset');
          files = []; 
          showImages(files);
          $('#modal-default').modal('show');
      });
</script>