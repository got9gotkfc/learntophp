<h1>迴圈</h1>
<?php
for ($i = 0; $i < 10; $i = $i + 2) {
    echo "i=" . $i . '=====>i*10=' . ($i * 10) . "<br>";
}
echo "<br>";
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 1) {
        echo $i . ",";
    }
}
echo "<br>";
for ($i = 1; $i <= 100; $i = $i + 2) {

    echo $i . ",";
}
?>




<h2>自練while</h2>
<?php

for ($a = 1; $a < 10; $a++) {
    for ($i = 1; $i < 10; $i++) {
        echo $i . 'x' . $a . '=' . $i * $a . ",";
    }
    echo "<br>";
}
$score = [60, 22, 72, 10, 80];

foreach ($score as $idx => $val) {
    echo '第' . $idx . '位同學的成績為' . $val . '<br>';
}


?>


<?php
/*echo "<table width='600' border='1'>";

for ($j = 1; $j <= 9; $j++) {

    echo "<tr>";

    for ($i = 1; $i <= 9; $i++) {

        echo "<td>{$i}*{$j}=" . ($i * $j) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";*/

echo "<table width='600' border='1'>";

$a = ["　", 1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($a as $n => $value) {
    echo "<tr>";
    echo "<td>" . $value . "</td>";
    echo "</tr>";
}
echo "</table>";


?>












<h2>FOR的作業</h2>
<?php
$n = 10;
for ($i = 1; $i < $n; $i = $i + 2) {
    echo $i;
    echo ",";
}
echo "<br>";
for ($i = 1; $i < $n; $i++) {
    echo $i * 10;
    echo ",";
}
echo "<br>";

for ($i = 3; $i < 100; $i ++) {
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0)
            break;
    }
    if ($j == $i)
        echo $i . ",";
}
echo "<br>";



?>
