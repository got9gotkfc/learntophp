<h2>建立學生成績陣列</h2>
<?php
$scrue = [
    'judy' => [
        '國文' => '95',
        '英文' => '64',
        '數學' => '70',
        '地理' => '90',
        '歷史' => '84',
    ],
    'amo' => [
        '國文' => '88',
        '英文' => '78',
        '數學' => '54',
        '地理' => '81',
        '歷史' => '71',
    ],
    'john' => [
        '國文' => '45',
        '英文' => '60',
        '數學' => '68',
        '地理' => '70',
        '歷史' => '62',
    ],
    'peter' => [
        '國文' => '59',
        '英文' => '32',
        '數學' => '77',
        '地理' => '54',
        '歷史' => '42',
    ],
    'hebe' => [
        '國文' => '71',
        '英文' => '62',
        '數學' => '80',
        '地理' => '62',
        '歷史' => '64',
    ],
]

?>

<h2>99乘法表</h2>
<?php

$a=[];

for ($i=1; $i<=9  ; $i++) { 

    for ($j=1; $j <=9 ; $j++) { 
    $a=["$i"=>"$i x $j=".($i*$j),];
    print_r($a);    
    }
}



?>

<h2>99乘法表***</h2>
<?php
$a=[];
for ($i=1; $i <=9 ; $i++) { 
    for ($j=1; $j <=9 ; $j++) { 
        $a[]="$i X $j=".($i*$j);
    }
}
for ($i=0; $i <count($a) ; $i++) { 
    echo $a[$i]."&nbsp&nbsp";
    if (($i+1)%9==0) {
        echo"<br>";
    }
}
echo "<hr>";
$b=[];
for ($i=1; $i <=9 ; $i++) { 
    for ($j=1; $j <=9 ; $j++) { 
        $b["{$i} X {$j}"]=$i*$j;
    }
}
echo "<pre>";
print_r($b);
echo"</pre>";

?>