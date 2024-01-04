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
          <h2 class="mb-25 font-weight-bolder text-secondary" id="trangthaichualam"> <?php echo $count0['COUNT(*)']?> </h2>
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
          <h2 class="mb-25 font-weight-bolder text-warning" id="trangthaidanglam"> <?php echo $count1['COUNT(*)'] ?> </h2>
          <span class="text-warning">Đang làm</span>
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
          <h2 class="mb-25 font-weight-bolder text-primary" id="trangthaichoduyet"> <?php echo $count2['COUNT(*)']?> </h2>
          <span class="text-primary">Chờ duyệt</span>
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
          <h2 class="mb-25 font-weight-bolder text-success" id="trangthaidaduyet"> <?php echo $count3['COUNT(*)']?>  </h2>
          <span class="text-success">Đã duyệt</span>
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
          <h2 class="mb-25 font-weight-bolder text-info" id="trangthaikhongdat"> <?php echo $count4['COUNT(*)']?>  </h2>
          <span class="text-info">Không đạt</span>
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
          <h2 class="mb-25 font-weight-bolder text-danger" id="trangthaiquahan"> <?php echo $count5['COUNT(*)']?>  </h2>
          <span class="text-danger">Quá hạn</span>
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
</div>
<div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">

            <div class="row element-button">
               <h4 data-v-38625d2e="" class="card-title">Công việc</h4>
              <div class="card_body">
                <?php 
                      $sql_vaitro1 = "SELECT tb_vaitro_quyen.*,  tb_vaitro.*, tb_quyen.*
                      FROM tb_vaitro_quyen
                      JOIN tb_vaitro ON tb_vaitro_quyen.id_vaitro = tb_vaitro.id_vaitro
                      JOIN tb_quyen ON tb_vaitro_quyen.id_quyen = tb_quyen.id_quyen
                      WHERE tb_vaitro.id_vaitro = $vaitro";
                        $query_vaitro1 = mysqli_query($conn, $sql_vaitro1);
                        if(mysqli_num_rows($query_vaitro1) > 0){
                        while ($row = mysqli_fetch_array($query_vaitro1)) {
                          if($row['id_quyen'] == 7){
                ?>
                      <div class="col-sm-2">       
                        <a class="btn btn-add btn-sm" href="#" title="Thêm"><i class="fas fa-plus"></i></a>
                      </div>
                <?php 
                          }
                        }
                      }
                ?>
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
                                            <div class="table_search_baotri_add">
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
                                            <div class="table_search_baotri_add">
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
                                            <input type="text" data-input="true" id="date1" class="form-control flatpickr-input" readonly="readonly" placeholder="2023-12-20 12:00">
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
                                <button type="button" class="btn btn-success" id="btnAdd" name="btnAdd" data-name="<?= $_SESSION['id_taikhoan']?>">Thêm</button>
                            </div>
                        </div>
                    </div>
              </div>
              </div>
 
            </div>
            <div data-v-38625d2e="" class="row">
              <div data-v-38625d2e="" class="col">
              <fieldset class="form-group" id="__BVID__428">
                                <!---->
                                <div class="table_search_baotri">
                                  <div class="wrapper statusOptionselect">
                                                    <div class="select-btn">
                                                      <span>Trạng thái</span>
                                                      <input type="hidden" id="statusInputSearch">
                                                      <i class="fas fa-angle-down"></i>
                                                    </div>
                                                    <div class="search-option">
                                                      <div class="search">
                                                        <input type="text" placeholder="Search" id="statusSearch">
                                                      </div>
                                                      <ul class="options" id="statusOptionSearch">                              
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
                                  <div class="table_search_baotri">
                                    <div class="wrapper toannhaOptionselect large">
                                                      <div class="select-btn">
                                                        <span>Tòa nhà</span>
                                                        <input type="hidden" id="toannhaInputSearch" value="">
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
                              <div class="table_search_baotri">
                                <div class="wrapper phongOptionselect">
                                                  <div class="select-btn">
                                                    <span>Phòng</span>
                                                    <input type="hidden" id="phongInputSearch" value="">
                                                    <i class="fas fa-angle-down"></i>
                                                  </div>
                                                  <div class="search-option">
                                                    <div class="search">
                                                      <input type="text" placeholder="Search" id="phongSearch3">
                                                    </div>
                                                    <ul class="options" id="phongOptionSearch">                              
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
              <input data-v-38625d2e="" type="text" placeholder="Tìm kiếm" class="form-control" id="search-input-apartment">
            </div>
          </div>
            <table class="table table-hover table-bordered js-copytextarea tbdata1" cellpadding="0" cellspacing="0" border="0"
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
                    LEFT JOIN tb_taikhoan ON tb_taikhoan.id_taikhoan = tb_baotri_suachua.id_taikhoan
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
                  <td class="ngayketthuc">
                    <input type="hidden" value="<?php echo $row['ngay_batdau']; ?>" class="ngaybatdau">
                    <?php 
                    $ngay_ketthuc = new DateTime($row['ngay_ketthuc']);
                    $ngay_thang_nam_gio_phut = $ngay_ketthuc->format("Y-m-d H:i");
                    echo $ngay_thang_nam_gio_phut;
                    ?>
                  </td>         
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
                    
                    <?php     
                                          $sql_vaitro2 = "SELECT tb_vaitro_quyen.*,  tb_vaitro.*, tb_quyen.*
                                          FROM tb_vaitro_quyen
                                          JOIN tb_vaitro ON tb_vaitro_quyen.id_vaitro = tb_vaitro.id_vaitro
                                          JOIN tb_quyen ON tb_vaitro_quyen.id_quyen = tb_quyen.id_quyen
                                          WHERE tb_vaitro.id_vaitro = $vaitro";
                                            $query_vaitro2 = mysqli_query($conn, $sql_vaitro2);
                                            if(mysqli_num_rows($query_vaitro2) > 0){
                                            while ($row2 = mysqli_fetch_array($query_vaitro2)) {
                                              if($row2['id_quyen'] == 8){        
                                                echo '<button class="btn btn-danger btn-sm" type="button" title="Xóa"
                                                  onclick="myFunction(this)" id="btn-delete" data-id="' . $row['id_baotri_suachua'] . '" ><i class="fas fa-trash-alt"></i>
                                                </button>';
                                              }
                                              if($row2['id_quyen'] == 10){        
                                                if ($row['trang_thai'] == 3 || $row['trang_thai'] == 4) {
                                                  echo ' <button class="btn btn-warning btn-sm" type="button" title="Xem" 
                                                  id="btn-show" data-id="' . $row['id_baotri_suachua'] . '"><i class="fa fa-eye"></i>
                                                  </button>';
                                                }
                                              }
                                              if($row2['id_quyen'] == 9){
                                                if($row['trang_thai'] != 3 && $row['trang_thai'] != 4){
                                                  echo ' <button class="btn btn-warning btn-sm" type="button" title="Sửa" id="btn-edit"
                                                  data-toggle="modal" data-target="#ModalUP" data-id="' .$row['id_baotri_suachua']. '"><i class="fas fa-edit"></i>
                                                </button>';
                                                }
                                              }
                                              if($row2['id_quyen'] == 12){
                                                if ($row['trang_thai'] != 3 && $row['trang_thai'] != 4 && $row['trang_thai'] != 2 && $row['id_taikhoan'] == $_SESSION['id_taikhoan']) {
                                                  echo ' <button class="btn btn-primary btn-sm" type="button" title="Hoàn thành" id="btn-done" 
                                                  data-id="' . $row['id_baotri_suachua'] . '" data-status="2" data-name="' . $row['tieude_baotri_suachua'] . '"><i class="fas fa-thumbs-up"></i>
                                                  </button>';
                                                }
                                              }   
                                              if($row2['id_quyen'] == 11){
                                                if (($row['trang_thai'] == 0 && $row['id_taikhoan'] == $_SESSION['id_taikhoan']) || (($row['trang_thai'] == 0 && $row['id_taikhoan'] == 0))) {
                                                  echo ' <button class="btn btn-secondary btn-sm" type="button" title="Nhận xử lý" 
                                                  id="btn-addcase" data-id="' . $row['id_baotri_suachua'] . '" data-status="1"  data-user="' . $_SESSION['id_taikhoan'] . '" data-name-user="' . $_SESSION['ten_hien_thi'] . '"><i class="fas fa-briefcase"></i>
                                                  </button>';
                                                }
                                              }   
                                              if($row2['id_quyen'] == 13){
                                                if ($row['trang_thai'] == 2) {
                                                  echo ' <button class="btn btn-success btn-sm" type="button" title="Duyệt" 
                                                  id="btn-approve" data-id="' . $row['id_baotri_suachua'] . '" data-status="3"  data-name="' . $row['tieude_baotri_suachua'] . '"><i class="fas fa-check"></i>
                                                  </button>';
                                                }   
                                              }                                                                                          
                                                                                          
                        }
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
                                  <button type="button" class="btn btn-primary btnUpdateStatus" data-dismiss="modal" data-name="<?= $_SESSION['id_taikhoan'] ?>">Nhận</button>
                          </div>
                        </div>
                    </div>
              </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-default4">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Hoàn thành công việc</h4>
                            </div>
                            <div class="modal-body">
                            <span>
                              <div role="alert" aria-live="polite" aria-atomic="true" class="alert-form alert-primary">
                                <!---->
                                <div class="alert-body">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-25 feather feather-star">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                  </svg>
                                  <span class="ml-25 namecongviec">Bạn đang tiến hành xác nhận hoàn thành công việc: <strong></strong>. </span>
                                </div>
                              </div>
                              <form class="formhoanthanhcongviec">
                                <div class="row">
                                <div class="col-12">
                                        <fieldset class="form-group" value="" id="">
                                          <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__779__BV_label_"> Thời gian hoàn thành
                                            <!---->
                                          </legend>
                                          <div>
                                          <input type="text" data-input="true" id="datedone" class="form-control flatpickr-input" readonly="readonly" placeholder="2023-11-12">
                                            <small class="text-danger"></small>
                                            <!---->
                                            <!---->
                                            <!---->
                                          </div>

                                        </fieldset>
                                      </div>
                                  <div class="col"></div>
                                </div>
                                <span>
                                  <fieldset class="form-group" id="__BVID__461">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__461__BV_label_">Mô tả</legend>
                                    <div>
                                      <textarea rows="3" wrap="soft" class="form-control" id="motadone" required></textarea>
                                      <div class="invalid-feedback"></div>
                                      <small class="text-danger"></small>

                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>
                                  </fieldset>
                                </span>
                                <div data-v-0f357511="" value="">
                                  <span data-v-0f357511=""> Đính kèm </span>
                                  <div data-v-0f357511="" class="row match-height mt-1">
                                    <div data-v-0f357511="" class="col-md-2 col-4">
                                      <div data-v-0f357511="" class="image-container" style="width: 100%; height: 100%;">
                                        <label data-v-0f357511="" for="file-input-done" style="width: 100%; height: 100%;">
                                          <div data-v-0f357511="" class="empty-img thumbnail">
                                            <svg data-v-0f357511="" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" for="file-input-done" variant="primary" class="feather feather-plus">
                                              <line data-v-0f357511="" x1="12" y1="5" x2="12" y2="19"></line>
                                              <line data-v-0f357511="" x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                          </div>
                                        </label>
                                        <input data-v-0f357511="" id="file-input-done" type="file" name="file-input-done" accept="application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation,application/pdf,image/png,image/jpeg,audio/mpeg,video/mp4,video/mpeg" multiple="multiple" class="d-none">
                                      </div>
                                    </div>
                                    <div class="containerImages match-height mt-1">
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </span>
                            </div>
                            <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary btnClose" data-dismiss="modal">Hủy</button>
                                  <button type="button" class="btn btn-primary btnDone" data-dismiss="modal" data-name="<?= $_SESSION['id_taikhoan'] ?>">Lưu</button>
                          </div>
                        </div>
                    </div>
              </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-default5">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Hoàn thành công việc</h4>
                            </div>
                            <div class="modal-body">
                            <span>
                                <div role="alert" aria-live="polite" aria-atomic="true" class="alert-form alert-primary">
                                  <!---->
                                  <div class="alert-body">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-25 feather feather-star">
                                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <span class="ml-25 namecongviecDone">Bạn đang tiến hành duyệt công việc: <strong></strong>. </span>
                                  </div>
                                </div>
                                <form class="formduyetcongviec">
                                  <div class="row">
                                    <div class="col-6 Success">
                                      <div class="card shadow-none border bg-light-primary">
                                        <!---->
                                        <!---->
                                        <div class="card-header d-flex justify-content-between">
                                          <h4 class="card-title">Đạt yêu cầu</h4>
                                          <div class="custom-control-primary custom-control custom-radio">
                                            <input type="radio" name="status" class="custom-control-input" value="3" id="formSuccess" checked>
                                            <label class="custom-control-label" for="formSuccess"></label>
                                          </div>
                                        </div>
                                        <!---->
                                        <!---->
                                      </div>
                                    </div>
                                    <div class="col-6 fail">
                                      <div class="card shadow-none border bg-light-secondary">
                                        <div class="card-header d-flex justify-content-between">
                                          <h4 class="card-title">Không đạt</h4>
                                          <div class="custom-control-danger custom-control custom-radio" checked="checked">
                                            <input type="radio" name="status" class="custom-control-input" value="4" id="formFail">
                                            <label class="custom-control-label" for="formFail"></label>
                                          </div>
                                        </div>
                                        <!---->
                                        <!---->
                                      </div>
                                    </div>
                                  </div>
                                  <span class="motaformfail" style="display: none;">
                                    <fieldset class="form-group" id="__BVID__798">
                                      <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__798__BV_label_">Mô tả lý do chưa đạt</legend>
                                      <div>
                                        <textarea rows="3" wrap="soft" class="form-control" id="motalydochuadat" required></textarea>
                                        <div class="invalid-feedback"></div>
                                        <small class="text-danger"></small>

                                        <!---->
                                        <!---->
                                        <!---->
                                      </div>
                                    </fieldset>
                                  </span>
                                </form>
                              </span>
                            </div>
                            <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary btnClose" data-dismiss="modal">Hủy</button>
                                  <button type="button" class="btn btn-primary btnApprove" data-dismiss="modal" data-name="<?= $_SESSION['id_taikhoan'] ?>">Lưu</button>
                          </div>
                        </div>
                    </div>
              </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-default6">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Thông tin công việc</h4>
                            </div>
                            <div class="modal-body">
                            <div>
                                <div class="list-group">
                                  <div class="list-group-item">
                                    <div class="row">
                                      <div class="font-weight-bolder col"> Tên công việc: </div>
                                      <div class="col ten_congviec"></div>
                                    </div>
                                  </div>
                                  <div class="list-group-item">
                                    <div class="row">
                                      <div class="font-weight-bolder col"> Nội dung công việc: </div>
                                      <div class="col mota_congviec"></div>
                                    </div>
                                  </div>
                                  <div class="list-group-item">
                                    <div class="row">
                                      <div class="font-weight-bolder col"> Đính kèm: </div>
                                    </div>
                                    <div data-v-0f357511="">
                                      <!---->
                                      <div data-v-0f357511="" class="row match-height mt-1" id="container-images1">
                                        <!---->
                                      </div>
                                    </div>
                                  </div>
                                  <div class="list-group-item">
                                    <div class="row">
                                      <div class="font-weight-bolder col"> Loại công việc: </div>
                                      <div class="col loai_congviec"></div>
                                    </div>
                                  </div>
                                  <div class="list-group-item">
                                    <div class="row">
                                      <div class="font-weight-bolder col"> Ngày tạo: </div>
                                      <div class="col ngaytao_congviec"></div>
                                    </div>
                                  </div>
                                  <!---->
                                  <div class="list-group-item">
                                    <div class="row">
                                      <div class="font-weight-bolder col"> Tòa nhà: </div>
                                      <div class="col toanha_congviec"></div>
                                    </div>
                                  </div>
                                  <div class="list-group-item">
                                    <div class="row">
                                      <div class="font-weight-bolder col"> Phòng: </div>
                                      <div class="col phong_congviec"></div>
                                    </div>
                                  </div>
                                  <div class="list-group-item">
                                    <div class="row">
                                      <div class="font-weight-bolder col"> Hạn hoàn thành: </div>
                                      <div class="col hanhoanthanh_congviec"></div>
                                    </div>
                                  </div>
                                  <div class="list-group-item">
                                    <div class="row">
                                      <div class="font-weight-bolder col"> Người thực hiện: </div>
                                      <div class="col nguoinhan_congviec"></div>
                                    </div>
                                  </div>
                                  <div class="list-group-item">
                                    <div class="row">
                                      <div class="font-weight-bolder col"> Trạng thái: </div>
                                      <div class="col">
                                        <span class="badge badge-light-success badge-pill trangthai_congviec"></span>
                                        <!---->
                                      </div>
                                    </div>
                                  </div>
                                  <div class="list-group-item">
                                    <div class="row">
                                      <div class="font-weight-bolder col"> Hoàn thành lúc: </div>
                                      <div class="col ngayhoanthanh_congviec"></div>
                                    </div>
                                  </div>
                                  <div class="list-group-item">
                                    <div class="row">
                                      <div class="font-weight-bolder col"> Kết quả xử lý: </div>
                                      <div class="col motahoanthanh_congviec"></div>
                                    </div>
                                    <div class="row">
                                      <div class="font-weight-bolder col"> Hoàn thành lúc: </div>
                                      <div class="col ngayhoanthanh_congviec"></div>
                                    </div>
                                    <div data-v-0f357511="">
                                      <!---->
                                      <div data-v-0f357511="" class="row match-height mt-1" id="container-images2">
                                        <!---->
                                      </div>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                                <fieldset class="form-group mt-2" id="__BVID__481">
                                  <!---->
                                  <div>
                                    <textarea placeholder="Thêm cập nhật, trao đổi" rows="3" wrap="soft" class="form-control" id="binhluan_congviec"></textarea>
                                    <!---->
                                    <!---->
                                    <!---->
                                  </div>
                                </fieldset>
                                <button type="button" class="btn btn-primary btn-sm"> Bình luận </button>
                                <div class="d-flex align-items-start mt-2">
                                  <span class="b-avatar mt-25 mr-75 badge-secondary rounded-circle" style="width: 34px; height: 34px;">
                                    <svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" aria-label="person fill" aria-hidden="true" alt="avatar" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-person-fill b-icon bi">
                                      <g>
                                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                      </g>
                                    </svg>
                                    <!---->
                                  </span>
                                  <div class="profile-user-info w-100">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <h6 class="mb-0 nguoiduyet_congviec"></h6>
                                      <small class="ngayduyet_congviec"></small>
                                    </div>
                                    <small>Chuyển trạng thái công việc từ Chờ duyệt sang Đã duyệt</small>
                                  </div>
                                </div>
                                <div class="d-flex align-items-start mt-2">
                                  <span class="b-avatar mt-25 mr-75 badge-secondary rounded-circle" style="width: 34px; height: 34px;">
                                    <svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" aria-label="person fill" aria-hidden="true" alt="avatar" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-person-fill b-icon bi">
                                      <g>
                                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                      </g>
                                    </svg>
                                    <!---->
                                  </span>
                                  <div class="profile-user-info w-100">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <h6 class="mb-0 nguoihoanthanh_congviec"></h6>
                                      <small class="ngayhoanthanh_congviec"></small>
                                    </div>
                                    <small>Chuyển trạng thái công việc từ Đang làm sang Chờ duyệt</small>
                                  </div>
                                </div>
                                <div class="d-flex align-items-start mt-2">
                                  <span class="b-avatar mt-25 mr-75 badge-secondary rounded-circle" style="width: 34px; height: 34px;">
                                    <svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" aria-label="person fill" aria-hidden="true" alt="avatar" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-person-fill b-icon bi">
                                      <g>
                                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                      </g>
                                    </svg>
                                    <!---->
                                  </span>
                                  <div class="profile-user-info w-100">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <h6 class="mb-0 nguoinhan_congviec"></h6>
                                      <small class="ngaynhan_congviec"></small>
                                    </div>
                                    <small>Chuyển trạng thái công việc từ Chưa làm sang Đang làm</small>
                                  </div>
                                </div>
                                <div class="d-flex align-items-start mt-2">
                                  <span class="b-avatar mt-25 mr-75 badge-secondary rounded-circle" style="width: 34px; height: 34px;">
                                    <svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" aria-label="person fill" aria-hidden="true" alt="avatar" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-person-fill b-icon bi">
                                      <g>
                                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                      </g>
                                    </svg>
                                    <!---->
                                  </span>
                                  <div class="profile-user-info w-100">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <h6 class="mb-0 nguoitaocongviec"> </h6>
                                      <small class="ngaytao_congviec"></small>
                                    </div>
                                    <small>Tạo mới công việc/sự cố</small>
                                  </div>
                                </div>
                              </div>
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
              document.querySelector('.containerImages').innerHTML = images;
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
    $('.formaddbaotrisuachua input[required], .formaddbaotrisuachua textarea[required], .formeditbaotrisuachua input[required], .formeditbaotrisuachua textarea[required], .formhoanthanhcongviec textarea[required]').on('blur', function() {
            validateInput($(this));
    });
    $('.formaddbaotrisuachua input[required], .formaddbaotrisuachua textarea[required], .formeditbaotrisuachua input[required], .formeditbaotrisuachua textarea[required], .formhoanthanhcongviec textarea[required], .formduyetcongviec textarea[required]').on('focus', function() {
            $(this).removeClass('is-invalid');
            $(this).closest('.form-group').find('small.text-danger').text('').hide();
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
    $('#file-input-done').on('change', function() {
          let file = $(this)[0].files;
          for (let i = 0; i < file.length; i++) {
            files.push(file[i]); 
          }
          showImagesDone(files);
          $(this).val('');
    });
    const showImagesDone = (array) =>{
              let images = '';
              array.forEach((e, i) => {
                images += `<div data-v-0f357511="" class="col-md-2 col-4">
                                  <div data-v-1f5e929c="" data-v-0f357511="" class="d-flex flex-column mb-1">
                                        <div data-v-1f5e929c="" class="position-relative image-container mb-2">
                                          <div data-v-1f5e929c="" class="b-overlay-wrap position-relative d-inline-block">
                                    <img data-v-1f5e929c="" src="${URL.createObjectURL(e)}" alt="Image" class="bg-white thumbnail img-fluid w-100 m1" blank="true" style="width: 100% !important; height: 100% !important; min-width: 80px; min-height: 80px;">        
                                    <div data-v-1f5e929c="" class="control-btns" onclick="delnewDone(${i})">
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
              $('.containerImages').html(images);
    }
    const delnewDone = (index) =>{
              files.splice(index, 1);
              showImagesDone(files);       
      }
    const showImages3 = (array, container) =>{
              let images = '';
              array.forEach((e, i) => {
                images += `         <div data-v-0f357511="" attachment="" class="col-md-2 col-4">
                                          <div data-v-1f5e929c="" data-v-0f357511="" class="d-flex flex-column mb-1">
                                            <div data-v-1f5e929c="" class="position-relative image-container mb-2">
                                              <div data-v-1f5e929c="" class="b-overlay-wrap position-relative d-inline-block">
                                                <img data-v-1f5e929c="" src="../../images/images_baotrisuachua/${e}" alt="Image" class="bg-white thumbnail img-fluid w-100 m1" blank="true" style="width: 100% !important; height: 100% !important; min-width: 80px; min-height: 80px;">
                                                <!---->
                                                <!---->
                                                <!---->
                                              </div>
                                            </div>
                                          </div>
                                        </div>`
                
            });
              document.querySelector(container).innerHTML = images;
    }
    ////////////////////////////////////////////////////////   

        $(document).ready(function () {
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
                      }else {
                          selectElement.removeClass('is-invalid');
                          smallElement.text('').hide();
                      }
          });
            if(isValid){              
              var formData = new FormData();
              let ten_toanha = document.querySelector(".toannhaOption1 .select-btn span").textContent;
              let ten_phong = document.querySelector(".phongoption1 .select-btn").textContent;
              let id_nguoitao = $(this).data("name");;
              let ten_user = $('#nguoithuchienInput1').val() === "" ? "" : document.querySelector(".nguoithuchienOption1 .select-btn").textContent;
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
              formData.append("id_nguoitao", id_nguoitao);

              for (let i = 0; i < files.length; i++) {
                  formData.append('image[]', files[i]); 
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
                        console.log(response);
                        var classStatus;
                        if(response.iD_uu_tien == 1){
                          classStatus = "bg-success"
                        }else if(response.iD_uu_tien == 2){
                          classStatus = "bg-warning"
                        }else{
                          classStatus = "bg-danger"
                        }
                        var trangthaichualam = parseInt($("#trangthaichualam").text());
                        $("#trangthaichualam").text(trangthaichualam + 1); 

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
                $('#toannhaInput2').val(decodedData.id_toanha);
                $('#phongInput2').val(decodedData.id_phong);
                
                initializeDropdownsToanha_Phong_baotri_suachua(".toannhaOption2","toannhaInput2", "toannhaSearch2", "toannha2",
                                                        ".phongoption2","phongInput2","phongSearch2", "phong2", 
                                                        ".nguoithuchienoption2","nguoithuchienInput2","nguoithuchienSearch2", "nguoithuchien2", 
                                                        ".leveloption2","levelInput2","levelSearch2", "level2", 
                                                        decodedData.ten_toanha, decodedData.ten_canho_phong, decodedData.ten_nguoi_nhan_viec, uutien);
                files2 = decodedData.images1;
                newimages = [];
                showImages2(files2, newimages);
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
              for (let i = 0; i < newimages.length; i++) {
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
            $('#modal-default2, #modal-default3, #modal-default4').modal('hide');
    });
    $('body').on('click', '#btn-addcase', function () {
        $('#modal-default3').modal('show');
        var id = $(this).data("id");
        var status = $(this).data("status");
        var id_user = $(this).data("user");
        var name_user = $(this).data("name-user");
        $('.btnUpdateStatus').data('id', id);
        $('.btnUpdateStatus').data('user', id_user);
        $('.btnUpdateStatus').data('status', status);
        $('.btnUpdateStatus').data('name-user', name_user);

    });
    $('body').on('click', '.btnUpdateStatus', function () {
          var formData = new FormData();
          var idbaotrisuachua = $(this).data("id");
          var id_user = $(this).data("user");
          var status = $(this).data("status");
          var name_user = $(this).data("name-user");

          console.log(idbaotrisuachua);
          formData.append("id_baotrisuachua", idbaotrisuachua);
          formData.append("id_trangthai", status);
          formData.append("id_user", id_user);
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
                      row.find('.tenhienthi').text(name_user);
                      row.find('.trangthaicongviec span').addClass('badge bg-warning')    
                      var trangthaichualam = parseInt($("#trangthaichualam").text());

                      $("#trangthaichualam").text(trangthaichualam - 1); 
                      var trangthaidanglam = parseInt($("#trangthaidanglam").text());

                      $("#trangthaidanglam").text(trangthaidanglam + 1); 
                      row.find('#btn-addcase').remove();    
                      $('#modal-default3').modal('hide');            
                    }
                  },
                  error: function (xhr, status, error) {
                      console.error(xhr.responseText);
                      alert("Ajax request failed!");
                  }
              });         
        });
    $('body').on('click', '#btn-done', function () {    
      let form = $('.formhoanthanhcongviec')
          form.trigger('reset');
      files = []; 
      showImagesDone(files); 
      var id = $(this).data("id");
      var status = $(this).data("status");
      var name = $(this).data("name");
      var currentDate = new Date();
      var formattedDate = currentDate.getFullYear() + '-' +
        ('0' + (currentDate.getMonth() + 1)).slice(-2) + '-' +
        ('0' + currentDate.getDate()).slice(-2) + ' ' +
        ('0' + currentDate.getHours()).slice(-2) + ':' +
        ('0' + currentDate.getMinutes()).slice(-2);
      $('#datedone').val(formattedDate);
      $('.alert-body .namecongviec strong').text(name);
      $('#modal-default4').modal('show');
      $('.btnDone').data('id', id);
      $('.btnDone').data('status', status);
    });
        $('body').on('click', '.btnDone', function () {

          var id_nguoihoanthanh = $(this).data("name");
          var id = $(this).data("id");
          var status = $(this).data("status");
          var isValid = true;
          $('.formhoanthanhcongviec textarea[required]').each(function() {
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
            formData.append("id_baotrisuachua", id);
            formData.append("id_trangthai", status);
            formData.append("ngay_hoanthanh", $('#datedone').val());
            formData.append("mota_hoanthanh", $('#motadone').val());
            formData.append("id_nguoihoanthanh", id_nguoihoanthanh);

            for (let i = 0; i < files.length; i++) {
                        formData.append('image[]', files[i]); 
            }
            for (const pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
              }
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
                      if((response.id_trangthai == 2)){
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
                                }).append($('<i/>', { class: 'fas fa-check' }));
                                // Thêm button vào DOM
                                row.find('.optionbaotrisuachua').append(newButton);
                          }
                        var trangthaidanglam = parseInt($("#trangthaidanglam").text());
                        $("#trangthaidanglam").text(trangthaidanglam - 1); 
                        var trangthaichoduyet = parseInt($("#trangthaichoduyet").text());
                        $("#trangthaichoduyet").text(trangthaichoduyet + 1); 
                        $('#modal-default4').modal('hide');            
                    }else {
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
    $('body').on('click', '#btn-approve', function () {    
      $('.formduyetcongviec').trigger('reset');
      $('.Success').children().first().removeClass('bg-light-secondary').addClass('bg-light-primary');
      $('.fail').children().first().removeClass('bg-light-danger').addClass('bg-light-secondary');
      var status = $('input[id="formSuccess"]').val();
      $('.btnApprove').data('status', status);

      $('input[id="formSuccess"]').change(function() {
        if ($(this).is(':checked')) {
          $('.Success').children().first().removeClass('bg-light-secondary').addClass('bg-light-primary');
          $('.fail').children().first().removeClass('bg-light-danger').addClass('bg-light-secondary');
          $('.motaformfail').css('display', 'none');
        }
        status = $(this).val();
        $('.btnApprove').data('status', status);

      });
      $('input[id="formFail"]').change(function() {
        if ($(this).is(':checked')) {
          $('.Success').children().first().removeClass('bg-light-primary').addClass('bg-light-secondary');
          $('.fail').children().first().removeClass('bg-light-secondary').addClass('bg-light-danger');
          $('.motaformfail').css('display', 'block');
        }
        status = $(this).val();
        $('.btnApprove').data('status', status);

      });
      var id = $(this).data("id");
      var name = $(this).data("name");
      $('.alert-body .namecongviecDone strong').text(name);
      $('.btnApprove').data('id', id);
      $('#modal-default5').modal('show');
    });
    $('body').on('click', '.btnApprove', function () {
          var id = $(this).data("id");
          var status = $(this).data("status");
          var id_nguoiduyet = $(this).data("name");
          var isValid = true;
          if($('input[id="formFail"]').is(':checked')){
            $('.formduyetcongviec textarea[required]').each(function() {
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
          }
          if(isValid){
            var formData = new FormData();
            formData.append("id_baotrisuachua", id);
            formData.append("id_trangthai", status);
            formData.append("mota_khongdat", $('#motalydochuadat').val());
            formData.append("id_nguoiduyet", id_nguoiduyet);
            for (const pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
              }
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
                      row.find('#btn-approve').remove(); 
                      row.find('#btn-edit').remove();   
                      // Tạo button mới
                      let newButton = $('<button/>', {
                                    class: 'btn btn-warning btn-sm',
                                    type: 'button',
                                    title: 'Xem',
                                    id: 'btn-show',
                                    'data-id': response.id
                                }).append($('<i/>', { class: 'fa fa-eye' }));
                                // Thêm button vào DOM
                        row.find('.optionbaotrisuachua').append(newButton);
                      if(response.id_trangthai == 3){
                          var trangthaichoduyet = parseInt($("#trangthaichoduyet").text());
                          $("#trangthaichoduyet").text(trangthaichoduyet - 1); 
                          var trangthaidaduyet = parseInt($("#trangthaidaduyet").text());
                          $("#trangthaidaduyet").text(trangthaidaduyet + 1); 
                            row.find('.trangthaicongviec span').addClass('badge bg-success')   
                          }else if(response.id_trangthai == 4){
                            var trangthaichoduyet = parseInt($("#trangthaichoduyet").text());
                            $("#trangthaichoduyet").text(trangthaichoduyet - 1); 
                            var trangthaikhongdat = parseInt($("#trangthaikhongdat").text());
                            $("#trangthaikhongdat").text(trangthaikhongdat + 1); 
                            row.find('.trangthaicongviec span').addClass('badge bg-danger')
                          }
                        $('#modal-default5').modal('hide');            
                    }
                  },
                  error: function (xhr, status, error) {
                      console.error(xhr.responseText);
                      alert("Ajax request failed!");
                  }
              });    
          }
                
        });
    $('body').on('click', '#btn-show', function () {    
      var id = $(this).data("id");
            $.ajax({
                url: "doc/main/commons/lay_baotrisuachua.php", 
                type: "post",
                dataType: "html",          
                data: { id_baotrisuachua: id },
              }).done(function(baotrisuachua){
                var decodedData = JSON.parse(decodeURIComponent(baotrisuachua));
                console.log(decodedData);
                $('.ten_congviec').text(decodedData.tieude_baotri_suachua);
                $('.mota_congviec').text(decodedData.mota_baotri_suachua);
                $('.loai_congviec').text(decodedData.loai_cong_viec);
                $('.ngaytao_congviec').text(decodedData.ngay_batdau);
                $('.toanha_congviec').text(decodedData.ten_toanha);
                $('.phong_congviec').text(decodedData.ten_canho_phong);
                $('.hanhoanthanh_congviec').text(decodedData.ngay_ketthuc);
                $('.motahoanthanh_congviec').text(decodedData.mota_hoanhthanh);      
                $('.nguoinhan_congviec').text(decodedData.ten_nguoi_nhan_viec);   
                $('.trangthai_congviec').removeClass('badge-light-success badge-light-danger');
                if(decodedData.trang_thai == 3){
                  $('.trangthai_congviec').text("đã duyệt");
                  $('.trangthai_congviec').addClass('badge-light-success');
                }else if(decodedData.trang_thai == 4){
                  $('.trangthai_congviec').text("Không đạt");
                  $('.trangthai_congviec').addClass('badge-light-danger');
                }
                $('.ngayhoanthanh_congviec').text(decodedData.ngay_hoanthanh);
                $('.nguoiduyet_congviec').text(decodedData.ten_nguoi_duyet_viec);  
                $('.ngayduyet_congviec').text(decodedData.ngay_duyet);    
                $('.ngaynhan_congviec').text(decodedData.ngay_lam);    
                $('.nguoihoanthanh_congviec').text(decodedData.ten_nguoi_hoan_thanh_viec);    
                $('.nguoitaocongviec').text(decodedData.ten_nguoi_tao_viec);    
                showImages3(decodedData.images1, '#container-images1');
                showImages3(decodedData.images2, '#container-images2');
            });
      $('#modal-default6').modal('show');
    });
    $('body').on('click', '#btn-delete', function () {
            let text = "Bạn có chắc muốn xóa.";
            var $id_baotrisuachua = $(this).data("id");
            if (confirm(text) == true) {
              $.ajax({
                url: "doc/main/commons/xoa_baotrisuachua.php", 
                type: "post",
                dataType: "json",          
                data: { id_baotrisuachua: $id_baotrisuachua },
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
      const toannhaSelect = $('.toannhaOptionselect');  
      const toannhaSelectBtn = $('.toannhaOptionselect .select-btn');
      const toannhaInput = $('#toannhaInputSearch');
        toannhaSelectBtn.on('click', function () {
          $.ajax({
                      url: "doc/main/commons/lay_all_toanha.php",
                      type: "post",
                      dataType: "json", 
                  }).done(function(toanha){
                    let arrayName = [];
                    arrayName.push({ id: "", ten: "Tất cả" });
                        for (const b of toanha) {
                            arrayName.push({ id: b.id_toanha, ten: b.ten_toanha });
                        }
                      addforcanho(arrayName, 'toannhaOptionSearch', 'toannhaSearch2', 'toannhaInputSearch', '.toannhaOptionselect');
                      toannhaSelect.toggleClass('active');
                      let Search = $('#toannhaSearch2');

                      Search.on('keyup', () => {
                          let toanha = $('#toannhaOptionSearch');
                          let searchedVal = Search.val().toLowerCase(); 
                          
                          let filteredResults = arrayName.filter(data => {
                              return data.ten.toLowerCase().includes(searchedVal);
                          });
                          let arr = filteredResults.map(data => `<li onclick="updateforcanho(this, 'toannhaSearch2', '${arrayName}', 'toannhaOptionSearch', 'toannhaInputSearch', '.toannhaOptionselect')">${data.ten}</li>`).join("");

                          toanha.html(arr ? arr : `<p class="text-center">Không có dữ liệu</p>`); 
                      });       
                  });

        });
        const phongSelect = $('.phongOptionselect');         
          const phongSelectBtn = $('.phongOptionselect .select-btn');
          const phongInput = $('#phongInputSearch');
        toannhaInput.on('change', function () {
          $.ajax({
                        url: "doc/main/commons/lay_phong_by_toanha.php",
                        type: "post",
                        dataType: "json", 
                        data: { idtoanha: toannhaInput.val() },
                    }).done(function(phong){
                      let arrayName = [];
                      arrayName.push({ id: "", ten: "Tất cả" });

                            for (const b of phong) {
                                arrayName.push({ id: b.id_canho_phong, ten: b.ten_canho_phong });
                            }
                            addforcanho(arrayName, 'phongOptionSearch', 'phongSearch3', 'phongInputSearch', '.phongOptionselect');
                        let Search = $('#phongSearch3');

                        Search.on('keyup', () => {
                            let phong = $('#phongOptionSearch');
                            let searchedVal = Search.val().toLowerCase(); 
                            
                            let filteredResults = arrayName.filter(data => {
                                return data.ten.toLowerCase().includes(searchedVal);
                            });
                            let arr = filteredResults.map(data => `<li onclick="updateforcanho(this, 'phongSearch3', '${arrayName}', 'phongOptionSearch', 'phongInputSearch', '.phongOptionselect')">${data.ten}</li>`).join("");

                            phong.html(arr ? arr : `<p class="text-center">Không có dữ liệu</p>`); 
                        }); 
                      
                  });
            phongSelectBtn.on('click', function () {
            phongSelect.toggleClass('active');
          });
          phongSelectBtn.children().first().text('Phòng');
          phongSelectBtn.removeClass('active');
          phongInput.val("");
        });
        const statusSelect = $('.statusOptionselect');         
        const statusSelectBtn = $('.statusOptionselect .select-btn');
        const statusInput = $('#statusInputSearch');

        statusSelectBtn.on('click', function () {
          let arrayName = ["Tất cả", "Chưa làm", "Đang làm", "Chờ duyệt", "Đã duyệt", "Không đạt", "Quá Hạn"];
                      addcounty(arrayName, 'statusOptionSearch', 'statusSearch', 'statusInputSearch', '.statusOptionselect');
                      statusSelect.toggleClass('active');
                      let Search = $('#statusSearch');

                      Search.on('keyup', () => {
                          let status = $('#statusOptionSearch');
                          let searchedVal = Search.val().toLowerCase(); 
                          
                          let filteredResults = arrayName.filter(data => {
                              return data.toLowerCase().includes(searchedVal);
                          });
                          let arr = filteredResults.map(data => `<li onclick="updateName(this, 'statusSearch', '${arrayName}', 'statusOptionSearch', 'statusInputSearch', '.statusOptionselect')">${data}</li>`).join("");

                          status.html(arr ? arr : `<p class="text-center">Không có dữ liệu</p>`); 
                      }); 
        });
        $(document).on('click', function (event) {
            const isClicktoanha = toannhaSelect.is(event.target) || toannhaSelect.has(event.target).length > 0 ;
            const isClickphong = phongSelect.is(event.target) || phongSelect.has(event.target).length > 0 ;
            const isClickStatus = statusSelect.is(event.target) || statusSelect.has(event.target).length > 0 ;

            if (!isClicktoanha) {
                toannhaSelect.removeClass('active');
            }if (!isClickphong) {
              phongSelect.removeClass('active');
            }if (!isClickStatus) {
              statusSelect.removeClass('active');
            }
        });

          let searchapartment = document.getElementById("search-input-apartment");
          let searchstartDate = document.getElementById("startDate");
          let searchoverdate = document.getElementById("overdate");
          let searchtoanha = document.querySelector(".toannhaOptionselect .select-btn input");
          let searchphong = document.querySelector(".phongOptionselect .select-btn input");
          let searchstatus = document.querySelector(".statusOptionselect .select-btn input");
          searchapartment.addEventListener('input', searchTable_tb_baotri_suachua);
          searchtoanha.addEventListener('change', searchTable_tb_baotri_suachua);
          searchphong.addEventListener('change', searchTable_tb_baotri_suachua);
          searchstatus.addEventListener('change', searchTable_tb_baotri_suachua);
          searchstartDate.addEventListener('input', searchTable_tb_baotri_suachua);
          searchoverdate.addEventListener('input', searchTable_tb_baotri_suachua);
      });


</script>