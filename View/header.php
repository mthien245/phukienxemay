
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <style>
  body {
    padding: 0;
    margin: 0;
  }

  .container {
    position: relative;
    margin-top: 100px;
  }

  .container img {
    display: block;
    width: 100%;
  }

  a {
    color: black;
    font-size: 15px;
  }

  a:hover {
    text-decoration: none;
    color:#ff5f6d ;
  }

  nav {
    position: fixed;
    z-index: 10;
    left: 0;
    right: 0;
    top: 0;
    font-family: "Montserrat", "sans-serif";
    height: 100px;
    background-color: #ff5f6d;
    background: -webkit-linear-gradient(to right, #ff5f6d, #ffc371);
    background: linear-gradient(to right, #ff5f6d, #ffc371);
    padding: 0 5%;
  }

  nav .logo {
    float: left;
    width: 40%;
    height: 100%;
    display: flex;
    align-items: center;
    font-size: 24px;
    color: #fff;
  }

  nav .links {
    float: right;
    padding: 0;
    margin: 0;
    width: 400px;
    height: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
  }

  nav .links li {
    list-style: none;
  }

  nav .links a {
    display: block;
    padding: 10px;
    font-size: 16px;
    font-weight: bold;
    color: black;
    text-decoration: none;
    position: relative;
  }

  nav .links a:hover {
    color: #ff5f6d;
    color: -webkit-linear-gradient(to right, #ff5f6d, #ffc371);
    color: linear-gradient(to right, #ff5f6d, #ffc371);
  }

  nav .links a::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: white;
    visibility: hidden;
    transform: scaleX(0);
    transition: all 0.3s ease-in-out 0s;
  }

  nav .links a:hover::before {
    visibility: visible;
    transform: scaleX(1);
    color: white;
  }

  #nav-toggle {
    position: absolute;
    top: -100px;
  }

  nav .icon-burger {
    display: none;
    position: absolute;
    right: 5%;
    top: 50%;
    transform: translateY(-50%);
  }

  nav .icon-burger .line {
    width: 30px;
    height: 5px;
    background-color: #fff;
    margin: 5px;
    border-radius: 3px;
    transition: all 0.5s ease-in-out;
  }

  @media screen and (max-width: 768px) {
    nav .logo {
      float: none;
      width: auto;
      justify-content: center;
    }

    nav .links {
      float: none;
      position: fixed;
      z-index: 9;
      left: 0;
      right: 0;
      top: 100px;
      bottom: 100%;
      width: auto;
      height: auto;
      flex-direction: column;
      justify-content: space-evenly;
      background-color: rgba(0, 0, 0, 0.8);
      overflow: hidden;
      transition: all 0.5s ease-in-out;
    }

    nav .links a {
      font-size: 20px;
    }

    nav :checked~.links {
      bottom: 0;
    }

    nav .icon-burger {
      display: block;
    }

    nav :checked~.icon-burger .line:nth-child(1) {
      transform: translateY(10px) rotate(225deg);
    }

    nav :checked~.icon-burger .line:nth-child(3) {
      transform: translateY(-10px) rotate(-225deg);
    }

    nav :checked~.icon-burger .line:nth-child(2) {
      opacity: 0;
    }

  }
</style>

<body>
  <nav>
    <input type="checkbox" id="nav-toggle">
    <div class="logo"><b><a href="index.php"><img src="Content/image/teddy-bear-logo-options-08.png" alt="" width="40%"></a></b></div>
    <ul class="links">
      <?php
      if (!isset($_SESSION['makh'])) {
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Product</a>
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="index.php?action=phukien1">Phuộc xe máy</a>
            <a class="dropdown-item" href="index.php?action=phukien2">Lọc gió xe máy</a>
            <a class="dropdown-item" href="index.php?action=phukien3">Pô xe máy</a>
            <a class="dropdown-item" href="index.php?action=phukien4">Nhôm sên đĩa</a>
            <a class="dropdown-item" href="index.php?action=phukien5">Bình ắc quy xe máy</a>
            <a class="dropdown-item" href="index.php?action=phukien6">Mâm xe máy</a>
            <a class="dropdown-item" href="index.php?action=phukien7">Khóa xe máy</a>
          </div>
        </li>
        <li><a href="index.php?action=dangky">Register</a></li>
        <li><a href="index.php?action=dangnhap">Login</a></li>
        <?php
      } else {
        echo '<li class="nav-item">
                            <a style="font-weight: bold;" href="index.php?action=dangnhap&act=dangxuat" class="nav-link">Đăng Xuất</a>
                        </li>';
      }
      ?>
      <?php
      if (isset($_SESSION['makh'])) {
        echo '<li>
           <p style="color: red; margin-top: 15px; margin-left: 0px; font-weight: bold; font-size: 20px;">' . $_SESSION['tenkh'] . '</p>
 </li>';
      }
      ?>
      <li><a href="index.php?action=giohang" class="nav-link"><img
            src="Content/image/pngtree-shopping-cart-icon-png-image_5060870.jpg" width="40px" height="40px"
            style="border-radius: 30px;" alt=""></a></li>
    </ul>
  </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>