<?php
    class cthanghoa{
        function insertCTHangHoa($mahh,$mamau,$dongia,$slt,$hinh,$giamgia)
        {
            $db=new connect();
            $query="insert into cthanghoa(idhanghoa,idmau,dongia,soluongton,hinh,giamgia) values ($mahh,$mamau,$dongia,$slt,'$hinh',$giamgia)";
            $result=$db->exec($query);
            return $result;
        }
        function getHangHoa()
        {
            $db=new connect();
            $select="select a.*,b.tenhh from cthanghoa a,hanghoa b where a.idhanghoa=b.mahh";
            $result=$db->getList($select);
            return $result;
        }
        
    }

?>