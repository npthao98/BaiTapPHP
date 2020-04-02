<?php
    function mostCommonChar($str){
        $ar = array();
        for($i=0; $i<strlen($str); $i++){
            $ar[$i]=1;
            for($j=$i+1; $j<strlen($str); $j++){
                if($str[$i]==$str[$j]) $ar[$i]++;
            }
        }
        $max = $ar[0];
        $ch = $str[0];
        $kt =0;
        for($i=0; $i<strlen($str); $i++){
            if($max < $ar[$i]){
                $kt=0;
                $max = $ar[$i];
                $ch = $str[$i];
            }
            else if($max == $ar[$i]){
                $kt=1;
            }
        }
        if($kt==0) return $ch;
        else return "No most popular char";
    }
//    echo mostCommonChar("ababbab");
//    echo "<br>";
//    echo mostCommonChar("abbas");
?>