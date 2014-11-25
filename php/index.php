<?php

// 条件分岐（switch）

$signal = "green";

switch ($signal) {
    case "red":
       echo "止まれ！";
       break;
    case "blue":
    case "green":
       echo "進め！";
       break;
    case "yellow":
       echo "注意！";
       break;
    default:
        // 例外処理
       break:
}

/*
switch (変数？) {
    case "条件":
    処理;
    break;
}
*/
