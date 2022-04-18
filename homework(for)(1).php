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
            echo "&nbsp&nbsp";
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
                echo "&nbsp&nbsp";
            }
            
        }
        
    } else {
        for ($j=floor(($i+ceil($n/2))/2); $j <=$n ; $j++) { 
            if ($j>=$i) {
                echo "*";
            } else {
                echo "&nbsp&nbsp";
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
          echo "&nbsp&nbsp";
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

<h2>矩形2</h2>
<?php
 for ($i=1; $i <8 ; $i++) { 
     if ($i==1||$i==7) {
         for ($j=1; $j<8 ; $j++) { 
             echo "*";
         }
     } if ($i==2||$i==6) {
         for ($j=1; $j <8 ; $j++) { 
             if ($j>=3&&$j<=5) {
                 echo "&nbsp&nbsp";
             } else {
                echo "*";
             }
             
         }
     } if ($i==3||$i==5) {
         for ($j=1; $j <8 ; $j++) { 
             if ($j%2==0) {
                 echo"&nbsp&nbsp";
             } else {
                 echo"*";
             }
             
         }
     }if ($i==4) {
         for ($j=1; $j <8 ; $j++) {
            if ($j%3==1) {
                 echo "*";
            } else {
                 echo "&nbsp&nbsp";
            }
            
         }
     } 
     echo "<br>";
 }

?>
