<html>
    <head>
        <meta charset="utf-8">
        <title>変数</title>
    </head>
<body>

<!-- 以下にPHPを記述 -->
<?php

echo 'hello world';
//変数
$int_age = 10; //数値型
$str_age = "22"; //文字列型

echo $int_age;

echo '<br>';

echo $str_age;

//PHPの四則演算は、データ型を自動変換されるので、文字列の22も足算されてしまう。
$total_age = $int_age + $str_age;
echo '<br>';
echo $total_age;

echo '<br>';

//結合演算子
$total_age2 = $int_age.$str_age;
echo $total_age2;

// 制御構文(if文・for文)jsと同じ
// 簡単なおみくじ
// ランダム整数生成 rand(min,max)
$num = rand(1,2);

if( $num == 1){
    echo "アタリ";
}else{
    echo "外れ";
}

?>



<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>