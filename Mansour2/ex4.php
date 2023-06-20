<?php
$value = 1;
function factorial($num){
    global $value;
    if($num <= 1){
        return $value;
    }else{
        $value *= $num;
        factorial(--$num);
    }
}

factorial(5);

var_dump($value);

?>