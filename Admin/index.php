
<?php 
// spl_autoload: tự động load lên những file là hướng đối tượng tức là class
// Cách 1
// spl_autoload_register('myModelLoader');
// function myModelLoader($className) {
//     $path = 'Model/';
//     include_once $path.$className.'.php';
// }

// Cách 2

    // spl_autoload: tự động load lên những file là hướng đối tượng tức là class
    // Cách 1
    // spl_autoload_register('myModelLoader');
    // function myModelLoader($className) {
    //     $path = 'Model/';
    //     include_once $path.$className.'.php';
    // }
    
    // Cách 2
    include_once "Model/uploadimage.php";
    session_start();  
    // unset($_SESSION['admin']);
    spl_autoload_register("myModelLoader");
    function myModelLoader($className) {
        $path="Model/";
        include $path.$className.'.php';
    }
    // spl_autoload_extensions('.php');
    // spl_autoload_register();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <!-- link đăng nhập -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- link đăng nhập -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- end -->
    <!-- end link đăng nhập -->
    <link rel="stylesheet" type="text/css" href="../Content/CSS/Tour.css" />
    <title>Admin SanPham</title>
</head>

<body>
<!-- Thanh header tao menu -->
<?php
    if (isset($_SESSION['admin'])) {
        include "View/headder.php";
    }
           
        ?>
        <!-- end hinh dong -->
        <!-- phan thân -->
        <div class="container">
        <div class="row">
        <?php
             //load controler
            $ctrl="dangnhap";
            if(isset($_GET['action']))
                $ctrl=$_GET['action'];
            if($ctrl=="thongke" || $ctrl=="thongke2" || $ctrl=="thongke3") {
                include 'View/thongke.php';
            } else {
                include 'Controller/'.$ctrl.'.php';
            }

        //end controller
            
        ?>
        </div>
        <!-- end menu right -->
    </div>
    <!-- footer -->
    <?php
    if (isset($_SESSION['admin'])) {
        include "View/footer.php";
    }
    ?>
    <!-- end footer -->
   
</body>

</html>