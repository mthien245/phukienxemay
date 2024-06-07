<?php 
    $act="nhap";
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
    }
    switch($act) {
        case 'nhap':
            include_once "./View/nhap.php";
            break;
        case 'nhap_action':
            //Nhận thông tin
            $tenkh = '';
            $diachi = '';
            $sodt = '';
            $user = '';
            if(isset($_POST['submit'])) {
                $tenkh = $_POST['txttenkh'];
                $diachi = $_POST['txtdiachi'];
                $sodt = $_POST['txtsodt'];
                $kh = new user();
                    //insert vào database
                    $iskh = $kh->insertNhapKhachHang($tenkh, $user, $diachi, $sodt);
                    if($iskh!=false) {
                        echo '<script> alert("Đăng ký thành công");</script>';
                        include_once "./View/order.php";
                    }
                    else {
                        echo '<script> alert("Đăng ký không thành công");</script>';
                        echo '<meta http-equiv="refresh" content="0; url=./index.php?action=dangky"/>';
                    }
            }
    }
?>