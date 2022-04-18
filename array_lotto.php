<h2>威力彩號</h2>
<?php
echo"<h3>第一區</h3>";
$lotto=[];
while (count($lotto)<6){ 
    $a=rand(1,38);
    if (!in_array($a,$lotto)) {
        $lotto[]=$a;
    } 
}
echo "開出順序:";
for ($i=0; $i <count($lotto) ; $i++) { 
    echo $lotto[$i].",";
}

echo "<br>大小順序:";
sort($lotto);
for ($i=0; $i <count($lotto) ; $i++) { 
    echo $lotto[$i].",";
}
echo "<h3>第二區</h3>";
echo rand(1,8);



?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
