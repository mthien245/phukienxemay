<!-- sản phẩm mới nhất -->
<style>
    #new-products .row,
    #sale-products .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    #new-products .col-lg-3,
    #sale-products .col-lg-3 {
        flex-basis: calc(25% - 10px);
        margin-bottom: 30px;
    }

    #new-products .view.overlay img,
    #sale-products .view.overlay img {
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    #new-products .view.overlay h5,
    #new-products .view.overlay p,
    #sale-products .view.overlay h5,
    #sale-products .view.overlay p {
        text-align: center;
    }

    #new-products .view.overlay:hover img,
    #sale-products .view.overlay:hover img {
        transform: scale(1.1);
        transition: 0.3s;
    }

    .form-inline {
        margin-left: 490px;
    }

    .input-group-prepend {
        margin-top: 20px;
    }
</style>

        <form class="form-inline" action="index.php?action=sanpham&act=timkiem" method="post">
            <div class="input-group">
                <div class="input-group-prepend">
                    <input style="font-weight: bold;" class="input-group-text" style="height: 35px;" type="submit"
                        id="btsearch" value="Search" />
                    <input style="font-weight: bold;" type="text" name="txtsearch" class="form-control"
                        placeholder="Search" />
                </div>
            </div>
        </form>

<section id="new-products" class="text-center examples">
    <!-- Heading -->
    <div class="row align-items-center justify-content-between">
        <div class="col-lg-6 text-right">
            <h3 class="mt-5 font-weight-bold" style="color: red;">SẢN PHẨM</h3>
        </div>
        <div class="col-lg-4 text-right mt-4">
            <a href="index.php?action=sanpham">
                <span style="color: gray;">Xem chi tiết</span>
            </a>
        </div>
    </div>
    <br>
    <!--Grid row-->
    <div class="row">
        <?php
        $hh = new hanghoa();
        $result = $hh->getHangHoaNew(); // view lay duoc du lieu la 8 san pham
        // do du lieu len view
        while ($set = $result->fetch()): // $set=array(mamh:24, tenhh: giay...)
            ?>
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3 text-left position-relative">
                <div class="view overlay z-depth-1-half" style="width: 250px; height: 250px;">
                    <img src="Content\image\<?php echo $set['hinh']; ?>" class="img-fluid" alt=""
                        style="object-fit: cover;">
                    <!-- <div class="mask rgba-white-slight"></div> -->
                    <!-- <span class="badge badge-danger position-absolute"
                        style="top: 10px; right: 25px; font-size: 15px;">New</span> -->
                </div>
                <h5 class="my-4 font-weight-bold" style="color: red;font-weight: bold;font-size: 15px;">
                    <?php echo number_format($set['dongia']); ?><sup><u>đ</u></sup>
                </h5>
                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>">
                    <span><?php echo $set['tenhh']; ?></span>
                </a>
                <h5>Số lượt xem: <?php echo $set['soluotxem']; ?></h5>
            </div>
        <?php endwhile; ?>
    </div>

    <!--Grid row-->
</section>
<!-- end sản phẩm mới nhất -->

<!-- sản phẩm khuyến mãi -->
<section id="sale-products" class="text-center examples">
    <!-- Heading -->
    <div class="row align-items-center justify-content-between">
        <div class="col-lg-7 text-right">
            <h3 class="mt-5 font-weight-bold" style="color: red;">SẢN PHẨM KHUYẾN MÃI</h3>
        </div>
        <div class="col-lg-4 text-right mt-4">
            <a href="index.php?action=sanpham&act=sanphamkhuyenmai">
                <span style="color: gray;">Xem chi tiết</span>
            </a>
        </div>
    </div>
    <br>
    <!--Grid row-->
    <div class="row">
        <?php
        $kq = $hh->getHangHoaSale(); // lay duoc 4 san pham sale
        // hien thi 4 san pham sale len
        while ($set = $kq->fetch()) {
            ?>
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3 text-left">
                <div class="view overlay z-depth-1-half" style="width: 250px; height: 250px;">
                    <img src="Content\image\<?php echo $set['hinh']; ?>" class="img-fluid" alt=""
                        style="object-fit: cover;">
                    <div class="mask rgba-white-slight"></div>
                    <span class="badge badge-danger position-absolute"
                        style="top: 10px; right: 25px; font-size: 15px;">SALE</span>
                </div>
                <h5 class="my-4 font-weight-bold">
                <font color="red"><?php echo number_format($set['giamgia']);?><sup><u>đ</u></sup></font>
            <strike><?php echo number_format($set['dongia']);?></strike><sup><u>đ</u></sup>
                </h5>
                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>">
                    <span><?php echo $set['tenhh'];?></span>
                </a>
                <h5>Số lượt xem: <?php echo $set['soluotxem']; ?> </h5>
            </div>
        <?php } ?>
    </div>
    <br>
    <!--Grid row-->
</section>
<!-- end sản phẩm khuyến mãi -->