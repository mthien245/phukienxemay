<?php
 $act="cthanghoa";
 if(isset($_GET['act']))
 {
     $act=$_GET['act'];
 }
 switch ($act) {
    case 'cthanghoa':
        include_once "./View/cthanghoa.php";
        break;
    
    case 'cthanghoa_action':
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $mahh=$_POST['mahh'];
            $mamau=$_POST['mamau'];
            $dongia=$_POST['dongia'];
            $slt=$_POST['slt'];
            $hinh=$_FILES['image']['name'];
            $giamgia=$_POST['giamgia'];
            $ct=new cthanghoa();
            $check=$ct->insertCTHangHoa($mahh,$mamau,$dongia,$slt,$hinh,$giamgia);
            if($check!==false)
            {
                uploadImage();
                echo '<script>alert("Insert thành công");</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthanghoa"/>';
            }
            else
            {
                echo '<script>alert("Insert khong thành công");</script>';
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=cthanghoa"/>';
            }
        }
        break;
 }
?>