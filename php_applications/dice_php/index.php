<?php

$dice1 = mt_rand(1, 6);    // mt_rand ランダムに数値を返す関数
$dice2 = mt_rand(1, 6);

$zorome = ($dice1 == $dice2) ? true : false ;    // 三項演算子

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charaset="utf-8">
    <title>サイコロ</title>
</head>
<body>
    <h1>サイコロ</h1>
    <p>
        サイコロの目は「<?php echo $dice1; ?>」「<?php echo $dice2; ?>」でした！
        <?php if ($zorome) : ?>
        ゾロ目です！
        <?php else : ?>
        ゾロ目じゃない！
        <?php endif; ?>
    </p>
    <p><a href="<?php echo $_SERVER["SCRIPT_NAME"]; ?>">もう一度</a></p>    <!-- $_SERVER["SCRIPT_NAME"] は自身のスクリプト名を指定する決まり文句みたいなもの -->
</body>
</html>
