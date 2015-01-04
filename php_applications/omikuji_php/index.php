<?php

$omikuji = array('小吉', '大吉', '凶', '末吉', 'もう一度');

$result = $omikuji[mt_rand(0, count($omikuji)-1)];

/*
mt_rand: 指定の範囲の数からランダムに数次をとる
count: 配列の個数をとる

*/

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charaset="utf-8">
    <title>おみくじ</title>
</head>
<body>
    <h1>おみくじ</h1>
    <p>今日の運勢は「<?php echo $result; ?>」です！</p>
    <p><a href="<?php echo $_SERVER["SCRIPT_NAME"] ?>">もう一度！</a></p>
</body>
</html>
