<?php

// 文字列に関する関数
// printf

$s = "banana";
$n = 40;
$p = 5.23;

// "we have 40 bananas for $5.23"

// printf("we have %05d %ss for $%.2f", $n, $s, $p);

/*
%d : 整数 %05d は5桁にそれろえる。無いところは0で埋める。
%s : 文字列（strings）
$f : 小数点（float） %.2f は小数点以下は2桁まで
*/

$result = sprintf("we have %05d %ss for $%.2f", $n, $s, $p);
echo $result;
