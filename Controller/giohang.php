<?php 
// unset($_SESSION['cart']);
    //xem người dùng có giỏ hàng hay chưa, nếu chưa thì tạo ra giỏ hàng
    if(!isset($_SESSION['cart'])){
        //Tạo giỏ hàng
        $_SESSION['cart']=array();//chứa nhiều món hàng
    }
    $act='giohang';
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
    }
    switch($act) {
        case 'giohang':
            include_once './View/cart.php';
            break;
        case 'giohang_action':
            #truyền id, mau, size, soluong
            $id=0;
            $mausac='';
            $size=0;
            $soluong=0;
            if(isset($_POST['mahh'])){
                $id=$_POST['mahh'];
                $mausac=$_POST['mymausac'];
                $soluong=$_POST['soluong'];
                //Controller yêu cầu add thông tin này vào trong giỏ hàng
                $gh = new giohang();
                $gh->addCart($id, $mausac, $size, $soluong);
                echo '<meta http-equiv="refresh" content="0; url=./index.php?action=giohang"/>';
            }
            break;
        case 'giohang_xoa':
            //Nhận key
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                unset($_SESSION['cart'][$id]);
            }
            echo '<meta http-equiv="refresh" content="0; url=./index.php?action=giohang"/>';
            break;
        case 'update_gh':
            //Nhận giá trị
            if(isset($_POST['newqty'])) {
                $newqty = $_POST['newqty'];//[0:1, 2:4]
                //Duyệt qua giỏ hàng, hàng nào mà có số lượng khác với empty thì tiến hành update
                foreach($newqty as $key =>$value) {
                    if($_SESSION['cart'][$key]['soluong']!=$value) {
                        $gh = new giohang();
                        $gh->updateHH($key, $value);
                    }
                }
            }
            echo '<meta http-equiv="refresh" content="0; url=./index.php?action=giohang"/>';
            break;
    }
?>