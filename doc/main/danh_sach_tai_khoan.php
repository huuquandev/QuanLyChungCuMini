
<main class="app-content">

<div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách tài khoản</a></li>
      </ul>
      <div id="clock"></div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">

            <div class="row element-button">
            <h4 data-v-38625d2e="" class="card-title">Tài khoản</h4>
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
                  <form action="" method="post" enctype="multipart/form-data" class="formadd">
                    <div class="modal-body">
                        <input type="hidden" id="txtOrderId" value="0" />                      
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
                                          <div class="add">
                                            <a href=""><i class="fas fa-plus"></i> Thêm tòa nhà</a>
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
                                          <div class="add">
                                            <a href=""><i class="fas fa-plus"></i> Thêm tầng</a>
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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__626__BV_label_"> Tiền thuê/Tháng <span class="text-danger"> (*) </span>
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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__630__BV_label_"> Tiền cọc/Phòng <span class="text-danger"> (*) </span>
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
                      </div>
                            <div class="row padding-style1-13">
                              <div class="my-1 col-12">
                                <div class="d-flex justify-space-between">
                                  <div class="d-flex justify-space-between font-small-4 font-weight-bolder text-uppercase text-success"> 2. Tài sản căn hộ/phòng </div>
                                  <button type="button" class="btn btn-icon ml-auto btn-success btn-sm btn-show-taisan">
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
                                  <div class="list-group1"></div>
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
            <div data-v-6ea5fee4="" class="row">
              <div data-v-6ea5fee4="" class="col">
                <div data-v-6ea5fee4="">
                  <fieldset class="form-group" id="__BVID__428">
                    <!---->
                    <div class="table_search">
                      <div class="wrapper vaitroOptionselect">
                                        <div class="select-btn">
                                          <span>Loại người dùng</span>
                                          <input type="hidden" id="vaitroInputSearch">
                                          <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="search-option">
                                          <div class="search">
                                            <input type="text" placeholder="Search" id="vaitroSearch2">
                                          </div>
                                          <ul class="options" id="vaitroOptionSearch">                              
                                          </ul>
                                        </div>
                         </div>
                    </div>

                  </fieldset>
                </div>
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
            <table class="table table-hover table-bordered js-copytextarea tbdata1" cellpadding="0" cellspacing="0" border="0"
              id="">
              <thead>
                      <tr>
                        <th width="10"><input type="checkbox" id="all"></th>
                        <th width="130">Mã tài khoản</th>
                        <th width="130">Họ tên</th>
                        <th width="130">Số điện thoại</th>
                        <th width="120">Email</th>
                        <th width="150">Loại tài khoản</th>
                        <th width="200">Đăng nhập lần cuối</th>
                        <th width="120">Tính năng</th>
                      </tr>
              </thead>
              <tbody id="tbhtml">
              <?php 
                    $sql = "SELECT tb_taikhoan.*, tb_vaitro.ten_vaitro 
                            FROM tb_taikhoan
                            JOIN tb_vaitro ON tb_vaitro.id_vaitro = tb_taikhoan.vai_tro";
                      $query = mysqli_query($conn, $sql);
                      if(mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_array($query)) {
                    ?>
                <tr id="row_<?php echo $row['id_taikhoan']; ?>">
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td class="ma_taikhoan"><?php echo $row['ma_taikhoan']; ?></td>
                  <td class="ten_hien_thi"><?php echo $row['ten_hien_thi']; ?></td>
                  <td class="so_dien_thoai"><?php echo $row['so_dien_thoai']; ?></td>
                  <td class="email"><?php echo $row['email']; ?></td>
                  <td class="ten_vaitro"><?php echo $row['ten_vaitro']; ?></td>
                  <td class="dangnhaplancuoi"><?php echo $row['dangnhaplancuoi']; ?></td>                            
                  <td class="table-td-center">
                    <button class="btn btn-danger btn-sm" type="button" title="Xóa" id="btn-delete" 
                    data-id="<?php echo $row['id_taikhoan']?>"><i class="fas fa-trash-alt"></i>
                    </button>
                    <button class="btn btn-warning btn-sm" type="button" title="Sửa" id="btn-edit"
                      data-toggle="modal" data-target="#ModalUP" data-id="<?= $row['id_taikhoan'] ?>"><i class="fas fa-edit"></i>
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
                        <h4 class="modal-title">Căn hộ/phòng</h4>
                    </div>
                    <form class="formedit">
                    <div class="modal-body">
                    <input type="hidden" value="" id="idphong">
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
                    </div>
                    <div class="row padding-style1-13">
                              <div class="my-1 col-12">
                                <div class="d-flex justify-space-between">
                                  <div class="d-flex justify-space-between font-small-4 font-weight-bolder text-uppercase text-success"> 2. Tài sản căn hộ/phòng </div>
                                  <button type="button" class="btn btn-icon ml-auto btn-success btn-sm btn-show-taisan">
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
                                  <div class="list-group2"></div>
                                </div>
                            </div> 
                    <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary btnClose" data-dismiss="modal">Hủy</button>
                                  <button type="button" class="btn btn-primary btnSave" data-dismiss="modal">Lưu</button>
                              </div>
                    </div>
                  </div>
                  </form>

            </div>   
        </div>
      </div>
    </div>
</main>
<script>
  $(document).ready(function () {
    $('body').on('click', '.btn-add', function () { 
            $('#modal-default').modal('show');
        });
  });
</script> 
