<?php
    function backspaceInString($str){
        $size = strlen($str);
        $ar = array();
        for($i=0; $i<$size; $i++){
            if($str[$i]=='#') $ar[$i]=0;
            else $ar[$i]=1;
        }
        for($i= $size-1; $i>=0; $i--){
            if($str[$i]=='#'){
                for($j=$i-1; $j>=0; $j--){
                    if($ar[$j]==1){
                        $ar[$j]=0;
                        break;
                    }
                }
            }
        }
        $newStr = "";
        for($i=0; $i<$size; $i++){
            if($ar[$i]==1) $newStr = $newStr.$str[$i];
        }
        return $newStr;
    }
//    echo backspaceInString("abc##d######");
?>