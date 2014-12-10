<?php

// 文字列に関する関数

$s = "abcdefg";

// strlen （文字列の長さを返してくれる）
echo strlen($s);

// strpos （任意の文字が何文字目にあるか教えてくれる。ポジション。順番は 0 から始まることにちゅうい）
echo strpos($s, "c");

// substr （任意のポジション以降の文字を表示させる。これも添字は 0 から始まっているのに注意）
echo substr($s, 2, 2);    // $s の2番めから2文字 マイナスもできる。

// str_replace （置換）
echo str_replace("abc", "ABC", $s);


