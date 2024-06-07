<style>
    .navbar {
        font-size: 18px;
        background-color: #ff5f6d;
        background: -webkit-linear-gradient(to right, #ff5f6d, #ffc371);
        background: linear-gradient(to right, #ff5f6d, #ffc371);
    }
</style>
<header class="row no-gutters">
    <!-- nav san pham -->
    <section class="col-12" style="height:40px;">
        <div class="col-12">
            <div class="row">

                <!-- test -->
                <nav class="navbar navbar-expand-sm bg-light navbar-light">
                    <!-- Brand -->
                    <li><a class="" href="index.php?action=hanghoa"><img src="Content/image/teddy-bear-logo-options-08.png" alt=""
                                    width="40%" height="40%"></a></li>

                    <!-- Links -->
                    <ul class="navbar-nav col-md-10">
                        

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=hanghoa">Trang Chủ</a>
                        </li>

                        <!-- Quản trị Doanh Mục -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Quản Trị Doanh Mục
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.php?action=cthanghoa">Chi tiet sản Phẩm</a>
                            </div>
                        </li>
                        <!-- Thống kê -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Thống Kê
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.php?action=thongke">Sản Phẩm bán được nhiều
                                    Nhất</a>
                            </div>
                        </li>
                        <!-- Báo cáo Tồn kho -->
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=tonkho">Tồn Kho</a>
                        </li>
                        <?php
                        if (isset($_SESSION['idnv'])) {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?action=dangnhap">Dang Nhap</a>
                            </li>
                        <?php
                        }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=dangnhap&act=dangxuat">Dang Xuat</a>
                        </li>

                    </ul>
                </nav>
                <!-- end test -->
            </div>
        </div>

    </section>



</header>
<!-- dang ky -->