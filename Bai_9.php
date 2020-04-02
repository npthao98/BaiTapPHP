<?php
    function exchange($ar1, $ar2){
        $size1= sizeof($ar1);
        $size2 = sizeof($ar2);

        if($size1>=$size2){
            $size = $size2;
        }
        else $size = $size1;
        $ar3 = array();
        for($i=0; $i<$size; $i++){
            $ar3[$i] = $ar1[$size-$i-1];
        }
        for($i=0; $i<$size; $i++){
            $t = $ar3[$i];
            $ar3[$i]= $ar2[$i];
            $ar2[$i]= $t;
        }
        for($i=0; $i<$size; $i++){
            $ar1[$i] = $ar3[$size-$i-1];
        }
        echo "Mang thu nhat:<br>";
        for($i=0; $i<$size1; $i++){
            echo $ar1[$i]." ";
        }
        echo "<br>";
        echo "Mang thu hai:<br>";
        for($i=0; $i<$size2; $i++){
            echo $ar2[$i]." ";
        }
        echo "<br>";
    }
//    $ar1 = array(1,2,3,1,3,4);
//    $ar2 = array('a','b','c');
//    exchange($ar1, $ar2);
?>