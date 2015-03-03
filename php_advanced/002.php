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
$sql = "select * from users";
foreach ($dbh->query($sql) as $user) {    // query()は実行結果をそのままループで回せる
	var_dump($user['name']);
}
echo $dbh->query("select count(*) from users")->fetchColumn(). "records found";


// 切断

$dbh = null;
