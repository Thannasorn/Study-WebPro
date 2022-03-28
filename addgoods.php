<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="addgoods2.php" method="post" >
        <table align="center" border="1">
            <tr>
                <td align="center" colspan="2" bgcolor="#3399CC">Add goods</td>
            </tr>
            <tr>
                <td>รหัสสินค้า :</td>
                <td><input type="text" name="data" size="30" value=""></td>
            </tr>
            <tr>
                <td>ชื่อสินค้า :</td>
                <td><input type="text" name="name" size="30" value=""></td>
            </tr>
            <tr>
                <td>ราคาสินค้า :</td>
                <td><input type="number" name="price" size="30" value=""></td>
            </tr>
            <tr>
                <td>จำนวนสินค้า : </td>
                <td><input type="number" name="num" size="30" value=""></td>
            </tr>
            
        </table>
        <br>
        <div align = "center">
            <input type="submit" name="Submit" value="Add" >
            <input type="reset" name="Reset" value="Clear" >
        </div>
    
    
    
    </form>
</body>
</html>