<div class="table-responsive">
    <form action="" method="post">
        <table class="table table-bordered" border="0">
            <?php 
              if (isset($_SESSION['cart']) && count($_SESSION['cart']) <= 0) {
                  echo "<tr><td colspan='4'><h2 style='color: red;'>Giỏ hàng của bạn đang trống</h2></td></tr>";
                  echo "<tr><td colspan='4'><a href='index.php?action=trangchu'><button type='button' class='btn btn-danger'>Tiếp tục mua hàng</button></a></td></tr>";
                  exit();
              }
              if (!isset($_SESSION['makh'])): ?>
                <tr>
                    <td colspan="4">
                        <h2 style="color: red;">Vui lòng nhập thông tin của bạn</h2>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Họ và tên:
                        <input type="text" name="txttenkh" id="txttenkh" class="form-control" required>
                    </td>
                    <td colspan="2">Ngày lập:
                        <input type="date" name="txtngay" id="txtngay" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Địa chỉ:
                        <input type="text" name="txtdiachi" id="txtdiachi" class="form-control" required>
                    </td>
                    <td colspan="2">Số điện thoại:
                        <input type="text" name="txtsodt" id="txtsodt" class="form-control" required>
                    </td>
                </tr>
            <?php else: ?>
                <?php
                if (isset($_SESSION['masohd'])) {
                    $mshd = $_SESSION['masohd'];
                    $hd = new hoadon();
                    $kh = $hd->selectThongTinKHHD($mshd);
                    $ngay = $kh['ngaydat'] ?? $_SESSION['ngay'];
                    $tenkh = $kh['tenkh'] ;
                    $dc = $kh['diachi'];
                    $sodt = $kh['sodienthoai'];
                }
                ?>
                <tr>
                    <td colspan="4">
                        <h2 style="color: red;">HÓA ĐƠN</h2>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Số Hóa đơn: <?php echo $mshd; ?></td>
                    <td colspan="2">Ngày lập: <?php echo $ngay; ?></td>
                </tr>
                <tr>
                    <td colspan="2">Họ và tên:</td>
                    <td colspan="2"><?php echo $tenkh; ?></td>
                </tr>
                <tr>
                    <td colspan="2">Địa chỉ:</td>
                    <td colspan="2"><?php echo $dc; ?></td>
                </tr>
                <tr>
                    <td colspan="2">Số điện thoại:</td>
                    <td colspan="2"><?php echo $sodt; ?></td>
                </tr>
            <?php endif; ?>
        </table>
        <!-- Thông tin sản phẩm -->
        <table class="table table-bordered">
            <thead>
                <tr class="table-success">
                    <th>Số TT</th>
                    <th>Thông Tin Sản Phẩm</th>
                    <th>Tùy Chọn Của Bạn</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                    foreach ($_SESSION['cart'] as $key => $item) :
                ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $item['tenhh']; ?><br /></td>
                            <td>Đơn Giá: <?php echo $item['dongia']; ?> - Số Lượng: <?php echo number_format($item['soluong']); ?><br /></td>
                            <td><p style="float: right;"> Thành Tiền <?php echo $item['thanhtien']; ?><sup><u>đ</u></sup></p></td>
                        </tr>
                <?php
                    endforeach;
                }
                ?>
                <tr>
                    <td colspan="3"><b>Tổng Tiền</b></td>
                    <td style="float: right;"><b><?php $gh = new giohang(); echo $gh->getSubTotal(); ?> <sup><u>đ</u></sup></b></td>
                </tr>
            </tbody>
        </table>
        <?php if (!isset($_SESSION['makh'])): ?>
            <button type="submit" name="submit" class="btn btn-danger" style="padding: 10px 20px;">Đặt Hàng</button>
        <?php endif; ?>
        <?php
        $rd = rand(100000000000, 999999999999);
        if (isset($_POST['submit'])) {
            if(isset($_POST['txttenkh']) && isset($_POST['txtdiachi']) && isset($_POST['txtsodt'])) {
                $tenkh = $_POST['txttenkh'];
                $diachi = $_POST['txtdiachi'];
                $sodt = $_POST['txtsodt'];
                $_SESSION['ngay'] = $_POST['txtngay'];
                $kh = new user();
                $email = $rd."@gmail.com";
                $check = $kh->checkKhachHang($sodt, $email)->rowCount();
                if($check == 0) {
                  $iskh = $kh->insertKhachHang($tenkh, $sodt, "demo", "demo@gmail.com", $diachi, $sodt);
                  $logkh = $kh->logKhachHang($sodt, "demo");
                  if ($logkh) {
                    $_SESSION['makh'] = $logkh['makh'];
                    $_SESSION['tenkh'] = $logkh['tenkh'];
                    echo "<script>window.location = 'index.php?action=thanhtoan'</script>";
                  }
                } else {
                  echo "<script>alert('Bạn có tài khoản trên hệ thống, vui lòng đăng nhập');</script>";
                }
            } else {
                echo "<script>alert('Vui lòng cung cấp đầy đủ thông tin khách hàng');</script>";
            }
        }
      ?>
    </form>
</div>