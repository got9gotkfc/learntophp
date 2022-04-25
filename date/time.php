<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>日期/時間練習</h1>
    <h3>無設定時間</h3>
    <?php
    echo date("Y-m-d H:i:s");
    echo "<hr>";
    ?>
    <h3>有設定時間Asia/Taipei</h3>
    <?php
    date_default_timezone_set("Asia/Taipei");
    echo date("Y-n-d H:i:s");
    echo "<br>";
    echo date("Y.n.d H:i:s");
    ?>

    <h2>strtotime()</h2>
    <?php
    $time="2021-10-01 10:12:30";
    $s=strtotime($time);
    echo $time;
    echo "<br>";
    echo $s;
    echo "<br>";
    echo date("西元Y年m月d日l",$s);
    echo "<br>";
    $splus=strtotime("+3 days",$s);
    echo date("西元Y年m月d日l",$splus);
    echo "<br>";
    $splus=strtotime("+3 weeks",$s);
    echo date("西元Y年m月d日l",$splus);
    echo "<br>";
    $splus=strtotime("-2 days",$s);
    echo date("西元Y年m月d日l",$splus);
    echo "<br>";
    
    ?>
</body>
</html>