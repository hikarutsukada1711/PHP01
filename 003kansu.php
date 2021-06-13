<html>
<head>
    <meta charset="utf-8">
    <title>関数</title>
</head>
<body>

<!-- 以下にPHPを記述 -->
<?php

// PHPには組み込み関数があるよ
// var_dump(変数名); 組み込み関数のひとつ
// 日付・時間取得 date関数
echo date('Y年m月d日 H時i分s秒');

echo '<br>';

echo date('Y/m/d');

echo '<br>';

//文字列の長さ
// 文字列の長さ表示
$length = strlen("testtest");
echo $length; 
echo "<br>";

?>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>