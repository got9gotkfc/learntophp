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
    $password = "aaddw1123";
    $strlen = mb_strlen($password);
    $password = str_repeat("*", $strlen);
    echo $password;
    ?>
    <article>
        <h3>字串分割</h3>
        <div>將"I have a pen"依","切割後成為陣列</div>
    </article>
    <?php
    $str = "I,have,a,pen";
    $array = explode(",", $str);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    ?>
    <article>
        <h3>字串組合</h3>
        <div>將上列陣列組合</div>
    </article>
    <?php
    $str = "I,have,a,pen";
    $array = explode(",", $str);
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    $newstr = implode("&nbsp", $array);
    echo $newstr;
    ?>
    <article>
        <h3>子字串取用</h3>
        <div>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</div>
    </article>
    <?php
    $str = "The reason why a great man is great is that he resolves to be a great man";
    $newstr = substr($str, 0, 10);
    echo $newstr . "...";

    ?>

    <article>
        <h3>字串函式整合應用</h3>
        <div>給定一個句子，將指定的關鍵字放大
            “學會PHP網頁程式設計，薪水會加倍，工作會好找”
            請將上句中的 “程式設計” 放大字型或變色.</div>
    </article>
    <?php
    $str = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
    // $search = "程式設計";  
    // $pos = mb_strpos($str, $search);
    // $str2 = mb_substr($str, 0, $pos)
    //     . "<span style='font-size:2rem;color:red'>"
    //     . $search
    //     . "</span>"
    //     . mb_substr($str, $pos + strlen($search)/3, strlen($str));
    // echo "<br>";
    // echo $str2;

    $search="工作";
    $pos=mb_strpos($str,$search);
    $head=mb_substr($str,0,$pos);
    $tail=mb_substr($str,$pos+mb_strlen($search));
    $newstr=$head
            ."<span style='font-size:2rem;color:red'>"
            . $search
            . "</span>"
            .$tail;
            echo $newstr;

    ?>




</body>

</html>