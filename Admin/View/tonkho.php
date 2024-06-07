<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách hàng hóa tồn kho</title>
    <style>
        h3 {
            margin-top: 100px;
        }

        /* Định dạng viền cho bảng */
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #dddddd;
        }

        /* Định dạng viền cho các ô */
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        /* Định dạng màu nền xen kẽ cho các dòng */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="text-center"><b>DANH SÁCH HÀNG HÓA TỒN KHO</b></h3>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Mã hàng hóa</th>
                    <th>Tên hàng hóa</th>
                    <th>Mã màu</th>
                    <th>Đơn giá</th>
                    <th>Số lượng tồn</th>
                    <th>Hình ảnh</th>
                    <th>Khuyến mãi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cthh = new cthanghoa();
                $hanghoa_list = $cthh->getHangHoa();
                foreach ($hanghoa_list as $hanghoa) {
                    $giamgia = $hanghoa['giamgia'] == 0 ? 'Không' : $hanghoa['giamgia'];
                    echo "<tr>";
                    echo "<td>{$hanghoa['idhanghoa']}</td>";
                    echo "<td>{$hanghoa['tenhh']}</td>";
                    echo "<td>{$hanghoa['idmau']}</td>";
                    echo "<td>{$hanghoa['dongia']}</td>";
                    echo "<td>{$hanghoa['soluongton']}</td>";
                    echo "<td><img src='../Content/image/{$hanghoa['hinh']}' width='100px' height='100px'></td>";
                    echo "<td>{$giamgia}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
