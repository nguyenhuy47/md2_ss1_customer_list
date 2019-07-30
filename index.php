<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
<table border="1">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>No</th>
        <th>name</th>
        <th>Birthday</th>
        <th>Address</th>
        <th>Image</th>
    </tr>

    <?php
    $customerList = array(
        "1" => array("name" => "Mai Phuong Thuy",
            "birthday" => "06/08/1988",
            "address" => "Ha Noi",
            "image" => "images/phuongthuy.jpg"),

        "2" => array("name" => "Dang Thi Ngoc Han",
            "birthday" => "11/03/1989",
            "address" => "Hai Duong",
            "image" => "images/ngochan.jpg"),

        "3" => array("name" => "Nguyen Thi Huyen",
            "birthday" => "04/07/1985",
            "address" => "Quang Ninh",
            "image" => "images/thihuyen.jpg"),

        "4" => array("name" => "Ngo Phuong Lan",
            "birthday" => "12/03/1987",
            "address" => "Ha Noi",
            "image" => "images/phuonglan.jpg"),

        "5" => array("name" => "Nguyen Tran Huyen My",
            "birthday" => "06/08/1988",
            "address" => "Ha Noi",
            "image" => "images/huyenmy.jpg")
    )
    ?>
    <?php
    foreach ($customerList as $key => $values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['name']."</td>";
        echo "<td>".$values['birthday']."</td>";
        echo "<td>".$values['address']."</td>";
        echo "<td><image src ='".$values['image']."' width = '60px' height ='60px'/></td>";
        echo "</tr>";
    }
    ?>
    
</table>
</body>
</html>



