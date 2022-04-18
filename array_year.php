<h2>500年內的閏年</h2>
<?php
$leapyear=[];
$start=2022;
$end=$start+500;
for ($i=$start; $i<=$end ; $i++) { 
if ((($i % 4 == 0) && ($i % 100 != 0)) || ($i % 400 == 0)) {
    $leapyear[]=$i;
}

}
echo "<pre>";
print_r($leapyear);
echo "</pre>";

$leap=2100;
if (in_array($leap,$leapyear)) {
    echo $leap."年是閏年";
} else {
    echo $leap."年 不是閏年";
}

?>