<?php

// 文字列作成(日付)
$name = $_POST["name"];
$mail = $_POST{"mail"};
$grade = $_POST{"grade"};
$assign = $_POST{"assign"};

//xss対策関数
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}


// .txt Fileにデータを保存する処理
$file = fopen("data/kadai.txt","a"); //対象のファイルを開く

fwrite($file, $name.","); //ファイルにデータを書き込む
fwrite($file, $mail.","); //ファイルにデータを書き込む
fwrite($file, $grade.","); //ファイルにデータを書き込む
fwrite($file, $assign.""); //ファイルにデータを書き込む


fclose($file); //ファイルを閉じる

?>


<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/kadai.txt を確認しましょう！</h2>

<ul>    
        <li> お名前：<?= h($name); ?> </li>
        <li> Mail：<?= h($mail); ?> </li>
        <li> 現在のグレード：<?= h($grade); ?> </li>
        <li> 職務名：<?= h($assign); ?> </li>

</ul>

<table border="1">
        <tr>
            <th>名前</th>
            <th>Mail</th>
            <th>グレード</th>
            <th>職務名</th>
        </tr>
        <tr>
            <td><?= h($name); ?></td>
            <td><?= h($mail); ?></td>
            <td><?= h($grade); ?></td>
            <td><?= h($assign); ?></td>
        </tr>
    </table>


<ul>
    <li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>