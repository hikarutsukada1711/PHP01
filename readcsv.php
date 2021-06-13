<?php
//ファイルを変数に入れる
$csv_file = file_get_contents('data/kadai.csv');

//変数を改行毎の配列に変換
$aryHoge = explode("\n", $csv_file);

$aryCsv = [];
foreach($aryHoge as $key => $value){
    //if($key == 0) continue; 1行目が見出しなど、取得したくない場合
    if(!$value) continue; //空白行が含まれていたら除外
    $aryCsv[] = explode(",", $value);
}

print_r($aryCsv);

//xss対策関数
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}

?>

<html>
<head>
    <meta charset="utf-8">
    <title>データ表示</title>
</head>

<body>

<table border="1">
<tr>
    <th>名前</th>
    <th>e-mail</th>
    <th>Grade</th>
    <th>職務名</th>
</tr>
<?php foreach($aryCsv as $value){ ?>
<tr>
    <td><?php echo $value[0] ?></td>
    <td><?php echo $value[1] ?></td>
    <td><?php echo $value[2] ?></td>
    <td><?php echo $value[3] ?></td>
</tr>
<?php } ?>
</table>
    

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>