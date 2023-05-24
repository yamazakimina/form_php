<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$product = $_POST["product"];
$gender = $_POST["gender"];
$date = date("Y-m-d H:i:s");
$price = $_POST["price"];
$star = $_POST["star"];
$sub = $_POST["sub"];
$c = ",";

//表作成
$data ="
    <tr>
        <td>$name</td>
        <td>$mail</td>
        <td>$product</td>
        <td>$gender</td>
        <td>$date</td>
        <td>$price</td>
        <td>$star</td>
        <td>$sub</td>
    </tr>";
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $data."\n"); //くっつけるために「.」を使う。\n：改行コード。\t：タブ。\：Option＋¥
fclose($file);

// グラフ作成
$str = $name.$c.$mail.$c.$product.$c.$gender.$c.$date.$c.$price.$c.$star.$c.$sub;
$grapth = fopen("data/graph.txt","a");
fwrite($grapth, $str."\n");
fclose($grapth);
?>

<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>
<div><?=$data?></div>

<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>
