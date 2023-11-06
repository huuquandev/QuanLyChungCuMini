<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách nhân viên</b></a></li>
      </ul>
      <div id="clock"></div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">

            <div class="row element-button">
              <div class="col-sm-2">

                <a class="btn btn-add btn-sm" href="form-add-nhan-vien.html" title="Thêm"><i class="fas fa-plus"></i>
                  Tạo mới nhân viên</a>
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
            </div>
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable">
              <thead>
                <tr>
                  <th width="10"><input type="checkbox" id="all"></th>
                  <th>ID nhân viên</th>
                  <th width="150">Họ và tên</th>
                  <th width="20">Ảnh thẻ</th>
                  <th width="300">Địa chỉ</th>
                  <th>Ngày sinh</th>
                  <th>Giới tính</th>
                  <th>SĐT</th>
                  <th>Chức vụ</th>
                  <th width="100">Tính năng</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>#CD12837</td>
                  <td>Hồ Thị Thanh Ngân</td>
                  <td><img class="img-card-person" src="/img-anhthe/1.jpg" alt=""></td>
                  <td>155-157 Trần Quốc Thảo, Quận 3, Hồ Chí Minh </td>
                  <td>12/02/1999</td>
                  <td>Nữ</td>
                  <td>0926737168</td>
                  <td>Bán hàng</td>
                  <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                      onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                    </button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"
                      data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox" name="check2" value="2"></td>
                  <td>#SX22837</td>
                  <td>Trần Khả Ái</td>
                  <td><img class="img-card-person" src="/img-anhthe/2.jpg" alt=""></td>
                  <td>6 Nguyễn Lương Bằng, Tân Phú, Quận 7, Hồ Chí Minh</td>
                  <td>22/12/1999</td>
                  <td>Nữ</td>
                  <td>0931342432</td>
                  <td>Bán hàng</td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                      onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                    </button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"
                      data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox" name="check3" value="3"></td>
                  <td>#LO2871</td>
                  <td>Phạm Thu Cúc</td>
                  <td><img class="img-card-person" src="/img-anhthe/3.jpg" alt=""></td>
                  <td>Số 3 Hòa Bình, Phường 3, Quận 11, Hồ Chí Minh </td>
                  <td>02/06/1998</td>
                  <td>Nữ</td>
                  <td>0931491997</td>
                  <td>Thu ngân</td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction()"><i
                        class="fas fa-trash-alt"></i>
                    </button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"
                      data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox"></td>
                  <td>#SR28746</td>
                  <td>Trần Anh Khoa</td>
                  <td><img class="img-card-person" src="/img-anhthe/4.jpg" alt=""></td>
                  <td>19 Đường Nguyễn Hữu Thọ, Tân Hưng, Quận 7, Hồ Chí Minh </td>
                  <td>18/02/1995</td>
                  <td>Nam</td>
                  <td>0916706633</td>
                  <td>Tư vấn</td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction()"><i
                        class="fas fa-trash-alt"></i>
                    </button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"
                      data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox"></td>
                  <td>#KJS276</td>
                  <td>Nguyễn Thành Nhân</td>
                  <td><img class="img-card-person" src="/img-anhthe/5.jpg" alt=""></td>
                  <td>Số 13, Tân Thuận Đông, Quận 7, Hồ Chí Minh </td>
                  <td>10/03/1996</td>
                  <td>Nam</td>
                  <td>0971038066</td>
                  <td>Bảo trì</td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction()"><i
                        class="fas fa-trash-alt"></i>
                    </button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"
                      data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox"></td>
                  <td>#BS76228</td>
                  <td>Nguyễn Đặng Trọng Nhân</td>
                  <td><img class="img-card-person" src="/img-anhthe/6.jpg" alt=""></td>
                  <td>59C Nguyễn Đình Chiểu, Quận 3, Hồ Chí Minh </td>
                  <td>23/07/1996</td>
                  <td>Nam</td>
                  <td>0846881155</td>
                  <td>Dịch vụ</td>
                  <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction()"><i
                        class="fas fa-trash-alt"></i>
                    </button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"
                      data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td width="10"><input type="checkbox"></td>
                  <td>#YUI21376</td>
                  <td>Nguyễn Thị Mai</td>
                  <td><img class="img-card-person" src="/img-anhthe/4.jpg" alt=""></td>
                  <td>Đường Số 3, Tân Tạo A, Bình Tân, Hồ Chí Minh</td>
                  <td>09/12/2000</td>
                  <td>Nữ </td>
                  <td>0836333037</td>
                  <td>Tư vấn</td>
                  <td><button class="btn btn-primary btn-sm trash" title="Xóa" onclick="myFunction()"><i
                        class="fas fa-trash-alt"></i>
                    </button>
                    <button class="btn btn-primary btn-sm edit" title="Sửa" id="show-emp" data-toggle="modal"
                      data-target="#ModalUP"><i class="fas fa-edit"></i>
                    </button>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>