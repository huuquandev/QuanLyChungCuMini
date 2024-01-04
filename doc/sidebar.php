<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../images/images_taikhoan/<?php echo $_SESSION['hinh_anh']?>" width="50px"
        alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b><?php echo $_SESSION['ten_hien_thi'] ?></b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <li class="navigation-header text-truncate">
            <span>Theo dõi nhanh</span>
      </li>
      <li>
            <a class="app-menu__item" href="">
                  <i class='app-menu__icon bx bx-tachometer'></i>
            <span class="app-menu__label">Bảng tin</span></a>
      </li>
      <li>
            <a class="app-menu__item" href="../home.php?title=sodotoanha">
                  <i class='app-menu__icon bx bx-tachometer'></i>
            <span class="app-menu__label">Sở đồ tòa nhà</span></a>
      </li>
      <li class="navigation-header text-truncate">
            <span>QUẢN LÝ & VẬN HÀNH</span>
      </li>
      <li>
            <a class="app-menu__item " href="home.php?title=quanlydancu">
                  <i class='app-menu__icon bx bx-id-card'></i> 
            <span class="app-menu__label">Quản lý dân cư</span></a>
      </li>
      <li>
            <a class="app-menu__item sub-btn" href="#">
                  <i class='app-menu__icon fas fa-database' style="font-size: 20px;"></i>
                  <span class="app-menu__label">Quản lý Căn hộ/phòng</span>
                  <i class="fas fa-angle-right dropdown"></i>
            </a>
            <ul class="sub-menu">
                  <li><a href="../home.php?title=toanha" class="sub-item"><i class="fas fa-building"></i><span class="app-menu__label">Tòa nhà</span></a></li>
                  <li><a href="../home.php?title=canho_phong" class="sub-item"><i class="fas fa-door-open"></i><span class="app-menu__label">Căn hộ/phòng</span></a></li>
                  <li><a href="./home.php?title=hopdong" class="sub-item"><i class="fas fa-file-contract"></i><span class="app-menu__label">Hợp đồng</span></a></li>
                  <li><a href="../home.php?title=taisan" class="sub-item"><i class="fas fa-umbrella"></i><span class="app-menu__label">Tài sản</span></a></li>
                  <li><a href="../home.php?title=baotrisuachua" class="sub-item"><i class="fas fa-hammer"></i><span class="app-menu__label">Bảo trì/sửa chữa</span></a></li>

            </ul>
      </li>
      <li>
            <a class="app-menu__item" href="../home.php?title=quanlydichvu">
                  <i class='app-menu__icon bx bx-task'></i>
            <span class="app-menu__label">Quản lý dịch vụ</span></a>
      </li>
      <li>
            <a class="app-menu__item" href="../home.php?title=quanlythuphi">
            <i class='app-menu__icon bx bx-dollar'></i>
            <span class="app-menu__label">Quản lý thu phí</span></a>
      </li>
      <li>
            <a class="app-menu__item" href="../home.php?title=quanlyanninh_trattu">
                  <i class='app-menu__icon bx bx-dollar'></i>
            <span class="app-menu__label">Quản lý an ninh, trật tự</span></a>
      </li>
      <li class="navigation-header text-truncate">
            <span>BÁO CÁO</span>
      </li>
      <li>
            <a class="app-menu__item" href="quan-ly-bao-cao.html">
                  <i class='app-menu__icon bx bx-pie-chart-alt-2'></i>
            <span class="app-menu__label">Báo cáo tài chính</span></a>
      </li>
      <li class="navigation-header text-truncate">
            <span>CÀI ĐẶT HỆ THỐNG</span>
      </li>
      <li>
            <a class="app-menu__item" href="#">
                  <i class='app-menu__icon bx bx-cog'></i>
            <span class="app-menu__label">Cài đặt chung</span></a>
      </li>
      <li>
            <a class="app-menu__item sub-btn" href="#">
                  <i class='app-menu__icon bx bx-user-voice'></i>
                  <span class="app-menu__label">Nhân viên</span>
                  <i class="fas fa-angle-right dropdown"></i>
            </a>
            <ul class="sub-menu">
                  <li><a href="../home.php?title=loaitaikhoan" class="sub-item"><i class="fas fa-rocket"></i><span class="app-menu__label">Loại tài khoản</span></a></li>
                  <li><a href="../home.php?title=nguoidung" class="sub-item"><i class="fas fa-user"></i><span class="app-menu__label">Người dùng</span></a></li>
            </ul>
      </li><li>
            <a class="app-menu__item" href="#">
                  <i class='app-menu__icon bx bx-cog'></i>
            <span class="app-menu__label">Mẫu biêu</span></a>
      </li>
    </ul>
  </aside>
<script>
      $(document).ready(function(){
      $('.sub-btn').click(function(){
            $(this).next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');
      });
      });
</script>