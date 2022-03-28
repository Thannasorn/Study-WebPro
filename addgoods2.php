<?php
    
    $data = $_POST['data'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $num = $_POST['num'];
    $hostname = "localhost";
    $username = "root";
    $password = "tsmt";
    $dbname = "departmentstore";
    $conn = mysqli_connect( $hostname, $username, $password,$dbname);
    echo "<center>";
    if(!$conn)
        die("Can't connect with mySQL");
    
    $sql = "INSERT INTO goods(goodsId, goodsName, goodsPrice, goodsQuantity)
    values ('$data', '$name', '$price', '$num')";
    mysqli_query($conn, $sql) or die ("Insert into the goods table an error occurred".$conn->error);
        

    echo "รหัสสินค้า : $data <br>";
    echo "ชื่อสินค้า : $name <br>";
    echo "ราคาสินค้า : $price <br>";
    echo "จำนวนสินค้า : $num";

    


?>