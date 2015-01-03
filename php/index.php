<?php

// ファイルの読み書き

$testFile = "test.dat";

// $contents = file_get_contents($testFile);

// $contents = file_get_contents("http://dotinstall.com/");    // URLを読み込むこともできる

$contents = file($testFile);    // ファイルの内容を1行ずつ読み込む

var_dump($contents);


