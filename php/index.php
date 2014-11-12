<?php

// 変数 : 値につけるラベル

// 文字列 "" '' 
// 数値(整数、少数)
// 論理値(true/false)
// null(何もない)
// 配列
// オブジェクト

$message = "Hello World!";
$x = 5;
$y = 1.22;
$flag = true;
$n = null;

var_dump($message);
var_dump($x);
var_dump($y);
var_dump($flag);
var_dump($n);

// ↑をブラウザから見ると 'string(12) "Hello World!" int(5) float(1.22) bool(true) NULL' という感じで出てくる
// string : 文字列
// int : 整数値
// float : 小数点
// bool : ブーリアン？ 真偽値
// NULL : null
