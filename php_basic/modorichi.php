<?php

// 引数に指定された数字に１を足す関数。結果を$testに入れるため、returnで戻り値を返すようにする。
function Modorichi ($num) {
	return $num + 10;
}

$test = Modorichi(20);

echo $test;
