<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách dân cư</b></a></li>
      </ul>
      <div id="clock"></div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="row element-button">
              <div class="card_body">
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" href="#" title="Thêm"><i class="fas fa-plus"></i>
                Thêm dân cư</a>
               </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i
                      class="fas fa-file-upload"></i> Tải từ file</a>
                </div>

                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                      class="fas fa-print"></i> In dữ liệu</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i
                      class="fas fa-copy"></i> Sao chép</a>
                </div>

                <div class="col-sm-2">
                  <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                      class="fas fa-file-pdf"></i> Xuất PDF</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                      class="fas fa-trash-alt"></i> Xóa tất cả </a>
                </div>
                <div class="modal fade bd-example-modal-lg" id="modal-default">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thêm dân cư</h4>
                    </div>
                    <form action="./doc/main/commons/them_dan_cu.php" method="post" enctype="multipart/form-data" id="myForm">
                      <div class="modal-body">
                          <input type="hidden" id="txtOrderId" value="0" />
            
                          <div class="row">
                              <div class="col-12">
                                <span>
                                  <fieldset class="form-group" id="__BVID__977">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__977__BV_label_"> Tên dân cư <span class="text-danger">(*)</span>
                                    </legend>
                                    <div>
                                      <div role="group" class="input-group">
                                        <!---->
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 448 512"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                                          </div>
                                        </div>
                                        <input id="name" type="text" placeholder="Nguyễn Văn A" class="form-control" name="tendancu" required>
                                        
                                        <!---->
                                      </div>
                                     

                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>
                                  </fieldset>
                                </span>
                              </div>
                              <div class="mt-2 col-12">
                                <h5>Thông tin quan hệ</h5>
                              </div>
                              <!---->
                              <div class="col-md-8">
                                <span>
                                  <fieldset class="form-group" id="__BVID__981">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__981__BV_label_"> Chủ hộ<span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable" id="province">
                                        <div id="vs33__combobox" role="combobox" aria-expanded="false" aria-owns="vs33__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                        <div class="vs__selected-options">
                                          
                                          <select name="name_dan_cu" id="name_dan_cu"aria-autocomplete="list" aria-labelledby="vs33__combobox" aria-controls="vs33__listbox" autocomplete="off" class="vs__search"  
                                          onchange="updateInputValue()" required>
                                                <option value="" hidden="">Chọn người thuê</option>
                                                <?php
                                                
                                                $sql="SELECT d.`cccd`,d.`id_dancu`,d.`ho_ten`,c.`ten_canho_phong`,c.`id_canho_phong`,t.`ten_toanha`
                                                FROM `tb_canho_phong` AS c
                                                INNER JOIN `tb_toanha` AS t ON t.`id_toanha` = c.`id_toanha`
                                                INNER JOIN `tb_hopdong` AS h ON c.`id_canho_phong` = h.`id_canho_phong`
                                                INNER JOIN `tb_hopdong_chuho` AS ch ON ch.`id_hopdong` = h.`id`
                                                INNER JOIN `tb_dancu` AS d ON ch.`id_chuho` = d.`id_dancu`  ";
                                                $query=mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($query) > 0){
                                                  while ($row = mysqli_fetch_array($query)) {
                                                  echo '<option value="'.$row['id_dancu'].'" >Tên: '.$row['ho_ten'].'-Cccd: '.$row['cccd']. '-Tòa: '.$row['ten_toanha'].'-Phòng: '.$row['ten_canho_phong'].'</option>';
                                                }}
                                                ?>                                   
                                            </select>
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
                                  <fieldset class="form-group" id="__BVID__981">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__981__BV_label_">Quan hệ  <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable" id="province">
                                        <div id="vs33__combobox" role="combobox" aria-expanded="false" aria-owns="vs33__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                            <select name="quanhe" id="quanhe"aria-autocomplete="list" aria-labelledby="vs33__combobox" aria-controls="vs33__listbox" autocomplete="off" class="vs__search"  >
                                              <option value="">Mối quan hệ</option>
                                              <option value="Vợ">Vợ</option>
                                              <option value="Con Trai">Con Trai</option>
                                              <option value="Con Gái">Con Gái</option>
                                              <option value="Ba vợ">Ba vợ</option>
                                              <option value="Mẹ vợ">Mẹ vợ</option>
                                              <option value="Ba chồng">Ba chồng</option>
                                              <option value="Mẹ chồng">Mẹ chồng</option>
                                              <option value="Chị gái">Chị gái</option>
                                              <option value="Anh trai">Anh trai</option>
                                              <option value="Em trai">Em trai</option>
                                              <option value="Bạn bè">Bạn bè</option>
                                              <option value="Khác">Khác</option>
                                            </select>
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
           

                              <div class="mt-2 col-12">
                                <h5>Thông tin cá nhân</h5>
                              </div>
                              <!---->
                              <div class="col-md-4">
                                <span>
                                  <fieldset class="form-group" id="__BVID__981">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__981__BV_label_"> Giới tính <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable" id="province">
                                        <div id="vs33__combobox" role="combobox" aria-expanded="false" aria-owns="vs33__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                            <select name="gioitinh" id="gioitinh"aria-autocomplete="list" aria-labelledby="vs33__combobox" aria-controls="vs33__listbox" autocomplete="off" class="vs__search"  >
                                              <option value="">Giới tính</option>
                                              <option value="nam">Nam</option>
                                              <option value="nu">Nữ</option>
                                              <option value="khac">Khác</option>
                                            </select>
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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__988__BV_label_"> Số điện thoại <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="district">
                                        <div id="vs34__combobox" role="combobox" aria-expanded="false" aria-owns="vs34__listbox" aria-label="Search for option" class="" height="70%">
                                        <input id="sdt" type="number" placeholder="0912345678" class="form-control" name="sdt" required>


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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__995__BV_label_"> Ngày sinh <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="ward">
                                        <div id="vs35__combobox" role="combobox" aria-expanded="false" aria-owns="vs35__listbox" aria-label="Search for option" class="">
                                        <input id="ngaysinh" type="date" class="form-control" name="ngaysinh" required>

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
                              <div class="col-md-12" id="cccd1">
                              <span>
                                  <fieldset class="form-group" id="__BVID__1001">
                              <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__977__BV_label_">Cccd/Hộ chiếu <span class="text-danger">(*)</span>
                                    </legend>
                                      <div role="group" class="input-group">
                                        <!---->
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 96l576 0c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96zm0 32V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128H0zM64 405.3c0-29.5 23.9-53.3 53.3-53.3H234.7c29.5 0 53.3 23.9 53.3 53.3c0 5.9-4.8 10.7-10.7 10.7H74.7c-5.9 0-10.7-4.8-10.7-10.7zM176 192a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm176 16c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16z"/></svg>
                                          </div>
                                        </div>
                                        <input id="cccd" type="text" placeholder="Cccd/hộ chiếu" class="form-control" name="cccd"   >
                                        <!---->
                                      </div>
                                      <small class="text-danger"></small>
                                  </fieldset>
                                </span>
                              </div>
                              <div class="col-12">
                                <span>
                                  <fieldset class="form-group" id="__BVID__1001">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__1001__BV_label_"> Email <span class="text-danger">(*)</span>
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
                                        <input id="email" type="text" placeholder="hoten@gmail.com" class="form-control" name="email" required>
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
                                        <input id="addressDetail" type="text" placeholder="91 Nguyễn Chí Thanh" class="form-control" name="addressDetail" required>
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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__977__BV_label_"> Ảnh đại điện<span class="text-danger"></span>
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
                                        <input id="file_img" type="file" placeholder="10" class="form-control" name="file_img" >
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
            
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btnClose" data-dismiss="modal">Hủy</button>
                          <button type="submit" class="btn btn-success" id="btn-Add" name="btnAdd">Thêm</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              </div>  
              <div class="col-4" style="margin-left: 67%;">
                                <span>
                                  <fieldset class="form-group" id="__BVID__1001">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__1001__BV_label_"> Tìm Kiếm
                                    </legend>
                                    <div>
                                      <div role="group" class="input-group">
                                        <!---->
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                          <svg xmlns="http://www.w3.org/2000/svg" height="14px" width="14px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                                          </div>
                                        </div>
                                        <input id="searchInput1" type="text" placeholder="Nhập thông tin muốn tìm" class="form-control" name="search" >
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
            
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable1">
              <thead>
                <tr>
                  <th width="10"><input type="checkbox" id="all"></th>
                  <th width="10">STT</th>
                  <th width="10">Ảnh dân cư</th>
                  <th width="20" >Hộ chiếu/ CCCD</th>
                  <th width="50" >Tên dân cư</th>
                  <th width="20" >SĐT</th>
                  <th width="20">Quan hệ</th>
                  <th width="20" > Giới tính</th>
                  <th width="100">Địa chỉ</th>
                  <th width="100">Ngày sinh</th>
                  <th width="100">Chỉnh sửa</th></tr>
                </tr>
              </thead>
              <tbody id="">
              <?php
$i = 1;

// Lấy danh sách 'chủ hộ' và sắp xếp theo id_dancu
$sql = "SELECT
            ho_ten,id_dancu
        FROM
            tb_dancu
        WHERE
            quan_he = 'chủ hộ' 
        ORDER BY
            id_dancu ASC;";

$query = mysqli_query($conn, $sql);

if(mysqli_num_rows($query) > 0){
    while ($row1 = mysqli_fetch_array($query)) {
        // Lấy thông tin các thành viên trong gia đình có id_chu_ho là id_dancu của 'chủ hộ'
        $sql1 = "SELECT
                    id_dancu,
                    ho_ten,
                    so_dien_thoai,
                    cccd,
                    email,
                    gioi_tinh,
                    dia_chi,
                    ngay_sinh,
                    hinh_anh,
                    id_chu_ho,
                    quan_he
                FROM
                    tb_dancu
               
                ORDER BY
                    CASE WHEN quan_he = 'chủ hộ' THEN 0 ELSE 1 END,
                    id_dancu ASC;";

        $query1 = mysqli_query($conn, $sql1);

        if(mysqli_num_rows($query1) > 0){
            while ($row = mysqli_fetch_array($query1)) {
              $weight =$row['quan_he']=='chủ hộ'? 'style="font-weight: bold;"':"" ;
            ?>
                <tr <?php echo $weight;?>>
                    <td width="10">
                        <input type="checkbox" name="check1" value="1">
                    </td>
                    <td><?php echo $i++; ?></td>
                    <td>

                              <?php 
                                  $imagePath = "./" . $row['hinh_anh'];

                                  // Kiểm tra xem hình ảnh có tồn tại hay không
                                  if (file_exists($imagePath)) {
                                      echo '<img style="width: 100px; height: 100px; border-radius: 20%;" src="./' . $imagePath . '" alt="">';
                                  } else {
                                    $ten = $row['ho_ten'];

                                    // Chia chuỗi thành mảng các từ
                                    $mangTen = explode(' ', $ten);
                                    $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                                    
                                    // Lấy phần tử cuối cùng của mảng
                                    $tuCuoiCung = end($mangTen);
                                    
                                    echo '<div style="width: 100px;
                                                    height: 100px;
                                                    position: relative;
                                                    border-radius: 20%;
                                                    background:  '.$color.';
                                                    text-align: center;
                                                    line-height: 100px;">
                                            <p style="
                                                position: absolute;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                            ">'.$tuCuoiCung.'</p>
                                        </div>';
                                  }
                              ?>
                          </td>

  
                    <td class="search_td"><?php echo $row['cccd']; ?></td>
                    <td class="search_td"><?php echo $row['ho_ten']; ?></td>
                    <td class="search_td"><?php echo $row['so_dien_thoai']; ?></td>
                    <td class="search_td"><?php echo 'Quan hệ:'.$row['quan_he'].' với '.$row1['ho_ten']; ?></td>
                    <td>
                        <?php 
                            $gioitinh = 'chưa xác định';
                            if($row['gioi_tinh'] == 0){
                                $gioitinh = 'Nữ';
                            } elseif($row['gioi_tinh'] == 1){
                                $gioitinh = 'Nam';
                            } else{
                                $gioitinh = 'Khác';
                            }
                            echo $gioitinh; 
                        ?>
                    </td>
                    <td><?php echo $row['dia_chi']; ?></td>
                    <td><?php echo $row['ngay_sinh']; ?></td>
                    <td class="table-td-center">
                        <button class="btn btn-primary btn-sm trash" type="button" title="Xóa" id="btn-delete" data-id="<?php echo $row['id_dancu']; ?>">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                        <a class="btn btn-primary " href="home.php?title=quanlydancu&id=<?php echo $row['cccd']?>" data-target="#ModalUP">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                </tr> 
<?php 
            } 
        } 

    }
}
?>

                  </tbody>
            </table>
            <div id="noResultsMessage" style="display: block;margin: 0 auto;text-align: center;">There is no person with this name</div>
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
            initializeDropdowns("Province1", "District1", "Ward1");
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
                url: "./doc/main/commons/them_dan_cu.php", 
                type: "post",
                dataType: "html",          
                data: { idtoanha: id },
              }).done(function(toanha){
                var decodedData = JSON.parse(decodeURIComponent(toanha));
                $('#idtoanha').val(id)
                $('#newtentoanha').val(decodedData.ten_toanha)
                $('#newdiachichitiet').val(decodedData.ten_toanha)
                $('#newsotang').val(decodedData.so_tang)
                if (decodedData.trangthai_toanha == 1) {
                    $('#newtrangthai').prop('checked', true);
                } else {
                    $('#newtrangthai').prop('checked', false);
                }

                initializeDropdowns("Province2", "District2", "Ward2", decodedData.tinhthanh, decodedData.quanhuyen, decodedData.phuongxa);

            });

        });



        $('body').on('click', '.btnClose', function () {
            var id = $(this).data("id");
            $('#modal-default2').modal('hide');
        });
        $('body').on('click', '#btn-delete', function () {
            let text = "Bạn có chắc muốn xóa.";
            var $idtoanha = $(this).data("id");
            if (confirm(text) == true) {
              $.ajax({
                url: "doc/main/commons/xoa_dan_cu.php", 
                type: "post",
                dataType: "html",          
                data: { idtoanha: $idtoanha },
              }).done(function(ketqua){
                alert(ketqua);
                window.location.href = "home.php?title=quanlydancu";
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
<script>
    // Hàm được gọi khi giá trị của dropdown thay đổi
    $(document).ready(function() {
        $('#name_dan_cu').change(function() {
            // Lấy giá trị của option được chọn
            var selectedValue = $(this).val();

            // Cập nhật giá trị của trường ẩn (nếu cần)
            $('#selectedOption').val(selectedValue);

            // Thực hiện AJAX request để gửi dữ liệu lên server và nhận kết quả
            $.ajax({
                type: 'POST',
                url: 'danh_sach_dancu.php',
                data: { name_dan_cu: selectedValue },
                success: function(response) {
                    // Cập nhật giá trị của ô nhập liệu
                    $('#sdt').val(response);

                    // Hiển thị kết quả trong khu vực resultContainer (nếu cần)
                    $('#resultContainer').html("Kết quả: " + response);
                }
            });
        });
    });
</script>
<script>

        function validateCCCD() {
            // Lấy giá trị của CCCD
            var cccdValue = document.getElementById("cccd").value.trim();

            // Kiểm tra độ dài của giá trị CCCD nếu có
            var minLength = 10;
            var maxLength = 15;

            if (cccdValue.length < minLength || cccdValue.length > maxLength) {
                alert("CCCD phải có độ dài từ " + minLength + " đến " + maxLength + " ký tự");
                return false;
            }

            return true;
        }
    </script>

<script>

document.getElementById("sdt").addEventListener("input", function() {
  var inputValue = this.value.trim();
  var minLength = 9;
  var maxLength = 10;

  if (inputValue.length < minLength) {
    this.setCustomValidity("Độ dài phải ít nhất " + minLength + " ký tự");
  } else if (inputValue.length > maxLength) {
    this.setCustomValidity("Độ dài không được vượt quá " + maxLength + " ký tự");
  } else {
    this.setCustomValidity("");
  }
});
document.getElementById("sdt").addEventListener("input", function() {
  var inputValue = this.value.trim();
  var minLength = 9;
  var maxLength = 10;

  if (inputValue.length < minLength) {
    this.setCustomValidity("Độ dài phải ít nhất " + minLength + " ký tự");
  } else if (inputValue.length > maxLength) {
    this.setCustomValidity("Độ dài không được vượt quá " + maxLength + " ký tự");
  } else {
    this.setCustomValidity("");
  }
});

</script>
<script>
  // Lắng nghe sự kiện thay đổi trên ô ngày sinh
  document.getElementById('ngaysinh').addEventListener('change', function() {
    // Lấy giá trị ngày sinh từ input
    var ngaySinhInput = document.getElementById('ngaysinh').value;

    // Chuyển đổi giá trị ngày sinh thành đối tượng Date
    var ngaySinhDate = new Date(ngaySinhInput);

    // Lấy ngày hiện tại
    var ngayHienTai = new Date();

    // Tính số tuổi bằng cách lấy hiệu của năm hiện tại và năm sinh
    var soTuoi = ngayHienTai.getFullYear() - ngaySinhDate.getFullYear();

    // Lấy ô CCCD
    var cccdInput = document.getElementById('cccd1');

    // Kiểm tra nếu số tuổi nhỏ hơn 16, ẩn ô CCCD và xóa giá trị nhập vào nếu có
    var cccdInput1 = document.getElementById('cccd');
    if (soTuoi < 16) {
      cccdInput.style.display = 'none';
      cccdInput1.value = ''; // Xóa giá trị nhập vào nếu có
    } else {
      cccdInput.style.display = 'block';
      cccdInput1.setAttribute('required', 'required'); // Thêm thuộc tính required

    }
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var searchInput = document.getElementById("searchInput1");
    var tbody = document.querySelector("table[id='sampleTable1'] tbody");
    var noResultsMessage = document.getElementById("noResultsMessage");

    searchInput.addEventListener("input", function () {
        var searchValue = searchInput.value.toLowerCase();

        var rows = tbody.getElementsByTagName("tr");
        var found = false;

        for (var i = 0; i < rows.length; i++) {
            var cccdCell = rows[i].querySelector("td.search_td:nth-child(4)");
            var hoTenCell = rows[i].querySelector("td.search_td:nth-child(5)");
            var soDienThoaiCell = rows[i].querySelector("td.search_td:nth-child(6)");

            if (cccdCell && hoTenCell && soDienThoaiCell) {
                var cccd = cccdCell.innerText.toLowerCase();
                var hoTen = hoTenCell.innerText.toLowerCase();
                var soDienThoai = soDienThoaiCell.innerText.toLowerCase();

                if (cccd.indexOf(searchValue) !== -1 || hoTen.indexOf(searchValue) !== -1 || soDienThoai.indexOf(searchValue) !== -1) {
                    rows[i].style.display = "";
                    found = true;
                } else {
                    rows[i].style.display = "none";
                }
            }
        }

        if (!found) {
            noResultsMessage.style.display = "block";
        } else {
            noResultsMessage.style.display = "none";
        }
    });
});

</script>

