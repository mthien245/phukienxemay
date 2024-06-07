<?php
$act = "dangnhap";
if (isset ($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include_once "./View/dangnhap.php";
        break;

    case 'dangnhap_action':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = $_POST['txtusername'];
            $pass = $_POST['txtpassword'];
            $nv = new nhanvien();
            $check = $nv->getAdmin($user, $pass);
            if ($check !== false) {
                $_SESSION['admin'] = $check['username'];
                echo '<script>alert("dang nhap thanh cong");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=hanghoa"/>';
            } else {
                echo '<script>alert("dang nhap 0 thanh cong");</script>';
                include_once "./View/dangnhap.php";
            }
        }
        break;
    case 'dangxuat':
        unset($_SESSION['admin']);
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
        break;
}

?>