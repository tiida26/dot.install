<?php

// データベースへの接続
// MySQL

try {
	$dbh = new PDO('mysql:host=localhost;dbname=blog_app','dbuser001','dbpwd0001');
} catch (PDOException $e) {
	var_dump($e->getMessage());
	exit;
}

// 処理
// $stmt = $dbh->prepare("insert into users (name,email,password) values (?,?,?)");    // ? はプレースホルダーっていう
// $stmt->execute(array("n","e","p"));

$stmt = $dbh->prepare("insert into users (name,email,password) values (:name,:email,:password)");    // プレースホルダーは ？ の変わりに :hogehoge みたいに変数チックに書くこともできる
$stmt->execute(array(":name"=>"n2",":email"=>"e2",":password"=>"p2"));


echo "done";


// 切断

$dbh = null;
