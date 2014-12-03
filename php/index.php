<?php

// 配列

$youbi = array("Sun", "Mon", "Tue");

// echo $youbi[2];    //この場合の 0 は添字という。配列は 0 から始まる。

$youbi[] = "Wed";    // 配列へ要素の追記
$youbi[0] = "Sunday"; // 要素を変更
unset($youbi[2]);    // 要素を削除 この場合だと2番めの要素を削除している

var_dump($youbi);
