
<!-- end số lượt xem san phẩm -->
<!-- sản phẩm-->
<?php
//Cùng 1 view mà gọi nhiều dữ liệu có view giống nhau
$ac=1;
if (isset($_GET['action'])) {
    if (isset($_GET['act']) && $_GET['act'] == 'sanphamkhuyenmai') {
        $ac=2;
    } elseif (isset($_GET['act']) && $_GET['act']=='timkiem'){
        $ac=3;
    }else{
        $ac=1;
    }
}
?>
<!--Section: Examples-->
<section id="examples" class="text-center">

    <!-- Heading -->
    <div class="row">
    <div>
        <?php
        if ($ac==1) {
            echo '<h3 class="mt-5 font-weight-bold" style="color: red;"><span class="fas fa-bars"></span> TẤT CẢ SẢN PHẨM</h3><br>';
        }
        if ($ac==2) {
            echo '<br><h3 class="mb-5 font-weight-bold" style="color: red;"><span class="fas fa-bars"></span> TẤT CẢ SẢN PHẨM KHUYẾN MÃI</h3><br>';
        }
        if ($ac==3) {
            echo '<br><h3 class="mb-5 font-weight-bold" style="color: red;"><span class="fas fa-bars"></span> KẾT QUẢ TÌM KIẾM</h3><br>';
        }
        ?>
    </div>
</div>
    <style>
        /* phóng to khi hover */
        #image:hover {
            transform: scale(1.1);
            transition: 0.3s;
        }
    </style>
    <!--Grid row-->
    <div class="row">
        <?php
        $result = null;
        $hh = new hanghoa();
        if ($ac==1) {
            $result = $hh->getHangHoaNewAll(); //14 sản phẩm
        }
        if ($ac==2) {
            $result = $hh->getHangHoaAllSale(); //8 sản phẩm
        }
        if ($ac==3) {
            if(isset($_POST['txtsearch'])){
                {
                $tk=$_POST['txtsearch'];
                $result=$hh->selectTimKiem($tk);
                }
            }
        }
        //Đổ từng sản phẩm lên view
        //nếu không có sản phẩm nào thì thông báo
        if ($result->rowCount() == 0) {
            echo '<h3>Không có sản phẩm nào phù hợp với kết quả tìm kiếm</h3>';
        }
        $ids = array();
        while ($set = $result->fetch()):
            if (in_array($set['mahh'], $ids)) {
                continue;
            }
            array_push($ids, $set['mahh']);
            ?>
        <div class="col-lg-3 col-md-4 mb-3 text-left position-relative">
        <div class="view overlay z-depth-1-half" style="width: 250px; height: 250px;">
            <img id="imagetour" src="Content\image\<?php echo $set['hinh']; ?>" class="img-fluid" alt="" style="object-fit: cover;">
            <span class="badge badge-danger position-absolute" style="top: 10px; right: 30px; font-size: 15px;">
            <div class="mask rgba-white-slight"></div>
                <?php
                if ($ac==2) {
                    echo 'Sale';
                }
                ?>
            </span>
        </div>
        <h5 class="my-4 font-weight-bold" style="color: red;font-weight: bold;font-size: 20px;">
        <?php
                if ($ac==1 || $ac==3) {
                    echo '<h5 class="my-4 font-weight-bold" style="color: red;"><font color="red">' . number_format($set['dongia']) . '<sup><u>đ</u></sup></font>
                        </h5>';
                }
                if ($ac==2) {
                    echo '<h5 class="my-4 font-weight-bold" style="color: red;"><font color="red">' . number_format($set['giamgia']) . '<sup><u>đ</u></sup></font>
                        <strike>' . number_format($set['dongia']) . '</strike><sup><u>đ</u></sup>
                        </h5>';
                }
                ?>
        </h5>
        <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'];?>">
            <span><?php echo $set['tenhh'];?></span>
        </a>
        <h5>Số lượt xem: <?php echo $set['soluotxem']; ?></h5>
    </div>
            <?php endwhile;
        ?>
        <!--Grid row-->

</section>

<!-- end sản phẩm mới nhất -->
<div class="col-md-6 div col-md-offset-3">
    <ul class="pagination">

        <li><a href=""></a></li>

    </ul>
</div>