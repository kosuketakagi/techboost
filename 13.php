<?php
//問題①
function double($i) {
    return $i*2;
}
echo double(5);
echo '<br>';

//問題②
function sum($a, $b){
    return $a+$b;
}
echo sum(8,3);
echo '<br>';

////問題③
$arr = array(1, 3, 5 ,7, 9);
echo array_sum($arr);

echo '<br>';

function f($arr){
    $total=0;
    foreach($arr as $b){
        $total += $b;
    }
 return $total;
}
echo f($arr);
echo '<br>';

//問題④
//function max_array($arr){
//    arsort($arr);
//    return current($arr);
//}
//echo  max_array($arr);
//echo '<br>';

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($a > $max_number)
        $max_number = $a;
    }
    return $max_number;
}
echo max_array($arr);
echo '<br>';

//問題⑤
$html = '<botan>ボタン</botan>';
echo strip_tags($html);
echo '<br>';

$animal1 = ["dog","bird"];
array_push($animal1,cat);
var_dump($animal1);
echo '<br>';

$animal2 = ['elephant', 'cherry', 'watermelon'];
$animal_merge = array_merge($animal1, $animal2);
print_r($animal_merge);
echo '<br>';

echo time();
echo '<br>';

$time = mktime(0, 0, 0, 10, 2, 2019);
echo $time;
echo '<br>';

//今日の日付
echo date('y/m/d');