<?php 
function longest_String($arr , &$index){
    $longestString = '';
    foreach($arr as $key => $value){
        if(strlen($value) > strlen($longestString)){
            $longestString = $value;
            $index = $key;
        }
    }
    return $arr[$index];
}

$index = 0;
$arr = ['asddsadfasf' , 'asdahsasdadfgff ' , 'a12sdf ' , 'asdsdf'];
var_dump(longest_String($arr,$index));
echo '<br/>';
var_dump($index);



?>