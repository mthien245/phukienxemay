<?php
class binhluan
{
    function getBinhLuan($mahh)
    {
        $db = new connect();
        $select = "select a.idcomment, a.idkh, a.idhanghoa, a.content, a.luotthich, b.tenkh from comment a, khachhang b where a.idkh = b.makh and a.idhanghoa = $mahh";
        $result = $db->getList($select);
        return $result;
    }
    function addBinhLuan($mahh, $makh, $noidung) {
        $db = new connect();
        $query = "insert into comment(idcomment, idkh, idhanghoa, content, luotthich) values(Null, $mahh, $makh, '$noidung', 0)";
        $db->exec($query);
    }

}