<?php
//問題①
$name='Kosuke';
if($name=='Kosuke'){
    echo '私は あなたの名前 です';
}else{
    echo 'あなたの名前ではありません';
};

echo '<br>';

//問題②
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

echo '<br>';

//問題③
echo '<br>';
$fruits = ['apple','banana','grape','orange','peach'];
foreach($fruits as $fruits){
    echo $fruits;
}

echo '<br>';

//問題④
echo '<br>';
/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i < $end; $i++){

    // 5で割り切れたら{}内を実行する
    if($i % 5 == 0){
        echo $i;
  }
}
