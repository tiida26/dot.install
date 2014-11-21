<?php

// 条件分岐（if）
// 比較演算子 < > <= >= == !=
// 論理演算子 &&(AND) ||(OR) !(NOT)

$age = 10;

if ($age > 20) {
    echo "大人！";
} elseif ($age > 12) {
    echo "子供！";
} else {
    echo "幼児！";
}


/*
if () {
} else {
}


↓別の書き方
if (): 
else:
endif;
*/


if ($age >20): echo "大人！";
elseif ($age >12): echo "子供！";
else: echo "幼児！";
endif;

