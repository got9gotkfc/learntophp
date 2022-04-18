<h1>運算子</h1>
<h3>一元運算子</h3>
<?php
$a=false;
echo !$a;
echo "<hr>";
$b=1;
echo ++$b;
echo --$b;

?>
<h3>二元運算子</h3>
<?php
$a=50;
$b=100;
echo $a.$b;

?>
<h3>三元運算子</h3>
<h3>交換變數</h3>
<?php
$a=10;
$b=50;
$c=$a;
$a=$b;
$b=$c;

echo 'a='.$a;
echo "<br>";
echo 'b='.$b;
?>