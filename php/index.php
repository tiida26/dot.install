<?php

// ファイルの読み書き

$testFile = "test.dat";
$contents = "こんにちは！";

var_dump(is_writable($testFile));

if (is_writable($testFile)) {

    // ファイルをオープンできたか？
    // $fp = fopen($testFile, "a");    // a はファイルの最後に書き込む。 w はファイルの最初から書き込む。最初から書き込むと上書きされてしまうらしい。
    if (!$fp = fopen($testFile, "a")) {    // fopen関数はうまくいったらファイルポインタリソースというのが返るらしい。そうでなければFALSEが返る。通常はこの返り値を変数に入れて処理をさせるらしい。
        echo "could not open!";
        exit;
    }

    // 書き込めたか？
    if (fwrite($fp, $contents) === false) {
        echo "could not write!";
        exit;
    }

    echo "success!";

    // 終了処理
    fclose($fp);

} else {
    echo "not writable";
    exit;
}

// is_writable: ファイルが書き込みできるかを true or false で返す関数
// exit: プログラムを終了させる命令

