<?php

// ファイルの読み書き

$testFile = "test.dat";
$contents = "こんにちは！";

if (is_writable($testFile)) {

    // ファイルをオープンできたか？

    // 書き込めたか？

    // 終了処理

} else {
    echo "not writable";
    exit;
}

// is_writable: ファイルが書き込みできるかを true or false で返す関数
// exit: プログラムを終了させる命令

