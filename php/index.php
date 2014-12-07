<?php

// 関数

// 引数: 関数を指定する時に()の中に指定する。んで実行するときにも()の中に指定する。
// 戻り値

function sayHi ($name) {
	echo "Hi! $name";
}

sayHi("taguchi");
sayHi("tanaka");


// 以下のように引数は初期値を与えることもできる。
function SayHi2 ($name = "taguchi") {
	echo "Hi $name";
}

sayHi2();
sayHi2("tanaka");



// 戻り値を指定する
function SayHi3 ($name = "taguchi") {
	return "Hi!!! $name";
}

echo sayHi3("yamada");
