<?php 
    class user{
        //Phương thức kiểm tra trùng username và email
        function checkKhachHang($user, $email) {
            $db = new connect();
            $select = "select a.username, a.email from khachhang a where a.username='$user' or a.email='$email';";
            $result = $db -> getList($select);
            return $result;
        }
        function insertKhachHang($tenkh, $username, $matkhau, $email, $diachi, $sodienthoai) {
            $db = new connect();
            $query = "INSERT INTO khachhang (makh, tenkh, username, matkhau, email, diachi, sodienthoai) VALUES (NULL, '$tenkh', '$username', '$matkhau', '$email', '$diachi', '$sodienthoai')";
            // exec
            // echo $query;
            $result = $db->exec($query);
            return $result;
        }
        function insertNhapKhachHang($tenkh, $diachi, $sodt) {
            $db = new connect();
            $query = "INSERT INTO khachhang (makh, tenkh, email, diachi, sodienthoai) VALUES (NULL, '$tenkh', '$diachi', '$sodt')";
            // exec
            // echo $query;
            $result = $db->exec($query);
            return $result;
        }
        //Phương thức login
        function logKhachHang($user, $pass) {
            $db = new connect();
            $select = "select a.makh, a.tenkh, a.username from khachhang a where a.username='$user' and a.matkhau='$pass'";
            $result = $db->getInstance($select);
            return $result;
        }
        function checkEmail($email){
            $db = new connect();
            $select = "select * from khachhang a where a.email='$email'";
            $result = $db -> getList($select);
            return $result;
        }
        // pt update khi biet email
        function updatePassEmail($email, $pass){
            $db = new connect();
            $query="update khachhang a set matkhau='$pass' where email='$email'";
            $db-> exec($query);
        }

    }
?>