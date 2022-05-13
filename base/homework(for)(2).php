<h1>*****作業</h1>
<h2>直角三角形</h2>
<?php
for ($i=1; $i <6 ; $i++) { 
    for ($j=1; $j <=$i ; $j++) { 
        echo "*";
    }
    echo "<br>";
}
?>

<h2>倒直角三角形</h2>
<?php
for ($i=1; $i <6 ; $i++) { 
    for ($j=6; $j >$i ; $j--) { 
        echo "*";
    }
    echo "<br>";
}
?>

<h2>正三角形</h2>
<?php
$n=9;
for ($i=1; $i <=$n ; $i=$i+2) { 
    for ($j=floor(($i+$n)/2); $j >=1 ; $j--) { 
        if ($j<=$i) {
            echo "*";
        } else {
            echo "&nbsp";
        }
        
    }
    echo "<br>";
}
?>

<h2>菱形</h2>
<?php
$n=17;
for ($i=1; $i <=$n ; $i=$i+2) { 
    if ($i<=ceil($n/2)) {
        for ($j=floor(($i+ceil($n/2))/2); $j >=1 ; $j--) { 
            if ($j<=$i) {
                echo "*";
            } else {
                echo "&nbsp";
            }
            
        }
        
    } else {
        for ($j=floor(($i+ceil($n/2))/2); $j <=$n ; $j++) { 
            if ($j>=$i) {
                echo "*";
            } else {
                echo "&nbsp";
            }
            
        }
        
    }
    echo "<br>";
}
?>

