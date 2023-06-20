<?php
$arr1 = [1,5,4,6,8,2];
$arr2 = [2,5,6];
function multiply($arr1, $arr2){
    $arr3 = count($arr1) > count($arr2) ? $arr1 : $arr2;
    foreach($arr3 as $key => $value){
        $arr3[$key] = ($arr1[$key] ?? 1) * ($arr2[$key] ?? 1);    
    }
    return $arr3;
}

var_dump(multiply($arr1, $arr2))


?>