<!-- end số lượt xem sản phẩm -->
<!-- sản phẩm-->
<?php
// Cùng 1 view mà gọi nhiều dữ liệu có view giống nhau
$ac = 1;
if (isset($_GET['action'])) {
    if (isset($_GET['act']) && $_GET['act'] == 'sanpham') {
        $ac = 1;
    } elseif (isset($_GET['act']) && $_GET['act'] == 'timkiem') {
        $ac = 2;
    }
}
?>
<section id="examples" class="text-center">
    <!-- Heading -->
    <div class="row">
        <div>
            <?php
            if ($ac == 1) {
                $accessory = mb_strtoupper($accessory, 'UTF-8');
                echo '<h3 class="mt-5 font-weight-bold" style="color: red;"><span class="fas fa-bars"></span> ' . $accessory . '</h3>';
            }
            if ($ac == 2) {
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
    <!-- Grid row -->
    <div class="row">
        <?php
        $result = null;
        $hh = new phukien();
        if ($ac == 1) {
            $result = $hh->getPhuKien($_GET['action']);
        }
        if ($ac == 2) {
            if (isset($_POST['txtsearch'])) {
                $tk = $_POST['txtsearch'];
                $result = $hh->selectTimKiem($tk);
            }
        }
        // Đổ từng sản phẩm lên view
        // nếu không có sản phẩm nào thì thông báo
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
                    </span>
                </div>
                <h5 class="my-4 font-weight-bold" style="color: red;font-weight: bold;font-size: 20px;">
                    <?php
                    if ($ac == 1 || $ac == 2) {
                        echo '<h5 class="my-4 font-weight-bold" style="color: red;"><font color="red">' . number_format($set['dongia']) . '<sup><u>đ</u></sup></font></h5>';
                    }
                    ?>
                </h5>
                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>">
                    <span><?php echo $set['tenhh']; ?></span>
                </a>
                <h5>Số lượt xem: <?php echo $set['soluotxem']; ?></h5>
            </div>
        <?php endwhile; ?>
    </div>
</section>
<!-- end sản phẩm mới nhất -->
<div class="col-md-6 div col-md-offset-3">
    <ul class="pagination">
        <li><a href=""></a></li>
    </ul>
</div>