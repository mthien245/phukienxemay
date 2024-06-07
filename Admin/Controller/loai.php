<?php
$act="loai";
if(isset($_GET['act']))
{
    $act=$_GET['act'];
}
switch ($act) {
    case 'loai':
        include_once "./View/addloaisanpham.php";
        break;
    
    case 'loai_action':
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            // b1: lấy được file từ server về
            $file=$_FILES['file']['tmp_name'];
            // thay thế các ký tự xEF,xBB,xBF
            file_put_contents($file,str_replace("\xEF\xBB\xBF","",file_get_contents($file)));
            // b2: mở file
            $file_open=fopen($file,"r");
            // b3: đọc dữ liệu ra
            while (($csv = fgetcsv($file_open, 1000, ";")) !== false) {
                $maloai = (int)$csv[0];
                $tenloai = $csv[1];
                $idmenu = (int)$csv[2];
                echo $maloai;
                echo $tenloai;
                echo $idmenu;
                $db = new connect();
                $query = "insert into loai(maloai, tenloai, idmenu) values ($maloai, '$tenloai', $idmenu)";
                $db->exec($query);
            }
            
            echo '<script>alert("Import thành công");</script>';
            echo '<meta http-equiv=refresh content="0;url=./index.php?action=loai"/>';
        }
        break;
}
?>