<?php
    function reverseVowels($str){
        $ar1 = array();
        $ar2 = array();
        $k=0;
        $allowed = array('a','u','i','e','o','A','U','E','I','O');
        for($i=0; $i<strlen($str); $i++){
            if(in_array($str[$i],$allowed)){
                $ar1[$k]=$i;
                $ar2[$k]=$str[$i];
                $k++;
            }
        }
        for ($i=$k-1; $i>=0; $i--){
            $str[$ar1[$i]] = $ar2[$k-$i-1];
        }
        return $str;
    }
//    echo reverseVowels("Hello!")."<br>";
//    echo reverseVowels("Tomatoes")."<br>";
//    echo reverseVowels("Reverse Vowels In A String")."<br>";
?>