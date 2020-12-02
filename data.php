<!DOCTYPE html>
<html>
<head>
    <title>数据库显示</title>
</head>
<body>
<table style='text-align:left;' border='1'>
         <tr><th>Name</th><th>Age</th><th>Date</th></tr>
         
         <?php
    		
           
           require_once ('conn.php');
           
           $sql = "SELECT count(*) FROM COVID19";
           $result = mysqli_query($con,$sql);
           $rows = mysqli_fetch_row($result);
           $rowcount = $rows[0];
           
           
           $sql = "SELECT * FROM COVID19";
           $result = mysqli_query($con,$sql);
           $rows = mysqli_fetch_row($result);
           
           
           for($i=0;$i<$rowcount;$i++){
           		 
                $mysqli_arr = mysqli_fetch_assoc($result);
                $Name = $mysqli_arr['Name'];
                $Age = $mysqli_arr['Age'];
                $Date = $mysqli_arr['Date'];
                echo "<tr><td>$Name</td><td>$Age</td><td>$Date</td></tr>";
            }
         ?>
         
         
</table>
</body>
</html>