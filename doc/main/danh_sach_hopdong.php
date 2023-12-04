<?php 

   include_once './function.php';


  if(isset($_POST['btnAdd'])){
      $name_dan_cu=$_POST['name_dan_cu'];
      $name_can_ho=$_POST['name_can_ho'];
      $ngaybatdau=$_POST['ngaybatdau'];
      $ngayketthuc=$_POST['ngayketthuc'];
      $tongthang=$_POST['tongthang'];
      $filehopdong=$_FILES['filehopdong'];
      ThemHopDong($name_dan_cu,
      $name_can_ho,
      $ngaybatdau,
      $ngayketthuc,
      $tongthang,$filehopdong);
  }  
?>
<main class="app-content">



    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">

            <div class="row element-button">
              <div class="col-sm-2">

                <a class="btn btn-add btn-sm" href="#" title="Thêm"><i class="fas fa-plus"></i>
                  Thêm tòa nhà</a>
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
                        <h4 class="modal-title">Dự án/Tòa nhà</h4>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                          <input type="hidden" id="txtOrderId" value="0" />
            
                          <div class="row">
                              <div class="col-12">
                              <span>
                                  <fieldset class="form-group" id="__BVID__981">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__981__BV_label_"> Tên căn hộ <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable" id="province">
                                        <div id="vs33__combobox" role="combobox" aria-expanded="false" aria-owns="vs33__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                          <select name="name_can_ho" id="gioitinh"aria-autocomplete="list" aria-labelledby="vs33__combobox" aria-controls="vs33__listbox" autocomplete="off" class="vs__search"  >
                                                <option value="" hidden="">Chọn căn hộ</option>
                                                <?php
                                                $sql="SELECT c.`ten_canho_phong`,c.`id_canho_phong`,t.`ten_toanha`
                                                FROM `tb_canho_phong` AS c
                                                INNER JOIN `tb_toanha` AS t ON t.`id_toanha` = c.`id_toanha`";
                                                $query=mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($query) > 0){
                                                  while ($row = mysqli_fetch_array($query)) {
                                                  echo '<option value="'.$row['id_canho_phong'].'" >'.$row['ten_toanha'].' - căn hộ: '.$row['ten_canho_phong'].' </option>';
                                                }}
                                                ?>                                   
                                            </select>
                                          </div>
                                          <div class="vs__actions">
                                            <button type="button" title="Clear Selected" aria-label="Clear Selected" class="vs__clear" style="display: none;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                              </svg>
                                            </button>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down open-indicator vs__open-indicator" role="presentation">
                                              <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                            <div class="vs__spinner" style="display: none;">Loading...</div>
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
                                <h5>Thông tin hợp đồng</h5>
                              </div>
                              <!---->
                              <div class="col-md-4">
                                <span>
                                  <fieldset class="form-group" id="__BVID__981">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__981__BV_label_"> Người thuê <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable" id="province">
                                        <div id="vs33__combobox" role="combobox" aria-expanded="false" aria-owns="vs33__listbox" aria-label="Search for option" class="vs__dropdown-toggle">
                                          <div class="vs__selected-options">
                                          <select name="name_dan_cu" id="gioitinh"aria-autocomplete="list" aria-labelledby="vs33__combobox" aria-controls="vs33__listbox" autocomplete="off" class="vs__search"  >
                                                <option value="" hidden="">Chọn người thuê</option>
                                                <?php
                                                $sql="SELECT `cccd`,`ten_hien_thi` From `tb_dancu`";
                                                $query=mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($query) > 0){
                                                  while ($row = mysqli_fetch_array($query)) {
                                                  echo '<option value="'.$row['cccd'].'" >'.$row['ten_hien_thi'].'-'.$row['cccd'].'</option>';
                                                }}
                                                ?>                                   
                                            </select>
                                          </div>
                                          <div class="vs__actions">
                                            <button type="button" title="Clear Selected" aria-label="Clear Selected" class="vs__clear" style="display: none;">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                              </svg>
                                            </button>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down open-indicator vs__open-indicator" role="presentation">
                                              <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                            <div class="vs__spinner" style="display: none;">Loading...</div>
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
                                  <fieldset class="form-group" id="__BVID__995">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__995__BV_label_"> Ngày bắt đầu <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="ward">
                                        <div id="vs35__combobox" role="combobox" aria-expanded="false" aria-owns="vs35__listbox" aria-label="Search for option" class="">
                                          <div class="vs__selected-options">
                                          <input id="ngaybatdau" type="date" class="form-control" name="ngaybatdau" required>

                                          </div>
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
                              </div>                              <div class="col-md-4">
                                <span>
                                  <fieldset class="form-group" id="__BVID__995">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__995__BV_label_"> Ngày kết thức <span class="text-danger"> (*) </span>
                                    </legend>
                                    <div>
                                      <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="ward">
                                        <div id="vs35__combobox" role="combobox" aria-expanded="false" aria-owns="vs35__listbox" aria-label="Search for option" class="">
                                          <div class="vs__selected-options">
                                          <input id="ngayketthuc" type="date" class="form-control" name="ngayketthuc" required>

                                          </div>
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
                              <div class="col-12">
                                <span>
                                  <fieldset class="form-group" id="__BVID__1001">
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__1001__BV_label_">Tổng số tháng <span class="text-danger">(*)</span>
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
                                        <input id="tongthang" type="number" placeholder="số tháng" value="0" class="form-control" name="tongthang" required>
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
                                    <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__1001__BV_label_">File cứng hợp đồng <span class="text-danger">(*)</span>
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
                                        <input id="filehopdong" type="file" class="form-control" name="filehopdong" required>
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
                          <button type="submit" class="btn btn-success" id="btnAdd" name="btnAdd">Thêm</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="card-body">
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0" id="sampleTable">                    
              <thead>
                      <tr>
                        <th width="10"><input type="checkbox" id="all"></th>
                        <th width="20">ID</th>
                        <th width="150">Tên người</th>
                        <th width="80" class="text-center">Tên căn phòng</th>
                        <th width="100">Thời gian bắt đầu</th>
                        <th width="100">Thời gian kết thúc</th>
                        <th width="100">Tổng tiền</th>
                        <th width='100'>Hợp đồng</th>
                        <th width="100">Tính năng</th>
                      </tr>
                    </thead>
                  <tbody>
                  <?php 
                    $sql2 = "SELECT h.*,t.`ten_hien_thi`,ph.`ten_canho_phong` from `tb_hopdong` AS h 
                    INNER JOIN `tb_canho_phong` AS ph 
                    INNER JOIN `tb_dancu` AS t 
                    on h.`id_dan_cu`=t.`cccd` AND h.`id_can_ho_phong`=ph.`id_canho_phong`";
                      $query2 = mysqli_query($conn, $sql2);
                      // echo $sql2;
                      if(mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_array($query2)) {
                    ?>
                    <tr>
                      <td width="10"><input type="checkbox" name="check1" value="1"></td>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['ten_hien_thi']; ?></td>
                      <td class="text-center"><?php echo $row['ten_canho_phong']; ?></td>
                      <td><?php $batdau=date("d-m-Y", strtotime($row['bat_dau']));
                      echo $batdau;?></td>
                      <td><?php $ketthuc=date("d-m-Y", strtotime($row['ket_thuc']));
                      echo $ketthuc;?></td>
                      <td><?php echo $row['tong'];?> VND</td>
                      <td><a class="btn" href="<?php echo $row['file_hop_dong'];?>"
                         data-target="#ModalUP">
                         <?php 
                        // Assuming $row['file_hop_dong'] contains the file path
                        $file_path = $row['file_hop_dong'];

                        $pattern = "/file\/hop_dong\/(.*?)\.pdf/";
                        preg_match($pattern, $file_path, $matches);

                        if (isset($matches[1])) {
                            $result = $matches[1];
                            echo '<font style="
                            color: aqua;">'.$result.'</font>';
                        } else {
                            echo "Pattern not found.";
                        }

                      
                        ?>
                      </a></td>
                      <td class="table-td-center">
                        <button class="btn btn-primary btn-sm trash" type="button" title="Xóa" id="btn-delete" data-id="<?php echo $row['id']  ?>"><i class="fas fa-trash-alt"></i>
                        </button>
                        
                        <a class="btn btn-primary " href="home.php?title=hopdong&id=<?php echo $row['id']?>"
                         data-target="#ModalUP"><i class="fas fa-edit"></i>
                      </a>
                      </td>
                    </tr>
                        
                    <?php 
                    
                    } 
                  }else{
                    echo '<tr class="odd"><td valign="top" colspan="7" class="dataTables_empty">Không tìm thấy kết quả</td></tr>';
                  }
                  
                    ?>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/he/1.2.0/he.min.js"></script>
<script>
    function tinhTongThang() {
        var ngayBatDau = new Date(document.getElementById("ngaybatdau").value);
        var tongThang = parseInt(document.getElementById("tongthang").value);

        if (!isNaN(tongThang) && tongThang >= 0) {
            var ngayKetThuc = new Date(ngayBatDau.getFullYear(), ngayBatDau.getMonth() + tongThang, ngayBatDau.getDate());
            document.getElementById("ngayketthuc").value = ngayKetThuc.toISOString().split('T')[0];
        }
    }

    function tinhTongThang1() {
        var ngayKetThuc = new Date(document.getElementById("ngayketthuc").value);
        var tongThang = parseInt(document.getElementById("tongthang").value);

        if (!isNaN(tongThang) && tongThang >= 0) {
            var ngayKetThucMoi = new Date(ngayKetThuc.getFullYear(), ngayKetThuc.getMonth() - tongThang, ngayKetThuc.getDate());
            document.getElementById("ngaybatdau").value = ngayKetThucMoi.toISOString().split('T')[0];
        }
    }

    function capNhatNgay() {
        var ngayBatDau = new Date(document.getElementById("ngaybatdau").value);
        var tongThang = parseInt(document.getElementById("tongthang").value);

        if (!isNaN(tongThang) && tongThang >= 0) {
            var ngayKetThuc = new Date(ngayBatDau.getFullYear(), ngayBatDau.getMonth() + tongThang, ngayBatDau.getDate());
            document.getElementById("ngayketthuc").value = ngayKetThuc.toISOString().split('T')[0];
        }
    }

    // Gọi hàm khi có sự thay đổi trong ô input date và ô input text
    document.getElementById("ngaybatdau").addEventListener("input", tinhTongThang);
    document.getElementById("ngayketthuc").addEventListener("input", tinhTongThang1);
    document.getElementById("tongthang").addEventListener("input", capNhatNgay);
</script>



<script>
    $(document).ready(function () {
        $('body').on('click', '.btn-add', function () {          
            $('#modal-default').modal('show');
            // initializeDropdowns("Province1", "District1", "Ward1");
        });
        $('body').on('click', '.btnClose', function () {
            $('#modal-default').modal('hide');
        });
        $('body').on('click', '#btn-save', function () {          
           var formData = new FormData();

            formData.append('name_dan_cu', $('#name_dan_cu').val());
            formData.append('name_can_ho', $('#name_can_ho').val());
            formData.append('ngaybatdau', $('#ngaybatdau').val());
            formData.append('ngayketthuc', $('#ngayketthuc').val());
            formData.append('tongthang', $('#tongthang').val());
            formData.append('filehopdong', $('#filehopdong').val());

            // for (var pair of formData.entries()) {
            //     console.log(pair[0] + ': ' + pair[1]);
            // }
            $.ajax({
                url: "doc/main/commons/sua_toanha.php", 
                type: "post",
                dataType: "html",        
                processData: false, 
                contentType: false, 
                data: formData,
            }).done(function(ketqua){
                alert(ketqua);
            })
        });
        $('body').on('click', '.btnClose', function () {
            var id = $(this).data("id");
            $('#modal-default2').modal('hide');
        });
        $('body').on('click', '#btn-delete', function () {
            let text = "Bạn có chắc muốn xóa.";
            var $idhopdong = $(this).data("id");
            if (confirm(text) == true) {
              $.ajax({
                url: "doc/main/commons/xoa_hop_dong.php", 
                type: "post",
                dataType: "html",          
                data: { idhopdong: $idhopdong },
              }).done(function(ketqua){
                alert(ketqua);
                window.location.href = "home.php?title=hopdong";
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
    
    // function initializeDropdowns(citisId, districtId, wardId, citisIdValue, districtIdValue, wardIdValue) {
    //     // Lấy tham chiếu đến các phần tử select từ id
    //     var citis = document.getElementById(citisId);
    //     var districts = document.getElementById(districtId);
    //     var wards = document.getElementById(wardId);

    //     // Tạo đối tượng Parameter chứa thông tin yêu cầu HTTP GET
    //     var Parameter = {
    //         url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
    //         method: "GET",
    //         responseType: "application/json",
    //     };

    //     // Gửi yêu cầu HTTP GET và nhận dữ liệu từ tệp JSON
    //     var promise = axios(Parameter);
    //     promise.then(function (result) {
    //         renderCity(result.data);
    //     });

    //     // Hàm renderCity để tạo các tùy chọn cho select tỉnh/thành phố
    //     function renderCity(data) {
    //         for (const x of data) {
    //             citis.options[citis.options.length] = new Option(x.Name, x.Id = x.Name);
    //             if (x.Name == citisIdValue) {
    //                 citis.value = citisIdValue;
    //             }
    //         }
    //         // Xử lý khi select tỉnh/thành phố thay đổi
    //         citis.onchange = function () {
    //             districts.length = 1;
    //             wards.length = 1;
    //             // Lọc dữ liệu quận/huyện dựa trên tỉnh/thành phố được chọn
    //             const result = data.filter(n => n.Id === this.value);

    //             // Tạo các tùy chọn cho select quận/huyện
    //             for (const k of result[0].Districts) {
    //                 districts.options[districts.options.length] = new Option(k.Name, k.Id = k.Name);
    //                 if (k.Name == districtIdValue) {
    //                     districts.value = districtIdValue;
    //                 }
    //             }

    //             districts.disabled = false;
    //             wards.disabled = true;
    //             wards.innerHTML = '<option value="" hidden>Chọn phường xã</option>';
    //         };

    //         // Xử lý khi select quận/huyện thay đổi
    //         districts.onchange = function () {
    //             const selectedDistrict = this.value;
    //             if (selectedDistrict !== '') {
    //                 wards.length = 1;
    //                 const dataCity = data.filter(n => n.Id === citis.value);
    //                 const dataWards = dataCity[0].Districts.filter(n => n.Id === selectedDistrict)[0].Wards;
    //                 // Tạo các tùy chọn cho select phường/xã
    //                 for (const w of dataWards) {
    //                     wards.options[wards.options.length] = new Option(w.Name, w.Id = w.Name);
    //                     if (w.Name == wardIdValue) {
    //                         wards.value = wardIdValue;
    //                     }
    //                 }
    //                 wards.disabled = false;
    //             } else {
    //                 wards.disabled = true;
    //                 wards.innerHTML = '<option value="" hidden>Chọn phường xã</option>';
    //             }
    //         };

    //         // Kiểm tra nếu select tỉnh/thành phố đã có giá trị được chọn sẵn
    //         if (citis.value !== null && citis.value !== '') {
    //             districts.disabled = false;
    //             const changeEvent = new Event('change');
    //             citis.dispatchEvent(changeEvent);
    //             const selectedDistrict = districts.value;

    //             if (selectedDistrict.value !== null && selectedDistrict.value !== '') {
    //                 wards.disabled = false;
    //                 // Gọi sự kiện onchange của quận/huyện để kích hoạt xử lý
    //                 const changeEvent = new Event('change');
    //                 districts.dispatchEvent(changeEvent);
    //             }
    //         }
    //     }

    //     // Xử lý sự kiện khi select tỉnh/thành phố thay đổi
    //     citis.addEventListener('change', function () {
    //         var selectedProvince = this.value;
    //         if (selectedProvince !== "") {
    //             districts.disabled = false;
    //         } else {
    //             districts.disabled = true;
    //             districts.innerHTML = '<option value="" hidden>Chọn quận huyện</option>';
    //             wards.disabled = true;
    //             wards.innerHTML = '<option value="" hidden>Chọn phường xã</option>';
    //         }
    //     });

    //     // Xử lý sự kiện khi select quận/huyện thay đổi
    //     districts.addEventListener('change', function () {
    //         var selectedDistrict = this.value;
    //         if (selectedDistrict !== "") {
    //             wards.disabled = false;
    //         } else {
    //             wards.disabled = true;
    //             wards.innerHTML = '<option value="" hidden>Chọn phường xã</option>>';
    //         }
    //     });
    // }
    function selectValue(selectElement, value) {
        selectElement.value = value;
    }

</script>
