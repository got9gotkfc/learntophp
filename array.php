<h2>陣列</h2>
<?php
$a=[];

echo var_dump($a);
echo"<hr>";
print_r($a);
echo"<hr>";

$a[1]="A";
$a[5]="Bb";
$a['大明']=59;
echo var_dump($a);
echo"<hr>";
print_r($a);
echo"<hr>";

$a=[];
$a[]='泰山';
$a[]='新北';
$a[]='台北';
$a[]='高雄';
$a[]='台中';


echo var_dump($a);
echo"<hr>";
print_r($a);
echo"<hr>";

$a=[];
for ($i=11; $i <15 ; $i++) { 
    $a[]=$i;
}

echo var_dump($a);
echo"<hr>";
print_r($a);
echo"<hr>";

?>

