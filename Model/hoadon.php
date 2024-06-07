<?php
    class hoadon{
        // phuong thuc insert vao bang hoa don
        function insertHoaDon($makh){
            $date = new DateTime('now');
            $ngay = $date->format('Y-m-d');
            $db = new connect();
            $query = "insert into hoadon(masohd, makh, ngaydat, tongtien) values(Null, $makh, '$ngay',0)";
            $db->exec($query);
            // insert xong thi can lay ra  ma hoa don vua insert
            $select = "select masohd from hoadon order by masohd desc limit 1";
            $mahd = $db->getInstance($select);
            return $mahd[0]; // mang tra ve $mahd=array(5); tra ve so 5
        }
        // phuong thuc insert vao bang chi tiet hoa don
        function insertCTHoaDon($masohd, $mahh, $soluongmua,$mausac, $thanhtien){
            $db = new connect();
            $query = "insert into cthoadon(masohd, mahh, soluongmua, mausac,thanhtien,tinhtrang)
            values($masohd, $mahh, $soluongmua, '$mausac', $thanhtien, 0)";
            $db->exec($query);
        }
        // phuong thuc update tong tien vao lai bang hoa don
        function updateHoaDonTongTien($masohd, $makh, $tongtien){
            $db = new connect();
            $query="update hoadon set tongtien=$tongtien where masohd=$masohd and makh=$makh";
            $db->exec($query);
        }
        function selectThongTinKHHD($masohd){
            $db = new connect();
            $select = "select b.masohd, b.ngaydat, a.tenkh, a.diachi, a.sodienthoai from khachhang a inner join hoadon b on b.makh = a.makh where b.masohd = $masohd";
            $result=$db->getInstance($select);
            return $result;
        }
        // phuong thuc lay thong tin hang hoa theo ma so hoa don
        function selectThongTinHHID($masohd){
            $db=new connect();
            $select="select Distinct a.tenhh, c.mausac, c.size, b.dongia, c.soluongmua
            from hanghoa a, cthanghoa b, cthoadon c where a.mahh=b.idhanghoa and a.mahh=c.mahh and c.masohd=$masohd";
            $result = $db->getList($select);
            return $result;
        }
        function selectHoaDonCTHD($masohd){
            $db=new connect();
            $select="select Distinct a.tenhh, c.mausac, c.size, b.dongia, c.soluongmua
            from hanghoa a, cthanghoa b, cthoadon c where a.mahh=b.idhanghoa and a.mahh=c.mahh and c.masohd=$masohd";
            $result=$db->getList($select);
            return $result;
        }
    }
?>