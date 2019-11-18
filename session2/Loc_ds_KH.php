<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<form method="post">
    Từ: <input id = "from" type="text" name="from" placeholder="yyyyy/mm/dd"/>
    Đến: <input id = "to" type="text" name="to" placeholder="yyyy/mm/dd" />
    <input type = "submit" id = "submit" value = "Lọc"/>
</form>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("ten" => "Mai Văn Hoàn",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Hà Nội",
            "anh" => "images/img1.jpg"),
        "2" => array("ten" => "Nguyễn Văn Nam",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Bắc Giang",
            "anh" => "images/img2.jpg"),
        "3" => array("ten" => "Nguyễn Thái Hòa",
            "ngaysinh" => "1983-08-21",
            "diachi" => "Nam Định",
            "anh" => "images/img3.jpg"),
        "4" => array("ten" => "Trần Đăng Khoa",
            "ngaysinh" => "1983-08-22",
            "diachi" => "Hà Tây",
            "anh" => "images/img4.jpg"),
        "5" => array("ten" => "Nguyễn Đình Thi",
            "ngaysinh" => "1983-08-17",
            "diachi" => "Hà Nội",
            "anh" => "images/img5.jpg")
    );
    foreach($customerlist as $key => $values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['ten']."</td>";
        echo "<td>".$values['ngaysinh']."</td>";
        echo "<td>".$values['diachi']."</td>";
        echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
        echo "</tr>";
    }
    function searchByDate($customers, $from_date, $to_date) {
        if(empty($from_date) && empty($to_date)){
            return $customers;
        }
        $filtered_customers = [];
        foreach($customers as $customer){
            if(!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date)))
                continue;
            if(!empty($to_date) && (strtotime($customer['day_of_birth']) > strtotime($to_date)))
                continue;
            $filtered_customers[] = $customer;
        }
        return $filtered_customers;
    }
    $from_date = NULL;
    $to_date = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $from_date = $_POST["from"];
        $to_date = $_POST["to"];
    }
    $filtered_customers = searchByDate($customerlist, $from_date, $to_date);


    ?>
</table>
<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php if(count($filtered_customers) === 0):?>
        <tr>
            <td colspan="5" class="message">Không tìm thấy khách hàng nào</td>
        </tr>
    <?php endif; ?>

    <?php foreach($filtered_customers as $index => $customer): ?>
        <tr>
            <td><?php echo $index + 1;?></td>
            <td><?php echo $customer['name'];?></td>
            <td><?php echo $customer['day_of_birth'];?></td>
            <td><?php echo $customer['address'];?></td>
            <td><div class="profile"><img src="<?php echo $customer['profile'];?>"/></div> </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
