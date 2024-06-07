<div class="table-responsive">

  <form action="index.php?action=giohang&act=update_gh" method="post">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td colspan="5">
            <h2 style="color: red;">THÔNG TIN GIỎ HÀNG</h2>
          </td>
        </tr>
        <tr class="table-success">
          <th>Số TT</th>
          <th>Thông Tin Sản Phẩm</th>
          <th>Tùy Chọn Của Bạn</th>
          <th colspan="2">Giá</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {

          ?>
          <?php
          foreach ($_SESSION['cart'] as $key => $item):
            ?>
            <tr>
              <td>
                <?php echo $key + 1; ?>
              </td>
              <td>
                <?php echo $item['tenhh']; ?><br />
              <td>Màu:
                <?php echo $item['mausac']; ?> <br>
              </td>
              <td>Đơn Giá:
                <?php echo $item['dongia']; ?> - Số Lượng: <input type="number" name="newqty[<?php echo $key; ?>]"
                  value="<?php echo number_format($item['soluong']); ?>" /><br />
                <p style="float: right;"> Thành Tiền
                  <?php echo $item['thanhtien']; ?><sup><u>đ</u></sup>
                </p>
              </td>
              <td><a href="index.php?action=giohang&act=giohang_xoa&id=<?php echo $key; ?>"><button type="button"
                    class="btn btn-danger">Xóa</button></a>
                    <button type="submit" class="btn btn-secondary">Sửa</button>
              </td>
            </tr>
          <?php
          endforeach;
          ?>
          <tr>
            <td colspan="3">

              <b>Tổng Tiền</b>

            </td>
            
            <td style="float: right;">

              <b>
                <?php $gh = new giohang();
                echo $gh->getSubTotal(); ?> <sup><u>đ</u></sup>
              </b>

            </td>

            <td><a href="index.php?action=thanhtoan">Thanh toán</a></td>
          </tr>
        </tbody>
        <?php
        } else {
          echo '<tr><td colspan="5">Giỏ hàng của bạn đang trống</td></tr>';
          echo '<tr><td colspan="5"><a href="index.php">Quay lại mua hàng</a></td></tr>';
        }
        ?>
    </table>
  </form>
</div>
</div>