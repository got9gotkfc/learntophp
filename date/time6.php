<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table{
            border-collapse: collapse;
        }
        table td{
            padding:5px;
            text-align: center;
            border: 1px solid #aaa;
        }
    </style>
</head>
<body>
    <?php
    $month=4;

    
    ?>
    <table>
        <tr>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>
        <?php
        $lastmonth=date("Y-").($month-1)."-1";
        $firstday=date("Y-").$month."-1";
        $firstweek=date("w",strtotime($firstday));
        $monthday=date("t",strtotime($firstday));
        $lasday=date("Y-").$month.date("t",strtotime($firstday));

        for ($i=0; $i <6 ; $i++) { 
            echo"<tr>";
            for ($j=0; $j <7 ; $j++) { 
                echo"<td>";
                $day=$i*7+($j+1)-$firstweek;
                if ($day<1) {
                    // 接上個月
                    // echo date("t",strtotime($lastmonth))+$day;
                    echo "&nbsp";
                }else if($day>$monthday){
                    // 接下個月
                    // echo $day%$monthday;
                    echo "&nbsp";
                }else{
                    echo $day;
                }
                echo"</td>";
            }
            echo"</tr>";
        }
        ?>
    </table>
</body>
</html>