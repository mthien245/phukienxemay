<?php
$act = 'dangnhap';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include_once "./View/login.php";
        break;

    case 'dangnhap_action':
        $user = '';
        $pass = '';
        if (isset($_POST['txtusername']) && isset($_POST['txtpassword'])) {
            //echo '<script>alert("hhhhh");</script>';
            $user = $_POST['txtusername'];
            $pass = $_POST['txtpassword'];
            //Mã hóa pass
            $saltF = "G234#!";
            $saltL = "Ta78@#";
            $passnew = md5($saltF . $pass . $saltL);
            //Controller yêu cầu model truy vấn xem có user đó hay không
            $kh = new user();
            $logkh = $kh->logKhachHang($user, $passnew);//trả lại array
            var_dump($logkh);
            if ($logkh) {
                //Nếu đăng nhập thành công, thì tạo session để lưu trữ thông tin khách hàng
                $_SESSION['makh'] = $logkh['makh'];
                $_SESSION['tenkh'] = $logkh['tenkh'];
                echo '<script>alert("Đăng nhập thành công");</script>';
                echo '<meta http-equiv="refresh" content="0; url=./index.php"/>';
            } else {
                echo '<script> alert("Đăng nhập không thành công");</script>';
                echo '<meta http-equiv="refresh" content="0; url=./index.php?action=dangnhap"/>';
            }
        }
        break;
    case 'dangxuat':
        unset($_SESSION['makh']);
        unset($_SESSION['tenkh']);
        unset($_SESSION['cart']);
        unset($_SESSION['masohd']);
        unset($_SESSION['ngay']);
        unset($_SESSION['diachi']);
        unset($_SESSION['sodt']);
        echo '<meta http-equiv="refresh" content="0; url=./index.php"/>';
        break;
}
?>