<?php 

$arr = [0,1,2,3,4,5,6,7,8,9];

function remove_odd_numbers($array){
    $arr1 = [];
    foreach($array as $n){
        if($n % 2 == 0){
            $arr1[] = $n;
        }
    }
    return $arr1;
}

var_dump(remove_odd_numbers($arr));


?>