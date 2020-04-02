<?php
    function numberOfVowels($str){
        $count = 0;
        $allowed = array('a','u','i','e','o','A','U','E','I','O');
        for($i=0; $i<strlen($str); $i++){
            if(in_array($str[$i],$allowed)){
                $count++;
            }
        }
        return $count;
    }
//    echo numberOfVowels("ue eerfroai thu");
?>