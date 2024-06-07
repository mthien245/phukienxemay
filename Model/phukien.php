<?php
class phukien{
    function selectTimKiem($tenhh){
        $db = new connect();
        $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia, c.mausac from hanghoa a,cthanghoa b, mausac c 
        WHERE a.mahh=b.idhanghoa and b.idmau=c.Idmau and a.tenhh like '%$tenhh%'";
        $result = $db->getList($select);
        return $result;
    }
    function getPhuKien($type)
    {
        $type = substr($type, 7, 1);
        $db = new connect();
        $select = "select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia from hanghoa a,cthanghoa b WHERE a.maloai=" . $type . " and a.mahh=b.idhanghoa ORDER by a.mahh desc";
        $result = $db->getList($select);
        return $result;
    }
}

?>