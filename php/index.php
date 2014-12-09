<?php

// 関数
// ローカル変数（変数のスコープ）


$myname = "ruby";

function sayHi ($name = "taguchi") {
        $myname = "php";    // ローカル変数 関数のコードブロック内で指定された変数はその関数内でのみ有効である
	return "Hi! $name from $myname";
}

echo sayHi();
echo $myname;    // これ表示させようとしても、最初に定義した $myname = ruby の定義が出る
