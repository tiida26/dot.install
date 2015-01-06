<?php

// htmlに出力する際にエスケープする必要があるが、一個ずつ書いていると長いので関数化する
function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');    // ENT_QUOTES(シングルクォートもエスケープする) UTF-8(文字コードをUTF-8にする)
}



$quizList = array(
    array(
        'q' => 'HTMLのHは何の略？',
        'a' => array('Hyper', 'Hop', 'Hip', 'Hot')    // 今回は先頭を全て正解にしている
    ),
    array(
        'q' => 'HTMLのTは何の略？',
        'a' => array('Text', 'Twitter', 'Top')
    ),
    array(
        'q' => 'HTMLのMは何の略？',
        'a' => array('Markup', 'Min', 'Max', 'More')
    ),
    array(
        'q' => 'HTMLのLは何の略？',
        'a' => array('Language', 'List', 'Look', 'Lost')
    )
);

var_dump($quizList);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charaset="utf-8">
    <title>簡単クイズ</title>
</head>
<body>

</body>
</html>
