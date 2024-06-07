<?php 
    class hanghoa{
        // Phương thức hiển thị sản phẩm new
        function getHangHoaNew() {
            //B1: kết nối được với dữ liệu
            $db = new connect();
            //B2: cần lấy gì thì truy vấn cái đó
            $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia, c.mausac from hanghoa a,cthanghoa b, mausac c
            WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau ORDER by a.mahh DESC LIMIT 8";
            //B3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
            $result = $db->getList($select);
            return $result; // Lấy được dữ liệu về
        }     
        function getHangHoaSale() {
            //B1: kết nối được với dữ liệu
            $db = new connect();
            //B2: cần lấy gì thì truy vấn cái đó
            $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.giamgia, c.mausac from hanghoa a,cthanghoa b, mausac c 
            WHERE a.mahh=b.idhanghoa and b.idmau=c.idmau and b.giamgia!=0 ORDER by a.mahh desc limit 4";
            //B3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
            $result = $db->getList($select);
            return $result; // Lấy được dữ liệu về
        }
        //Phương thức lấy tất cả những sản phẩm mà không có sale
        function getHangHoaNewAll() {
            //B1: kết nối được với dữ liệu
            $db = new connect();
            //B2: cần lấy gì thì truy vấn cái đó
            $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia, c.mausac from hanghoa a,cthanghoa b, mausac c 
                        WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau ORDER by a.mahh";
            //B3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
            $result = $db->getList($select);
            return $result; // Lấy được dữ liệu về
        }
        function getHangHoaAllSale() {
            $db = new connect();
            $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.giamgia, c.mausac from hanghoa a,cthanghoa b, mausac c 
            WHERE a.mahh=b.idhanghoa and b.idmau=c.idmau and b.giamgia!=0 ORDER by a.mahh desc";
            $result = $db->getList($select);
            return $result;
        }
        //Phương thức lấy chi tiết sản phẩm
        function getHangHoaId($id) {
            $db = new connect();
            $select = "select DISTINCT a.mahh, a.tenhh, a.mota, b.dongia from hanghoa a, cthanghoa b where a.mahh = b.idhanghoa and a.mahh=$id";
            $result = $db->getInstance($select);
            return $result;//Trả về 1 row, array(mahh:19, tenhh: giày)
        }
        //Phương thức lấy màu sản phẩm
        function getHangHoaMau($id) {
            $db = new connect();
            $select = "select DISTINCT b.idmau, b.mausac from cthanghoa a, mausac b where a.idmau = b.idmau and a.idhanghoa=$id";
            $result = $db->getList($select);
            return $result;
        }
        //Phương thức lấy Size của 1 sản phẩm
        //Phương thức lấy hình sản phẩm
        function getHangHoaHinh($id) {
            $db = new connect();
            $select = "select DISTINCT a.hinh from cthanghoa a where a.idhanghoa=$id";
            $result = $db->getList($select);
            return $result;
        }
        //Lấy thông tin của hàng hóa phụ thuộc vào id, mau, size
        
        //Lấy tên màu thông qua id
        function getHangHoaTenMau($idmau) {
            $db = new connect();
            $select = "SELECT a.mausac FROM mausac a WHERE a.Idmau=$idmau";
            $result = $db->getInstance($select);
            return $result;
        }
        function getHangHoaIdMauSize($id,$mau){
            $db=new connect();
            $select = "select DISTINCT a.hinh from cthanghoa a, mausac b where
            a.idmau = b.idmau and a.idhanghoa=$id and b.idmau=$mau";
            $result = $db->getInstance($select);
            return $result;
        }

        function selectTimKiem($tenhh){
            $db = new connect();
            $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia, c.mausac from hanghoa a,cthanghoa b, mausac c 
            WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau and a.tenhh like '%$tenhh%'";
            $result = $db->getList($select);
            return $result;
        }
        //
        
    }
?>