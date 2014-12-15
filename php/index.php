<?php

// 日付や時間に関する関数

// Unixタイムスタンプ（1970/1/1 00:00:00からの経過秒数）

var_dump(time());    //現在の時間をUnixタイムで出す
var_dump(mktime(7,55,0,6,7,2012));    // 2012/6/7 7:55:00 をUnixタイムにする
var_dump(strtotime("2012/6/7 7:55:00"));    // 人が読めるっぽいやつをUnixタイムにする
var_dump(strtotime("last Sunday"));    // 人が読めるっぽいやつをUnixタイムにする
var_dump(strtotime("+ 2day"));    // 人が読めるっぽいやつをUnixタイムにする

