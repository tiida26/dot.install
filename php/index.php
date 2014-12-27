<?php

// ファイルの読み書き

$testFile = "test.dat";


if (!$fp = fopen($testFile, "r")) {   // rwite の r
    echo "could not open";
    exit;
}

$contents = fread($fp, filesize($testFile));    // filesize($testFile) でファイルの最大サイズまで読み込む

var_dump($contents);

fclose($fp);


