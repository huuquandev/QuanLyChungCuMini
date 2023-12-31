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
              <h2 class="mb-25 font-weight-bolder text-secondary" id="soluongtoanha"> <?php echo $count['COUNT(*)'] ?> </h2>
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
              <h2 class="mb-25 font-weight-bolder text-secondary"  id="trangthaihoatdong"> <?php echo $countON['COUNT(*)'] ?> </h2>
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
              <h2 class="mb-25 font-weight-bolder text-secondary"  id="trangthaikhonghoatdong"> <?php echo $countOFF['COUNT(*)'] ?> </h2>
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
            <h4 data-v-38625d2e="" class="card-title">Tòa nhà</h4>

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
                        <h4 class="modal-title">Dự án/Tòa nhà</h4>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data" class="formadd">
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
                              <div class="col-12">
                                <span>
                                  <fieldset class="form-group" id="__BVID__1001">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__1001__BV_label_"> Vị trí cụ thể <span class="text-danger">(*)</span>
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
                                      <input type="checkbox" name="trangthai" class="checkbox-switch" value="0" id="trangthai">
                                      <label class="custom-control-label" for="__BVID__1004"> Hoạt động </label>
                                    </div>
                                  </div>
                                </fieldset>
                              </div>
                            </div>           
                      </div>
                      <div class="row padding-style1-13">
                        <div class="my-1 col-12">
                          <div class="d-flex justify-space-between">
                            <div class="d-flex justify-space-between font-small-4 font-weight-bolder text-uppercase text-success"> 2. Dịch vụ tòa nhà </div>
                            <button type="button" class="btn btn-icon ml-auto btn-success btn-sm">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                              </svg>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col">
                            <div class="list-group"></div>
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
              
            </div>
            <div class="card-body">
            <div data-v-7f820fac="" class="row search-form">
              <!---->
              <div class="col-md-6 statustoanha">
                                   <div class="select-btn">
                                      <span>Trạng thái hoạt động</span>
                                      <input type="hidden" id="statusInput">
                                      <i class="fas fa-angle-down"></i>
                                  </div>
                                  <div class="search-option">
                                    <div class="search">
                                      <input type="text" placeholder="Search" id="statusSearch">
                                    </div>
                                    <ul class="options" id="status">
                                    </ul>
                                  </div>
                </div>
              <div data-v-7f820fac="" class="col-md-6 search-input-building">
                <input data-v-7f820fac="" type="text" placeholder="Tìm kiếm Tòa nhà..." class="form-control" id="__BVID__395">
              </div>
            </div>
            <table class="table table-hover table-bordered js-copytextarea tbdata1" cellpadding="0" cellspacing="0" border="0" id="">                   
              <thead>
                      <tr>
                        <th width="10"><input type="checkbox" id="all"></th>
                        <th width="110">Mã tòa nhà</th>
                        <th width="150">Tên tòa nhà</th>
                        <th width="100" class="text-center">Số tầng</th>
                        <th width="150">Vị trí</th>
                        <th width="110">Trạng thái</th>
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
                        <td class="diachi_chitiet"><?php echo $row['diachi_chitiet'] ?> </td>
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
                          <button class="btn btn-danger btn-sm" type="button" title="Xóa" id="btn-delete" data-id="<?php echo $row['id_toanha']  ?>"><i class="fas fa-trash-alt"></i>
                          </button>
                          <button class="btn btn-warning btn-sm" type="button" title="Sửa" id="btn-edit"
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
              <div class="footer-table">
              <div class="items-controller">
                <div data-v-38625d2e="" class="d-flex align-items-center mb-0 mt-1">
                    <span data-v-38625d2e="" class="text-nowrap"> Hiển thị tối đa </span>
                    <select data-v-38625d2e="" class="mx-1 custom-select" id="itemperpage">
                      <option value="5">5</option>
                      <option value="10">10</option>
                      <option value="15">15</option>
                      <option value="25">25</option>
                      <option value="30">30</option>
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
                                <h4 class="modal-title">Dự án/Tòa nhà</h4>
                            </div>
                            <input type="hidden" value="" id="idtoanha">

                            <form action="" method="post" enctype="multipart/form-data" class="formedit">
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
                                            <input type="checkbox" name="newtrangthai" class="checkbox-switch" value="0" id="newtrangthai">                     
                                              <label class="custom-control-label" for="newtrangthai"> Hoạt động </label>
                                            </div>
                                            
                                          </div>
                                        </fieldset>
                                      </div>
                                    </div>                  
                              </div>
                            <div class="row padding-style1-13">
                                <div class="my-1 col-12">
                                  <div class="d-flex justify-space-between">
                                    <div class="d-flex justify-space-between font-small-4 font-weight-bolder text-uppercase text-success"> 2. Dịch vụ tòa nhà </div>
                                    <button type="button" class="btn btn-icon ml-auto btn-success btn-sm">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                      </svg>
                                    </button>
                                  </div>
                                </div>
                              </div>
                              <div class="row padding-style1-13">
                                <div class="col">
                                  <div class="list-group">
                                    <div class="list-group-item">
                                      <div class="row">
                                        <div class="font-weight-bolder col"> 1. eqwe </div>
                                        <div class="col"> 12,312 đ/Người </div>
                                        <div class="col">
                                          <button type="button" class="btn btn px-1 btn-outline-danger ml-1 ml-sm-auto float-sm-right mr-sm-1 w-90 min-w-75 btn-outline-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-25 feather feather-x">
                                              <line x1="18" y1="6" x2="6" y2="18"></line>
                                              <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                          </button>
                                        </div>
                                      </div>
                                    </div>
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
      var totalRows = $('tbody tr').length;

  $('.alldata').text('trên tổng số ' + totalRows + ' kết quả');
    $(document).ready(function () {

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
        $('#sotang, #sotang2').on('keypress', function(event) {
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
          let form = $('.formadd');
          form.trigger('reset');
          $('#Province1Input').val("");
          $('#District1Input').val("");
          $('#Ward1Input').val("");

          $('#modal-default').modal('show');      
            

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
            if(isValid){
              var formData = new FormData();
            formData.append('tentoanha', $('#tentoanha').val());
            formData.append('diachi', $('#diachichitiet').val());
            formData.append('trangthai', $('#trangthai').val());
            formData.append('sotang', $('#sotang').val());           
            $.ajax({
                url: "doc/main/commons/them_toanha.php",
                type: "post",
                dataType: "json",
                processData: false,
                contentType: false,
                data: formData,
                success: function (response) {
                    if (response.success) {  
                        var toanha = parseInt($("#soluongtoanha").text()); 
                        var hoatdong = parseInt($("#trangthaihoatdong").text());
                        var khonghoatdong = parseInt($("#trangthaikhonghoatdong").text()); 
                        var classStatus;
                        var ClassDanger = "bg-danger"
                        $("#soluongtoanha").text(toanha + 1); 
                        if(response.iDtrangthai == 1){
                          $("#trangthaihoatdong").text(hoatdong + 1); 
                          classStatus = "bg-success"
                        }else{
                          $("#trangthaikhonghoatdong").text(khonghoatdong + 1); 
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
                        $('#tentoanha').val('');
                        $('#diachichitiet').val('');
                        $('#sotang').val('');
                        $('#trangthai').val(0);
                        $('#trangthai').prop('checked', false);             
                             
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
            $('#modal-default2').modal('show');
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
                $('#newtrangthai').val(decodedData.trangthai_toanha);
                if (decodedData.trangthai_toanha == 1) {
                    $('#newtrangthai').prop('checked', true);
                } else {
                    $('#newtrangthai').prop('checked', false);
                } 
            });

        });
        $('body').on('click', '.btnSave', function () {
          let isValid = true;

          $('.formedit input[required]').each(function() {
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
            formData.append('id', $('#idtoanha').val());
            formData.append('tentoanha', $('#newtentoanha').val());
            formData.append('diachi', $('#newdiachichitiet').val());
            formData.append('trangthai', $('#newtrangthai').val());
            formData.append('so_tang', $('#newsotang').val());
            formData.append('tinhthanh', $('#Province2Input').val());
            formData.append('quanhuyen', $('#District2Input').val());
            formData.append("phuongxa", $('#Ward2Input').val());

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
                        row.find('.diachi_chitiet').text(response.diachi.join(', '));
                        row.find('.trangthai_toanha span').html(response.trangthai);
                        var hoatdong = parseInt($("#trangthaihoatdong").text());
                        var khonghoatdong = parseInt($("#trangthaikhonghoatdong").text());
                        if(response.iDtrangthai == 1){
                          row.find('.trangthai_toanha span').removeClass('badge bg-danger')
                          row.find('.trangthai_toanha span').addClass('badge bg-success')   

                          $("#trangthaihoatdong").text(hoatdong + 1); 
                          $("#trangthaikhonghoatdong").text(khonghoatdong - 1); 
                        }else if((response.iDtrangthai == 0)){
                          row.find('.trangthai_toanha span').removeClass('badge bg-success')
                          row.find('.trangthai_toanha span').addClass('badge bg-danger')

                          
                          $("#trangthaihoatdong").text(hoatdong - 1); 
                          $("#trangthaikhonghoatdong").text(khonghoatdong + 1); 
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
            }
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
                        var toanha = parseInt($("#soluongtoanha").text()); 
                        var hoatdong = parseInt($("#trangthaihoatdong").text());
                        var khonghoatdong = parseInt($("#trangthaikhonghoatdong").text());    
                        $("#soluongtoanha").text(toanha - 1)    
                        var row = $('#row_' + response.id);
                        if(row.find('.trangthai_toanha span').text() == "Hoạt động"){
                          $("#trangthaihoatdong").text(hoatdong - 1)    
                        }else{
                          $("#trangthaikhonghoatdong").text(khonghoatdong - 1)    
                        }
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
        const statusSelect = $('.statustoanha');         
        const statusSelectBtn = $('.statustoanha .select-btn');
        statusSelectBtn.on('click', function () {
          let sSearch = $('#statusSearch');
          let array = ['Tất cả', 'Hoạt động', 'Không hoạt động'];
          addcounty(array, 'status', 'statusSearch', 'statusInput', '.statustoanha');
          statusSelect.toggleClass('active');
          sSearch.on('keyup', () => {
              let status = $('#status');
              let searchedVal = sSearch.val().toLowerCase(); 
              
              let filteredResults = array.filter(data => {
                  return data.toLowerCase().includes(searchedVal);
              });
              let arr = filteredResults.map(data => `<li onclick="updateName(this, 'statusSearch', '${array}', 'status', 'statusInput', '.statustoanha')">${data}</li>`).join("");

              status.html(arr ? arr : `<p class="text-center">Không có dữ liệu</p>`); 
          });
        });
        $(document).on('click', function (event) {
            const isClickStatus = statusSelect.is(event.target) || statusSelect.has(event.target).length > 0;

            if (!isClickStatus) {
                statusSelect.removeClass('active');
            }
        });

        $('.checkbox-switch').change(function () {
                                        if ($(this).is(':checked')) {
                                            $('.checkbox-switch').val("1");
                                        } else {
                                            $('.checkbox-switch').val("0");
                                        }                                       
        });
        const searchbuilding = document.querySelector(".search-input-building input");
        const selectedStatus = document.querySelector(".statustoanha .select-btn input");
        searchbuilding.addEventListener('input', searchTable_tb_toanhoa);
        selectedStatus.addEventListener('change', searchTable_tb_toanhoa);
    });
</script>
