<?php

// 条件分岐（if）

// 三項演算子（条件演算子）

$age = 10;
/*

if ($age > 20) {
    $message = "大人";
} else {
    $message = "子供！";
}
*/

$message = ($age > 20) ? "大人！" : "子供！" ;
echo $message ;


// (条件) ? 処理１ : 処理２ ; で if～elseを表現することができる。
