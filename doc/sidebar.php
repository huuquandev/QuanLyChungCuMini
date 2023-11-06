<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/images/<?php echo $_SESSION['hinh_anh']?>" width="50px"
        alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b><?php echo $_SESSION['ho_ten'] ?></b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <li>
            <a class="app-menu__item" href="">
                  <i class='app-menu__icon bx bx-tachometer'></i>
            <span class="app-menu__label">Bảng điều khiển</span></a>
      </li>
      <li>
            <a class="app-menu__item " href="../home.php?title=quanlydancu">
                  <i class='app-menu__icon bx bx-id-card'></i> 
            <span class="app-menu__label">Quản lý dân cư</span></a>
      </li>
      <li>
            <a class="app-menu__item sub-btn" href="#">
                  <i class='app-menu__icon bx bx-user-voice'></i>
                  <span class="app-menu__label">Quản lý Căn hộ/phòng</span>
                  <i class="fas fa-angle-right dropdown"></i>
            </a>
            <ul class="sub-menu">
                  <li><a href="../home.php?title=toanha" class="sub-item"><i class="fas fa-building"></i><span class="app-menu__label">Tòa nhà</span></a></li>
                  <li><a href="../home.php?title=canho_phong" class="sub-item"><i class="fas fa-door-open"></i><span class="app-menu__label">Căn hộ/phòng</span></a></li>
                  <li><a href="../home.php?title=taisan" class="sub-item"><i class="fas fa-umbrella"></i><span class="app-menu__label">Tài sản</span></a></li>

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
      <li>
            <a class="app-menu__item" href="quan-ly-bao-cao.html">
                  <i class='app-menu__icon bx bx-pie-chart-alt-2'></i>
            <span class="app-menu__label">Báo cáo doanh thu</span></a>
      </li>
      <li>
            <a class="app-menu__item" href="#">
                  <i class='app-menu__icon bx bx-cog'></i>
            <span class="app-menu__label">Cài đặt hệ thống</span></a>
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