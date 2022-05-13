<?php
$sky=["甲","乙","丙","丁","戊","己","庚","辛","壬","癸"];
$land=["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];

$skyland=[];
$n=2022;
$year=(2022+56);

echo $sky[$year%10].$land[$year%12];

for ($i=-56; $i <=2050; $i++) { 
    $year=$i+56;
    $skyland[$i]=$sky[$year%10].$land[$year%12];
}
echo "<pre>";
print_r($skyland);
echo "</pre>";

echo "西元2022是[".$skyland[2022]."]年";

?>