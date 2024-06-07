<?php
    class hanghoa{
        function getHangHoa(){
            $db=new connect();
            $select="select * from hanghoa where trangthai=0";
            $result=$db->getList($select);
            return $result;
        }
        function insertHangHoa($tenhh,$maloai,$dacbiet,$slx,$ngaylap,$mota){
            $db=new connect();
            $query="insert into hanghoa(mahh,tenhh,maloai,dacbiet,soluotxem,ngaylap,mota) values(null,'$tenhh',$maloai,$dacbiet,$slx,'$ngaylap','$mota')";
            $result=$db->exec($query);
            return $result;
        }
        // lay thong tin 1 san pham
        function getHangHoaID($id){
            $db=new connect();
            $select="select * from hanghoa where mahh=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        function updateHangHoa($mahh,$tenhh,$maloai,$dacbiet,$slx,$ngaylap,$mota){
            $db=new connect();
            $query="update hanghoa set tenhh='$tenhh',maloai=$maloai,dacbiet=$dacbiet,soluotxem=$slx,ngaylap='$ngaylap',mota='$mota' where mahh=$mahh";
            $result=$db->exec($query);
            return $result;
        }
        function getMau(){
            $db=new connect();
            $select="select * from mausac";
            $result=$db->getList($select);
            return $result;
        }
        function getThongKe(){
                $db=new connect();
                $select="SELECT a.tenhh, sum(b.soluongmua) as soluong FROM hanghoa a, cthoadon b WHERE a.mahh=b.mahh GROUP by a.tenhh";
                $result=$db->getList($select);
                return $result;
        }
        function deleteProduct($mahh){
            $db=new connect();
            $query="update hanghoa set trangthai=1 where mahh=$mahh";
            $result=$db->exec($query);
            return $result;
        }
    }
?>