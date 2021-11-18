<?php
$x=5;

for($a=1; $a<=$x; $a++){
    for($b=$x; $b>=$a; $b-=1){
        print('&nbsp');
    }
    for($c=1; $c<=$a; $c++){
        echo '*';
    }
    echo "<br/>";
}
?>