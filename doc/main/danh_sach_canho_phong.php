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
          <h2 class="mb-25 font-weight-bolder text-secondary" id="tranthaithue"> <?php echo $count['COUNT(*)'] ?> </h2>
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
          <h2 class="mb-25 font-weight-bolder text-secondary" id="tranthaicoc"> <?php echo $countON['COUNT(*)'] ?> </h2>
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
          <h2 class="mb-25 font-weight-bolder text-secondary" id="tranthaitrong"> <?php echo $countOFF['COUNT(*)'] ?> </h2>
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
            <h4 data-v-38625d2e="" class="card-title">Căn hộ/Phòng</h4>
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
                        <h4 class="modal-title">Căn hộ/phòng</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="txtOrderId" value="0" />
                        <form class="formadd">
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
                                      <small class="text-danger"></small>

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
                                      <small class="text-danger"></small>

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
                                        <input id="tenphong1" type="text" placeholder="P.101" class="form-control" name="tenphong" required>
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
                                      <input type="text" id="tienthue1" placeholder="5,000,000" class="form-control" name="tienthue" required>
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
                                      <input type="text" id="tiencoc1" placeholder="5,000,000" class="form-control" name="tiencoc" required>
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
                                      <input type="text" id="dientich1" placeholder="30" class="form-control" name="dientich" required>
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
                                    <input type="text" id="soluongnguoio1" placeholder="30" class="form-control" name="soluongnguoio" required>
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
                                    <input type="checkbox" name="check-button" class="checkbox-switch" value="0" id="trangthai1">
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
                          <button type="button" class="btn btn-secondary btnClose" data-dismiss="modal">Hủy</button>
                          <button type="button" class="btn btn-success" id="btnAdd" name="btnAdd">Thêm</button>
                      </div>
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
              <tbody id="tbhtml">
              <?php 
                    $sql = "SELECT tb_canho_phong.*, tb_toanha.ten_toanha , tb_tang.ten_tang
                    FROM `tb_canho_phong`
                    JOIN tb_toanha ON tb_canho_phong.id_toanha = tb_toanha.id_toanha
                    JOIN tb_tang ON tb_canho_phong.id_tang = tb_tang.id_tang";
                      $query = mysqli_query($conn, $sql);
                      if(mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_array($query)) {
                    ?>
                <tr id="row_<?php echo $row['id_canho_phong']; ?>">
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td class="ma_phong"><?php echo $row['ma_canho_phong']; ?></td>
                  <td class="ten_can_phong">
                    <?php echo $row['ten_canho_phong']; ?>
                    <br>
                    <span class="text-muted ten_toanha"><?php echo $row['ten_toanha']; ?></span>
                    <br>
                    <span class="text-muted ten_tang">Tầng <?php echo $row['ten_tang']; ?> </span>
                  </td>
                  <td class="text-right tienthue"><?php echo convertToVietnameseCurrency($row['tienthue_canho_phong']); ?> đ</td>
                  <td class="text-right tiencoc"><?php echo convertToVietnameseCurrency($row['tiencoc_canho_phong']); ?> đ</td>
                  <td class="text-right dientich"><?php echo convertToVietnameseCurrency($row['dientich_canho_phong']); ?> m²</td>
                  <td class="trangthai_thue">
                      <?php 
                          if($row['trangthai_canho_phong'] == 1){
                            echo '<span class="badge bg-success" style="font-size: 13px;"><b class="span_pending">Đang thuê</b></span>';
                          }else if($row['trangthai_canho_phong'] == 0){
                            echo '<span class="badge bg-danger" style="font-size: 13px;"><b class="span_pending">Đang trống</b></span>';
                          }else if($row['trangthai_canho_phong'] == 2){
                            echo '<span class="badge bg-primary" style="font-size: 13px;"><b class="span_pending">Sắp chuyển đi</b></span>';
                          }
                        ?>                  
                  </td>
                  <td class="trangthai_hoatdong"> 
                      <?php 
                        if($row['tinhtrang_canho_phong'] == 1){
                          echo '<span class="badge bg-success" style="font-size: 13px;"><b class="span_pending">Hoạt động</b></span>';
                        }else if($row['tinhtrang_canho_phong'] == 0){
                          echo '<span class="badge bg-danger" style="font-size: 13px;"><b class="span_pending">Không hoạt động</b></span>';
                        }
                        else if($row['tinhtrang_canho_phong'] == 2){
                          echo '<span class="badge bg-primary" style="font-size: 13px;"><b class="span_pending">Đang sửa chữa</b></span>';
                        }
                      ?>                  
                  </td>               
                  <td class="table-td-center">
                    <button class="btn btn-danger btn-sm" type="button" title="Xóa" id="btn-delete" 
                    data-id="<?php echo $row['id_canho_phong']  ?>"><i class="fas fa-trash-alt"></i>
                    </button>
                    <button class="btn btn-warning btn-sm" type="button" title="Sửa" id="btn-edit"
                      data-toggle="modal" data-target="#ModalUP" data-id="<?= $row['id_canho_phong'] ?>"><i class="fas fa-edit"></i>
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
                      <option value="2">2</option>
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
                        <h4 class="modal-title">Căn hộ/phòng</h4>
                    </div>
                    <div class="modal-body">
                    <input type="hidden" value="" id="idphong">
                        <form class="formedit">
                            <div class="row">
                            <div class="col-md-4">
                                <span>
                                  <div>
                                    <fieldset class="form-group" id="__BVID__605">
                                      <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__605__BV_label_"> Tòa nhà <span class="text-danger"> (*) </span>
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
                                </span>
                              </div>
                              <div class="col-md-4">
                                <span>
                                  <div>
                                    <fieldset class="form-group" id="__BVID__614">
                                      <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__614__BV_label_"> Tầng <span class="text-danger"> (*) </span>
                                      </legend>
                                      <div class="wrapper tangoption2">
                                        <div class="select-btn">
                                          <span>Chọn tầng</span>
                                          <input type="hidden" id="tangInput2">
                                          <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="search-option">
                                          <div class="search">
                                            <input type="text" placeholder="Search" id="tangSearch2">
                                          </div>
                                          <ul class="options" id="tang2">                                
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
                                        <input id="tenphong2" type="text" placeholder="P.101" class="form-control" name="tenphong2" required> 
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
                                      <input type="text" id="tienthue2" placeholder="5,000,000" class="form-control" name="tienthue" required>
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
                                      <input type="text" id="tiencoc2" placeholder="5,000,000" class="form-control" name="tiencoc" required>
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
                                      <input type="text" id="dientich2" placeholder="30" class="form-control" name="dientich" required> 
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
                                    <input type="text" id="soluongnguoio2" placeholder="30" class="form-control" name="soluongnguoio" required>
                                     <!---->
                                    <!---->
                                    <!---->
                                  </div>
                                </fieldset>
                              </div>
                            </div>
                            <input type="hidden" value="" id="trangthaithue2">

                            <div class="row">
                              <div class="mt-2 col-12">
                              <fieldset class="form-group" id="__BVID__1003">
                                <!---->
                                <div>
                                  <div class="custom-control custom-control-inline custom-switch">
                                  <input type="checkbox" name="newtrangthai" class="checkbox-switch" value="" id="trangthai2">                                     
                                     <label class="custom-control-label" for="__BVID__1004"> Hoạt động </label>
                                  </div>
                                </div>
                              </fieldset>
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
      </div>
    </div>
</main>
<script>
      var totalRows = $('tbody tr').length;

      $('.alldata').text('trên tổng số ' + totalRows + ' kết quả');
  $(document).ready(function () {

        function formatNumberInput(selector) {
              $(selector).on('input', function(e) {
                  let value = e.target.value.replace(/[^\d]/g, ""); // Loại bỏ tất cả ký tự không phải số
                  if (!isNaN(value)) {
                      let formattedValue = new Intl.NumberFormat('vi-VN').format(value);
                      let finalValue = formattedValue.replace(/\./g, ",");
                      $(this).val(finalValue);
                  }
              });
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
          $('#tienthue1, #tiencoc1, #dientich1, #soluongnguoio1, #tienthue2,#tiencoc2, #dientich2, #soluongnguoio2').on('keypress', function(event) {
              var keyCode = event.which;

              if ((keyCode < 48 || keyCode > 57) && (keyCode !== 37 && keyCode !== 38 && keyCode !== 39 && keyCode !== 40)) {
                  event.preventDefault(); // Ngăn chặn ký tự được nhập
              }
        });
        $('.formadd input[required], .formedit input[required]').on('blur', function() {
            validateInput($(this));
        });
        $('.formadd input[required], .formedit input[required]').on('focus', function() {
            $(this).removeClass('is-invalid');
            $(this).closest('.form-group').find('small.text-danger').text('').hide();
        });
        $('.formadd .select-btn input').on('focus', function() {
            $(this).closest('.form-group').find('.select-btn').removeClass('is-invalid');
        });
        $('body').on('click', '.btn-add', function () { 
            let form = $('.formadd')
            form.trigger('reset');
            $('#modal-default').modal('show');
            formatNumberInput('#tiencoc1, #tienthue1');
            initializeDropdownsToanha_Tang(".toannhaOption","toannhaInput", "toannhaSearch", "toannha", ".tangoption","tangInput", "tangSearch", "tang");
        });
        $('body').on('click', '#btnAdd', function () {  
          let isValid = true;

          $('.formadd input[required]').each(function() {
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
          $('.formadd .select-btn input').each(function() {
            var smallElement = $(this).closest('.form-group').find('small.text-danger');
            var selectElement = $(this).closest('.form-group').find('.select-btn');
            console.log(selectElement);

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
            let ten_toanha = document.querySelector(".toannhaOption .select-btn span").textContent;
            let ten_tang = document.querySelector(".tangoption .select-btn").textContent;
            formData.append('ten_phong', $('#tenphong1').val());
            formData.append('id_toanha', $('#toannhaInput').val());
            formData.append('id_tang', $('#tangInput').val());
            formData.append('tien_thue', $('#tienthue1').val().replace(/,/g, ""));
            formData.append('tien_coc', $('#tiencoc1').val().replace(/,/g, ""));
            formData.append("dien_tich", $('#dientich1').val());   
            formData.append("soluong_nguoio", $('#soluongnguoio1').val());   
            formData.append("trang_thai", $('#trangthai1').val());   
            formData.append("ten_toanha", ten_toanha);   
            formData.append("ten_tang", ten_tang);
            $.ajax({
                url: "doc/main/commons/them_phong.php",
                type: "post",
                dataType: "json",
                processData: false,
                contentType: false,
                data: formData,
                success: function (response) {
                    if (response.success) {  
                        var classStatus;
                        if(response.iDtrangthai == 1){
                          classStatus = "bg-success"
                        }else{
                          classStatus = "bg-danger"
                        }
                        var str = "";
                        let tienthue = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(response.tien_thue).replace(/\./g, ",");
                        let tiencoc = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(response.tien_coc).replace(/\./g, ",");


                        str += `<tr id="row_${response.id}">
                        <td width="10"><input type="checkbox" name="check1" value="1"></td>
                        <td class="ma_phong">${response.maPhong}</td>
                        <td class="ten_can_phong">
                              ${response.ten_phong}
                            <br>
                            <span class="text-muted ten_toanha">${response.ten_toanha}</span>
                            <br>
                            <span class="text-muted ten_tang">${response.ten_tang}</span>
                        </td>
                        <td class="text-right">${tienthue}</td>
                        <td class="text-right">${tiencoc}</td>
                        <td class="text-right">${response.dien_tich} m²</td>
                        <td class="trangthai_thue">
                        <span class="badge bg-danger" style="font-size: 13px;"><b class="span_pending">${response.trangthaithue}</b></span>
                        </td>
                        <td class="trangthai_toanha">
                          <span class="badge ${classStatus}" style="font-size: 13px;"><b class="span_pending">${response.trangthaihoatdong}</b></span>
                        </td>
                        <td class="table-td-center">
                          <button class="btn btn-danger btn-sm" type="button" title="Xóa" id="btn-delete" 
                              data-id="${response.id}"><i class="fas fa-trash-alt"></i>
                          </button>
                          <button class="btn btn-warning btn-sm" type="button" title="Sửa" id="btn-edit"
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
                        $('#toannhaInput').val('');
                        $('#tangInput').val('');
                        $('#ten_phong1').val('');
                        $('#tienthue1').val('');
                        $('#tiencoc1').val('');
                        $('#dien_tich1').val('');
                        $('#soluong_nguoio1').val('');
                        $('#trangthai1').val(0);
                        $('#trangthai1').prop('checked', false);  
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
            formatNumberInput('#tiencoc2, #tienthue2');

            $.ajax({
                url: "doc/main/commons/lay_canhophong.php", 
                type: "post",
                dataType: "html",          
                data: { idphong: id },
              }).done(function(phong){
                var decodedData = JSON.parse(decodeURIComponent(phong));
                let tienthue = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(decodedData.tienthue_canho_phong).replace(/\./g, ",").replace("₫", "");
                let tiencoc = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(decodedData.tiencoc_canho_phong).replace(/\./g, ",").replace("₫", "");
                $('#idphong').val(id)
                $('#tenphong2').val(decodedData.ten_canho_phong)
                $('#tienthue2').val(tienthue)
                $('#tiencoc2').val(tiencoc)
                $('#dientich2').val(decodedData.dientich_canho_phong)
                $('#soluongnguoio2').val(decodedData.so_nguoi_o)
                $('#trangthai2').val(decodedData.tinhtrang_canho_phong)
                $('#trangthaithue2').val(decodedData.trangthai_canho_phong)

                if (decodedData.tinhtrang_canho_phong	== 1) {
                    $('#trangthai2').prop('checked', true);
                } else {
                    $('#trangthai2').prop('checked', false);
                }
                initializeDropdownsToanha_Tang(".toannhaOption2","toannhaInput2", "toannhaSearch2", "toannha2", ".tangoption2","tangInput2", "tangSearch2", "tang2", decodedData.ten_toanha, "Tầng " + decodedData.ten_tang);
            });
            $('#modal-default2').modal('show');

        });
        $('body').on('click', '.btnSave', function () {
          let isValid = true;
          $('.formedit input[required]').each(function() {
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
            let ten_tang = document.querySelector(".tangoption2 .select-btn").textContent;
            formData.append('id', $('#idphong').val());
            formData.append('ten_phong', $('#tenphong2').val());
            formData.append('id_toanha', $('#toannhaInput2').val());
            formData.append('id_tang', $('#tangInput2').val());
            formData.append('tien_thue', $('#tienthue2').val().replace(/,/g, ""));
            formData.append('tien_coc', $('#tiencoc2').val().replace(/,/g, ""));
            formData.append("dien_tich", $('#dientich2').val());   
            formData.append("soluong_nguoio", $('#soluongnguoio2').val());   
            formData.append("trang_thai", $('#trangthai2').val());   
            formData.append("ten_toanha", ten_toanha);   
            formData.append("ten_tang", ten_tang);
            formData.append("trang_thai_thue", $('#trangthaithue2').val());
            for (const pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
            }
            $.ajax({
                url: "doc/main/commons/sua_phong.php",
                type: "post",
                dataType: "json",
                processData: false,
                contentType: false,
                data: formData,
                success: function (response) {
                    if (response.success) {     
                      let tienthue = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(response.tien_thue);
                      let tiencoc = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(response.tien_coc);
                        var row = $('#row_' + response.id);
                        row.find('.ten_can_phong').contents().first().replaceWith(response.ten_phong);
                        row.find('.ten_toanha').text(response.ten_toanha);
                        row.find('.ten_tang').text(response.ten_tang);
                        row.find('.tienthue').text(tienthue);
                        row.find('.tiencoc').text(tiencoc);
                        row.find('.dientich').text(response.dien_tich + " m²");
                        row.find('.trangthai_thue span').html(response.trangthaithue);
                        row.find('.trangthai_hoatdong span').html(response.trangthaihoatdong);

                        if(response.iDtrangthaithue == 1){
                          row.find('.trangthai_toanha span').removeClass('badge bg-primary')
                          row.find('.trangthai_toanha span').removeClass('badge bg-danger')
                          row.find('.trangthai_toanha span').addClass('badge bg-success')                     
                        }else if((response.iDtrangthaithue == 0)){
                          row.find('.trangthai_toanha span').removeClass('badge bg-primary')
                          row.find('.trangthai_toanha span').removeClass('badge bg-success')
                          row.find('.trangthai_toanha span').addClass('badge bg-danger')
                        }else if(response.iDtrangthaithue == 2){
                          row.find('.trangthai_toanha span').removeClass('badge bg-success')
                          row.find('.trangthai_toanha span').removeClass('badge bg-danger')
                          row.find('.trangthai_toanha span').addClass('badge bg-primary')
                        }
                        
                        if(response.iDtrangthaihoatdong == 1){
                          row.find('.trangthai_hoatdong span').removeClass('badge bg-primary')
                          row.find('.trangthai_hoatdong span').removeClass('badge bg-danger')
                          row.find('.trangthai_hoatdong span').addClass('badge bg-success')                     
                        }else if((response.iDtrangthaihoatdong == 0)){
                          row.find('.trangthai_hoatdong span').removeClass('badge bg-primary')
                          row.find('.trangthai_hoatdong span').removeClass('badge bg-success')
                          row.find('.trangthai_hoatdong span').addClass('badge bg-danger')
                        }else if(response.iDtrangthaihoatdong == 2){
                          row.find('.trangthai_hoatdong span').removeClass('badge bg-success')
                          row.find('.trangthai_hoatdong span').removeClass('badge bg-danger')
                          row.find('.trangthai_hoatdong span').addClass('badge bg-primary')
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
        $('body').on('click', '#btn-delete', function () {
            let text = "Bạn có chắc muốn xóa.";
            var $idPhong = $(this).data("id");
            if (confirm(text) == true) {
              $.ajax({
                url: "doc/main/commons/xoa_phong.php", 
                type: "post",
                dataType: "json",          
                data: { idPhong: $idPhong },
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
          let arrayName = ["Tất cả", "Đang trống", "Đang thuê", "Sắp chuyển đi"];
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
          let arrayName = ["Tất cả", "Hoạt động", "Không hoạt động" , "Đang sửa chữa"];
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
        tb_toanha_selectedStatusthue.addEventListener('change', searchTable_tb_can_phong);
        tb_toanha_selectedStatushoatdong.addEventListener('change', searchTable_tb_can_phong);

        $('.checkbox-switch').change(function () {
                                        if ($(this).is(':checked')) {
                                            $('.checkbox-switch').val("1");
                                        } else {
                                            $('.checkbox-switch').val("0");
                                        }                                       
        });
  });


</script> 
