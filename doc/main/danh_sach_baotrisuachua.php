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
          <h2 class="mb-25 font-weight-bolder text-secondary"> <?php echo $count0['COUNT(*)']?> </h2>
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
          <h2 class="mb-25 font-weight-bolder text-warning"> <?php echo $count1['COUNT(*)'] ?> </h2>
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
          <h2 class="mb-25 font-weight-bolder text-primary"> <?php echo $count2['COUNT(*)']?> </h2>
          <span class="text-primary">Chờ duyệt</span>
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
          <h2 class="mb-25 font-weight-bolder text-success"> <?php echo $count3['COUNT(*)']?>  </h2>
          <span class="text-success">Đã duyệt</span>
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
          <h2 class="mb-25 font-weight-bolder text-info"> <?php echo $count4['COUNT(*)']?>  </h2>
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
          <h2 class="mb-25 font-weight-bolder text-danger"> <?php echo $count5['COUNT(*)']?>  </h2>
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
                                                <input type="hidden" id="toannhaInput1" required>
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
                                                <input type="hidden" id="phongInput1" required>
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
                                      </div>
                                      <!---->
                                    </div>
                                    <span>
                                      <fieldset class="form-group" id="__BVID__759">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__759__BV_label_">Tiêu đề</legend>
                                        <div>
                                          <input id="tieude1" type="text" placeholder="Sửa sự cố internet" class="form-control" required>
                                          <div class="invalid-feedback"></div>
                                          <small class="text-danger"></small>
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
                                          <textarea rows="3" wrap="soft" class="form-control" id="mota1" aria-invalid="true" required></textarea>
                                          <div class="invalid-feedback"></div>
                                          <small class="text-danger"></small>
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
                                            <div>
                                                <input id="loaicongviec1" type="text" placeholder="Sửa chữa" class="form-control">
                                                <div class="invalid-feedback"></div>
                                                <!---->
                                                <!---->
                                                <!---->
                                            </div>
                                            <small class="text-danger"></small>

                                          </fieldset>
                                          <!---->
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <fieldset class="form-group" value="" id="__BVID__773">
                                          <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__773__BV_label_"> Mức độ ưu tiên
                                            <!---->
                                          </legend>
                                          <div class="wrapper levelOption1">
                                                <div class="select-btn">
                                                <span>Mức độ ưu tiên</span>
                                                <input type="hidden" id="levelInput1">
                                                <i class="fas fa-angle-down"></i>
                                                </div>
                                                <div class="search-option">
                                                <div class="search">
                                                    <input type="text" placeholder="Search" id="levelSearch1">
                                                </div>
                                                <ul class="options" id="level1">                              
                                                </ul>
                                                </div>
                                            </div>
                                            <small class="text-danger"></small>

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
                                          <small class="text-danger"></small>

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
                                            <div class="wrapper nguoithuchienOption1">
                                                  <div class="select-btn">
                                                    <span>Chọn người thực hiện</span>   
                                                    <input type="hidden" id="nguoithuchienInput1">
                                                    <i class="fas fa-angle-down"></i>
                                                  </div>
                                                  <div class="search-option">
                                                  <div class="search">
                                                      <input type="text" placeholder="Search" id="nguoithuchienSearch1">
                                                  </div>
                                                  <ul class="options" id="nguoithuchien1">    
                                                  </ul>
                                              </div>
                                            </div>
                                            <small class="text-danger"></small>

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
                                <button type="button" class="btn btn-secondary btnClose" data-dismiss="modal">Hủy</button>
                                <button type="button" class="btn btn-success" id="btnAdd" name="btnAdd">Thêm</button>
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
                        <th width="150">Tính năng</th>
                      </tr>
              </thead>
              <tbody id="tbhtml">
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
                <tr id="row_<?php echo $row['id_baotri_suachua']; ?>">
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td class="mabaotrisuachua"><?php echo $row['ma_baotri_suachua']; ?></td>
                  <td class="tieude">
                    <?php echo $row['tieude_baotri_suachua']; ?>
                    <br>
                    <span class="text-muted mota"><?php echo $row['mota_baotri_suachua']; ?></span>
                    <br>
                    <?php echo $row['mucdo_uutien'] == 1 ? '<span class="badge bg-success uutien">Thấp</span>' : ($row['mucdo_uutien'] == 2 ? '<span class="badge bg-warning uutien">Bình thường</span>' : '<span class="badge bg-danger uutien">Gấp</span>');?>                   
                  </td>
                  <td class="ten_toanha"><?php echo $row['ten_toanha']; ?></td>
                  <td class="ten_phong"><?php echo $row['ten_canho_phong']; ?></td>                 
                  <td class="loaicongivec"><span class="badge bg-warning" style="font-size: 13px;"><b class="span_pending"><?php echo $row['loai_cong_viec']; ?></b></span></td>       
                  <td class="tenhienthi"><?php echo $row['ten_hien_thi']; ?></td>               
                  <td class="ngayketthuc"><?php echo $row['ngay_ketthuc']; ?></td>         
                  <td class="trangthaicongviec">
                  <?php 
                          if($row['trang_thai'] == 3){
                            echo '<span class="badge bg-success" style="font-size: 13px;"><b class="span_pending">Đã duyệt</b></span>';
                          }else if($row['trang_thai'] == 0){
                            echo '<span class="badge bg-secondary" style="font-size: 13px;"><b class="span_pending">Chưa làm</b></span>';
                          }else if($row['trang_thai'] == 2){
                            echo '<span class="badge bg-primary" style="font-size: 13px;"><b class="span_pending">Chờ duyệt</b></span>';
                          }else if($row['trang_thai'] == 1){
                            echo '<span class="badge bg-warning" style="font-size: 13px;"><b class="span_pending">Đang làm</b></span>';
                          }else if($row['trang_thai'] == 4){
                            echo '<span class="badge bg-danger" style="font-size: 13px;"><b class="span_pending">Không đạt</b></span>';
                          }else if($row['trang_thai'] == 5){
                            echo '<span class="badge bg-danger" style="font-size: 13px;"><b class="span_pending">Quá hạn</b></span>';
                          }
                        ?>   
                </td>               
      
                  <td class="table-td-center optionbaotrisuachua">
                    <button class="btn btn-danger btn-sm" type="button" title="Xóa"
                      onclick="myFunction(this)" data-id="<?= $row['id_baotri_suachua'];?>" ><i class="fas fa-trash-alt"></i>
                    </button>
                    <button class="btn btn-warning btn-sm" type="button" title="Sửa" id="btn-edit"
                      data-toggle="modal" data-target="#ModalUP" data-id="<?= $row['id_baotri_suachua'];?>"><i class="fas fa-edit"></i>
                    </button>
                    <?php 
                        if ($row['trang_thai'] != 3 || $row['trang_thai'] != 4) {
                            echo '<button class="btn btn-primary btn-sm" type="button" title="Hoàn thành" id="btn-done" 
                            data-id="' . $row['id_baotri_suachua'] . '" data-status="2"><i class="fas fa-thumbs-up"></i>
                            </button>';
                        }
                        if ($row['trang_thai'] == 0) {
                            echo '<button class="btn btn-secondary btn-sm" type="button" title="Nhận xử lý" 
                            id="btn-addcase" data-id="' . $row['id_baotri_suachua'] . '" data-status="1"><i class="fas fa-briefcase"></i>
                            </button>';
                        }
                    ?>                              
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
        <div class="modal fade bd-example-modal-lg" id="modal-default2">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Bảo trì/Sửa chữa</h4>
                            </div>
                            <div class="modal-body">
                            <input type="hidden" value="" id="idbaotrisuachua">
                                <form class="formeditbaotrisuachua">
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div>
                                          <fieldset class="form-group" id="__BVID__747">
                                            <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__747__BV_label_"> Tòa nhà
                                              <!---->
                                            </legend>
                                            <div class="wrapper toannhaOption2">
                                                <div class="select-btn">
                                                <span>Chọn tòa nhà</span>
                                                <input type="hidden" id="toannhaInput2">
                                                <i class="fas fa-angle-down"></i>
                                                </div>
                                                <div class="search-option">
                                                <div class="search">
                                                    <input type="text" placeholder="Search" id="toannhaSearch2">
                                                </div>
                                                <ul class="options" id="toannha2">                              
                                                </ul>
                                                </div>
                                            </div>
                                            <small class="text-danger"></small>

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
                                            <div class="wrapper phongOption2">
                                                <div class="select-btn">
                                                <span>Chọn phòng</span>
                                                <input type="hidden" id="phongInput2">
                                                <i class="fas fa-angle-down"></i>
                                                </div>
                                                <div class="search-option">
                                                <div class="search">
                                                    <input type="text" placeholder="Search" id="phongSearch2">
                                                </div>
                                                <ul class="options" id="phong2">                              
                                                </ul>
                                                </div>
                                            </div>
                                            <small class="text-danger"></small>

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
                                          <input id="tieude2" type="text" placeholder="Sửa sự cố internet" class="form-control" required>
                                          <div class="invalid-feedback"></div>
                                          <small class="text-danger"></small>
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
                                          <textarea rows="3" wrap="soft" class="form-control" id="mota2" aria-invalid="true" required></textarea>
                                          <div class="invalid-feedback"></div>
                                          <small class="text-danger"></small>
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
                                            <div>
                                                <input id="loaicongviec2" type="text" placeholder="Sửa chữa" class="form-control">
                                                <div class="invalid-feedback"></div>
                                                <!---->
                                                <!---->
                                                <!---->
                                            </div>
                                            <small class="text-danger"></small>

                                          </fieldset>
                                          <!---->
                                        </div>
                                      </div>
                                      <div class="col-4">
                                        <fieldset class="form-group" value="" id="__BVID__773">
                                          <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__773__BV_label_"> Mức độ ưu tiên
                                            <!---->
                                          </legend>
                                          <div class="wrapper levelOption2">
                                                <div class="select-btn">
                                                <span>Mức độ ưu tiên</span>
                                                <input type="hidden" id="levelInput2">
                                                <i class="fas fa-angle-down"></i>
                                                </div>
                                                <div class="search-option">
                                                <div class="search">
                                                    <input type="text" placeholder="Search" id="levelSearch2">
                                                </div>
                                                <ul class="options" id="level2">                              
                                                </ul>
                                                </div>
                                            </div>
                                            <small class="text-danger"></small>

                                        </fieldset>

                                      </div>
                                      <div class="col-4">
                                        <fieldset class="form-group" value="15-12-2023 14:07" id="__BVID__779">
                                          <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__779__BV_label_"> Hạn hoàn thành
                                            <!---->
                                          </legend>
                                          <div>
                                            <input type="text" data-input="true" id="date2" class="form-control flatpickr-input" readonly="readonly" placeholder="2023-11-12">
                                            <small class="text-danger"></small>
                                            <!---->
                                            <!---->
                                            <!---->
                                          </div>
                                          <small class="text-danger"></small>

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
                                            <div class="wrapper nguoithuchienOption2">
                                                  <div class="select-btn">
                                                    <span>Chọn người thực hiện</span>   
                                                    <input type="hidden" id="nguoithuchienInput2">
                                                    <i class="fas fa-angle-down"></i>
                                                  </div>
                                                  <div class="search-option">
                                                  <div class="search">
                                                      <input type="text" placeholder="Search" id="nguoithuchienSearch2">
                                                  </div>
                                                  <ul class="options" id="nguoithuchien2">    
                                                  </ul>
                                              </div>
                                            </div>
                                            <small class="text-danger"></small>

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
                                              <label data-v-0f357511="" for="file-input2" style="width: 100%; height: 100%;">
                                                  <div data-v-0f357511="" class="empty-img thumbnail">
                                                    <svg data-v-0f357511="" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" for="file-input2" variant="primary" class="feather feather-plus">
                                                        <line data-v-0f357511="" x1="12" y1="5" x2="12" y2="19"></line>
                                                        <line data-v-0f357511="" x1="5" y1="12" x2="19" y2="12"></line>
                                                    </svg>
                                                  </div>
                                              </label>
                                              <input data-v-0f357511="" id="file-input2" type="file" name="file-input2" accept="application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation,application/pdf,image/png,image/jpeg,audio/mpeg,video/mp4,video/mpeg" multiple="multiple" class="d-none">
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
                                  <button type="button" class="btn btn-primary btnSave" data-dismiss="modal">Lưu</button>
                          </div>
                        </div>
                    </div>
              </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-default3">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Nhận xử lý việc</h4>
                            </div>
                            <div class="modal-body">
                            <input type="hidden" value="" id="idbaotrisuachua">
                              Bạn có chắc chắn muốn nhận xử lý công việc này?
                            </div>
                            <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary btnClose" data-dismiss="modal">Hủy</button>
                                  <button type="button" class="btn btn-primary btnUpdateStatus" data-dismiss="modal">Nhận</button>
                          </div>
                        </div>
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
        function validateSelect(input) {
            var smallElement = input.closest('.form-group').find('small.text-danger');
            if (!input.val().trim()) {
              selectElement.addClass('is-invalid');
            } else {
              selectElement.removeClass('is-invalid');
            }
        }          
        $('.formaddbaotrisuachua input[required], .formaddbaotrisuachua textarea[required], .formedit input[required]').on('blur', function() {
            validateInput($(this));
        });
        $('.formaddbaotrisuachua input[required], .formaddbaotrisuachua textarea[required], .formedit input[required]').on('focus', function() {
            $(this).removeClass('is-invalid');
            $(this).closest('.form-group').find('small.text-danger').text('').hide();
        });
       
    ////////////////////////////////////////////////////////   
    $('body').on('click', '.btn-add', function () {       
          let form = $('.formaddbaotrisuachua')
          form.trigger('reset');
          files = []; 
          showImages(files);
          $('#toannhaInput1').val('');
          $('#phongInput1').val('');
          $('#levelInput1').val('');
          initializeDropdownsToanha_Phong_baotri_suachua(".toannhaOption1","toannhaInput1", "toannhaSearch1", "toannha1",
                                                        ".phongoption1","phongInput1","phongSearch1", "phong1", 
                                                        ".nguoithuchienoption1","nguoithuchienInput1","nguoithuchienSearch1", "nguoithuchien1", 
                                                        ".leveloption1","levelInput1","levelSearch1", "level1",$('#toannhaInput1').val(), $('#phongInput1').val(), $('#levelInput1').val());
          $('#modal-default').modal('show');
    });
    $('body').on('click', '#btnAdd', function () { 
          let isValid = true;
          $('.formaddbaotrisuachua input[required], .formaddbaotrisuachua textarea[required]').each(function() {
            var smallElement = $(this).closest('.form-group').find('small.text-danger');
                  if (!$(this).val().trim()) {
                          $(this).addClass('is-invalid');
                          smallElement.text('Thông tin bắt buộc').show();
                          isValid = false;
                          alert("false1");
                      } else {
                          $(this).removeClass('is-invalid');
                          smallElement.text('').hide();
                      }
          });
          $('.formaddbaotrisuachua .select-btn input[required]').each(function() {
            var smallElement = $(this).closest('.form-group').find('small.text-danger');
            var selectElement = $(this).closest('.form-group').find('.select-btn');
                  if (!$(this).val().trim()) {
                          selectElement.addClass('is-invalid');
                          smallElement.text('Thông tin bắt buộc').show();
                          isValid = false;
                          alert("false2");
                      }else {
                          selectElement.removeClass('is-invalid');
                          smallElement.text('').hide();
                      }
          });
            if(isValid){
              var formData = new FormData();
              let ten_toanha = document.querySelector(".toannhaOption1 .select-btn span").textContent;
              let ten_phong = document.querySelector(".phongoption1 .select-btn").textContent;
              let ten_user = document.querySelector(".nguoithuchienOption1 .select-btn").textContent;
              formData.append('tieu_de', $('#tieude1').val());
              formData.append('id_toanha', $('#toannhaInput1').val());
              formData.append('id_phong', $('#phongInput1').val());
              formData.append('id_user', $('#nguoithuchienInput1').val());
              formData.append('mo_ta', $('#mota1').val());
              formData.append('loai_congviec', $('#loaicongviec1').val());
              formData.append("uu_tien", $('#levelInput1').val());   
              formData.append("han_hoanthanh", $('#date1').val());   
              formData.append("ten_toanha", ten_toanha);   
              formData.append("ten_phong", ten_phong);
              formData.append("ten_user", ten_user);
              for (let i = 0; i < files.length; i++) {
                  formData.append('image[]', files[i]); 
              }
              for (const pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
              }
              $.ajax({
                  url: "doc/main/commons/them_baotri_suachua.php",
                  type: "post",
                  dataType: "json",
                  processData: false,
                  contentType: false,
                  data: formData,
                  success: function (response) {              
                      if (response.success) { 
                        var classStatus;
                        if(response.iD_uu_tien == 1){
                          classStatus = "bg-success"
                        }else if(response.iD_uu_tien == 2){
                          classStatus = "bg-warning"
                        }else{
                          classStatus = "bg-danger"
                        }
                        var str = "";

                        str += `<tr id="row_${response.id}">
                        <td width="10"><input type="checkbox" name="check1" value="1"></td>
                        <td class="mabaotrisuachua">${response.maBaotri_Suachua}</td>
                        <td class="tieude">
                              ${response.tieu_de}
                            <br>
                            <span class="text-muted mota">${response.mo_ta}</span>
                            <br>
                            <span class="badge ${classStatus} uutien">${response.uu_tien}</span>
                        </td>
                        <td class="ten_toanha">${response.ten_toanha}</td>
                        <td class="ten_phong">${response.ten_phong}</td>
                        <td class="loaicongviec"><span class="badge bg-warning" style="font-size: 13px;"><b class="span_pending">${response.loai_congviec}</b></span></td>
                        <td class="tenhienthi">${response.ten_user}</td>
                        <td class="ngayketthuc">${response.han_hoanthanh}</td>
                        <td class="trangthaicongviec"><span class="badge bg-secondary" style="font-size: 13px;"><b class="span_pending">Chưa làm</b></span></td>
                        <td class="table-td-center">
                          <button class="btn btn-danger btn-sm" type="button" title="Xóa" id="btn-delete" 
                              data-id="${response.id}"><i class="fas fa-trash-alt"></i>
                          </button>
                          <button class="btn btn-warning btn-sm" type="button" title="Sửa" id="btn-edit"
                            data-toggle="modal" data-target="#ModalUP" data-id="${response.id}"><i class="fas fa-edit"></i>
                          </button>      
                          <button class="btn btn-primary btn-sm" type="button" title="Hoàn thành" id="btn-done" 
                              data-id="${response.id}"><i class="fas fa-thumbs-up"></i>
                          </button>
                          <button class="btn btn-secondary btn-sm" type="button" title="Nhận xử lý" id="btn-addcase" 
                              data-id="${response.id}"><i class="fas fa-briefcase"></i>
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
    $('body').on('click', '.btnClose', function () {
            $('#modal-default').modal('hide');        
    });
    var files2 = [];
    var newimages = [];
    $('#file-input2').on('change', function() {
      let file = $(this)[0].files;
      for (let i = 0; i < file.length; i++) {
        newimages.push(file[i]); 
      }
      showImages2(files2, newimages);
      $(this).val('');
  });
    const showImages2 = (oldimages, newimages) =>{
                  let images = '';
                  oldimages.forEach((e, i) => {
                    images += `
                      <div data-v-0f357511="" class="col-md-2 col-4">
                          <div data-v-1f5e929c="" data-v-0f357511="" class="d-flex flex-column mb-1">
                              <div data-v-1f5e929c="" class="position-relative image-container mb-2">
                                  <div data-v-1f5e929c="" class="b-overlay-wrap position-relative d-inline-block">
                                      <img data-v-1f5e929c="" src="../../images/images_baotrisuachua/${e}" alt="Image" class="bg-white thumbnail img-fluid w-100 m1" blank="true" style="width: 100% !important; height: 100% !important; min-width: 80px; min-height: 80px;">
                                      <div data-v-1f5e929c="" class="control-btns" onclick="delImage2(${i}, '${oldimages}')">
                                          <button data-v-1f5e929c="" type="button">
                                              <svg data-v-1f5e929c="" xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                  <line data-v-1f5e929c="" x1="18" y1="6" x2="6" y2="18"></line>
                                                  <line data-v-1f5e929c="" x1="6" y1="6" x2="18" y2="18"></line>
                                              </svg>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>`;                    
                  });
                  newimages.forEach((e, i) => {
                    images += `
                      <div data-v-0f357511="" class="col-md-2 col-4">
                          <div data-v-1f5e929c="" data-v-0f357511="" class="d-flex flex-column mb-1">
                              <div data-v-1f5e929c="" class="position-relative image-container mb-2">
                                  <div data-v-1f5e929c="" class="b-overlay-wrap position-relative d-inline-block">
                                      <img data-v-1f5e929c="" src="${URL.createObjectURL(e)}" alt="Image" class="bg-white thumbnail img-fluid w-100 m1" blank="true" style="width: 100% !important; height: 100% !important; min-width: 80px; min-height: 80px;">
                                      <div data-v-1f5e929c="" class="control-btns" onclick="delnewImage(${i})">
                                          <button data-v-1f5e929c="" type="button">
                                              <svg data-v-1f5e929c="" xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                  <line data-v-1f5e929c="" x1="18" y1="6" x2="6" y2="18"></line>
                                                  <line data-v-1f5e929c="" x1="6" y1="6" x2="18" y2="18"></line>
                                              </svg>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>`;                    
                  });
                  $('.containerImages').html(images);
    }
                const delImage2 = (index, array) =>{
                  ConvertArray = array.split(",");
                  ConvertArray.splice(index, 1);
                  files2 = ConvertArray;
                  showImages2(ConvertArray, newimages);       
                }
                const delnewImage = (index) =>{
                  newimages.splice(index, 1);
                  showImages2(files2, newimages);       
                }
    $('body').on('click', '#btn-edit', function () { 
            var id = $(this).data("id");
            $.ajax({
                url: "doc/main/commons/lay_baotrisuachua.php", 
                type: "post",
                dataType: "html",          
                data: { id_baotrisuachua: id },
              }).done(function(baotrisuachua){
                var decodedData = JSON.parse(decodeURIComponent(baotrisuachua));
                console.log(decodedData);
                $('#idbaotrisuachua').val(id)
                $('#tieude2').val(decodedData.tieude_baotri_suachua)
                $('#mota2').val(decodedData.mota_baotri_suachua)
                $('#loaicongviec2').val(decodedData.loai_cong_viec)
                $('#date2').val(decodedData.ngay_ketthuc)
                var uutien = decodedData.mucdo_uutien == 1 ? 'Thấp' : (decodedData.mucdo_uutien == 2 ? 'Bình thường' : "Gấp");
                files2 = decodedData.images;
                newimages = [];
                showImages2(files2, newimages);

                initializeDropdownsToanha_Phong_baotri_suachua(".toannhaOption2","toannhaInput2", "toannhaSearch2", "toannha2",
                                                        ".phongoption2","phongInput2","phongSearch2", "phong2", 
                                                        ".nguoithuchienoption2","nguoithuchienInput2","nguoithuchienSearch2", "nguoithuchien2", 
                                                        ".leveloption2","levelInput2","levelSearch2", "level2", 
                                                        decodedData.ten_toanha, decodedData.ten_canho_phong, decodedData.ten_hien_thi, uutien);
            });

            $('#modal-default2').modal('show');
    });
    $('body').on('click', '.btnSave', function () {
          let isValid = true;
          $('.formeditbaotrisuachua input[required], .formeditbaotrisuachua textarea[required]').each(function() {
            var smallElement = $(this).closest('.form-group').find('small.text-danger');
                  if (!$(this).val().trim()) {
                          $(this).addClass('is-invalid');
                          smallElement.text('Thông tin bắt buộc').show();
                          isValid = false;
                      }else if(!$(this).val() > 0){
                        $(this).addClass('is-invalid');
                          smallElement.text('Thông tin không hợp lệ').show();
                          isValid = false;
                      } else {
                          $(this).removeClass('is-invalid');
                          smallElement.text('').hide();
                      }
          });
            if(isValid){
              var formData = new FormData();
              let ten_toanha = document.querySelector(".toannhaOption2 .select-btn span").textContent;
              let ten_phong = document.querySelector(".phongoption2 .select-btn").textContent;
              let ten_user = document.querySelector(".nguoithuchienOption2 .select-btn").textContent;
              formData.append('id_baotrisuachua', $('#idbaotrisuachua').val());
              formData.append('tieu_de', $('#tieude2').val());
              formData.append('id_toanha', $('#toannhaInput2').val());
              formData.append('id_phong', $('#phongInput2').val());
              formData.append('id_user', $('#nguoithuchienInput2').val());
              formData.append('mo_ta', $('#mota2').val());
              formData.append('loai_congviec', $('#loaicongviec2').val());
              formData.append("uu_tien", $('#levelInput2').val());   
              formData.append("han_hoanthanh", $('#date2').val());   
              formData.append("ten_toanha", ten_toanha);   
              formData.append("ten_phong", ten_phong);
              formData.append("ten_user", ten_user);
              for (let i = 0; i < files2.length; i++) {
                  formData.append('imageOld[]', files2[i]); 
              }
              for (let i = 0; i < files2.length; i++) {
                  formData.append('newImage[]', newimages[i]); 
              }
              for (const pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
              }
              $.ajax({
                  url: "doc/main/commons/sua_baotrisuachua.php",
                  type: "post",
                  dataType: "json",
                  processData: false,
                  contentType: false,
                  data: formData,
                  success: function (response) {
                      if (response.success) {     
                          var row = $('#row_' + response.id);
                          row.find('.tieude').text(response.tieude_baotri_suachua);
                          row.find('.tieude .mota').text(response.mo_ta);
                          row.find('.tieude .uutien').text(response.uu_tien);
                          row.find('.ten_toanha').text(response.ten_toanha);
                          row.find('.ten_phong').text(response.ten_phong);
                          row.find('.loaicongivec span b').text(response.loai_congviec);
                          row.find('.tenhienthi').text(response.ten_user);
                          row.find('.ngayketthuc').text(response.han_hoanthanh);
                          if(response.iD_uu_tien == 1){
                            row.find('.tieude .uutien').removeClass('badge bg-primary')
                            row.find('.tieude .uutien').removeClass('badge bg-danger')
                            row.find('.tieude .uutien').addClass('badge bg-success')                     
                          }else if((response.iD_uu_tien == 2)){
                            row.find('.tieude .uutien').removeClass('badge bg-success')
                            row.find('.tieude .uutien').removeClass('badge bg-danger')
                            row.find('.tieude .uutien').addClass('badge bg-primary')
                          }else if(response.iD_uu_tien == 3){
                            row.find('.tieude .uutien').removeClass('badge bg-primary')
                            row.find('.tieude .uutien').removeClass('badge bg-success')
                            row.find('.tieude .uutien').addClass('badge bg-danger')
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
    $('body').on('click', '.btnClose', function () {
            $('#modal-default2').modal('hide');
    });
    $('body').on('click', '#btn-addcase', function () {
        $('#modal-default3').modal('show');
        var id = $(this).data("id");
        var status = $(this).data("status");
        var formData = new FormData();
        formData.append("id_baotrisuachua", id);
        formData.append("id_trangthai", status);
        $('body').on('click', '.btnUpdateStatus', function () {
              $.ajax({
                  url: "doc/main/commons/update_trangthai_lamviec.php",
                  type: "post",
                  dataType: "json",
                  processData: false,
                  contentType: false,
                  data: formData,
                  success: function (response) {
                    if (response.success) {     
                      var row = $('#row_' + response.id);
                      row.find('.trangthaicongviec span b').text(response.trangthai);
                      row.find('.trangthaicongviec span').removeClass('badge bg-primary bg-danger bg-warning bg-success bg-secondary');

                        if(response.id_trangthai == 1){    
                            row.find('.trangthaicongviec span').addClass('badge bg-warning')    
                            row.find('#btn-addcase').remove();                             
                          }else if((response.id_trangthai == 2)){
                            row.find('.trangthaicongviec span').addClass('badge bg-primary')
                            row.find('#btn-addcase').remove();
                                row.find('#btn-addcase').remove();
                                row.find('#btn-done').remove();
                                // Tạo button mới
                                let newButton = $('<button/>', {
                                    class: 'btn btn-success btn-sm',
                                    type: 'button',
                                    title: 'Duyệt',
                                    id: 'btn-approve',
                                    'data-id': response.id
                                }).append($('<i/>', { class: 'fas fa-briefcase' }));

                                // Thêm button vào DOM
                                row.find('.optionbaotrisuachua').append(newButton);
                          }else if(response.id_trangthai == 3){
                            row.find('.trangthaicongviec span').addClass('badge bg-success')   
                          }else{
                            row.find('.trangthaicongviec span').addClass('badge bg-danger')
                          }
                        $('#modal-default3').modal('hide');            
                    }
                  },
                  error: function (xhr, status, error) {
                      console.error(xhr.responseText);
                      alert("Ajax request failed!");
                  }
              });         
        });
    });

</script>