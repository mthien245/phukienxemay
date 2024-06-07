<?php
if(isset($_GET['action'])) {
    $action = $_GET['action'];
    switch($action) {
        case 'phukien1':
            $accessory = 'Phuộc xe máy';
            break;
        case 'phukien2':
            $accessory = 'Lọc gió xe máy';
            break;
        case 'phukien3':
            $accessory = 'Pô xe máy';
            break;
        case 'phukien4':
            $accessory = 'Nhôm sên đĩa';
            break;
        case 'phukien5':
            $accessory = 'Bình ắc quy xe máy';
            break;
        case 'phukien6':
            $accessory = 'Mâm xe máy';
            break;
        case 'phukien7':
            $accessory = 'Khóa xe máy';
            break;
        default:
            header('Location: index.php');
            exit();
    }
    include_once './View/phukien.php';
}
?>
