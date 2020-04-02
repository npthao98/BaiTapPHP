<?php
    function createPhoneNumber($ar){
        $phoneNumber = "(";
        for($i=0; $i<10; $i++){
            if($i==3) $phoneNumber = $phoneNumber.') ';
            if($i==6) $phoneNumber = $phoneNumber.'-';
            $phoneNumber = $phoneNumber.$ar[$i];
        }
        return $phoneNumber;
    }
//    $ar = array(1,2,3,4,5,6,7,8,9,0);
//    echo createPhoneNumber($ar);
?>