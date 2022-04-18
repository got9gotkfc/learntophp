<?php
$a=[1,8,3,4,56];

for ($i=0; $i <ceil(count($a)/2); $i++) { 
    $t=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$t;

}

echo "<pre>";
print_r($a);
echo "</pre>";


echo "<pre>";
print_r(array_reverse($a));
echo "</pre>";


?>