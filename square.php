<style>
    *{
        font-family:'Courier New', Courier, monospace
    }
</style>
<h2>矩形</h2>

<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if (($i==0 || $i==4||$j==0 || $j==4)){
                echo "*";
        
        } else {
            echo "&nbsp";
        }
    }
    echo "<br>";
}

?>

<H2>矩形2</H2>
<?php
$n=8;
for ($i=0; $i <$n ; $i++) { 
    for ($j=0; $j <$n ; $j++) { 
        if (($i==0 || $i==$n-1||$j==0 || $j==$n-1||$i==$j||$i+$j==$n-1)){
            echo "*";
    
    } else {
        echo "&nbsp";
    }
    }
echo"<br>";
}
?>
<H2>???</H2>
<?php
$n=9;
for ($i=1; $i <=$n ; $i++) { 
    for ($j=1; $j <=$n ; $j++) { 
        if (($i*$j)%5==0||($i+$j)==6||($i+$j)==14||($i-$j)==4||($j-$i)==4){
            echo "*";
    
    } else {
        echo "&nbsp";
    }
    }
echo"<br>";
}
?>