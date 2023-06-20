<?php

function is_prime($num){
    $i = $num / 2;
    for($i; $i >= 2; $i--){
        if($num % $i == 0){
            return false;
        }
    }
    return true;

}

echo is_prime(21) ? "Prime number" : "Not a prime number";

?>