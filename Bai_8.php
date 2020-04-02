<?php
    function commas($t){
        $t = round( $t, 3, PHP_ROUND_HALF_UP);
        $strs = explode('.',(string)$t);
        $s0 = strrev($strs[0]);
        $new = '';
        for($i= 0; $i<strlen($s0);$i++){
            if($i%3==0 && $i!=0) {
                $new = $new.',';
            }
            $new = $new.$s0[$i];
        }
        if(sizeof($strs)==2) $new = strrev($new).'.'.$strs[1];
        else $new = strrev($new);
        return $new;
    }
//    echo commas(100.2346);
//    echo "<br>";
//    echo commas(1000);
//    echo "<br>";
//    echo commas(1000000000.23);
//    echo "<br>";
//    echo commas(-1000000.123);
?>