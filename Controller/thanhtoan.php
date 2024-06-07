<?php
    if(isset($_SESSION['makh'])){
        $makh = $_SESSION['makh'];
        // controller yeu cau model insert vao bang hoa don truoc de sinh  ra masohd roi moi duoc insert bang cthanghoa
        $hd=new hoadon();
        $sohd=$hd->insertHoaDon($makh); // so 5
        $_SESSION['masohd'] = $sohd;
        $total = 0;
        // luc nay da co ma so hoa don vua them vao thi duoc insert vao chitiethoadon
        // chi tiet hoa don tuc la lay tu gio hang vo
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            foreach($_SESSION['cart'] as $key => $item){
                // controller yeu cau model insert vao chi tiet hoa don
                $hd->insertCTHoaDon($sohd, $item['mahh'], $item['soluong'],$item['mausac'], $item['thanhtien']);
                $total+=$item['thanhtien'];
                // ham cap nhat so luong tonn` theo ma hang
                // updatesoluongtonhh($mahh, $mausac, $size,$soluongmua);
            }
        }
        // sau khi insert vao ban cthoadon thi update tong thanh tien tro lai hoa don
        $hd->updateHoaDonTongTien($sohd, $makh, $total);
        include_once "View/order.php";
        unset($_SESSION['cart']);
    } else {
        include_once "View/order.php";
    }
?>