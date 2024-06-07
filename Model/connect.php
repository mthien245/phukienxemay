<?php 
    class connect {
        //Thuộc tính
        var $db = null;
        //Hàm tạo được gọi khi new 1 đối tượng
        function __construct()
        {
            //nếu đụng port thì phải để port 3307 vào
            $dsn = 'mysql:host=localhost;dbname=shopphukien';
            $user='root';
            $pass=''; //Nếu xài xamp,wamp,laragon thì $pass='' còn dùng mamp thì $pass='root'
            //kết nối dược vào class PDO
            try {
                //code...
                $this->db=new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
                
            } catch (\Throwable $th) {
                //throw $th;
                echo "Kết nối không thành công";
                echo $th;
            }
        }
        // Câu lệnh select do phương thức query thực thi
        // Phương thức truy vấn trả ra nhiều row
        function getList($select) {
            $result = $this->db->query($select); //$this->db->query(select * from hanghoa)
            return $result;
        }
        // Phương thức trả về 1 row
        function getInstance($select) {
            $results=$this->db->query($select); //$this->db->query(select * from hanghoa)
            $result=$results->fetch(); // $result là array chỉ chứa 1 dòng, [mahh: 1,tênhh: giày....]
            return $result;
        }
        // Câu lệnh insert, update, delete ai làm? là exec
        function exec($query) {
            $results=$this->db->exec($query);
            return $results;
        }
        // Dùng prepare
        function execp($query) {
            $statement=$this->db->prepare($query);
            return $statement;
        }
    }
?>