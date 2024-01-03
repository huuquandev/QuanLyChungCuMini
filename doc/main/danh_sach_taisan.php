<?php 
   include_once './function.php';

   $sqlcount = "SELECT * FROM tb_taisan;";
   $sqlcountToanha= "SELECT * FROM tb_taisan_canhophong
   JOIN tb_canho_phong ON tb_canho_phong.id_canho_phong = tb_taisan_canhophong.id_canho_phong ";

   $querycount = mysqli_query($conn, $sqlcount);
   $sum  = 0;
   while ($row = mysqli_fetch_array($querycount)) {
      $sum += $row['gia_tri'] * $row['so_luong'];
   }
   $querycountToanha = mysqli_query($conn, $sqlcountToanha);

  $count = mysqli_fetch_array($querycount);
  $countcountToanha = mysqli_fetch_array($querycountToanha);
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
                                          <input type="text" placeholder="2025-11-12" data-input="true" id="date4" class="form-control flatpickr-input">
                                          <small class="text-danger"></small>
                                          <!---->
                                          <!---->
                                          <!---->
                                          </div>
                                      </fieldset>
                                      </div>
                                   
                                  </div>
                                  <div class="row"></div>
                                  <fieldset class="form-group" id="__BVID__728">
                                      <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__728__BV_label_">Mô tả tài sản</legend>
                                      <div>
                                      <textarea id="ghichu1" placeholder="Mô tả" rows="3" wrap="soft" class="form-control"></textarea>
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
                  <fieldset class="form-group col-5" id="__BVID__428" style="float: right;">
                    <input data-v-0fee43d8="" type="text" placeholder="Tìm kiếm" class="form-control" id="search-input-apartment">
                  </fieldset>
                  <!---->
                </div>
              </div>
            </div>
            <table class="table table-hover table-bordered js-copytextarea tbdata1" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable">
              <thead>
                <tr>
                  <th width="10"><input type="checkbox" id="all"></th>
                  <th width="150">Mã tài sản</th>
                  <th width="150">Tên tài sản</th>
                  <th width="300">Mô tả</th>
                  <th class="text-center">Số lượng</th>
                  <th class="text-center">Tình trạng</th>
                  <th class="text-center">Giá trị</th>
                  <th width="110">Tính năng</th>
                </tr>
              </thead>
              <tbody id="tbhtml">
                  <?php 
                      $sql = "SELECT tb_taisan.* FROM tb_taisan";
                      $query = mysqli_query($conn, $sql);
                      if(mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_array($query)) {
                    ?>
                <tr id="row_<?= $row['id_taisan'];  ?>">
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td class="mataisan"><?php echo $row['ma_taisan']; ?></td>
                  <td class="tentaisan"><?php echo $row['ten_taisan']; ?></td>
                  <td class="motataisan"><?php echo $row['ghi_chu']; ?></td>
                  <td class="soluongtaisan text-center"><?php echo $row['so_luong']; ?></td>
                  <td class="tinhtrang text-center"><?php echo $row['tinh_trang']; ?></td>
                  <td class="giatri text-center"><?php echo convertToVietnameseCurrency($row['gia_tri']);?>đ</td>
                  <td class="table-td-center">
                    <button class="btn btn-danger btn-sm" type="button" title="Xóa"
                      onclick="myFunction(this)" data-id="<?php echo $row['id_taisan']; ?>" id="btn-delete"><i class="fas fa-trash-alt"></i>
                    </button>
                    <button class="btn btn-warning btn-sm" type="button" title="Sửa" id="btn-edit"
                      data-toggle="modal" data-target="#ModalUP" data-id="<?php echo $row['id_taisan']; ?>"><i class="fas fa-edit"></i>
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
                                <h4 class="modal-title">Tài sản</h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="idtaisan" value="0" />
                                <form class="formedittaisan">
                                <div class="row">
                                    <div class="col-md-4">
                                    <span>
                                        <fieldset class="form-group" id="__BVID__656">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__656__BV_label_"> Tên tài sản <span class="text-danger"> (*) </span>
                                        </legend>
                                        <div>
                                            <input id="tentaisan2" placeholder="Tủ lạnh" type="text" class="form-control" required>
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
                                        <input id="thuonghieu2" placeholder="Panasonic" type="text" class="form-control">
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
                                        <input id="mausac2" placeholder="Đen" type="text" class="form-control">
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
                                        <input id="namsanxuat2" placeholder="2019" type="text" class="form-control">
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
                                        <input id="xuatxu2" placeholder="Việt nam" type="text" class="form-control">
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
                                        <input type="text" placeholder="9,000,000" value="" id="giatri2" class="form-control">
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
                                                <input type="text" placeholder="13" id="soluong2" class="form-control" required>
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
                                        <input id="tinhtrang2" placeholder="Mới" type="text" class="form-control">
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
                                        <input type="text" placeholder="2025-11-12" data-input="true" id="date5" class="form-control flatpickr-input">
                                        <small class="text-danger"></small>
                                        <!---->
                                        <!---->
                                        <!---->
                                        </div>
                                    </fieldset>
                                    </div>
                                   
                                </div>
                                <div class="row"></div>
                                <fieldset class="form-group" id="__BVID__728">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__728__BV_label_">Mô tả tài sản</legend>
                                    <div>
                                    <textarea id="ghichu2" placeholder="Mô tả" rows="3" wrap="soft" class="form-control"></textarea>
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
                                            <label data-v-0f357511="" for="file-input2" style="width: 100%; height: 100%;">
                                                <div data-v-0f357511="" class="empty-img thumbnail">
                                                  <svg data-v-0f357511="" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" for="file-input2" variant="primary" class="feather feather-plus">
                                                      <line data-v-0f357511="" x1="12" y1="5" x2="12" y2="19"></line>
                                                      <line data-v-0f357511="" x1="5" y1="12" x2="19" y2="12"></line>
                                                  </svg>
                                                </div>
                                            </label>
                                            <input data-v-0f357511="" id="file-input2" type="file" name="file-input-2" accept="application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation,application/pdf,image/png,image/jpeg,audio/mpeg,video/mp4,video/mpeg" multiple="multiple" class="d-none">
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
                                      <img data-v-1f5e929c="" src="../../images/images_taisan/${e}" alt="Image" class="bg-white thumbnail img-fluid w-100 m1" blank="true" style="width: 100% !important; height: 100% !important; min-width: 80px; min-height: 80px;">
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
      $('#soluong1, #soluong2').on('keypress', function(event) {
            var keyCode = event.which;
            if ((keyCode < 48 || keyCode > 57) && (keyCode !== 37 && keyCode !== 38 && keyCode !== 39 && keyCode !== 40)) {
                event.preventDefault(); // Ngăn chặn ký tự được nhập
            }
      });
        $('.formaddtaisan input[required]').on('blur', function() {
              validateInput($(this));
        });
        $('body').on('click', '.btn-add', function () {       
            let form = $('.formaddtaisan')
            form.trigger('reset');
            files = []; 
            showImages(files);
            formatNumberInput('#giatri1');
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
                formData.append('ten_taisan', $('#tentaisan1').val());
                formData.append('thuong_hieu', $('#thuonghieu1').val());
                formData.append('mau_sac', $('#mausac1').val());
                formData.append('nam_sanxuat', $('#namsanxuat1').val());
                formData.append("xuat_xu", $('#xuatxu1').val());   
                formData.append("gia_tri", $('#giatri1').val().replace(/,/g, "")); 
                formData.append("so_luong", $('#soluong1').val());   
                formData.append("tinh_trang", $('#tinhtrang1').val());   
                formData.append("han_baohanh", $('#date4').val());   
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
                      console.log(response);          
                        if (response.success) { 
                          response.Data.forEach(value => {
                          let gia_tri = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(value.gia_tri).replace(/\./g, ",");
                          var str = "";

                          str += `<tr id="row_${value.id}">
                              <td><input type="checkbox" name="check1" value="1"></td>
                              <td class="mataisan">${value.ma_Taisan}</td>
                              <td class="tentaisan">${value.ten_taisan}</td>
                              <td class="motataisan">${value.ghi_chu}</td>
                              <td class="soluongtaisan text-center">${value.so_luong}</td>
                              <td class="tinhtrang text-center">${value.tinh_trang}</td>
                              <td class="giatri text-center">${gia_tri}</td>
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
        $('body').on('click', '.btnClose', function () {
            $('#modal-default').modal('hide');        
        });
        $('body').on('click', '#btn-edit', function () { 
            formatNumberInput('#giatri2');
                var id = $(this).data("id");
                $.ajax({
                    url: "doc/main/commons/lay_taisan.php", 
                    type: "post",
                    dataType: "html",          
                    data: { id_taisan: id },
                  }).done(function(taisan){
                    var decodedData = JSON.parse(decodeURIComponent(taisan));
                    let giatri = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(decodedData.gia_tri).replace(/\./g, ",").replace("₫", "");

                    $('#idtaisan').val(decodedData.id_taisan);
                    $('#tentaisan2').val(decodedData.ten_taisan);
                    $('#thuonghieu2').val(decodedData.thuong_hieu);
                    $('#mausac2').val(decodedData.mau_sac);
                    $('#namsanxuat2').val(decodedData.nam_sanxuat);
                    $('#xuatxu2').val(decodedData.xuat_xu);
                    $('#giatri2').val(giatri); 
                    $('#soluong2').val(decodedData.so_luong);
                    $('#tinhtrang2').val(decodedData.tinh_trang);
                    $('#date5').val(decodedData.thoihanbaohanh);
                    $('#ghichu2').val(decodedData.ghi_chu);
                    files2 = decodedData.images1;
                    newimages = [];
                    showImages2(files2, newimages);
                });

                $('#modal-default2').modal('show');
        });
        $('body').on('click', '.btnSave', function () {
            let isValid = true;
            $('.formedittaisan input[required]').each(function() {
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
                  
                  formData.append('id_taisan', $('#idtaisan').val());
                  formData.append('so_luong', $('#soluong2').val());
                  formData.append('ten_taisan', $('#tentaisan2').val());
                  formData.append('thuong_hieu', $('#thuonghieu2').val());
                  formData.append('mau_sac', $('#mausac2').val());
                  formData.append('nam_sanxuat', $('#namsanxuat2').val());
                  formData.append("xuat_xu", $('#xuatxu2').val());   
                  formData.append("gia_tri", $('#giatri2').val().replace(/,/g, "")); 
                  formData.append("so_luong", $('#soluong2').val());   
                  formData.append("tinh_trang", $('#tinhtrang2').val());   
                  formData.append("han_baohanh", $('#date5').val());   
                  formData.append("ghi_chu", $('#ghichu2').val());
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
                    url: "doc/main/commons/sua_taisan.php",
                    type: "post",
                    dataType: "json",
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function (response) {
                        if (response.success) {     
                          let gia_tri = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(response.gia_tri).replace(/\./g, ",");
                            var row = $('#row_' + response.id);
                            row.find('.tentaisan').text(response.ten_taisan);
                            row.find('.tenkho').text(response.ten_kho);
                            row.find('.motataisan').text(response.ghi_chu);
                            row.find('.soluongtaisan').text(response.so_luong);
                            row.find('.tinhtrang').text(response.tinh_trang);
                            row.find('.giatri').text(gia_tri);
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
            var $id_taisan = $(this).data("id");
            if (confirm(text) == true) {
              $.ajax({
                url: "doc/main/commons/xoa_taisan.php", 
                type: "post",
                dataType: "json",          
                data: { id_taisan: $id_taisan },
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
          let searchapartment = document.getElementById("search-input-apartment");

          searchapartment.addEventListener('input', searchTable_tb_tai_san);
    });   
</script>