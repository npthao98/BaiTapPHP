<?php
    function solve($str){
        $max=0;
        $size= strlen($str);
        $i=0;
        while($i<$size){
            if($str[$i]>='0' && $str[$i]<='9'){
                $num=(int)$str[$i];
                if($i==$size-1) $i++;
                for($j = $i+1; $j<$size; $j++){
                    if($str[$j]>='0' && $str[$j]<='9'){
                        $num = $num*10 + (int)$str[$j];
                    }
                    else{
                        $i= $j+1;
                        break;
                    }
                }
                if($num>$max) $max = $num;
            }
            else $i++;
        }
        return $max;
    }
//    echo solve("gh12cdy695m1");
?>