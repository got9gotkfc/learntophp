<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>字串練習</h1>
    <article>
       <h3>字串取代</h3>
       <div>將"aaddw1123"改成*********</div> 
    </article>
    <?php
    $password="aaddw1123";
    $strlen=mb_strlen($password);
    $password=str_repeat("*",$strlen);
    echo $password;
    ?>
    <article>
        <h3>字串分割</h3>
        <div>將"I have a pen"依","切割後成為陣列</div>
    </article>
    <?php
    $str="I,have,a,pen";
    $array=explode(",",$str);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    ?>
    <article>
        <h3>字串組合</h3>
        <div>將上列陣列組合</div>
    </article>
    <?php
    $str="I,have,a,pen";
    $array=explode(",",$str);
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    $newstr=implode("&nbsp",$array);
    echo $newstr;

    ?>


</body>
</html>