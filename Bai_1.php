<?php
    function LongestWord($sen){
        $newSen=preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($sen));
        $strings = explode(' ',$newSen);
        $size = sizeof($strings);
        $counts = array();
        for($i=0 ; $i<$size; $i++){
            $counts[$i] = strlen($strings[$i]);
        }
        $max = $counts[0];
        $str = $strings[0];
        for($i=0 ; $i<$size; $i++){
            if($counts[$i] > $max){
                $max = $counts[$i];
                $str = $strings[$i];
            }
        }
        return $str;
    }
?>