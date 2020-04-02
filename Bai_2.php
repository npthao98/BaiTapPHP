<?php
function LetterChanges($str){
    for($i=0; $i<strlen($str); $i++){
        if(($str[$i]>='a' && $str[$i]<='z') || ($str[$i]>='A' && $str[$i]<='Z')){
            if($str[$i]=='z') $str[$i] = 'a';
            else if($str[$i]=='Z') $str[$i] = 'A';
            else{
                $s = ord($str[$i]);
                $s+=1;
                $str[$i] = chr($s);
                if($str[$i]=='a' || $str[$i]=='e' || $str[$i]=='i' || $str[$i]=='o' || $str[$i]=='u'){
                    $str[$i]=strtoupper($str[$i]);
                }
            }
        }

    }
    return $str;
}

?>

