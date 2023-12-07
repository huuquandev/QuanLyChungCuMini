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
            <div class="card-body">

                          <div class="modal-body">
                              <h5>Tìm kiểm các hợp đồng </h5>
                              <div class="row">

                                  <div class="col-md-5">
                                    <span>
                                      <fieldset class="form-group" id="__BVID__995">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__995__BV_label_"> Ngày bắt đầu
                                        </legend>
                                        <div>
                                          <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="ward">
                                            <div id="vs35__combobox" role="combobox" aria-expanded="false" aria-owns="vs35__listbox" aria-label="Search for option" class="">
                                              <div class="vs__selected-options">
                                              <input id="Tngaybatdau" type="date" class="form-control" name="Tngaybatdau">

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
                                  <div class="col-md-6">
                                    <span>
                                      <fieldset class="form-group" id="__BVID__995">
                                        <legend tabindex="-1" class="bv-no-focus-ring col-form-label pt-0" id="__BVID__995__BV_label_">Ngày kết thức
                                        </legend>
                                        <div>
                                          <div dir="ltr" class="v-select vs--single vs--searchable vs--disabled" id="ward">
                                            <div id="vs35__combobox" role="combobox" aria-expanded="false" aria-owns="vs35__listbox" aria-label="Search for option" class="">
                                              <div class="vs__selected-options">
                                              <input id="Tngayketthuc" type="date" class="form-control" name="Tngayketthuc">

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
                
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary btnSearch" data-dismiss="modal">Tìm</button>
                          </div>
              
            </div>
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
                                                $sql="SELECT `cccd`,`id_dancu`,`ho_ten` From `tb_dancu`";
                                                $query=mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($query) > 0){
                                                  while ($row = mysqli_fetch_array($query)) {
                                                  echo '<option value="'.$row['id_dancu'].'" >'.$row['ho_ten'].'-'.$row['cccd'].'</option>';
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
                              </div>                              
                              <div class="col-md-4">
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
                        <th width="50">Già phòng/tháng</th>
                        <th width="100">Tổng tiền</th>
                        <th width='100'>Hợp đồng</th>
                        <th width="100">Tính năng</th>
                      </tr>
                    </thead>
                  <tbody>
                  <?php 
                    $sql2 = "SELECT h.*,t.`ho_ten`,ph.`ten_canho_phong` from `tb_hopdong` AS h 
                    INNER JOIN `tb_canho_phong` AS ph 
                    INNER JOIN `tb_dancu` AS t 
                    on h.`id_dancu`=t.`id_dancu` AND h.`id_canho_phong`=ph.`id_canho_phong`";
                      $query2 = mysqli_query($conn, $sql2);
                      // echo $sql2;
                      if(mysqli_num_rows($query) > 0){
                      while ($row = mysqli_fetch_array($query2)) {
                    ?>
                    <tr>
                      <td width="10"><input type="checkbox" name="check1" value="1"></td>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['ho_ten']; ?></td>
                      <td class="text-center"><?php echo $row['ten_canho_phong']; ?></td>
                      <td><?php $batdau=date("d-m-Y", strtotime($row['ngay_batdau']));
                      echo $batdau;?></td>
                      <td><?php $ketthuc=date("d-m-Y", strtotime($row['ngay_ketthuc']));
                      echo $ketthuc;?></td>
                      <td><?php echo $row['gia'];?> VND</td>
                      <td><?php echo $row['tong'];?> VND</td>
                      <td><a class="btn" href="<?php echo $row['filehopdong'];?>"
                         data-target="#ModalUP">
                         <?php 
                        // Assuming $row['file_hop_dong'] contains the file path
                        $file_path = $row['filehopdong'];

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
        $('body').on('click', '#btnSearch', function () {
    var startDate = document.getElementById('Tngaybatdau').value;
    var endDate = document.getElementById('Tngayketthuc').value;

    var table = document.getElementById('sampleTable');
    var rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

    for (var i = 0; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName('td');

        // Assuming start date is in the fifth cell (index 4) and end date is in the sixth cell (index 5)
        var startTime = new Date(cells[4].innerText).getTime();
        var endTime = new Date(cells[5].innerText).getTime();

        var filterStartDate = new Date(startDate).getTime();
        var filterEndDate = new Date(endDate).getTime();

        if (startTime >= filterStartDate && endTime <= filterEndDate) {
            rows[i].style.display = '';
        } else {
            rows[i].style.display = 'none';
        }
    }
});


    });
    function selectValue(selectElement, value) {
        selectElement.value = value;
    }

</script>
