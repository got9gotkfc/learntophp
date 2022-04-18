<h1>流程結構</h1>
<h3>if....else</h3>
<?php
$score = 90;
echo "成績=" . $score;
echo "<br>";
if ($score >= 81) {
    echo "及格Good";
} else if ($score >= 60) {
    echo "及格，還可以更好";
} else if ($score >= 30) {
    echo "不及格，再多加油";
} else {
    echo "不及格，充新開始";
}
?>

<h3>switch...case</h3>
<?php
$score = 500;
$level = ($score > 100 || $score < 0) ? 5 : floor($score / 25);
/*if ($score>100||$score<0) {
$level=5;
} else {
$level=floor($score/25);
}
 */
echo $level;
switch ($level) {
    case '0':
        echo "謝謝再聯絡";
        break;
    case '1':
        echo "再加油";
        break;
    case '2':
        echo "還可以更進步";
        break;
    case '3':
    case '4':
        echo "表現優良";
        break;
    default:
        echo "成績輸入錯誤(0~100)，請重新輸入";
        break;
}
?>
<h2>判斷閏年</h2>
<?php
$year = 1111;
echo $year . "年<br>";
$level = ($year % 4);
if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
    echo "這是閏年";
} else {
    echo "這是平年";
}

?>
<h3>判斷閏年 老師版</h3>
<?php
$year = 1111;
echo $year . "年<br>";
if ($year % 4 != 0) {
    echo "這是平年";
} else if ($year % 100 != 0){
        echo "這是閏年";
    } else if ($year % 400 != 0) {
        echo "這是平年";
    } else {
        echo "這是閏年";
}
echo "<br>";

?>


<?php
$year = 1111;
echo $year . "年<br>";
$level = ($year % 4);
if ((($year % 4 == 0) + ($year % 100 != 0)) + ($year % 400 == 0)==2) {
    echo "這是閏年";
} else {
    echo "這是平年";
}
