<style>
    *{
        font-family:'Courier New', Courier, monospace
    }
</style>

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
$n=3;
if ($n%2==0) {
    $n=$n+1;
}
for ($i=1; $i <=$n ; $i++) { 
    for ($j=1; $j <=$n ; $j++) { 
        if (($i-$j)>floor($n/2)||($j-$i)>floor($n/2)||($i+$j)>ceil($n/2)+$n||($i+$j)<ceil($n/2)+1){
            echo "&nbsp";
    
    } else {
        echo "*";
    }
    }
echo"<br>";
}


?>



<?php

$n=5;
if ($n%2==0) {
    $n=$n+1;
}

for ($i=1; $i <=$n ; $i++) { 
    if ($i<=ceil($n/2)) {
        for ($j=1; $j <$i+ceil($n/2) ; $j++) { 
            if ($j>ceil($n/2)-$i) {
                echo "*";
            } else {
                echo "&nbsp";
            }
            
        }
        
    } else {
        for ($j=1; $j <ceil($n/2)+$n-$i+1 ; $j++) { 
            if ($j>$i-ceil($n/2)) {
                echo "*";
            } else {
                echo "&nbsp";
            }
            
        }
        
    }
    echo "<br>";
}
?>

<h2>矩形</h2>
<?php
$n=8;
for ($i=1; $i <=$n ; $i++) { 
  for ($j=1; $j <=$n ; $j++) { 
      if ($i>1&&$i<=$n-1) {
           if ($j>1&&$j<=$n-1) {
          echo "&nbsp";
      } else {
          echo "*";
      }
      }else{
          echo "*";
      }
     
      
  }  
  echo "<br>";
}
?>

<H2>矩形2</H2>
<?php
$n=9;
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
