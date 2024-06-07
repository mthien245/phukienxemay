<section>
    <style>
        /* Styles for product details */
.product-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.rating {
    color: #ffd700;
}

.product-description {
    font-size: 16px;
    margin-bottom: 20px;
}

.price {
    font-size: 20px;
    color: red;
    margin-bottom: 20px;
}

.colors {
    font-size: 16px;
    margin-bottom: 20px;
}

.btn-circle {
    border-radius: 50%;
    width: 40px;
    height: 40px;
    margin-right: 10px;
}

.input-field {
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 20px;
}

/* Styles for comments section */
.float-left {
    float: left;
}

#submitButton {
    background-color: #007bff;
    color: #fff;
}

.float-right {
    float: right;
}

    </style>
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 mt-4 font-weight-bold">CHI TIẾT SẢN PHẨM</h3>
        </div>
    </div>
    <article class="col-12">
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="index.php?action=giohang&act=giohang_action" method="post">
                    <div class="preview col-md-6">
                        <div class="tab-content">
                            <?php 
                            if(isset($_GET['id'])) {
                                $id=$_GET['id'];
                                $hh = new hanghoa();
                                $sp = $hh->getHangHoaId($id);
                                $tenhh = $sp['tenhh'];
                                $mota = $sp['mota'];
                                $dongia = $sp['dongia'];
                            }
                            ?>
                            <?php 
                            $hinh = $hh->getHangHoaHinh($id);
                            $set = $hinh->fetch();
                            ?>
                            <div class="tab-pane active" id=""><img src="Content\image\<?php echo $set['hinh'];?>" alt="" width="200px" height="350px"></div>
                        </div>
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $id;?>" />
                        <h3 class="product-title"><?php echo $tenhh;?></h3>
                        <p class="product-description">
                            <?php echo $mota; ?>
                        </p>
                        <h4 class="price">Giá bán: <?php echo number_format($dongia);?> đ</h4>
                        <h5 class="colors">Màu:
                            <select name="mymausac" class="form-control" style="width:150px;">
                               <?php 
                                $mau = $hh->getHangHoaMau($id);
                                while($set = $mau->fetch()):
                               ?>
                               <option value="<?php echo $set['idmau'];?>"><?php echo $set['mausac'] ?></option>
                               <?php 
                                endwhile;
                               ?>
                            </select><br>
                            Số Lượng:
                            <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />
                        </h5>
                        <div>
                        <button class="add-to-cart btn btn-default mt-4" type="submit" data-toggle="modal" data-target="#myModal" >Mua ngay</button>
                        <button class="add-to-cart btn btn-default mt-4" type="submit" data-toggle="modal" data-target="#myModal" >Thêm vào giỏ hàng</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </article>
</section>
<style>
    .comment-container {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        background-color: #f9f9f9;
        overflow: hidden;
    }
    
    .comment-header {
        overflow: hidden;
    }
    
    .comment-avatar {
        float: left;
        margin-right: 10px;
    }
    
    .comment-avatar img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
    
    .comment-author {
        font-weight: bold;
        margin: 0;
    }
    
    .comment-likes {
        float: right;
        margin: 0;
    }
    
    .comment-content {
        clear: both;
        margin-top: 10px;
    }
</style>

<section>
    <div class="row">
        <div class="col-lg-12">
            <p class="float-left"><b>Bình luận </b></p>
            <hr>
        </div>
    </div>
    <form action="" method="post">
        <div class="row">
            <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận"></textarea>
            <button type="submit" class="btn btn-primary" id="submitButton" style="margin-left: 10px" >Gửi</button>
        </div>
    </form>
    <?php
    if(isset($_POST['comment'])) {
        $noidung = $_POST['comment'];
        $makh = $_SESSION['makh'];
        $bl = new binhluan();
        $bl->addBinhLuan($makh, $id, $noidung);
    }
    ?>

    <div class="row">
        <div class="col-lg-12">
            <p class="float-left"><b>Các bình luận</b></p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?php
            $db = new binhluan();
            $result = $db->getBinhLuan($id);
            while($set = $result->fetch()):
            ?>
            
            <div class="comment-container">
                <div class="comment-header">
                    <div class="comment-avatar">
                        <img src="Content/image/people.png" alt="Avatar">
                    </div>
                    <!-- căn giữa tất cả -->
                    <p class="comment-author"><?php echo "<b style='float: left; margin-top: 10px;'>".$set['tenkh']."</b>";?></p>
                    <p class="comment-likes"><?php echo $set['luotthich'];?> <i class="fa fa-thumbs-up"></i></p>
                </div>
                <div class="comment-content">
                <hr>
                    <p><?php echo "<b style='float: left;'>Nội dung: ".$set['content']."</b>";?></p>
                </div>
            </div>
            <?php
            endwhile;
            ?>
        <br>
    </div>
</section>
