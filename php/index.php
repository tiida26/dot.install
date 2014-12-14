<?php

// 配列に関する関数

$members = array("tanaka", "sasaki", "kimura", "yoshida", "uchida");

// count（要素の数を返す）
echo count($members);

// sort（要素をソートする）
sort($members);
var_dump($members);

// in_array（配列の中にそれが入っているかどうか）
if (in_array("tanaka", $members)){
	echo "BINGO!";
}

// implode（区切り文字を置き換える）/explode（任意の区切り文字で分解する）
$atstr = implode("@", $members);
var_dump(explode("@", $atstr));


