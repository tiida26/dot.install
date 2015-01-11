<?php

session_start();

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


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['answer'] === $quizList[$_POST['qnum']]['a'][0]) {
        echo '正解！';
    }
}

// var_dump($quizList);


// どのクイズを選択するか決定する
$qnum = mt_rand(0, count($quizList) -1);

// 実際に表示させるクイズを変数に格納する
$quiz = $quizList[$qnum];

$_SESSION['qnum'] = (string)$qnum;

// 選択肢をシャッフルさせる
shuffle($quiz['a']);


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charaset="utf-8">
    <title>簡単クイズ</title>
</head>
<body>
    <p>Q. <?php echo h($quiz['q']); ?></p>
    <?php foreach ($quiz['a'] as $answer) : ?>
        <form action="" method="post">
            <input type="submit" name="answer" value="<?php echo h($answer); ?>">
            <input type="hidden" name="qnum" value="<?php echo h($_SESSION['qnum'] ); ?>">
    <?php endforeach; ?>
</body>
</html>
