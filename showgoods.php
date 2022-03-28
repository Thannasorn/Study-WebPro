<!DOCTYPE html>
<html>
    <head>
        <title>Update Table Book</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $hostname = "localhost";
        $username = "root";
        $password = "tsmt";
        $dbname = "departmentstore";
        $conn = mysqli_connect( $hostname, $username, $password, $dbname);
        if ( ! $conn ) die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
        mysqli_set_charset($conn,"utf8");
        $sqltxt = mysqli_query($conn,"SELECT * FROM goods order by goodsId")
        or die (mysqli_error($conn));
        echo "<CENTER><H3>Show goods</H3></CENTER>";?>
        </tr></table><BR><BR>
        <div align = "center"> <A HREF="addgoods.php">Add good</A></div><BR>
        <?php
        echo "<table  border=\"0\" bordercolor=\"FFA59A\" ";
        echo "align =\"center\" valign = \"top\" >";
        echo " <br><b><tr align=\"center\" bgcolor=\"#DFCAF3\">";
        echo "<td width =\"50\" align=\"center\">#</font></td>";
        echo "<td width =\"100\" align=\"center\" >Goods id</td>";
        echo "<td align=\"center\" width = \"200\">Goods name</td>";
        echo "<td align=\"center\" width = \"200\">Goods price(baht)</td>";
        echo "<td align=\"center\" width = \"200\">Goods quantity</td>";
        echo "<td align=\"center\" width =\"80\" >Edit</a></font></td>\n</b>";
        echo "<td align=\"center\" width =\"80\" >Delete</a></font></td>\n</b>";
        $a=1;
        while ( $rs = mysqli_fetch_array ( $sqltxt ) )
        {
        echo "<tr align=\"center\" bgcolor=\"#F8D5CF\">";
        echo "<td align=\"center\" bgcolor =\"#DFCAF3\">$a</td>";
        echo "<td align=\"center\">$rs[0]</td>";
        echo "<td align=\"center\">$rs[1]</td>";
        echo "<td align=\"center\">$rs[2]</td>";
        echo "<td align=\"center\">$rs[3]</td>";
        echo "<td> <a href=\"edit.php?data=$rs[0]\" ";
        echo "onclick=\"return confirm(' ยืนยันการแก้ไขข้อมูล $rs[1] ')\">[Edit] ";
        echo "<td> <a href=\"delete.php?data=$rs[0]\" ";
        echo "onclick=\"return confirm(' ยืนยันการลบข้อมูล $rs[1] ')\">[Delete] ";
        echo "</a></font></td>\n";
        $a++;
        }
        ?>
        
        <?php
        mysqli_close($conn);
        ?>